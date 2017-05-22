<?php
	include 'core.inc1.php';
	include 'connect.inc.php';
	$query="SELECT * FROM student";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Show Database</title>
<link rel="stylesheet" href="style.css" type="text/css" />

    <link rel="stylesheet" href="../css/normalize.css">

    
        <link rel="stylesheet" href="../css/style.css">
         <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
      <style>
        .button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
.navbar {
    margin-bottom: 0;
    background-color: transparent;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
}

.navbar li a, .navbar .navbar-brand {
    color: #C94B4B !important;
}

.navbar-nav li a:hover, .navbar-nav li.active a {
    color: #fff !important;
    background-color: #C94B4B !important;
}

.navbar-default .navbar-toggle {
    border-color: transparent;
    color: #C94B4B !important;
}
.navbar {
    font-family: Montserrat, sans-serif;
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
      <li><a href="login.inc1.php"> HOME</a></li>
      <li><a href="query.php">QUERY</a></li>
   <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> LOGOUT</a></li>
      </ul>
    </div>
  </div>
</nav>
<br><br><br><br>
<div class="container">
<center><h1>List of<span> Students</span></h1></center>
<div id="body">
 <table width="80%" border="1" class="responstable">
    <tr>
    </tr>
    <tr>
    <td><strong>Firstname</strong></td>
    <td><strong>LastName</strong></td>
    <td><strong>Email Id</strong></td>
    <td><strong>Contact</strong></td>
    <td><strong>Semester</strong></td>
    <td><strong>Department</strong></td>
    <td><strong>View</strong></td>
    </tr>
    <?php
         $sql=$query;
         $result_set=mysqli_query($handle,$sql);
         if(mysqli_num_rows($result_set)==0)
          {
            echo "NO RESULTS FOUND.";
          }
         while($row=@mysqli_fetch_array($result_set))
         {
            $username= $row['username'];
          ?>
                <tr>
                <td><?php echo $row['firstname'] ?></td>
                <td><?php echo $row['lastname'] ?></td>
                <td><?php echo $row['email_id'] ?></td>
                <td><?php echo $row['contact'] ?></td>
                <td><?php echo $row['sem'] ?></td>
                <td><?php echo $row['department'] ?></td>
                <form action="showprofile.php" method="POST">
                <input type="text" value="<?php echo $username; ?>" name="username" style="display: none;">
                <td><input type="submit" value="view profile"></td>
                </form>
                </tr>
                <?php
         }
                ?>
    </table>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js'></script>
</div>
</div>
</body>
</html>
