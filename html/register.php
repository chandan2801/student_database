<?php
  require 'core.inc.php';
  require 'connect.inc.php';
  require 'core.inc1.php';
if(!logged_in() || !logged_in1())
{
  if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_agn']) && isset($_POST['firstname']) && isset($_POST['lastname']))
  {
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password_hash=md5($password);
    $password_agn=$_POST['password_agn'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $profession=@$_POST['profession'];
    if(!empty($username) && !empty($email) && !empty($password) && !empty($password_agn) && !empty($firstname) && !empty($lastname) && !empty($profession))
    {
      if($password!=$password_agn)
      {
        echo '<script type="text/javascript">alert("Passwords Donot Match!")</script>';
      }
      else
      {
        if($profession=='Student')
        {
          $query="SELECT username from student where username='".$username."'";
          $query_run=mysqli_query($handle,$query);
          if(mysqli_num_rows($query_run)==1)
          {
            echo '<script type="text/javascript">alert("Username Already Exists.")</script>';
          }
          else
          {
            $query="INSERT INTO Student VALUES('','".mysqli_real_escape_string($handle,$firstname)."','".mysqli_real_escape_string($handle,$lastname)."','".mysqli_real_escape_string($handle,$username)."','".mysqli_real_escape_string($handle,$password_hash)."','".mysqli_real_escape_string($handle,$email)."','".mysqli_real_escape_string($handle,$profession)."','','','','','','','','','','','','','','','','','','','','','','','','')";   
            if($query_run=mysqli_query($handle,$query))
            {
              echo '<script type="text/javascript">alert("Successfully registered. Please login to continue.")</script>';
              header( "refresh:1;url=login.inc.php" );
            }
          }
        }
        else if($profession=='Faculty')
        {
          $query="SELECT username from faculty where username='".$username."'";
          $query_run=mysqli_query($handle,$query);
          if(mysqli_num_rows($query_run)==1)
          {
            echo '<script type="text/javascript">alert("Username Already Exists.")</script>';
          }
          else
          {
            $query="INSERT INTO faculty VALUES('','".mysqli_real_escape_string($handle,$firstname)."','".mysqli_real_escape_string($handle,$lastname)."','".mysqli_real_escape_string($handle,$username)."','".mysqli_real_escape_string($handle,$password_hash)."','".mysqli_real_escape_string($handle,$email)."','".mysqli_real_escape_string($handle,$profession)."','','')";   
            if($query_run=mysqli_query($handle,$query))
            {
              echo '<script type="text/javascript">alert("Successfully registered. Please login to continue.")</script>';
              header( "refresh:1;url=login.inc.php" );
            }
          } 
        }
      }
    }
    else
    {
      echo '<script type="text/javascript">alert("Please Fill All The Details.")</script>';
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Register</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        /* Credit to bootsnipp.com for the css for the color graph */
        body,html{
             height: 100%;
            background:url("../images/back1.jpg");
            background-size: cover;
              background-repeat: no-repeat;
        }

.colorgraph {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}
    </style>
    <script src="../js/jquery-1.11.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
    <form role="form" action="register.php" method="post">
      <h2>Sign Up</h2>
      <hr class="colorgraph">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
                        <input type="text" name="firstname" id="firstname" class="form-control input-lg" placeholder="First Name" tabindex="1">
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
            <input type="text" name="lastname" id="lastname" class="form-control input-lg" placeholder="Last Name" tabindex="2">
          </div>
        </div>
      </div>
      <div class="form-group">
        <input type="text" name="username" id="username" class="form-control input-lg" placeholder="User Name" tabindex="3">
      </div>
      <div class="form-group">
        <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
            <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
            <input type="password" name="password_agn" id="confirm-password" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
          </div>
        </div>
                     <div class="form-group" style="margin-left: 15px;">
                  <section>
            <label class="select">
              <select name="profession">
                <option value="0" selected disabled>Profession</option>
                <option value="Student">Student</option>
                <option value="Faculty">Faculty</option>
              </select>
              <i></i>
            </label>
          </section>
                  </div>
      </div>
      <hr class="colorgraph">
      <div class="row">
        <div class="col-xs-12 col-md-6"><input type="submit" name="register-submit" id="register-submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
        <div class="col-xs-12 col-md-6"><a href="login.inc.php" class="btn btn-success btn-block btn-lg">Login</a></div>
      </div>
    </form>
  </div>
</div>
<script type="text/javascript">
$(function () {
    $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i>');
            }
        }
        init();
    });
});
</script>
</body>
</html>
<?php
  }
  else if(logged_in() || logged_in1())
  {
    echo 'You\'re already registered and logged in. Go back to login page and logout to register another account.';
  }
?>