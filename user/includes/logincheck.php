<?php
    if (isset($_POST['login-submit'])) {
        require_once '../config.php';
        $emailUname = $_POST['emailUname'];
        $pwd = $_POST['pwd'];
        $sql = 'SELECT * FROM users WHERE uname=? OR email=?;';
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header('Location: ../html/login.html?error=sqlerror1');
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, 'ss', $emailUname, $emailUname);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if (!$row = mysqli_fetch_assoc($result)) {
                header('Location: ../html/login.html?error=nouser');
                exit();
            } else {
                $pwdCheck = password_verify($pwd, $row['pwd']);
                if ($pwdCheck == false) {
                    header('Location: ../html/login.html?error=wrongpwd');
                    exit();
                } else if ($pwdCheck == true) {
                    session_start();
                    $_SESSION['id'] = $row['id'];
                    header('Location: ../index.php?success=login');
                    exit();
                } else {
                    header('Location: ../html/login.html?error=pwdverifyerror');
                    exit();
                }
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    } else {
        header('Location: ../html/login.html?error=accessdenied');
        exit();
    }