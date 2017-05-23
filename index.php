<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By Chandan Prusty - No Copyright -->
  <title>Student Database</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <style>
  .jumbotron {
      background:url("images/back5.jpg");  
	  color:#DEE6EE;
	  padding:100px 25px;
  }
   .bg-grey {
      background-color: #f6f6f6;
  }
  .container-fluid {
	  padding:30px 50px;
  }
  .logo {
	  color:#C94B4B;
      font-size: 200px;
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
  }
  /* Full-width input fields */
input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
}

.button {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 320px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.btn {
  border-radius: 4px;
  background: #0084ff;
  color: #fff;
  font-size: 13px;
  padding: 6px 8px;
  display:inline-block;
  font-family: helvetica, arial, sans-serifnn;
  white-space: nowrap;
  z-index: 99999;
  position: fixed;
  float: right;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top (Important)*/
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
    color:#000;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)}
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
.logo-small {
    color: #C94B4B;
    font-size: 50px;
}
p1 {
	color: #A0522D;
	font-size:40px;
}
h1#h01 {
	font-size:100px;
}
.carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #C94B4B;
}

.carousel-indicators li {
    border-color: #C94B4B;
}

.carousel-indicators li.active {
    background-color: #C94B4B;
}

.item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
}

.item span {
    font-style: normal;
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
    color: #62A4B4 !important;
}

.navbar-nav li a:hover, .navbar-nav li.active a {
    color: #000 !important;
}

.navbar-default .navbar-toggle {
    border-color: transparent;
    color: #C94B4B !important;
}
footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #C94B4B;
}
body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
}

.jumbotron {
    font-family: Montserrat, sans-serif;
}

.navbar {
    font-family: Montserrat, sans-serif;
}
h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
}

h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
}
.slideanim {visibility:hidden;}
.slide {
    /* The name of the animation */
    animation-name: slide;
    -webkit-animation-name: slide; 
    /* The duration of the animation */
    animation-duration: 1s; 
    -webkit-animation-duration: 1s;
    /* Make the element visible */
    visibility: visible; 
}

/* Go from 0% to 100% opacity (see-through) and specify the percentage from when to slide in the element along the Y-axis */
@keyframes slide {
    0% {
        opacity: 0;
        -webkit-transform: translateY(70%);
    } 
    100% {
        opacity: 1;
        -webkit-transform: translateY(0%);
    } 
}
@-webkit-keyframes slide {
    0% {
        opacity: 0;
        -webkit-transform: translateY(70%);
    } 
    100% {
        opacity: 1;
        -webkit-transform: translateY(0%);
    }
}
</style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
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
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li><a href="html/register.php"><span class="glyphicon glyphicon-user" style="color:#fff";></span> REGISTER</a></li>
        <li></li>
      </ul>
    </div>
  </div>
</nav>
<div class="messenger">
  <button type="button" class="btn" onclick="window.location.href='https://m.me/justcsethings'">Message Us</button>
</div>
<div class="jumbotron text-center">
  <h1 id="h01">STUDENT DATABASE</h1>
  <p1 style="color: #C5D5E6;">Online Archive For Students</p1>
  <div>
  <br><br>
  <form action="html/login.inc.php" method="POST">
  <button class="button"><span>Login</span></button>
  </form>
</div>
</div>
<!-- Container (About Section) -->
<div class="container-fluid" id="about" style="text-align: center">
  <div class="row">
    <div class="col-sm-12">
      <h2>ABOUT US</h2>
      <h4>AN INNOVATIVE DESIGN</h4>
      <p>Our student information system database allows you to manage students data in an intuitive format that ensures data integrity, accurate reporting and quick access to information. Stored data is shared across all modules and other programs at your school. As a result, data is never entered twice and everyone at your school can always access the most up-to-date information.</p>
    </div>
  </div>
</div>
    <div class="container-fluid text-center bg-grey" id="lessons">
    <h2>LESSONS TO REMEMBER</h2>
<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
    <h4>Education is the most powerful weapon which you can use to change the world.<br><span style="font-style:normal;">-Nelson Mandella</span></h4>
    </div>
    <div class="item">
      <h4>It is the mark of an educated mind to be able to entertain a thought without accepting it.<br><span style="font-style:normal;">-Aristotle</span></h4>
    </div>
    <div class="item">
      <h4>A teacher-student interaction cause ideas exchange.<br><span style="font-style:normal;">-Chandler Bing</span></h4>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<hr>
<div class="container-fluid bg-grey" id="contact">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-lg-3">
      <p><span class="glyphicon glyphicon-user"></span> Chandan Prusty</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91 9658944313</p>
      <p><span class="glyphicon glyphicon-envelope"></span> cprusty58@gmail.com</p> 
    </div>
    <div class="col-lg-3">
      <p><span class="glyphicon glyphicon-user"></span> Chinmoy Pradhan</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91 9658944313</p>
      <p><span class="glyphicon glyphicon-envelope"></span> chinmoy.prahdan4@gmail.com</p> 
    </div>
    <div class="col-lg-3">
      <p><span class="glyphicon glyphicon-user"></span> Sibasish Jena</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91 9040388803</p>
      <p><span class="glyphicon glyphicon-envelope"></span> sibasish.jena@gmail.com</p> 
    </div>
    <div class="col-lg-3">
      <p><span class="glyphicon glyphicon-user"></span> Amit Singh</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91 9658944313</p>
      <p><span class="glyphicon glyphicon-envelope"></span> amitsingh@gmail.com</p> 
    </div>
  </div>
</div>
<footer class="container-fluid text-center" id="footer">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>&copy Copyright Student Database VSSUT. Burla</p> 
</footer>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

   // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
      });
    } // End if
  });
});
//FOR SCROLLING TO TOP EFFECT..
$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});
</script>
</body>
</html>

