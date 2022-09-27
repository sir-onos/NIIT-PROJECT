<?php
// $host="localhost";
// $database_username="root";
// $password="";
// $database_name="hospital_clinic";
$connect=mysqli_connect('localhost','root','', 'hospital_clinic')or die("error:".mysqli_connect_error());
if($connect){
    echo"connection succesful";
}else{
    echo"error in connection";
}
?>