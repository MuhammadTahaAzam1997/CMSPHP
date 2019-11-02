<?php


require_once "config.php";

if(isset($_POST['submit'])){
    
    $comp9th=$_POST["comp9th"];
    $bio9th=$_POST["bio9th"];
    $chem9th=$_POST["chem9th"];

    $query = "UPDATE `feeregister` SET `comp9th`='".$comp9th."',`bio9th`='".$bio9th."',`chem9th`= $chem9th WHERE `id` = 1";
   
    $result = mysqli_query($connection, $query);
    
    if($result)
    {
        echo 'Data Updated';
    }else{
        echo 'Data Not Updated';
    }
    mysqli_close($connection);
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

    <title>Change Fee</title>
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
<form action="" method="post">
  
<div id="9thComputerScience" >
<label for="inputcomp">9th computer</label>
<input type="number" name="comp9th"   id="inputcomp" placeholder="Enter fee" >
<label for="inputbio">9th biology</label>
<input type="number" name="bio9th"    id="inputbio" placeholder="Enter fee" >
<label for="inputchem">9th chemistry</label>
<input type="number" name="chem9th"    id="inputchem" placeholder="Enter fee" >
<br>
<label for="inputeng">9th English</label>
<input type="number" name="eng9th"   id="inputeng" placeholder="Enter fee" >
<label for="inputpst">9th PAK.STUDIES</label>
<input type="number" name="pst9th"    id="inputpst" placeholder="Enter fee" >
<label for="inputsindhi">9th Sindhi</label>
<input type="number" name="sindhi9th"    id="inputsindhi" placeholder="Enter fee" >
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


  <button type="submit" name="submit" value="insert" class="btn btn-primary">update fee</button>
  <a href="checkfee.php">Check Fee List</a>
  
</form>
</div>
</body>
</html>