<?php
 session_start();
 $username =  $_SESSION['username'];
 $message = $_POST['message'];
 $status_id = $_POST['status_id'];
 $to = $_POST['to'];
 
 $conn = new mysqli('localhost','root','','realstate');
 if($conn->connect_error){
    die('connection faild :' .$conn->connect_error);
}
else{
    $_SESSION['request'] = "Your request as been sent Successflully";

    $stmt = $conn->prepare("INSERT INTO request(username,message,status,too)
    VALUES(?,?,?,?)");
    $stmt->bind_param("ssis",$username,$message,$status_id,$to);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    header("location:logedindex.php");
   
}
 
     
     
 
    

   
    


?>

