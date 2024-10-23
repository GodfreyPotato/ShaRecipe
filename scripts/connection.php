<?php

$db = mysqli_connect("localhost","root","","sharecipe");

if(!$db){
    die("Connection Error! ". mysqli_connect_errno());
}

?>