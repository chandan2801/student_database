<?php
  require 'connect.inc.php';
  require 'core.inc1.php';
    if(isset($_POST['usernamefac']) && isset($_POST['passwordfac']))
    {
    $usernamefac=$_POST['usernamefac'];
    $passwordfac=$_POST['passwordfac'];
    $passwordfac_hash=md5($passwordfac);
    if(!empty($usernamefac) && !empty($passwordfac))
    {
      $query="SELECT user_id from faculty where username='".mysqli_real_escape_string($handle,$usernamefac)."' and password='".mysqli_real_escape_string($handle,$passwordfac_hash)."'";
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
        header('Location: login.inc1.php');  //then relocated login.inc.php
      }
    }
    else
    {
      echo '<script type="text/javascript">alert("Username or password not filled properly.")</script>';
    }
  }
?>