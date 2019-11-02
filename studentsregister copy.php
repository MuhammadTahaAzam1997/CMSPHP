<?php

require_once "config.php";
if (isset($_REQUEST["submit"])){

    $studentname=$_REQUEST["studentname"];
    $fathername=$_REQUEST["fathername"];
    $gender=$_REQUEST["gender"];
    $class=$_REQUEST["class"];
    $field=$_REQUEST["field"];
    $subject=$_REQUEST["subject"];
    $b=implode(",",$subject);
    $city=$_REQUEST["city"];
    $rollnum=$_REQUEST["rollnum"];
    $mobilenum=$_REQUEST["mobilenum"];
    $fathermobile=$_REQUEST["fathermobile"];
    $address=$_REQUEST["address"];
    $dob=$_REQUEST["dob"];
    $regdate=$_REQUEST["regdate"];
    mysqli_query($connection,"insert into studentregister (studentname,fathername,gender,class,field,subject,city,rollnum,mobilenum,fathermobile,address,dob,regdate) values ('$studentname','$fathername','$gender','$class','$field','$b','$city','$rollnum','$mobilenum','$fathermobile','$address','$dob','$regdate')");
     
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

    <title>PHP login system!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Php Login System</a>
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

<div class="container mt-4">
<h3>Please Enter Student's Information Here:</h3>
<hr>
<form action="" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
    <div id="9thComputerScience" class="form-group col-md-6">
<label for="inputcomp">9th computer</label>
<input type="number" name="comp9th" class="form-control"  id="inputcomp" placeholder="Enter fee" >
<label for="inputbio">9th biology</label>
<input type="number" name="bio9th"  class="form-control"  id="inputbio" placeholder="Enter fee" >
<label for="inputchem">9th chemistry</label>
<input type="number" name="chem9th"  class="form-control"  id="inputchem" placeholder="Enter fee" ></div>
    <div class="form-group col-md-6">
      <label for="inputfathername">Father's name*</label>
      <input type="text" class="form-control" name ="fathername" id="inputfathername" placeholder="Father's name" required>
    </div>
                        
    <div class="form-group col-md-6">
      <label for="inputcity">City*</label>
      <input type="text" class="form-control" name ="city" id="inputcity" placeholder="City"  required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputrollnum">Roll Number*</label>
      <input type="number" class="form-control" name ="rollnum" id="inputrollnum" placeholder="Roll Number" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputmobilenum">Mobile Number*</label>
      <input type="number" class="form-control" name ="mobilenum" id="inputmobilenum" placeholder="Mobile Number" required>
    </div>
    
    <div class="form-group col-md-6">
      <label for="inputfathernum">Father's Mobile Number*</label>
      <input type="number" class="form-control" name ="fathermobile" id="inputfathrmobile" placeholder="Father mobile" required>
    </div>

    <div class="form-group col-md-6">
      <label for="inputaddress">Address*</label>
      <input type="text" class="form-control" name ="address" id="inputaddress" placeholder="Address" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputregistration date">Registration date</label>
      <input type="date" class="form-control" name ="regdate" id="inputregdate" placeholder="dd/mm/yyyy" required>
    </div>
    
    </div>   
  <button type="submit" name="submit" value="insert" class="btn btn-primary">Register</button>
</form>

</div>
<br>
<hr>
<br>
<h2>Student receipt</h2>

<div class="invoice">

</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="C:\xampp\htdocs\coaching\studentregister.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"

        <!-- <script type="text/javascript" src="./studentregister.js"></script> 


        <script type='text/javascript'>

function show() {
    var x = document.getElementById("mySelect").value;
    var y = document.getElementById("selectCat").value;
        console.log(x)
        console.log(y) 

    if (x == '9' && y== 'cs_9') {
        document.getElementById('cs_9').style.display = 'inline'
        document.getElementById('medical_9').style.display = 'none'
        // document.getElementById('commerce_9').style.display = 'none'
        document.getElementById('matric').style.display = 'none'
        // document.getElementById('commerce_10').style.display = 'none'
        document.getElementById('preeng_11').style.display = 'none'
        document.getElementById('premedical_11').style.display = 'none'
        document.getElementById('commerce_11').style.display = 'none'
        document.getElementById('preeng_12').style.display = 'none'
        document.getElementById('premedical_12').style.display = 'none'
        document.getElementById('commerce_12').style.display = 'none'
    }

    else if (x == '9'&& y=='medical_9') {
        document.getElementById('cs_9').style.display = 'none'
        document.getElementById('medical_9').style.display = 'inline'
        // document.getElementById('commerce_9').style.display = 'none'
        document.getElementById('matric').style.display = 'none'
        // document.getElementById('commerce_10').style.display = 'none'
        document.getElementById('preeng_11').style.display = 'none'
        document.getElementById('premedical_11').style.display = 'none'
        document.getElementById('commerce_11').style.display = 'none'
        document.getElementById('preeng_12').style.display = 'none'
        document.getElementById('premedical_12').style.display = 'none'
        document.getElementById('commerce_12').style.display = 'none'
    }
    // else if (x == '9'&& y=='commerce') {
    //     document.getElementById('cs_9').style.display = 'none'
    //     document.getElementById('medical_9').style.display = 'none'
    //     // document.getElementById('commerce_9').style.display = 'inline'
    //     document.getElementById('matric').style.display = 'none'
    //     // document.getElementById('commerce_10').style.display = 'none'
    //     document.getElementById('preeng_11').style.display = 'none'
    //     document.getElementById('premedical_11').style.display = 'none'
    //     document.getElementById('commerce_11').style.display = 'none'
    //     document.getElementById('preeng_12').style.display = 'none'
    //     document.getElementById('premedical_12').style.display = 'none'
    //     document.getElementById('commerce_12').style.display = 'none'
    // }

    else if (x == '10' && y=='cs_9'||y=='medical_9') {
        document.getElementById('cs_9').style.display = 'none'
        document.getElementById('medical_9').style.display = 'none'
        // document.getElementById('commerce_9').style.display = 'none'
        document.getElementById('matric').style.display = 'inline'
        // document.getElementById('commerce_10').style.display = 'none'
        document.getElementById('preeng_11').style.display = 'none'
        document.getElementById('premedical_11').style.display = 'none'
        document.getElementById('commerce_11').style.display = 'none'
        document.getElementById('preeng_12').style.display = 'none'
        document.getElementById('premedical_12').style.display = 'none'
        document.getElementById('commerce_12').style.display = 'none'
    }
    // else if (x == '10' && y=='commerce') {
    //     document.getElementById('cs_9').style.display = 'none'
    //     document.getElementById('medical_9').style.display = 'none'
    //     // document.getElementById('commerce_9').style.display = 'none'
    //     document.getElementById('matric').style.display = 'none'
    //     // document.getElementById('commerce_10').style.display = 'inline'
    //     document.getElementById('preeng_11').style.display = 'none'
    //     document.getElementById('premedical_11').style.display = 'none'
    //     document.getElementById('commerce_11').style.display = 'none'
    //     document.getElementById('preeng_12').style.display = 'none'
    //     document.getElementById('premedical_12').style.display = 'none'
    //     document.getElementById('commerce_12').style.display = 'none'
    // }
    else if (x == '11'&& y=='preeng') {
        document.getElementById('cs_9').style.display = 'none'
        document.getElementById('medical_9').style.display = 'none'
        // document.getElementById('commerce_9').style.display = 'none'
        document.getElementById('matric').style.display = 'none'
        // document.getElementById('commerce_10').style.display = 'none'
        document.getElementById('preeng_11').style.display = 'inline'
        document.getElementById('premedical_11').style.display = 'none'
        document.getElementById('commerce_11').style.display = 'none'
        document.getElementById('preeng_12').style.display = 'none'
        document.getElementById('premedical_12').style.display = 'none'
        document.getElementById('commerce_12').style.display = 'none'
    }
    else if (x == '11'&& y=='premedical') {
        document.getElementById('cs_9').style.display = 'none'
        document.getElementById('medical_9').style.display = 'none'
        // document.getElementById('commerce_9').style.display = 'none'
        document.getElementById('matric').style.display = 'none'
        // document.getElementById('commerce_10').style.display = 'none'
        document.getElementById('preeng_11').style.display = 'none'
        document.getElementById('premedical_11').style.display = 'inline'
        document.getElementById('commerce_11').style.display = 'none'
        document.getElementById('preeng_12').style.display = 'none'
        document.getElementById('premedical_12').style.display = 'none'
        document.getElementById('commerce_12').style.display = 'none'
    }
    else if (x == '11'&& y=='commerce') {
        document.getElementById('cs_9').style.display = 'none'
        document.getElementById('medical_9').style.display = 'none'
        // document.getElementById('commerce_9').style.display = 'none'
        document.getElementById('matric').style.display = 'none'
        // document.getElementById('commerce_10').style.display = 'none'
        document.getElementById('preeng_11').style.display = 'none'
        document.getElementById('premedical_11').style.display = 'none'
        document.getElementById('commerce_11').style.display = 'inline'
        document.getElementById('preeng_12').style.display = 'none'
        document.getElementById('premedical_12').style.display = 'none'
        document.getElementById('commerce_12').style.display = 'none'
    }
    else if (x == '12'&& y=='preeng') {
        document.getElementById('cs_9').style.display = 'none'
        document.getElementById('medical_9').style.display = 'none'
        // document.getElementById('commerce_9').style.display = 'none'
        document.getElementById('matric').style.display = 'none'
        // document.getElementById('commerce_10').style.display = 'none'
        document.getElementById('preeng_11').style.display = 'none'
        document.getElementById('premedical_11').style.display = 'none'
        document.getElementById('commerce_11').style.display = 'none'
        document.getElementById('preeng_12').style.display = 'inline'
        document.getElementById('premedical_12').style.display = 'none'
        document.getElementById('commerce_12').style.display = 'none'
    }    
    else if (x == '12'&& y=='premedical') {
        document.getElementById('cs_9').style.display = 'none'
        document.getElementById('medical_9').style.display = 'none'
        // document.getElementById('commerce_9').style.display = 'none'
        document.getElementById('matric').style.display = 'none'
        // document.getElementById('commerce_10').style.display = 'none'
        document.getElementById('preeng_11').style.display = 'none'
        document.getElementById('premedical_11').style.display = 'none'
        document.getElementById('commerce_11').style.display = 'none'
        document.getElementById('preeng_12').style.display = 'none'
        document.getElementById('premedical_12').style.display = 'inline'
        document.getElementById('commerce_12').style.display = 'none'
    }
    else if (x == '12' && y=='commerce') {
        document.getElementById('cs_9').style.display = 'none'
        document.getElementById('medical_9').style.display = 'none'
        // document.getElementById('commerce_9').style.display = 'none'
        document.getElementById('matric').style.display = 'none'
        // document.getElementById('commerce_10').style.display = 'none'
        document.getElementById('preeng_11').style.display = 'none'
        document.getElementById('premedical_11').style.display = 'none'
        document.getElementById('commerce_11').style.display = 'none'
        document.getElementById('preeng_12').style.display = 'none'
        document.getElementById('premedical_12').style.display = 'none'
        document.getElementById('commerce_12').style.display = 'inline'
    }

    else {
        // document.getElementById('hide10').style.visibility='none'
    }

}

        </script>






    </body>
</html>
