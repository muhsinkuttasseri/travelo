<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="../css/style.css" defer />
    <link rel="stylesheet" href="../css/faq.css" defer />
    <title>FAQ</title>
  </head>
  <body>
    <div class="container">
      <header>
        <div class="logo">
          <span>YOURLOGO</span>
        </div>
        <ul class="nav">
          <li class="nav-logsign">
            <?php
              if (!isset($_SESSION['id'])) {
                echo '<a href="../html/login.html">login</a>
                <span>&nbsp;|&nbsp;</span>
                <a href="../html/signup.html">signup</a>';
              } else {
                echo '<span>'.$uname.'</span>&nbsp;|&nbsp;<a href="../includes/logout.php">logout</a>';
              }
            ?>
          </li>
          <li><a href="../index.php">Home</a></li>
          <li><a href="./services.php">Services</a></li>
          <li><a href="./about.php">About</a></li>
          <li><a href="./contact.php">Contact</a></li>
          <li><a href="./faq.php">FAQ</a></li>
        </ul>
        <div class="header-search">
          <input
            type="text"
            name="search"
            aria-label="search"
            placeholder="search"
          />
          <label for="search">
            <img src="../img/icon-search.svg" alt="search icon" z />
          </label>
        </div>
        <div class="user-icon">
          <img src="../img/icon-user.svg" alt="user icon" />
          <?php
            if (!isset($_SESSION['id'])) {
              echo '<div class="login-status offline"></div>';
            } else {
              echo '<div class="login-status online"></div>';
            }
          ?>
        </div>
        <div class="logsign">
          <?php
            if (!isset($_SESSION['id'])) {
              echo '<a href="../html/login.html">login</a>
              <span>&nbsp;|&nbsp;</span>
              <a href="../html/signup.html">signup</a>';
            } else {
              echo '<span>'.$uname.'</span>&nbsp;|&nbsp;<a href="../includes/logout.php">logout</a>';
            }
          ?>
        </div>
        <div class="ham-menu">
          <div class="bar1"></div>
          <div class="bar2"></div>
          <div class="bar3"></div>
        </div>
      </header>
      <main>
        <div class="person-info">
          <div class="attr">
            <p>Question 1?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo rem vero sapiente libero, enim fugiat facere fuga excepturi laborum, voluptatibus voluptatum atque nisi! Rerum unde ad qui vel quam eum!</p>
            <p>Question 2?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo rem vero sapiente libero, enim fugiat facere fuga excepturi laborum, voluptatibus voluptatum atque nisi! Rerum unde ad qui vel quam eum!</p>
            <p>Question 3?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo rem vero sapiente libero, enim fugiat facere fuga excepturi laborum, voluptatibus voluptatum atque nisi! Rerum unde ad qui vel quam eum!</p>
          </div>
        </div>
      </main>
      <footer>
        <span>&copy;Company 2019-2020</span>
        <ul>
          <li>
            <a href="#">
              <img src="../img/icon-insta.png" alt="instagram" />
            </a>
          </li>
          <li>
            <a href="#">
              <img src="../img/icon-twitter.png" alt="twitter" />
            </a>
          </li>
          <li>
            <a href="#">
              <img src="../img/icon-github.png" alt="github" />
            </a>
          </li>
          <li>
            <a href="#">
              <img src="../img/icon-linkedin.png" alt="linkedin" />
            </a>
          </li>
        </ul>
      </footer>
    </div>

    <script src="../js/app.js"></script>
  </body>
</html>
