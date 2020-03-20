<?php
    session_start();
    if (!isset($_SESSION['id'])) {
        header('Location: 404.php?error=nosession');
    } else {
        if (!isset($_POST['modify'])) {
            header('Location: 404.php?error=accessdenied');
        } else {
            echo '<!DOCTYPE html>
                    <html lang="en">
                        <head>
                        <meta charset="UTF-8" />
                        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                        <link rel="stylesheet" href="../css/signup.css" />
                        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
                        <title>Modify</title>
                        </head>
                    <body>
                        <div class="card">
                            <img
                            src="../img/user.png"
                            width="100px"
                            height="100px"
                            class="user-img"
                            />';

            if (isset($_POST['modify']['update'])) {
                echo '<h2>Update details</h2>';
                echo '<form action="../includes/modifycheck.php" method="post" name="form">';
                echo '<div class="block">
                        <div class="input-wrap">
                            <input type="text" name="fname" autofocus required />
                            <label for="fname" class="input-label">
                                <span class="label-content">First name</span>
                            </label>
                        </div>

                        <div class="input-wrap">
                            <input type="text" name="lname" value="" required />
                            <label for="lname" class="input-label">
                                <span class="label-content">Last name</span>
                            </label>
                        </div>
                    </div>';
                echo '<div class="input-wrap">
                        <input type="email" name="email" value="" required />
                        <label for="email" class="input-label">
                        <span class="label-content">E-mail</span>
                        </label>
                    </div>';
                echo '<div class="input-wrap">
                        <input type="text" name="uname" value="" required />
                        <label for="uname" class="input-label">
                        <span class="label-content">User name</span>
                        </label>
                    </div>';
                echo '<div class="input-wrap">
                        <input type="date" name="dob" value="" required />
                        <label for="dob" class="input-label">
                        <span class="label-content"></span>
                        </label>
                    </div>';
                echo '<input type="submit" name="update-submit" value="Update" id="submit" />';
                echo '</form>';
            } elseif (isset($_POST['modify']['delete'])) {
                echo '<h2>Delete account</h2>';
                echo '<form action="../includes/modifycheck.php" method="post">';
                echo '<div class="block">
                        <div class="input-wrap">
                        <input type="password" name="pwd" id="pwd" autofocus required />
                        <label for="pwd" class="input-label">
                            <span class="label-content">Password</span>
                        </label>
                        </div>
                        <div class="input-wrap">
                        <input type="password" name="repwd" id="repwd" required />
                        <label for="repwd" class="input-label">
                            <span class="label-content">Re-enter password</span>
                        </label>
                        </div>
                    </div>';
                echo '<input type="submit" name="delete-submit" value="Delete" id="submit" />';
                echo '</form>';
            } else {
                echo 'Something stupid happen!!! Go back, Simon.';
            }
            echo '</div>';
            echo '</body>';
            echo '</html>';
        }
    }
