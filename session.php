<?php
session_start();
if(empty($_SESSION['login_user']))
{
  header("Location: https://web.njit.edu/~jac323/index.php");
}
?>
