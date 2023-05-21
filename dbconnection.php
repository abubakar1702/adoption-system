<?php

//code to make connection
$conn = mysqli_connect("localhost", "root", "", "final_db");

//code to check connection
if(mysqli_connect_error()){
    echo "Cannot connect.";
}


?>