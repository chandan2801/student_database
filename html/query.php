<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Search Database</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        .search-background img {
    width: 100%;
    opacity: 0.7;
}
.well-searchbox {
  min-height: 20px;
  min-width: 400px;
  padding: 19px;
  position: absolute;
  z-index: 80;
  top: 90px;
  right: 100px;
  background: rgba(0, 0, 0, 0.6);
  margin-bottom: 20px;
  border: 1px solid #e3e3e3;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
}

.well-searchbox label {
    color: #fff;
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
    <script src="../jquery-1.11.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
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
    <div class="search-background">
            <img src="../images/quer.jpeg">
        </div>
            <div class="well-searchbox">
                <form class="form-horizontal" action="showdb.php" role="form" method="POST">
                    <div class="form-group">
                        <label class="col-md-4 control-label">First Name</label>
                        <div class="col-md-8">
                            <input type="text" name="firstname" class="form-control" placeholder="First Name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Last Name</label>
                        <div class="col-md-8">
                            <input type="text" name="lastname" class="form-control" placeholder="Last Name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">CGPA</label>
                        <div class="col-md-8">
                            <input type="text" name="cgpa" class="form-control" placeholder="CGPA">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Department</label>
                        <div class="col-md-8">
                            <input type="text" name="dept" class="form-control" placeholder="Department">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Semester</label>
                        <div class="col-md-8">
                            <input type="text" name="sem" class="form-control" placeholder="Semester">
                        </div>
                    </div>
                    <div class="col-sm-offset-4 col-sm-5">
                        <button type="submit" class="btn btn-success">Search</button>
                    </div>
                </form>
                <form action="showdball.php" method="POST">
                    <div class="col-sm-offset-3 col-sm-5">
                        </br><button type="submit" class="btn btn-success" style="margin-left:20px">Search All</button>
                    </div>
                </form>
            </div>
            
  
<script type="text/javascript">

</script>
</body>
</html>
