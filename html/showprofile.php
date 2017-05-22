<?php
  include 'connect.inc.php';
  if(isset($_POST['username']))
  {
    $username=$_POST['username'];
    $query="SELECT * from student WHERE username='$username'";
    $result_set=mysqli_query($handle,$query);
    while($row=@mysqli_fetch_array($result_set))
    {
      $first_name=$row['firstname'];
      $last_name=$row['lastname'];
      $email_id=$row['email_id'];
      $username=$row['username'];
      $department=$row['department'];
      $matriculation=$row['matriculation'];
      $mat_year=$row['mat_year'];
      $mat_board=$row['mat_board'];
      $cgpapermat=$row['cgpaper_mat'];
      $intermediate=$row['intermediate'];
      $int_year=$row['int_year'];
      $int_board=$row['int_board'];
      $cgpaperint=$row['cgpaper_int'];
      $graduation=$row['graduation'];
      $grad_year=$row['grad_year'];
      $grad_board=$row['grad_board'];
      $cgpapergrad=$row['cgpaper_grad'];
      $skill1=$row['skill1'];
      $skill2=$row['skill2'];
      $skill3=$row['skill3'];
      $ach1=$row['ach1'];
      $ach2=$row['ach2'];
      $ach3=$row['ach3'];
      $about=$row['about'];
      $contact=$row['contact'];
      $address=$row['address'];
      $sem=$row['sem'];
      $interest=$row['interest'];
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Student profile</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="../css/bootstrap.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
      .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    font-size:18px;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s;
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: gray;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
.modal-header {
    padding: 2px 16px;
    background-color: lightblue;
    color: white;
}

.modal-body {
  padding: 2px 16px;
  text-align:center;
}

.modal-footer {
    padding: 2px 16px;
    background-color: #F0F8FF;
    color: white;
}
    </style>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      <li><a href="login.inc.php"> HOME</a></li>
       <li><a href="query.php"> GO BACK TO QUERY</a></li>
   <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> LOGOUT</a></li>
      </ul>
    </div>
  </div>
</nav>
  <div class="container">
    <hr>
    <div class="row">
      <div class="col-xs-6">
        <h1><?php echo $first_name.' '.$last_name; ?></h1>
        <?php echo $address; ?>
      </div>
      <div class="col-xs-6">
      </div>
    </div>
    <script type="text/javascript">
// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
var x=1;
var y=1;
var z=1;
function myfunction()
{
  x++;
  if(x<3)
  {
    document.getElementById(x).style.display="block";
  }
  else
  {
    document.getElementById(x).style.display="block";
    document.getElementById("addmore").style.display="none";
  }
}
function myfunction1()
{
  y++;
  if(y<3)
  {
    document.getElementById("s"+y).style.display="block";
  }
  else
  {
    document.getElementById("s"+y).style.display="block";
    document.getElementById("addmore1").style.display="none";
  }
}
function myfunction2()
{
  z++;
  if(z<3)
  {
    document.getElementById("a"+z).style.display="block";
  }
  else
  {
    document.getElementById("a"+z).style.display="block";
    document.getElementById("addmore2").style.display="none";
  }
}
</script>
     
    <hr>
    <div class="row">
      <div class="col-xs-6">
        <div class="media">
          <div class="media-body">
            <h3 class="media-heading">About me</h3>                     <!--use of about me/summary-->
           <?php echo $about; ?></div>
        </div>
      </div>
      <div class="col-xs-6 well">
        <div class="row">
          <div class="col-lg-6">
            <h4><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> : <?php echo $contact; ?></h4>
          </div>
          <div class="col-lg-6">                                              
            <h4><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> : <?php echo $email_id; ?></h4>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <h4><span class="glyphicon glyphicon-globe" aria-hidden="true"></span> : <?php echo $department; ?></h4>
          </div>
          <div class="col-lg-6">
            <h4><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span> : <?php echo $sem; ?>th Sem</h4>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-sm-12 col-lg-12">
          <h2>Education</h2>
          <hr>
          <table class="table table-hover">
            <thead>
              <tr>
                <th>EXAM</th>
                <th>UNIVERSITY</th>
                <th>BOARD</th>
                <th>YEAR OF PASSING</th>
                  <th>CGPA/percentage</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>B.Tech</td>
                <td><?php echo $graduation; ?></td>
                <td><?php echo $grad_board; ?></td>
                    <td><?php echo $grad_year; ?></td>
                 <td><?php echo $cgpapergrad; ?></td>
              </tr>
              <tr>
                <td>12th</td>
                <td><?php echo $intermediate; ?></td>
                <td><?php echo $int_board; ?></td>
                <td><?php echo $int_year; ?></td>
                <td><?php echo $cgpaperint; ?></td>
              </tr>
              <tr>
                <td>10th</td>
                <td><?php echo $matriculation; ?></td>
                <td><?php echo $mat_board; ?></td>
                <td><?php echo $mat_year; ?></td>
                <td><?php echo $cgpapermat; ?></td>
              </tr>
            </tbody>
          </table>
      </div>
    </div>
    <hr>
    <h2>Skills</h2>                
<hr>
      <div class="row">
      <div class="col-lg-12">
        
        
        <ul>
        	<li><?php echo $skill1; ?></li>
        	<li><?php echo $skill2; ?></li>
        	<li><?php echo $skill3; ?></li>
        </ul>
      </div>
      </div>
 
<hr>
      <h2>Achievements</h2>   
<hr>
      <div class="row">
      <div class="col-lg-12">
        
        
        <ul>
        	<li><?php echo $ach1; ?></li>
        	<li><?php echo $ach2; ?></li>
        	<li><?php echo $ach3; ?></li>
        </ul>
      </div>
      </div>
 
<hr>
          <h2>Interest</h2>                   
<hr>
    <div class="row">
      <div class="col-lg-12">
        <?php echo $interest; ?>
      </div>
     
<hr>
<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © studentprofile. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="../js/jquery-1.11.2.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="../js/bootstrap.min.js"></script>
</body>
</html>