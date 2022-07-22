<?php 
include 'connect.php';
if(isset($_GET['deleteid'])){                 
    $id=$_GET['deleteid'];

    $sql="DELETE FROM `details` WHERE `Serial No.`=$id";
    $result=mysqli_query($conn,$sql);

    $sql="UPDATE `detais` SET `Serial No.`=`Serial No.`-1 WHERE $id > $deleteid";
    $results=mysqli_query($conn,$sql);
    $sql="ALTER TABLE `details` AUTO_INCREMENT=1";
    $results=mysqli_query($conn,$sql);

    

    
    if($result)
        echo header('location:op.php');
        else die(mysqli_error($conn));
        

    
}


?>
