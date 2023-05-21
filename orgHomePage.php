 <?php
session_start();

// if(!isset($_SESSION['OrganizationName'])){
//     header("location: orglogin.php");
// }
?> 



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!--BOOTSTRAP-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!--STYLESHEET-->
  <link type="text/css"  rel="stylesheet" href="mystylesheet.css" />
  <!--FONTAWESOME-->
  <script src="https://kit.fontawesome.com/719e28aa0e.js" crossorigin="anonymous"></script>
</head>
<body id="vp">

  <!--NAVBAR-->
  <div id="panelheader" >
    <h3 id="panelh1">WELCOME TO ADMIN PANEL FOR- <?php echo $_SESSION['OrganizationName']?></h3>

    <a class="fa-sharp fa-solid fa-bell styling1 fa-2x text-decoration-none" href="adoptionFormData.php"></a>

    <i class="fa-solid fa-arrow-right-from-bracket styling2 fa-2x"></i>
        
  </div>


  <!--CARD-->
 
  <a class="actionbtn" href="newChildForm.php">
    <!-- <a class="btn btn-lg" href="newChildForm.php"><h3>Add a new child to the organization</h3></a> -->
    <h3>Add a new child to the organization</h3>
  </a>
 

  <a class="actionbtn" href="orgCRUD.php">
    <h3>Update list of existing children</h3>
  </a>




  

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>