<?php
session_start();

if(!isset($_SESSION['username']) && $_SESSION['is_login']!=true){
    $_SESSION['error'] = "please login";
    header("Location:index.php");
}




?>
<h1>Welcome</h1>

<?php

  include "record.php"
?>
<a href="logout.php" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Logout</a>
