<!DOCTYPE html>

<?php
include("dbconnection.php");

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Organization Login</title>

    <!--FONTAWESOME-->
    <script src="https://kit.fontawesome.com/719e28aa0e.js" crossorigin="anonymous"></script>
    
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-9">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-1">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
      
                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Log In</p>
      
                      <form class="mx-1 mx-md-4" action="" method="POST">
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-building fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                        
                            <input type="text" id="orgName" name="orgName" class="form-control" placeholder="Organization Name"/>
                            <!--<label class="form-label" for="form3Example1c">Your Name</label>-->
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            
                            <input type="password" id="orgPass" name="orgPass" class="form-control" placeholder="Password" />
                            <!--<label class="form-label" for="form3Example4c">Password</label>-->
                          </div>
                        </div>
      
                        <!--<div class="form-check d-flex justify-content-center mb-5">
                          <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                          <label class="form-check-label" for="form2Example3">
                            I agree all statements in <a href="#!">Terms of service</a>
                          </label>
                        </div>-->
      
                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                          <button type="submit" class="btn btn-primary btn-lg" name="loginbtn">Login</button>
                        </div>
                        
                      </form>
      
                    </div>
                    <?php
                        if(isset($_POST['loginbtn'])){
                          $query = "SELECT * FROM `orgreg` WHERE `Organization Name`='$_POST[orgName]' AND `Password`='$_POST[orgPass]'";
                          $result = mysqli_query($conn, $query);
                  
                          if(mysqli_num_rows($result)==1){
                              session_start();
                              $_SESSION['OrganizationName']= $_POST['orgName'];
                              header("location: orgHomePage.php");
                  
                          }
                          else{
                              echo "<script>alert('Incorrect Password');</script>";
                          }
                      }
                      
                     ?>

                    <div class="col-md-5 col-lg-8 col-xl-4 d-flex align-items-center order-4 order-lg-22">
      
                      <!--<img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                        class="img-fluid" alt="Sample image">-->
                        <img src="Colombia6.webp"
                        class="img-fluid" alt="Sample image">
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <?php
        if(isset($_POST['loginbtn'])){
          $query = "SELECT * FROM `final_login` WHERE `Organization Name`='$_POST[orgName]' AND `Password`='$_POST[orgPass]'";
          $result = mysqli_query($conn, $query);
  
          if(mysqli_num_rows($result)==1){
              session_start();
              $_POST['OrganizationName']= $_POST['orgName'];
              header("location: orgHomePage.php");
  
          }
          else{
              echo "<script>alert('Incorrect Password');</script>";
          }
      }
  
      ?>


      


      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>