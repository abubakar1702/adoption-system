<?php

session_start();

$con = mysqli_connect("localhost", "root", "", "final_db");

if(isset($_POST['regbtn'])){
    $name = $_POST["orgName"];
    $address = $_POST["orgAddress"];
    $number = $_POST["orgNum"];
    $password = $_POST["orgPass"];
    $confirmpass = $_POST["confirmpass"];
   

    if($password === $confirmpass){

        $query= "INSERT INTO `orgreg`(`Id`, `Organization Name`, `Address`, `Contact no`, `Password`) VALUES ('', '$name','$address','$number','$password')";
        $query_run = mysqli_query($con, $query);

        if($query_run){
            $_SESSION['success'] = "Organization Registered Successfully";
            header('Location: orgLogin.php');
        }
        else{
            $_SESSION['status'] = "Registration Unsuccessful";
            header('Location: orgReg.php');
        }
    }
    else{
        $_SESSION['status'] = "Password and Confirm Password do not match";
        header('Location: orgReg.php');
    }
}

// if(isset($_POST['loginformbtn'])){
//     header("location: orgLogin.php");
// }

/*$name = $_POST["orgName"];
$address = $_POST["orgAddress"];
$number = $_POST["orgNum"];
$password = $_POST["orgPass"];
$pass2 = $_POST["pass2"];

if(! $name){
    die("enter name");
}

if(! $address){
    die("enter address");
}

if(! $number){
    die("enter number");
}

if(! $password){
    die("enter password");
}

$host = "localhost";
$dbname = "final_db";
$username = "root";
$password = "";

//connecting to db
$con = mysqli_connect(hostname: $host, username: $username, password: $password, database: $dbname);

if($con===false){

}


//connection error
if(mysqli_connect_errno()){
    die("Connection error: " . mysqli_connect_error());
}

//sql query
$sql = "INSERT INTO orgreg (Organization Name, Address, Contact no, Password) VALUES (?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($con);

if(! mysqli_stmt_prepare($stmt, $sql)){
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "issis", $name, $address, $number, $password);

mysqli_stmt_execute($stmt);

echo "Record Saved."

//var_dump($name, $email, $message);*/

?>