<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/style.css" defer />
    <title>Index</title>
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
                echo '<a href="html/login.html">login</a>
                <span>&nbsp;|&nbsp;</span>
                <a href="html/signup.html">signup</a>';
              } else {
                echo '<span>'.$uname.'</span>&nbsp;|&nbsp;<a href="includes/logout.php">logout</a>';
              }
            ?>
          </li>
          <li><a href="index.php">Home</a></li>
          <li><a href="php/services.php">Services</a></li>
          <li><a href="php/about.php">About</a></li>
          <li><a href="php/contact.php">Contact</a></li>
          <li><a href="php/faq.php">FAQ</a></li>
        </ul>
        <div class="header-search">
          <input
            type="text"
            name="search"
            aria-label="search"
            placeholder="search"
          />
          <label for="search">
            <img src="img/icon-search.svg" alt="search icon" z />
          </label>
        </div>
        <div class="user-icon">
          <img src="img/icon-user.svg" alt="user icon" />
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
              echo '<a href="html/login.html">login</a>
              <span>&nbsp;|&nbsp;</span>
              <a href="html/signup.html">signup</a>';
            } else {
              echo '<span>'.$uname.'</span>&nbsp;|&nbsp;<a href="includes/logout.php">logout</a>';
            }
          ?>
        </div>
        <div class="ham-menu">
          <div class="bar1"></div>
          <div class="bar2"></div>
          <div class="bar3"></div>
        </div>
      </header>