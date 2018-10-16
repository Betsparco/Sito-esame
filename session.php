<?php
    session_start();
    if (!isset($_SESSION['start_time'])){
        header('Location: login.php');
    die();
    }
    else {
        $now = time();
        $time = $now - $_SESSION['start_time'];
        if ($time > 60) // 3600s => 1h
        {
            header('Location: logout.php');
            die();
        }
        /*
        echo "Tempo attuale: $now <br />";
        echo "Tempo avvio sessione: {$_SESSION['start_time']} <br />";
        echo "Tempo residuo: $time <br />";
        */
    }
?>