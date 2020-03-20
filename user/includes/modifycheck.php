<?php
    session_start();
    if (!isset($_SESSION['id'])) {
        header ('Location: ../index.php?error=nosession');
    } elseif (isset($_POST['update-submit'])) {
        require_once '../config.php';
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $uname = $_POST['uname'];
        $dob = $_POST['dob'];
        $sql = 'UPDATE users SET fname=?, lname=?, email=?, uname=?, dob=? WHERE id=?';
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header('Location: ../index.php?error=sqlerror');
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, 'ssssss', $fname, $lname, $email, $uname, $dob, $_SESSION['id']);
            mysqli_stmt_execute($stmt);
            header('Location: ../index.php?updatedetails=success('.$id.')');
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    } elseif (isset($_POST['delete-submit'])) {
        require_once '../config.php';
        $pwd = $_POST['pwd'];
        $repwd = $_POST['repwd'];
        if ($pwd !== $repwd) {
            header('Location: ../index.php?error=nopwdmatch');
            exit();
        } else {
            $sql = 'SELECT pwd FROM users WHERE id=?';
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header('Location: ../index.html?error=sqlerror');
                exit();
            } else {
                mysqli_stmt_bind_param($stmt, 's', $_SESSION['id']);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if (!$row = mysqli_fetch_assoc($result)) {
                    header('Location: ../index.php?error=nopwd');
                    exit();
                } else {
                    $pwdCheck = password_verify($pwd, $row['pwd']);
                    if ($pwdCheck == false) {
                        header('Location: ../index.php?error=wrongpwd');
                        exit();
                    } else if ($pwdCheck == true) {
                        $sql = 'DELETE FROM users WHERE id=?';
                        $stmt = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                            header ('Location: ../index.html?error=sqlerror');
                            exit();
                        } else {
                            mysqli_stmt_bind_param($stmt, 's', $_SESSION['id']);
                            mysqli_stmt_execute($stmt);
                            session_start();
                            session_unset();
                            session_destroy();
                            header('Location: ../html/signup.html?success=deleteuser');
                            exit();
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
    } else {
        echo 'Something stupid happen!!! Go back, Simon.';
    } 