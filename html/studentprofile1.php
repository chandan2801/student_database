<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By Chandan Prusty - No Copyright -->
  <title>StudentProfile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/stuprofile.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  </head>
<body>
<!--<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="" style="font-size:20px; color:#C94B4B";><span class="glyphicon glyphicon-pencil" style="color:#000"></span>Write Up!</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      <li><a href="login.php"> HOME</a></li>
   <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> LOGOUT</a></li>
      </ul>
    </div>
  </div>
</nav>-->
<br><br><br>
<div class="progress">
    <div class="progress-bar progress-bar-success" role="progressbar" style="width:25%">
    </div>
    <div class="progress-bar progress-bar-info" role="progressbar" style="width:25%">
    </div>
    <div class="progress-bar progress-bar-warning" role="progressbar" style="width:25%">
    </div>
    <div class="progress-bar progress-bar-danger" role="progressbar" style="width:25%">
    </div>
  </div>
<div class="container" style="background:#fff";>
<header style="text-align:center;">
<p1>Your Profile</p1>
<section class="col col-sm-1" style="padding:15px;float: right;"><br><button class="btn btn-danger btn-lg" id="myBtn"><span class="glyphicon glyphicon-pencil"></span></button></section>
</header>
<div class="row">
            <section class="col col-sm-4" style="padding:30px";>
            <h1><?php echo $first_name.' '.$last_name; ?></h1>
                  <p><strong>Email id: </strong><?php if(!empty($email_id)){echo $email_id;} else{ echo ' ';} ?></p>
                  <p><strong>Contact: </strong><?php if(!empty($contact)){echo $contact;} else{ echo ' ';} ?></p>
                  <p><strong>Department: </strong><?php if(!empty($department)){echo $department;} else{ echo ' ';} ?></p>
                  <p><strong>Year: </strong><?php if(!empty($year)){echo $year;} else{ echo ' ';} ?></p>
            </section>
            <section class="col col-sm-8"></section>
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
      	<input type="text" name="firstname" value="<?php echo $first_name; ?>" maxlength=40 class="form-control" required>
        </div>
        </div>
        <div class="form-group">
      	<label class="control-label col-sm-2" for="lastname" style="padding: 10px;";>Lastname:</label>
        <div class="col-sm-8">
      	<input type="text" name="lastname" value="<?php echo $last_name; ?>" maxlength=40 class="form-control" required>
        </div>
        </div>
        <div class="form-group">
      	<label class="control-label col-sm-2" for="email_id" style="padding: 10px;";>Email:</label>
        <div class="col-sm-8">
      	<input type="text" name="email_id" value="<?php if(!empty($email_id)){echo $email_id;} else{ echo ' ';} ?>" class="form-control" required>
        </div>
        </div>
        <div class="form-group">
      	<label class="control-label col-sm-2" for="contact" style="padding: 10px;";>Contact:</label>
        <div class="col-sm-8">
      	<input type="text" name="contact" value="<?php if(!empty($contact)){echo $contact;} else{ echo ' ';} ?>" maxlength=11 class="form-control" required>
        </div>
        </div>
        <div class="form-group">
      	<label class="control-label col-sm-2" for="dept" style="padding: 10px;";>Department:</label>
        <div class="col-sm-8">
      	<input type="text" name="department" value="<?php if(!empty($department)){echo $department;} else{ echo ' ';} ?>" maxlength=10 class="form-control" required>
        </div>
        </div>
        <div class="form-group">
      	<label class="control-label col-sm-2" for="year" style="padding: 10px;";>Year:</label>
        <div class="col-sm-8">
      	<input type="text" name="year" value="<?php if(!empty($year)){echo $year;} else{ echo ' ';} ?>" class="form-control" required>
        </div>
      	</div>
        <div class="form-group">
      	<strong>About: </strong><br>
      	<textarea name="about" rows=6 cols=30><?php if(!empty($about)){echo $about;} else{ echo ' ';} ?></textarea>
        </div>
        <div class="form-group">
      	<label class="control-label col-sm-2" for="intermediate" style="padding: 10px;";>Intermediate:</label>
        <div class="col-sm-8">
      	<input type="text" name="intermediate" value="<?php if(!empty($intermediate)){echo $intermediate;} else{ echo ' ';} ?>" class="form-control">
        </div>
      	</div>
        <div class="form-group">
      	<label class="control-label col-sm-2" for="college" style="padding: 10px;";>Graduation:</label>
        <div class="col-sm-8">
      	<input type="text" name="college" value="<?php if(!empty($college)){echo $college;} else{ echo ' ';} ?>" class="form-control">
        </div>
      	</div>
        <div class="form-group">
      	<label class="control-label col-sm-2" for="address" style="padding: 10px;";>Address:</label>
        <div class="col-sm-8">
      	<input type="text" name="address" value="<?php if(!empty($address)){echo $address;} else{ echo ' ';} ?>" class="form-control">
        </div>
        </div>
        <div class="form-group">
      	<strong>Gender:</strong>
      	<input type="text" name="gender" value="<?php if(!empty($gender)){echo $gender;} else{ echo ' ';} ?>">
      	<strong>Date of Birth:</strong>
      	<input type="date" name="date_of_birth" value="<?php if(!empty($date_of_birth)){echo $date_of_birth;} else{ echo ' ';} ?>">
      	<strong>Year of Passing:</strong>
      	<input type="text" name="year_of_passing" value="<?php if(!empty($year_of_passing)){echo $year_of_passing;} else{ echo ' ';} ?>">
        </div>
      	<br><br>
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
</script>

</div>
<hr>
<div class="row">
            <section class="col col-sm-4" style="padding:30px;">
              <h2 style="color: lightblue";>ABOUT ME</h2>
            </section>
            <section class="col col-sm-8" style="padding:30px 30px";>
              <p><?php if(!empty($about)){echo $about;} else{ echo ' ';} ?></p>    
          </section>
</div>
<hr>
<div class="row">
            <section class="col col-sm-4" style="padding:30px;">
              <h2 style="color: lightblue";>EDUCATION</h2>
            </section>
            <section class="col col-sm-8" style="padding:30px 30px";>
              <h3>Intermediate:</h3>
              <p><?php if(!empty($intermediate)){echo $intermediate;} else{ echo ' ';} ?></p>
              <h3>Graduation:</h3>
              <p><?php if(!empty($college)){echo $college;} else{ echo ' ';} ?></p>
          </section>
</div>
<hr>
<div class="row">
            <section class="col col-sm-4" style="padding:30px;">
              <h2 style="color: lightblue";>OTHER DETAILS</h2>
            </section>
            <section class="col col-sm-8" style="padding:30px 30px";>
              <h3>Address: </h3>
              <p><?php if(!empty($address)){echo $address;} else{ echo ' ';} ?></p>
              <h3>Gender: </h3>
              <p><?php if(!empty($gender)){echo $gender;} else{ echo ' ';} ?></p>
              <h3>Date of Birth: </h3>
              <p><?php if(!empty($date_of_birth)){echo $date_of_birth;} else{ echo 'No Data.';} ?></p>
              <h3>Year of Passing: </h3>
              <p><?php if(!empty($year_of_passing)){echo $year_of_passing;} else{ echo ' ';} ?></p>
          </section>
</div>
</div>
<footer>
<p>&copy Copyright  <span style="color:lightblue";>Student Database</span>  :  VSSUT, Burla</p>
</footer>
</body>
</html>


