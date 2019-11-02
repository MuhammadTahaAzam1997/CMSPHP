<?php
require_once "config.php";

$query="SELECT * FROM feeregister";
$result=mysqli_query($connection ,$query);
?>










<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Check Fee</title>
</head>
<body>
    
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Fee Insertion</title>
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

    <table aligin="center" border="1px" style="width:608px; line-height:48px;"> 
    <tr>
    <th><h2> Fee List</h2></th> 
    </tr>

    <table aligi n="center" border="1px" style="width:608px; line-height:48px;">

    <th>id</th>
    <th>comp9th</th>
    <th>bio9th</th>
    <th>chem9th</th>
    

    <?php 
    while($rows =mysqli_fetch_assoc($result)){

    
    
    ?>
    <tr><td><?php echo $rows['id'];?></td>
    <td><?php echo $rows['comp9th'];?></td>
    <td><?php echo $rows['bio9th'];?></td>
     <td><?php echo $rows['chem9th'];?></td></tr>
<?php
    }?> 
    </table>    
    </table>
    <br><br>
    <hr><br>
    <a href="changefee.php" >Edit Fee</a>
</body>
</html>