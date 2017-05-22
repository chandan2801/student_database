<?php
  require 'connect.inc.php';
  if(isset($_POST['username']) && isset($_POST['password']))
  {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $password_hash=md5($password);
    if(!empty($username) && !empty($password))
    {
      $query="SELECT user_id from student where username='".mysqli_real_escape_string($handle,$username)."' and password='".mysqli_real_escape_string($handle,$password_hash)."'";
      $query_run=mysqli_query($handle,$query);
      $query_num_rows=mysqli_num_rows($query_run);
      if($query_num_rows==0)
      {
        echo '<script type="text/javascript">alert("Invalid Username/Password Combination.")</script>';
      }
      else if($query_num_rows==1)
      {
        while($query_row=mysqli_fetch_assoc($query_run))
        {
          echo $user_id=$query_row['user_id'];    //we have grabbed the user id.
        }
        $_SESSION['id']=$user_id;    //started the session with the particular user id..
        header('Location: login.inc.php');  //then relocated login.inc.php
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="robots" content="noindex">

    <title>login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="g0ZNM_data/bootstrap.css" rel="stylesheet" id="bootstrap-css">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/a.js"></script>
    <style type="text/css">
    body {
    padding-top: 90px;
}
        body,html{
             height: 100%;
            background:url(https://i.ytimg.com/vi/4kfXjatgeEU/maxresdefault.jpg);
            background-size: cover;
            	background-repeat: no-repeat;
        }
.panel-login {
	border-color: #ccc;
	-webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
}
.panel-login>.panel-heading {
	color: #00415d;
	background-color: #fff;
	border-color: #fff;
	text-align:center;
}
.panel-login>.panel-heading a{
	text-decoration: none;
	color: #666;
	font-weight: bold;
	font-size: 15px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login>.panel-heading a.active{
	color: #029f5b;
	font-size: 18px;
}
.panel-login>.panel-heading hr{
	margin-top: 10px;
	margin-bottom: 0px;
	clear: both;
	border: 0;
	height: 1px;
	background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
	background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
}
.panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
	height: 45px;
	border: 1px solid #ddd;
	font-size: 16px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login input:hover,
.panel-login input:focus {
	outline:none;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	border-color: #ccc;
}
.btn-login {
	background-color: #59B2E0;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: #59B2E6;
}
.btn-login:hover,
.btn-login:focus {
	color: #fff;
	background-color: #53A3CD;
	border-color: #53A3CD;
}
.forgot-password {
	text-decoration: underline;
	color: #888;
}
.forgot-password:hover,
.forgot-password:focus {
	text-decoration: underline;
	color: #666;
}

.btn-register {
	background-color: #1CB94E;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: #1CB94A;
}
.btn-register:hover,
.btn-register:focus {
	color: #fff;
	background-color: #1CA347;
	border-color: #1CA347;
}

    </style>
    <script src="jquery-1.js"></script>
    <script src="g0ZNM_data/bootstrap.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'http://bootsnipp.com');
        });
    </script>
</head>
<body>
	<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Login as student</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Login as faculty</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form1" action="<?php echo $current_file ?>" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input name="username" id="username" tabindex="1" class="form-control" placeholder="Username" type="text">
									</div>
									<div class="form-group">
										<input name="password" id="password" tabindex="2" class="form-control" placeholder="Password" type="password">
									</div>
									<div class="form-group text-center">
										<input tabindex="3" class="" name="remember" id="remember" type="checkbox">
										<label for="remember"> Remember Me</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In" type="submit">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
											</div>
										</div>
									</div>
								</form>
								<form id="login-form2" action="loginfac.php" method="post" role="form" style="display: none;">
									<div class="form-group">
										<input name="usernamefac" id="username" tabindex="1" class="form-control" placeholder="Username" type="text">
									</div>
									<div class="form-group">
										<input name="passwordfac" id="password" tabindex="2" class="form-control" placeholder="Password" type="password">
									</div>
									<div class="form-group text-center">
										<input tabindex="3" class="" name="remember" id="remember" type="checkbox">
										<label for="remember"> Remember Me</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In" type="submit">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
                                                
											</div>
                                            
										</div>
									</div>
                                    
								</form>
							</div>
						</div>
					</div>
                    <div class="row">
				        <div class="col-lg-12">
				            <div class="text-center">
                                
                                <a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">New user:Register here</a><br><br>
				            </div>
                                                
				        </div>
                                            
                    </div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
	$(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form1").delay(100).fadeIn(100);
 		$("#login-form2").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#login-form2").delay(100).fadeIn(100);
 		$("#login-form1").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});

	</script>


</body></html>