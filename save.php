<?php
$server="localhost";
$username="root";
$password="";
$dbname="contact_form";


$con=mysqli_connect($server,$username,$password,$dbname);
if (!$con){
    echo"Not Connected";
}
// start
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$subject=$_POST['subject'];

$sql="INSERT INTO `test`(`Name`, `Email`, `Message`, `Subject`) VALUES ('$name','$email','$message','$subject')";
$result=mysqli_query($con,$sql);
if ($result ){
    echo"Data Submitted";
}
else{
    echo"Error Encountered.......!";
}
?>