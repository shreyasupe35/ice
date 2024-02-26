<?php
$namefield=$_POST['namefield'];
$emailfield=$_POST['emailfield'];
$message=$_POST['message'];

$conn=new mysqli('localhost','root','','form2');
if($conn->connect_error){
    die('connection Failed:'.$conn->connect_error)
}
else{
    $stmt=$conn->prepare("insert into feedback(name,email,meassage) values(?,?,?)");
    $stmt->bind_param("sss",$namefield,$emailfield,$message);
    $stmt->execute();
    echo"feeback recievied successfull"
    $stmt->close();
    $conn->close();
}
?>