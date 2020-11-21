<?php
$server="localhost";
$username="root";
$password="";
$dbname="test1";
$con=mysqli_connect($server,$username,$password,$dbname);

if(!$con){
    die("connection faild".mysqli_connect_error());
}

$fname=$_POST['fname'];
$phone=$_POST['phone'];
$email= $_POST['email'];
$password= $_POST['password'];


$con -> query("INSERT INTO test1 ( `fname`, `phone`, `email`, `password`)
VALUES ('$fname', '$phone', '$email', '$password')");

if($con->query($sql)== true){
    echo "yes";
}

else{
    echo "error $sql <br> $con->error";
}
$con->close();
?>


