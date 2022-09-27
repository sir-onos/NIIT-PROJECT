<?php
include_once("connection.php");
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $subject=$_POST["subject"];
    $message=$_POST["message"];
    $insert="INSERT INTO contact_us(name,email,phone,subject,message)VALUES('$name','$email','$phone','$subject','$message')";
    $query=mysqli_query($connect,$insert);
    if($query){
    echo"message sent Succesfully";
}else {
    echo"invalid details";
}
}
?>