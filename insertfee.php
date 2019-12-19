<?php

require_once "config.php";
if (isset($_REQUEST["submit"])){

    $COMP9=$_REQUEST["COMP9"];
    $BIO9=$_REQUEST["BIO9"];
    $CHEM9=$_REQUEST["CHEM9"];
    // $eng9th=$_REQUEST["eng9th"];
    // $pst9th=$_REQUEST["pst9th"];
    // $sindhi9th=$_REQUEST["sindhi9th"];
    $PHY10=$_REQUEST["PHY10"];
    $MATH10=$_REQUEST["MATH10"];
    $ENG10=$_REQUEST["ENG10"];
    // $urdu10th=$_REQUEST["urdu10th"];
    // $isl10th=$_REQUEST["isl10th"];
    
    
    
    
    
    mysqli_query($connection,"insert into feeregister (COMP9,BIO9,CHEM9) values ('$COMP9','$BIO9','$CHEM9')");
     
  }
?>














<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Fee Insertion</title>
    
    <style>
    body{
          background-color: whitesmoke;

    }

    input{

        width: 40%;
        height: 5%;
        border: 1px;
        border-radius:5px;
        padding: 8px 15px 8px 15px;
        margin: 10px 0px 15px 0px;
        box-shadow: 1px 1px 2px 1px grey;

    }
</style>

  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Coaching Managemet System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
  <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="cms.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav> 

<br><br>






<h3>Please Insert Subject's Fee Here:</h3>
<hr>

<br><br>
<a href="checkfee.php" >Check fee List</a> 
<form action="" method="post">
  
<div id="9thComputerScience" >
<label for="inputcomp">9th computer</label>
<input type="number" name="COMP9"   id="inputcomp" placeholder="Enter fee" >
<label for="inputbio">9th biology</label>
<input type="number" name="BIO9"    id="inputbio" placeholder="Enter fee" >
<label for="inputchem">9th chemistry</label>
<input type="number" name="CHEM9"    id="inputchem" placeholder="Enter fee" >
<br>
<label for="inputeng">9th English</label>
<input type="number" name="ENG9"   id="inputeng" placeholder="Enter fee" >
<label for="inputpst">9th PAK.STUDIES</label>
<input type="number" name="PST9"    id="inputpst" placeholder="Enter fee" >
<label for="inputsindhi">9th Sindhi</label>
<input type="number" name="SINDHI9"    id="inputsindhi" placeholder="Enter fee" >
</div>

<br><br>
<hr>

<div id="Matric" >
<label for="">10th Physics</label>
<input type="number" name="phy10th">
<label for="">10th Mathematics</label>
<input type="number" name="math10th">
<label for="">10th Urdu</label>
<input type="number" name="urdu10th">
<br>
<label for="">10th English</label>
<input type="number" name="eng10th">
<label for="">10th Islamiat</label>
<input type="number" name="isl10th">
</div>
<br><br>
<hr>


  <button type="submit" name="submit" value="insert" class="btn btn-primary">Register</button>
  <a href="checkfee.php" >Check fee List</a> 
  
 
 </form>
</div>
</body>
</html>