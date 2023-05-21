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
    <link type="text/css"  rel="stylesheet" href="mystylesheet2.css" />
    
</head>
<body>



<div class="row row-cols-1 row-cols-md-3 g-4">
    <?php
        include("dbconnection.php");

        $q = "SELECT * FROM childinfo";
        $q_run = mysqli_query($conn, $q);
        $check_childinfo = mysqli_num_rows($q_run) >0;

        if($check_childinfo){
            while($row = mysqli_fetch_array($q_run)){
                ?>
                <div class="col-md-3 cardcontainer">
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