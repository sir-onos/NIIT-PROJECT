<?php


include_once("connection.php");
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $day=$_POST["time"];
    $time=$_POST["time"];
    $doctor=$_POST["doctor"];
    $message=$_POST["message"];
    $insert="INSERT INTO appointment(name,email,day,time,doctor,message)VALUES('$name','$email','$day','$time','$doctor', '$message')";
    $query=mysqli_query($connect,$insert);
    if($query){
    echo"appointment succesful";
}else {
    echo"invalid details";
}
}
?>











?>