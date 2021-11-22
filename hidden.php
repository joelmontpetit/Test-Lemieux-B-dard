<?php

    session_start();

    if (!isset($_SESSION['loggedIN'])) {
        header("Location: index.php");
        exit();
    }


?>
<a href="logout.php">Log Out</a><br>
Login réussi!