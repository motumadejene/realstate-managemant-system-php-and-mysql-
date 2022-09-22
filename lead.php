<?php
session_start();
$usertype = $_SESSION['usertype'];

if($usertype == 'admin'){
header('location:template/dashbord.php');
}
if($usertype == 'buyer'){
    header('location:template/owend.php');
}
if($usertype == 'seller'){
    header('location:template/sellproperty.php');
}




?>