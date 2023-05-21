<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Children</title>
    <!--BOOTSTRAP-->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link type="text/css"  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />

    <!--STYLESHEET-->
    <link type="text/css"  rel="stylesheet" href="mystylesheet4.css" />
    <!-- <link rel="stylesheet" href="child-adoptation-home.css"> -->

    
</head>
<body>
  <header>
    <h1>Family+</h1>
  </header>
<!-- <nav>
    <div class="navbar">
      <i class='bx bx-menu'></i>
      <div class="logo"><a href="#">Family+</a></div>
      <div class="nav-links">
        <div class="sidebar-logo">
          <span class="logo-name">Family+</span>
          <i class='bx bx-x' ></i>
        </div>
        <ul class="links">
          <li><a href="#">HOME</a></li>
          <li><a href="parentshome.php">PARENT'S HOME</a></li>
          <li><a href="#">CHILD LIST</a></li>
          <li><a href="#">ORGANIZATIONS</a></li>
          
          <li><a href="#">DONATE</a></li>
          <li><a href="#">ABOUT US</a></li>
          <li><a href="c-us">CONTACT US</a></li>
          

        </ul>
      </div>
      <div class="search-box">
        <i class='bx bx-search'></i>
        <div class="input-box">
          <input type="text" placeholder="Search...">
        </div>
      </div>
      <div class="navbar-last">
        <li><a href="adoptation-login.php" target="_blank"><i class="fas fa-user"></i>  LOG IN</a></li>
        <li><a href="sign-up.php" target="_blank"><i class="fas fa-user-plus"></i> SIGN UP</a></li>
      </div>
    </div> -->
<div class="row row-cols-1 row-cols-md-3 g-4">
    <?php
        include("dbconnection.php");

        $q = "SELECT * FROM childinfo";
        $q_run = mysqli_query($conn, $q);
        $check_childinfo = mysqli_num_rows($q_run) >0;

        if($check_childinfo){
            while($row = mysqli_fetch_array($q_run)){
                ?>
                <!-- <div class="col-md-3 cardcontainer">
                    <div class="card h-100 w-100 link">
                        <img src="childimages/<?php echo $row['Image']?>" class="card-img-top"
                        alt="Los Angeles Skyscrapers" />
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $row['Name'];  ?></h3>
                            <h5 class="card-title"><?php echo $row['Age'];  ?> years old</h5>
                            <p class="card-text"></p>

                            <a class="btn btn-success" href="displaySingleChild.php">View Details</a>
                        </div>
                    </div>
                </div> -->
            
                <div class="container">
  <section class="mx-auto my-5 cont" style="max-width: 23rem;">
      
    <div class="card testimonial-card mt-2 mb-3">
      <div class="card-up aqua-gradient"></div>
      <div class="avatar mx-auto white">
        <img src="childimages/<?php echo $row['Image']?>" class="rounded-circle img-fluid"
          alt="woman avatar">
      </div>
      <div class="card-body text-center">
        <h4 class="card-title font-weight-bold"><?php echo $row['Name'];  ?></h4>
        <hr>
        <p><i class="fas fa-quote-left"></i> <?php echo $row['Age'];  ?> years old</p>
        <a class="btn btn-success" href="displaySingleChild.php">View Details</a>
      </div>
    </div>
    
  </section>
</div>
                <?php
                //echo $row['Name'];
            }
        }
        else{
            echo "No record found";
        }


    ?>
  <!-- <div class="col">
    <div class="card">
      <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp" class="card-img-top"
        alt="Hollywood Sign on The Hill" />
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">
          This is a longer card with supporting text below as a natural lead-in to
          additional content. This content is a little bit longer.
        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/042.webp" class="card-img-top"
        alt="Palm Springs Road" />
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">
          This is a longer card with supporting text below as a natural lead-in to
          additional content. This content is a little bit longer.
        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/043.webp" class="card-img-top"
        alt="Los Angeles Skyscrapers" />
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
          additional content.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/044.webp" class="card-img-top"
        alt="Skyscrapers" />
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">
          This is a longer card with supporting text below as a natural lead-in to
          additional content. This content is a little bit longer.
        </p>
      </div>
    </div> 
  </div>-->
</div>
</body>
</html>