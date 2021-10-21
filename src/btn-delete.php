<?php
if(isset($_GET['bl_id'])){
    require('conect_db.php');
  
    $id=$_GET['bl_id'];
    $sql="DELETE FROM BLOOD_DONOR WHERE bl_id=$id ;";
    if(mysqli_query($conn,$sql)==TRUE){
        header('Location:http://localhost:7855/Project/src');
    }
    else{
        echo 'that bai';
    }
}

?>