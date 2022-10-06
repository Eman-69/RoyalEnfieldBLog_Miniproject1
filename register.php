<?php
session_start(); 
if(isset($_POST['submit'])){
    include "db.php";

if($conn){
    
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $sql="INSERT INTO signup(name,email,phone,password) VALUES('$name','$email','$phone','$password')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert('Registration is Successful')</script>";
        header("Location: index.php");
    }
    else{
        echo "<script>alert('Failed')</script>";
    }
}
}
?>