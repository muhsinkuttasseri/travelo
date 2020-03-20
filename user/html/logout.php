<?php
    setcookie('login_user', "", time() + (86400 * 30), "/");
    header("location: http://localhost/");
?>