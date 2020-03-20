<?php
  session_start();
  if (!isset($_SESSION['id'])) {
    header('Location: 404.php?nosession');
    exit();
  } else {
    if (!isset($_POST['pwd-reset'])) {
      header('Location: 404.php?accessdenied');
      exit();
    } else {
      echo '<!DOCTYPE html>
            <html lang="en">
              <head>
                <meta charset="UTF-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <meta http-equiv="X-UA-Compatible" content="ie=edge" />
                <link rel="stylesheet" href="../css/login.css" />
                <title>Reset</title>
              </head>
              <body>
                <div class="card">
                  <img src="../img/user.png" width="100px" height="100px" class="user-img" />
            
                  <h2>Reset Password</h2>';
        echo '<form action="../includes/resetcheck.php" method="post">';
        echo '<div class="input-wrap">
              <input type="password" name="currentpwd" aria-label="password" required />
              <label for="password" class="input-label">
                <span class="label-content">Current password</span>
              </label>
            </div>';
        echo '<div class="input-wrap">
              <input type="password" name="newpwd" aria-label="password" required />
              <label for="password" class="input-label">
                <span class="label-content">New password</span>
              </label>
            </div>';
        echo '<div class="input-wrap">
            <input type="password" name="repwd" aria-label="password" required />
            <label for="password" class="input-label">
              <span class="label-content">Re-enter new password</span>
            </label>
          </div>';
        echo '<input type="submit" name="pwd-reset" value="Reset password" id="submit" />';
        echo '</form>';
        echo '</div>
          </body>
        </html>';
    }
  }
?>