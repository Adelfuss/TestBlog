<?php
function dbConnect (){
    $connect = mysqli_connect('localhost','root','','blog') or die(mysqli_connect_error());
    if (!$charset = mysqli_set_charset($connect,'utf8')) {
        die(mysqli_error($connect));
    }
    return $connect;

}