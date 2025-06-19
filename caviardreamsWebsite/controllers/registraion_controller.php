<?php

require_once("../config/db_connection.php");

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$date_of_birth = $_POST['date_of_birth'];
$client_type = $_POST['client_type'];
$password = md5($_POST['password']);

$sql =  "INSERT INTO CLIENTS(first_name,last_name,phone_number,email,date_of_birth,client_type,password) VALUES('$first_name','$last_name','$phone_number','$email','$date_of_birth','$client_type','$password')";

if($conn->query($sql) === TRUE){
    header("Location: ../pages/login.php?sms=Account Created Succefully, Please login");
}else{
    echo "Error:" . $sql . "<br>" . $conn->error;
}

?>