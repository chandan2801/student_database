<?php
	include 'connect.inc.php';
      include 'core.inc.php';
		if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email_id']) && isset($_POST['contact']) && isset($_POST['department']) && isset($_POST['sem']) && isset($_POST['about']) && isset($_POST['matriculation']) && isset($_POST['matyear']) && isset($_POST['matboard']) && isset($_POST['cgpapermat']) && isset($_POST['intermediate']) && isset($_POST['intyear']) && isset($_POST['intboard']) && isset($_POST['cgpaperint']) && isset($_POST['graduation']) && isset($_POST['gradyear']) && isset($_POST['gradboard']) && isset($_POST['cgpapergrad']) && isset($_POST['skill1']) && isset($_POST['skill2']) && isset($_POST['skill3']) && isset($_POST['ach1']) && isset($_POST['ach2']) && isset($_POST['ach3']) && isset($_POST['address']))
		{
			$first_name=$_POST['firstname'];
			$last_name=$_POST['lastname'];
			$email_id=$_POST['email_id'];
			$contact=$_POST['contact'];
			$department=$_POST['department'];
			$sem=$_POST['sem'];
                  $about=$_POST['about'];
                  $matriculation=$_POST['matriculation'];
                  $mat_year=$_POST['matyear'];
                  $mat_board=$_POST['matboard'];
                  $cgpapermat=$_POST['cgpapermat'];
                  $intermediate=$_POST['intermediate'];
                  $int_year=$_POST['intyear'];
                  $int_board=$_POST['intboard'];
                  $cgpaperint=$_POST['cgpaperint'];
                  $graduation=$_POST['graduation'];
                  $grad_year=$_POST['gradyear'];
                  $grad_board=$_POST['gradboard'];
                  $cgpapergrad=$_POST['cgpapergrad'];
                  $skill1=$_POST['skill1'];
                  $skill2=$_POST['skill2'];
                  $skill3=$_POST['skill3'];
                  $ach1=$_POST['ach1'];
                  $ach2=$_POST['ach2'];
                  $ach3=$_POST['ach3'];
                  $address=$_POST['address'];
                  $interest=$_POST['interest'];
			$query="UPDATE student SET firstname='$first_name', lastname='$last_name', email_id='$email_id', contact=$contact, department='$department', sem='$sem', about='$about', matriculation='$matriculation', mat_year='$mat_year', mat_board='$mat_board', cgpaper_mat='$cgpapermat', intermediate='$intermediate', int_year='$int_year', int_board='$int_board', cgpaper_int='$cgpaperint', graduation='$graduation', grad_year='$grad_year', grad_board='$grad_board', cgpaper_grad='$cgpapergrad', address='$address', skill1='$skill1', skill2='$skill2', skill3='$skill3', ach1='$ach1', ach2='$ach2', ach3='$ach3', interest='$interest' WHERE user_id='".$_SESSION['id']."'";
			if($query_run=mysqli_query($handle,$query))
                  {
			   header('Location: stprofile.php');
                  }
                  else
                  {
                        echo 'Unable to process.';
                  }
		}
?>