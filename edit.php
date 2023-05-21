<?php

$con= mysqli_connect("localhost", "root", "", "final_db");

// TO ACCESS THE ID OF THE ENTRY TO BE EDITED THROUGH URL
$id = $_GET['editid'];

// TO FETCH THE PREV CHILD INFO INTO THE EDIT FORM BEFORE EDITING
$sql = "SELECT * FROM `childinfo` WHERE `Id`='$id'";
$result = mysqli_query($con, $sql);
$row= mysqli_fetch_assoc($result);
$name = $row['Name'];
$age = $row['Age'];
$gender = $row['Gender'];
$race = $row['Race'];
$desc = $row['Description'];
$img = $row['Image'];

// Uploading image from form to db
if(isset($_POST['upload'])){
    $name = $_POST["txtName"];
    $age = $_POST["txtAge"];
    $gender = $_POST["txtGender"];
    $race = $_POST["txtRace"];
    $description = $_POST["txtDescription"];
    $img_old = $_POST['image_old'];
    $img_new = $_FILES['image']['name'];

    if($img_new != ''){
        $update_filename = $_FILES['image']['name'];

    }
    else{
        $update_filename = $img_new;
    }

    // $query = "INSERT INTO `childinfo`(`Id`, `Name`, `Age`, `Gender`, `Race`, `Description`, `Image`) VALUES ('', '$name', '$age', '$gender', '$race', '$description', '$file')";
    $query = "UPDATE `childinfo` SET `Id`='$id',`Name`='$name',`Age`='$age',`Gender`='$gender',`Race`='$race',`Description`='$description',`Image`='$img_new' WHERE `Id`='$id'";
    $result = mysqli_query($con, $query);

    if($result){
        // move_uploaded_file($_FILES['image']['tmp_name'], "$file");
        // echo "updates successfully";
        header('location:orgCRUD.php');
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Children Form</title>
    <!--STYLESHEET-->
    <link type="text/css"  rel="stylesheet" href="mystylesheet2.css" />
    <!--BOOTSTRAP-->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--FONTAWESOME-->
    <script src="https://kit.fontawesome.com/719e28aa0e.js" crossorigin="anonymous"></script>
    <!--BOOTSTRAP FOR IMAGe-->
    <link type="text/css"  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
</head>
<body>
<div class="container contact-form">
            <div class="contact-image">
                <!-- <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/> -->
                <img src="logo1.png" alt="rocket_contact"/>
                
            </div>
            <form method="post" action="newChildForm.php" class="my-5" enctype="multipart/form-data">
                <h3>Enter Child's Information</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Child's Name" value="<?php echo $name ?>" />
                        </div>

                        <div class="form-group">
                            <input type="text" name="txtAge" class="form-control" placeholder="Age" value="<?php echo $age ?>" />
                        </div>

                        <div class="form-group">
                            <input type="text" name="txtGender" class="form-control" placeholder="Gender" value="<?php echo $gender ?>" />
                        </div>

                        <div class="form-group">
                            <input type="text" name="txtRace" class="form-control" placeholder="Race" value="<?php echo $race ?>" />
                        </div>

                        <div class="col-md-13">
                            <div class="form-group">
                                <textarea name="txtDescription" class="form-control" value="<?php echo $desc ?>" placeholder="Short Description" style="width: 100%; height: 150px;"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="file" name="image" class="form-control" />
                            <!-- <input type="hidden" name="image" value="" /> -->
                            <input type="text" name="image_old" value="<?php echo $img ?>" />
                        </div>

                        <div class="form-group">
                            <input type="submit" name="upload" class="btnContact" value="Update" />
                            <!-- <input type="image" name="upload" class="btnContact" src="logo2.png" alt="submit"/> -->
                        </div>
                        
                    </div>
                    <!-- <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="txtDescription" class="form-control" placeholder="Short Description" style="width: 100%; height: 150px;"></textarea>
                        </div> -->
                        <!-- <h5>Chosen Image:</h5> -->

                        <!-- TO DISPLAY CHOSEN IMAGE -->
                        <!-- <?php

                            // $select = "SELECT * FROM `childinfo`";
                            // $q = mysqli_query($con, $select);

                            // $output="";

                            // if(mysqli_num_rows($q) <1){
                            //     $output .= "<h3 class='text-center'> No image uploaded </h3>" ;
                            // }
                            // while($row = mysqli_fetch_array($q)){
                            //     $output .= "<img src='".$row['childImage']."' class='my-3' style='width:200px; height: 200px;'>";
                            // }


                        ?> 

                    </div> -->
                </div>
            </form>
</div>
</body>
</html>