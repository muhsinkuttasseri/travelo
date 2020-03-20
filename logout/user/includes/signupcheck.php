<?php
    if (isset($_POST['signup-submit'])) {
        require_once '../config.php';

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $uname = $_POST['uname'];
        $dob = $_POST['dob'];
        $pwd = $_POST['pwd'];
        $repwd = $_POST['repwd'];

        $sql = "SELECT id FROM users WHERE email=? OR uname=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header('Location: ../html/signup.html?error=sqlerror1');    //SQL-Error -- 1
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, 'ss', $email ,$uname);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultChk = mysqli_stmt_num_rows($stmt);
            if ($resultChk > 0) {
                header('Location: ../html/signup.html?error=usertaken');    //SQL-Error -- User Taken
                exit();
            } else {
                $sql = 'INSERT INTO users (fname, lname, email, uname, dob, pwd) VALUES (?, ?, ?, ?, ?, ?);';
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header('Location: ../html/signup.html?error=sqlerror2');    //SQL-Error -- 2
                    exit();
                } else {
                    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, 'ssssss', $fname, $lname, $email, $uname, $dob, $hashedPwd);
                    mysqli_stmt_execute($stmt);
                    header('Location: ../html/login.html?signup=success');      //Signup success
                    exit();
                }
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    } else {
        header('Location: ../html/signup.html');
        exit();
    }