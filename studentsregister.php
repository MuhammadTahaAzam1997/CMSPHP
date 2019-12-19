<?php

require_once "config.php";
if (isset($_REQUEST["submit"])){

    $studentname=$_REQUEST["studentname"];
    $fathername=$_REQUEST["fathername"];
    $gender=$_REQUEST["gender"];
    $class=$_REQUEST["class"];
    $field=$_REQUEST["field"];
    $numberofsubjects=$_REQUEST["numberofsubjects"];
    $subject=$_REQUEST["subject"];
    $b=implode(",",$subject);
    $city=$_REQUEST["city"];
    $rollnum=$_REQUEST["rollnum"];
    $mobilenum=$_REQUEST["mobilenum"];
    $fathermobile=$_REQUEST["fathermobile"];
    $address=$_REQUEST["address"];
    $dob=$_REQUEST["dob"];
    $regdate=$_REQUEST["regdate"];
    
    // $ins="insert into feesubmit (studentname,fathername,class,field,rollnum,numberofsubjects,subjects) values ('$studentname','$fathername','$class','$field','$rollnum','$numberofsubjects','$b')";
    // $que=mysqli_query($connection,$ins);
    
    $insert="insert into studentregister (studentname,fathername,gender,class,field,numberofsubjects,subject,city,rollnum,mobilenum,fathermobile,address,dob,regdate) values ('$studentname','$fathername','$gender','$class','$field','$numberofsubjects','$b','$city','$rollnum','$mobilenum','$fathermobile','$address','$dob','$regdate')";
     
    $query=mysqli_query($connection,$insert);
}

if (isset($_REQUEST["submit"])){

  $studentname=$_REQUEST["studentname"];
  $fathername=$_REQUEST["fathername"];
  $gender=$_REQUEST["gender"];
  $class=$_REQUEST["class"];
  $field=$_REQUEST["field"];
  $numberofsubjects=$_REQUEST["numberofsubjects"];
  $subject=$_REQUEST["subject"];
  $b=implode(",",$subject);
  $city=$_REQUEST["city"];
  $rollnum=$_REQUEST["rollnum"];
  $mobilenum=$_REQUEST["mobilenum"];
  $fathermobile=$_REQUEST["fathermobile"];
  $address=$_REQUEST["address"];
  $dob=$_REQUEST["dob"];
  $regdate=$_REQUEST["regdate"];
  
  $ins="INSERT into feesubmit (studentname,fathername,class,field,rollnum,numberofsubjects,subjects) VALUES ('$studentname','$fathername','$class','$field','$rollnum','$numberofsubjects','$b')";
  $que=mysqli_query($connection,$ins);
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
      <label for="inputstudentname">Student's name*</label>
      <input type="text" class="form-control" name="studentname"  id="inputstudentname" placeholder="Student's name" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputfathername">Father's name*</label>
      <input type="text" class="form-control" name ="fathername" id="inputfathername" placeholder="Father's name" required>
    </div>
    <div class="form-group col-md-6">
                    <label for="gender">Gender:</label>
                    <select name="gender" id="inputgender">
                        <option>             Select any one</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                        <label for="inputDob">Date of Birth*</label>
                        <input type="date" class="form-control" name ="dob" id="inputdob" placeholder="dd/mm/yyyy" required>
                </div>
                
                <div class="form-group col-md-6">
                        <label for="nos">Number of Subjects:</label>
                        <input type="number" class="form-control" name ="numberofsubjects" id="numberofsubjects" placeholder="1,2,3 etc" required>
                </div>
                <div class="form-group col-md-6">
                    Select Class:
                    <select name="class" id="mySelect" onchange='show()'>
                        <option value="9">9th</option>
                        <option value="10">Matric</option>
                        <option value="11">1st Year</option>
                        <option value="12">2nd Year</option>
                    </select>

                    Select Category:
                    <select name="field"  id="selectCat" onchange='show()'>
                        <option value="cs_9">Computer Science</option>
                        <option value="medical_9">Medical</option>
                        <option value="preeng">Pre-Engineering</option>
                        <option value="premedical">Pre-Medical</option>
                        <option value="commerce">Commerce</option>
                    </select>
                    <br><br>

                    <div style="border:solid rgb(218, 213, 213) 1px"><br>
                        <div id="cs_9">
                            <label for="subject">Select subject:</label> 
                            <input type="checkbox" name="subject[]" value="COMP9"> Computer
                            <input type="checkbox" name="subject[]" value="CHEM9"> Chemistry
                            <input type="checkbox" name="subject[]" value="SINDHI9"> Sindhi
                            <input type="checkbox" name="subject[]" value="ENG9"> English
                            <input type="checkbox" name="subject[]" value="PST9"> Pakistan St.
                        </div>
                        <div id="medical_9">
                            <label for="subject">Select subject:</label>
                            <input type="checkbox" name="subject[]" value="CHEM9"> Chemistry
                            <input type="checkbox" name="subject[]" value="BIO9"> Bio
                            <input type="checkbox" name="subject[]" value="SINDHI9"> Sindhi
                            <input type="checkbox" name="subject[]" value="ENG9"> English
                            <input type="checkbox" name="subject[]" value="PST9"> Pakistan St.
                        </div>
                        <!-- <div id="commerce_9">
                            <label for="subject">Select subject:</label> 
                            <input type="checkbox" name="" value="Math"> Mathmetics
                            <input type="checkbox" name="" value="physics">Physics
                        </div> -->
                        <div id="matric">
                            <label for="subject">Select subject:</label> 
                            <input type="checkbox" name="subject[]" value="MATH10"> Mathmetics
                            <input type="checkbox" name="subject[]" value="PHY10">Physics
                            <input type="checkbox" name="subject[]" value="ISL10"> Islamiat
                            <input type="checkbox" name="subject[]" value="ENG10"> English
                            <input type="checkbox" name="subject[]" value="URDU10"> Urdu
                        </div>
                        <!-- <div id="commerce_10">
                            <label for="subject">Select subject:</label> 
                            <input type="checkbox" name="" value="chemistry"> 10
                            <input type="checkbox" name="" value="physics"> commerce
                            <input type="checkbox" name="" value="Mathmetics"> english
                        </div> -->
                        <div id="preeng_11">
                            <label for="subject">Select subject:</label> 
                            <input type="checkbox" name="subject[]" value="CHEM11"> Chemistry- XI
                            <input type="checkbox" name="subject[]" value="PHY11">   Physics - XI
                            <input type="checkbox" name="subject[]" value="MATH11"> Math -XI
                            <input type="checkbox" name="subject[]" value="ISL11"> Islamiat
                            <input type="checkbox" name="subject[]" value="ENG11"> English
                            <input type="checkbox" name="subject[]" value="URDU11"> Urdu
                        </div>
                        <div id="premedical_11">
                            <label for="subject">Select subject:</label> 
                            <input type="checkbox" name="subject[]" value="CHEM11"> Chemistry- XI
                            <input type="checkbox" name="subject[]" value="PHY11"> Physics - XI
                            <input type="checkbox" name="subject[]" value="BIO11"> Biology - XI
                            <input type="checkbox" name="subject[]" value="ISL11"> Islamiat
                            <input type="checkbox" name="subject[]" value="ENG11"> English
                            <input type="checkbox" name="subject[]" value="URDU11"> Urdu
                        </div>
                        <div id="commerce_11">
                            <label for="subject">Select subject:</label> 
                            <input type="checkbox" name="subject[]" value="POC11"> Principle of Commerce -XI
                            <input type="checkbox" name="subject[]" value="POE11"> Principle of Economics-XI
                            <input type="checkbox" name="subject[]" value="BUSMATH11"> Business Math-XII
                            <input type="checkbox" name="subject[]" value="POA11"> Principle of Accounting -XI
                            <input type="checkbox" name="subject[]" value="ISL11"> Islamiat
                            <input type="checkbox" name="subject[]" value="ENG11"> English
                            <input type="checkbox" name="subject[]" value="URDU11"> Urdu
                          </div>
                        <div id="preeng_12">
                            <label for="subject">Select subject:</label> 
                            <input type="checkbox" name="subject[]" value="CHEM12"> Chemistry -XII
                            <input type="checkbox" name="subject[]" value="PHY12"> Physics-XII
                            <input type="checkbox" name="subject[]" value="MATH12"> Mathematics - XII
                            <input type="checkbox" name="subject[]" value="PST12"> Pakistan St.
                            <input type="checkbox" name="subject[]" value="ENG12"> English
                            <input type="checkbox" name="subject[]" value="URDU12"> Urdu
                        </div>
                        <div id="premedical_12">
                            <label for="subject">Select subject:</label> 
                            <input type="checkbox" name="subject[]" value="CHEM12"> Chemistry-XII
                            <input type="checkbox" name="subject[]" value="PHY12"> Physics-XII
                            <input type="checkbox" name="subject[]" value="BIO12"> Biology - XII
                            <input type="checkbox" name="subject[]" value="PST12"> Pakistan St.
                            <input type="checkbox" name="subject[]" value="ENG12"> English
                            <input type="checkbox" name="subject[]" value="URDU12"> Urdu
                        </div>
                        <div id="commerce_12">
                            <label for="subject">Select subject:</label> 
                            <input type="checkbox" name="subject[]" value="POA12"> Principle of Accounting -XII
                            <input type="checkbox" name="subject[]" value="POC12"> Principle of Commerce -XII
                            <input type="checkbox" name="subject[]" value="POE12"> Principle of Economics-XII
                            <input type="checkbox" name="subject[]" value="BUSMATH12"> Business Math-XII
                            <input type="checkbox" name="subject[]" value="URDU12"> Urdu
                            <input type="checkbox" name="subject[]" value="ENG12"> English
                            <input type="checkbox" name="subject[]" value="ISL12"> Islamiat
                            <input type="checkbox" name="subject[]" value="PST12"> Pakistan Studies
                            <input type="checkbox" name="subject[]" value="COMGEO12"> Commercial Geography
                        </div>
                    </div>

                    <style>
                        #medical_9,#commerce_9,#commerce_10,#matric,#preeng_11,#premedical_11,#commerce_11,
                        #premedical_12,#preeng_12,#commerce_12{

                            /* visibility:hidden ; */
                            display: none;
                        }
                    </style>
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