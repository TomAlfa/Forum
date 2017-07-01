<?php
$connection = mysqli_connect('localhost', 'tom', '%Hoogkerk1');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'forum');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}