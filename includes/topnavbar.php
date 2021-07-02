

<?php
echo '
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/
css/bootstrap.min.css" integrity="sha384-
Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="an
onymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/4.7.0/css/font-awesome.min.css">
 <title>NEWZ</title>

</head>
<body>
   <!---navbar creation-->
   <nav class="navbar navbar-expand-md navbar-light">
    <a class="navbar-brand " href="">
        
    <a class="navbar-toggler" href="" data-target="#fact" datatoggle="collapse">
    <span class="navbar-toggler-icon"></span>
 </a>
 <div class="dropdown dropright">
 <div class="collapse navbar-collapse" id="fact">
<ul class="navbar-nav">

<div class="btn-group">
<div class="dropdown dropright">
    <a class="nav-link  dropdown-toggle dropdown-toggle-split" href="Gallery_Newz.html" data-toggle="dropdown">
      student
    </a>
    <div class="dropdown-menu">
        <a class="nav-link text-green" href="addStudents.php"> Create student</a>
        <a class="nav-link text-green" href="studentList">Student list</a>
        <a class="nav-link text-green" href="upcomingstudent.php"> Upcoming student</a>
        <a class="nav-link text-green" href="upcomingstudentlist.php">Upcoming Student list</a>
    </div>
  </div>

  <div class="dropdown dropright">
    <a class="nav-link  dropdown-toggle dropdown-toggle-split" href="Gallery_Newz.html" data-toggle="dropdown">
      center
    </a>
    <div class="dropdown-menu">
        <a class="nav-link text-green" href="addCenters.php"> Create center</a>
        <a class="nav-link text-green" href="centersList.php">Center list</a>
        </div>
</div>

<div class="dropdown dropright">
    <a class="nav-link  dropdown-toggle dropdown-toggle-split" href="Gallery_Newz.html" data-toggle="dropdown">
      course
    </a>
    <div class="dropdown-menu">
        <a class="nav-link text-green" href="HomePage_Newz.html"> create course</a>
        <a class="nav-link text-green" href="HomePage_Newz.html">course list</a>
        </div>
</div>

        <div class="dropdown dropright">
            <a class="nav-link  dropdown-toggle dropdown-toggle-split" href="Gallery_Newz.html" data-toggle="dropdown">
              user
            </a>
            <div class="dropdown-menu">
                <a class="nav-link text-green" href="HomePage_Newz.html"> create user</a>
                <a class="nav-link text-green" href="HomePage_Newz.html">user list</a>
                </div>
                </div>
                </div>

</ul>

</nav>
</body>
</html> '
?>