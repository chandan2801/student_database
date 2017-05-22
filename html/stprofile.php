<?php
  include 'core.inc.php';
  include 'connect.inc.php';
  $first_name=getuserfield('firstname');
  $last_name=getuserfield('lastname');
  $email_id=getuserfield('email_id');
  $username=getuserfield('username');
  $department=getuserfield('department');
  $matriculation=getuserfield('matriculation');
  $mat_year=getuserfield('mat_year');
  $mat_board=getuserfield('mat_board');
  $cgpapermat=getuserfield('cgpaper_mat');
  $intermediate=getuserfield('Intermediate');
  $int_year=getuserfield('int_year');
  $int_board=getuserfield('int_board');
  $cgpaperint=getuserfield('cgpaper_int');
  $graduation=getuserfield('graduation');
  $grad_year=getuserfield('grad_year');
  $grad_board=getuserfield('grad_board');
  $cgpapergrad=getuserfield('cgpaper_grad');
  $skill1=getuserfield('skill1');
  $skill2=getuserfield('skill2');
  $skill3=getuserfield('skill3');
  $ach1=getuserfield('ach1');
  $ach2=getuserfield('ach2');
  $ach3=getuserfield('ach3');
  $about=getuserfield('about');
  $contact=getuserfield('contact');
  $address=getuserfield('address');
  $sem=getuserfield('sem');
  $interest=getuserfield('interest');
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
        <section class="col col-sm-1" style="padding:15px;float: right;"><br><button class="btn btn-danger btn-lg" id="myBtn"><span class="glyphicon glyphicon-pencil"></span></button></section>
      </div>
    </div>
     <div id="myModal" class="modal">
     <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">×</span>
      <h2>Edit Profile</h2>
    </div>
    <div class="modal-body">
      <form action="update.php" class="form-horizontal" method="POST">
       <div class="form-group">
        <label class="control-label col-sm-2" for="firstname" style="padding: 10px;";>Firstname:</label>
        <div class="col-sm-8">
        <input type="text" name="firstname" id="firstname" value="<?php echo $first_name; ?>" maxlength=40 class="form-control">
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2" for="lastname" style="padding: 10px;";>Lastname:</label>
        <div class="col-sm-8">
        <input type="text" name="lastname" id="lastname" value="<?php echo $last_name; ?>" maxlength=40 class="form-control" >
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2" for="email_id" style="padding: 10px;";>Email:</label>
        <div class="col-sm-8">
        <input type="text" name="email_id" id="email_id" value="<?php if(!empty($email_id)){echo $email_id;} else{ echo ' ';} ?>" class="form-control" >
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2" for="contact" style="padding: 10px;";>Contact:</label>
        <div class="col-sm-8">
        <input type="text" name="contact" id="contact" value="<?php if(!empty($contact)){echo $contact;} else{ echo ' ';} ?>" maxlength=11 class="form-control" >
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2" for="dept" style="padding: 10px;";>Department:</label>
        <div class="col-sm-8">
        <input type="text" name="department" id="department" value="<?php if(!empty($department)){echo $department;} else{ echo ' ';} ?>" maxlength=10 class="form-control" >
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2" for="sem" style="padding: 10px;";>Sem:</label>
        <div class="col-sm-8">
        <input type="text" name="sem" id="sem" value="<?php if(!empty($sem)){echo $sem;} else{ echo ' ';} ?>" class="form-control" >
        </div>
        </div>
        <div class="form-group">
        <strong>About: </strong><br>
        <textarea name="about" id="about" rows=6 cols=30><?php if(!empty($about)){echo $about;} else{ echo ' ';} ?></textarea>
        </div>
        <div class="form-group" id="1" style="display: block;">
        <label class="control-label col-sm-2" for="matriculation" style="padding: 10px;";>Matriculation:</label>
        <div class="col-sm-8">
        <input type="text" name="matriculation" id="matriculation" value="<?php if(!empty($matriculation)){echo $matriculation;} else{ echo ' ';} ?>" class="form-control">
        </div>
        <br><br>
        <div class="form-group">
        <strong>Year:</strong>
        <input type="text" name="matyear" id="matyear" value="<?php if(!empty($mat_year)){echo $mat_year;} else{ echo ' ';} ?>">
        <strong>Board:</strong>
        <input type="text" name="matboard" id="matboard" value="<?php if(!empty($mat_board)){echo $mat_board;} else{ echo ' ';} ?>">
        <strong>Cgpa/Per:</strong>
        <input type="text" name="cgpapermat" id="cgpapermat" value="<?php if(!empty($cgpapermat)){echo $cgpapermat;} else{ echo ' ';} ?>">
        </div>
        </div>
        <div class="form-group" id="2" style="display: none;">
        <label class="control-label col-sm-2" for="intermediate" style="padding: 10px;";>Intermediate:</label>
        <div class="col-sm-8">
        <input type="text" name="intermediate" id="intermediate" value="<?php if(!empty($intermediate)){echo $intermediate;} else{ echo ' ';} ?>" class="form-control">
        </div>
        <br><br>
        <div class="form-group">
        <strong>Year:</strong>
        <input type="text" name="intyear" id="intyear" value="<?php if(!empty($int_year)){echo $int_year;} else{ echo ' ';} ?>">
        <strong>Board:</strong>
        <input type="text" name="intboard" id="intboard" value="<?php if(!empty($int_board)){echo $int_board;} else{ echo ' ';} ?>">
        <strong>Cgpa/Per:</strong>
        <input type="text" name="cgpaperint" id="cgpaperint" value="<?php if(!empty($cgpaperint)){echo $cgpaperint;} else{ echo ' ';} ?>">
        </div>
        </div>
        <div class="form-group" id="3" style="display: none;">
        <label class="control-label col-sm-2" for="graduation" style="padding: 10px;";>Graduation:</label>
        <div class="col-sm-8">
        <input type="text" name="graduation" id="graduation" value="<?php if(!empty($graduation)){echo $graduation;} else{ echo ' ';} ?>" class="form-control">
        </div>
       <br><br>
        <div class="form-group">
        <strong>Year:</strong>
        <input type="text" name="gradyear" id="gradyear" value="<?php if(!empty($grad_year)){echo $grad_year;} else{ echo ' ';} ?>">
        <strong>Board:</strong>
        <input type="text" name="gradboard" id="gradboard" value="<?php if(!empty($grad_board)){echo $grad_board;} else{ echo ' ';} ?>">
        <strong>Cgpa/Per:</strong>
        <input type="text" name="cgpapergrad" id="cgpapergrad" value="<?php if(!empty($cgpapergrad)){echo $cgpapergrad;} else{ echo ' ';} ?>">
        </div>
        </div>
        <div class="form-group">
        <p id="addmore"><a onClick="myfunction()" style="cursor: pointer;">add more</a></p>
        </div>
         <div class="form-group"  style="display: block;">
        <label class="control-label col-sm-2" for="skills" style="padding: 10px;";>Skills:</label>
        <div class="col-sm-8">
        <input type="text" name="skill1" id="s1"  value="<?php if(!empty($skill1)){echo $skill1;} else{ echo ' ';} ?>" class="form-control">
        <br>
        <input type="text" name="skill2" id="s2" style="display:none;" value="<?php if(!empty($skill2)){echo $skill2;} else{ echo ' ';} ?>" class="form-control">
        <br>
        <input type="text" name="skill3" id="s3" style="display:none;" value="<?php if(!empty($skill3)){echo $skill3;} else{ echo ' ';} ?>" class="form-control">
        </div>
        </div>
         <div class="form-group">
        <p id="addmore1"><a onClick="myfunction1()" style="cursor: pointer;">add more</a></p>
        </div>
            <div class="form-group"  style="display: block;">
        <label class="control-label col-sm-2" for="achievements" style="padding: 10px;";>Achievements:</label>
        <div class="col-sm-8">
        <input type="text" name="ach1" id="a1"  value="<?php if(!empty($ach1)){echo $ach1;} else{ echo ' ';} ?>" class="form-control">
        <br>
        <input type="text" name="ach2" id="a2" style="display:none;" value="<?php if(!empty($ach2)){echo $ach2;} else{ echo ' ';} ?>" class="form-control">
        <br>
        <input type="text" name="ach3" id="a3" style="display:none;" value="<?php if(!empty($ach3)){echo $ach3;} else{ echo ' ';} ?>" class="form-control">
        </div>
        </div>
         <div class="form-group">
        <p id="addmore2"><a onClick="myfunction2()" style="cursor: pointer;">add more</a></p>
        </div>
        <div class="form-group">
        <strong>Interest: </strong><br>
        <textarea name="interest" id="interest" rows=6 cols=30><?php if(!empty($interest)){echo $interest;} else{ echo ' ';} ?></textarea>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2" for="address" style="padding: 10px;";>Address:</label>
        <div class="col-sm-8">
        <input type="text" name="address" id="address" value="<?php if(!empty($address)){echo $address;} else{ echo ' ';} ?>" class="form-control">
        </div>
        </div>
        <input type="submit" class="btn btn-info btn-lg" value="Update">
      </form>
    </div>
    <div class="modal-footer">
    </div>
    </div>
  </div>
  <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

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