<?php
include 'connection.php';

if(isset($_POST['newimage'])){
    
 
$idd = $_POST['sid'];
$newname = $_POST['name1'];
$newemail = $_POST['email1'];
$newcompany = $_POST['company1'];
$newnumber = $_POST['number1'];
$newaddress = $_POST['address1'];
$newmessage = $_POST['mess1'];
$newfav = $_POST['fav'];

 
$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "./image/" . $filename;


if(move_uploaded_file($tempname, $folder)) {
 

$query =  "UPDATE employee SET name='$newname', email='$newemail', company='$newcompany',noo='$newnumber',address='$newaddress',message='$newmessage',gender='$newfav',filename='$filename' WHERE id='$idd'";
 
    $result = mysqli_query($conn, $query) or die("Unsucessful");
    header("Location: table.php");
} else {
  echo "<h3>  Failed to upload image!</h3>";
}


}

?>