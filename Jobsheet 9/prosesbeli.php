<?php
    if (isset ($_POST ["belinovel"]) && isset ($_POST ["belibuku"] ) ) {
        setcookie ("belinovel", $_POST ["belinovel"]);
        setcookie ("belibuku", $_POST ["belibuku"]);
        header ("location: keranjangbelanja.php") ;
    }
?>