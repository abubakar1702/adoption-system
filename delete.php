<?php
include('dbconnection.php');

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE FROM `childinfo` WHERE Id=$id";
    $result =mysqli_query($conn, $sql);

    if($result){
        // echo 'Deleted successfully';
        header('location:orgCRUD.php');
    }
    else{
        die(mysqli_error($conn));
    }
}

?>