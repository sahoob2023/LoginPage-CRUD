<?php
include "connection.php";
$idd = $_GET['id'];
$query = "delete from employee where id = '$idd'";

mysqli_query($conn,$query);

header('Location: table.php');
?>