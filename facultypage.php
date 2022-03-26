<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="edit.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index">Bansal Enginnering</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registrationform">Student registration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Facultyregistrationform">Faculty registration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="miniproject.html">Exam</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" >Result</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="postquerypublic" >Post Query</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Login
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="Studentlogin">Student</a></li>
            <li><a class="dropdown-item" href="facultypage">faculty</a></li>
            <li><a class="dropdown-item" href="adminlogin">admine</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>
<?php
  $a=1;
  $new="<table class='table table-dark table-striped'>
  <thead>
    <tr>
      <th scope='col'>#</th>
      <th scope='col'>First</th>
      <th scope='col'>Email</th>
      <th scope='col'>Attendence %</th>
    </tr>
  </thead>
  <tbody>";
     $concat="";
     $connectt=mysqli_connect('localhost','root','','STU_SYS');
     $query='SELECT * FROM REGISTRATION';
     $pa=false;
     $qry=mysqli_query($connectt,$query);
     while ($row=mysqli_fetch_assoc($qry)){
       $concat.="<tr><th scope='col'>{$a}</th><th scope='col'>{$row['FNAME']}</th><th scope='col'>{$row['EID']}</th><th scope='col'><input class='inp' type='text'/></th></tr><br>";
     $a=$a+1;
    }

    $new.=$concat;
    $new.="</tbody></table>";
    echo $new;
     
  ?>
  <form  method="POST">
      <button type="submit" >click</button>
  </form>
  <?php
  
  ?>
<?php include('allfoot.php'); ?>