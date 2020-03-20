<?php
    session_start();
    if (!isset($_SESSION['id'])) {
        header('LOcation: ../php/404.php?nosession');
    } else {
        if (!isset($_POST['pwd-reset'])) {
            header('LOcation: ../php/404.php?accessdenied');
            exit();
        } else {
            require_once '../config.php';
            $currentpwd = $_POST['currentpwd'];
            $newpwd = $_POST['newpwd'];
            $repwd = $_POST['repwd'];
            $sql = 'SELECT pwd FROM users WHERE id=?';
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header('LOcation: ../index.php?error=sqlerror');
                exit();
            } else {
                mysqli_stmt_bind_param($stmt, 's', $_SESSION['id']);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if (!$row = mysqli_fetch_assoc($result)) {
                    header('Location: ../index.php?error=nopwd');
                    exit();
                } else {
                    $pwdCheck = password_verify($currentpwd, $row['pwd']);
                    if ($pwdCheck == false) {
                        header('Location: ../index.php?error=wrongpwd');
                        exit();
                    } else if ($pwdCheck == true) {
                        if ($newpwd !== $repwd) {
                            header('Location: ../index.php?error=nopwdmatch');
                            exit();
                        } else {
                            $sql = 'UPDATE users SET pwd=? WHERE id=?';
                            $stmt = mysqli_stmt_init($conn);
                            if (!mysqli_stmt_prepare($stmt, $sql)) {
                                header ('Location: ../index.php?error=sqlerror');
                                exit();
                            } else {
                                $hashedPwd = password_hash($newpwd, PASSWORD_DEFAULT);
                                mysqli_stmt_bind_param($stmt, 'ss', $hashedPwd, $_SESSION['id']);
                                mysqli_stmt_execute($stmt);
                                session_start();
                                session_unset();
                                session_destroy();
                                header('Location: ../html/login.html?success=pwdreset');
                                exit();
                            }
                        }
                    } else {
                        header('Location: ../index.php?error=pwdverifyerror');
                        exit();
                    }
                }
            }
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
        }
    }