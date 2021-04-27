<?php
//session_start();
$link = mysqli_connect('localhost','root','','db1');

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>