<?php
$con = mysqli_connect("localhost", "root", "", "final_db");

if(isset($_POST['submitform'])){
  $name = $_POST["pname"];
  $phone = $_POST["pnumber"];
  $email = $_POST["pemail"];
  $address = $_POST["paddress"];
  $occupation = $_POST["poccupation"];
  $gender = $_POST["pgender"];
  $maritals = $_POST["pmaritalstatus"];
  $adoptionhist = $_POST["padoptionhistory"];
  $childname = $_POST["cname"];

  $query= "INSERT INTO `adoptionform`(`Name`, `Phone`, `Email`, `Address`, `Occupation`, `Gender`, `Marital Status`, `Adoption History`, `Requested Child`, `Id`) VALUES ('$name','$phone','$email','$address','$occupation','$gender','$maritals','$adoptionhist','$childname','')";
  $query_run = mysqli_query($con, $query);

  if($query_run){

  }
}


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Adoption Form</title>
	<link rel="stylesheet" href="adoptNowForm.css">
  <!--BOOTSTRAP-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
      <div class="main">
        <div class="AdoptionForm">
            <div class="Adp-caption">
            <h2>Child Adoption Form</h2>
            </div>
              <form id="AdoptionForm" method="POST">
              	<label><b>Name: </b></label>
              	<br>
              	<input type="text" name="pname" id="name" placeholder=" Enter Your Name">
              	<br><br>
              	
              	<label><b> Phone Number: </b></label>
              	<br>
              	<input type="number" name="pnumber" id="name" placeholder="Enter your number">
              	<br><br>
              	<label><b>Email ID: </b></label>
              	<br>
              	<input type="email" name="pemail" id="name" placeholder="Enter your Email">
              	<br><br>
              	<label><b>Address: </b></label>
              	<br>
              	<textarea cols="60" rows="3" value="address" id="name" name="paddress">
              	</textarea>
              	<br><br>
              	<label><b>Occupation: </b></label>
              	<br>
              	<input type="text" name="poccupation" id="name"
              	placeholder="What Do You Do?">
              	<br><br>
                <!---->
              	<label><b> Gender: </b></label>
              	<br>
              	&nbsp; &nbsp; &nbsp;
              	<input type="radio" name="pgender" id="male" required>
              	&nbsp;
              	<span id="male">Male</span>

              	&nbsp; &nbsp; &nbsp;
              	<input type="radio" name="pgender" id="female">
              	&nbsp;
              	<span id="female">Female</span>

              	&nbsp; &nbsp; &nbsp;
              	<input type="radio" name="pgender" id="others">
              	&nbsp;
              	<span id="others">Others</span>
              	<br><br>

                <!---->
              	<label><b> Marital Status: </b></label>
              	<br>
              	&nbsp; &nbsp; &nbsp;
              	<input type="radio" name="pmaritalstatus" id="married">
              	&nbsp;
              	<span id="married">Married</span>

              	&nbsp; &nbsp; &nbsp;
              	<input type="radio" name="pmaritalstatus" id="single">
              	&nbsp;
              	<span id="single">Single</span>
              	<br><br>   
                
                <label><b>Adoption History: <b></label>
                <br>
                <p><b>Have you appiled before?<b></p>
                &nbsp; &nbsp; &nbsp;
                <input type="radio" name="padoptionhistory" id="yes">
                &nbsp;
                <span id="yes">Yes</span>
                <br><br>

                &nbsp; &nbsp; &nbsp;
                <input type="radio" name="padoptionhistory" id="no">
                &nbsp;
                <span id="no">No</span>
                <br><br>

                <label><b>Name of child/children you are interested to adopt: </b></label>
              	<br>
              	<input type="text" name="cname" id="name" placeholder=" Enter Child/Children's Name">
              	<br><br>

                <!-- <div class="childinfo">
                 <h3><b>Desired child info: </b></h3>
                </div>
              
               <label> Child's Age Preferrence: </label>
               <br>
                &nbsp; &nbsp; &nbsp;
                <input type="radio" name="age" id="1to3years">
                &nbsp;
                <span id="1to3years">1 to 3 years</span>
                <br>
                &nbsp; &nbsp; &nbsp;
                <input type="radio" name="age" id="4to8years">
                &nbsp;
                <span id="4to8years">4 to 8 years</span>
                <br>
                &nbsp; &nbsp; &nbsp;
                <input type="radio" name="age" id="9to12years">
                &nbsp;
                <span id="9to12years">9 to 12 years</span>
                <br>
                &nbsp; &nbsp; &nbsp;
                <input type="radio" name="age" id="13to16years">
                &nbsp;
                <span id="13to16years">13 to 16 years</span>
                <br>
                &nbsp; &nbsp; &nbsp;
                <input type="radio" name="age" id="16to18years">
                &nbsp;
                <span id="16to18years">16 to 18 years</span>
                <br><br>

                <label>Child's Gender Preferrence: </label>
                <br>
                 &nbsp; &nbsp; &nbsp;
                <input type="radio" name="gender" id="male">
                 &nbsp;
                 <span id="male">Male</span>
                 <br>
                 &nbsp; &nbsp; &nbsp;
                <input type="radio" name="gender" id="female">
                 &nbsp;
                 <span id="female">Female</span> -->
                 <br><br>
                 <button type="submit" class="btn btn-primary btn-lg" name="submitform">Submit Form</button>
                 <!-- <input type="reset" value="reset" name="reset" id="reset"> -->
              
              </form>

        </div>
      </div>
</body>
</html>