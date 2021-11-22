<?php 
session_start();

//remove loggedIN
unset($_SESSION['loggedIN']);
session_destroy();
header("Location: index.php");
exit();

?>
