<?php
session_start();
if (!isset($_SESSION['loginame']))
{
echo "<h1>Access denied!!!</h1>";
exit();
}
?>