      <main>
        <div class="person-info">
          <?php
            if (!isset($_SESSION['id'])) {
              echo 'Please&nbsp;<a href="html/login.html">logIn</a>&nbsp;to see you personal info.';
            } else {
              echo '<div class="attr">
                      <p>Name</p>
                      <p>Email</p>
                      <p>Username</p>
                      <p>Date of birth</p>
                      <p>Password</p>
                    </div>';
              echo '<div class="attr-values">
                      <p><span>'.$fname.' '.$lname.'</span></p>
                      <p><span>'.$email.'</span></p>
                      <p><span>'.$uname.'</span></p>
                      <p><span>'.$dob.'</span></p>
                      <p><span><form action="php/reset.php" method="post" style="background-color:#eee;"><input type="submit" value="Reset password" name="pwd-reset" /></form></span></p>
                    </div>';
            }
          ?>
        </div>
        <?php
          if (!isset($_SESSION['id'])) {
            echo '';
          } else {
            echo '<form action="php/modify.php" method="post">
                    <input type="submit" value="Update details" name="modify[update]" />
                    <input type="submit" value="Delete account" name="modify[delete]" />
                  </form>';
          }
        ?>
      </main>