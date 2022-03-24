<?php 
$con = mysqli_connect("localhost","root","","db_reservasi");
if (!$con) {
    die("connection failed :".mysqli_connect_error());
}
?>