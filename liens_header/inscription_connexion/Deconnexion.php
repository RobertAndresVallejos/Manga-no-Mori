<?php
    require_once('../../Database.php');

    session_destroy();

    header('Location: ../Accueil.php');
    exit;
?>