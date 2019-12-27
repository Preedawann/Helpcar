<!DOCTYPE html>
<html>
<head>
	<title>Garage in Hatyai</title>
	<meta charset="UTF-8">

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="js/bar.js"></script>
	<script type="text/javascript" src="js/googlemap.js"></script>
	<style type="text/css">
		body,h2,h3,h4,h5,h6 {
		font-family: "Raleway", sans-serif
		}
		h1 {
		font-family: "Allerta Stencil", Sans-serif;
		}
		.container {
			height: 450px;
		}

	</style>
	<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-dark-grey w3-animate-right w3-top w3-text-white w3-large" style="z-index:3;width:250px;font-weight:bold;display:none;right:0;" id="mySidebar">
  <a href="javascript:void()" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-32">X</a> 
  <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16" style="font-size:75%">HOME</a> 
  <a href="index.php#about" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16" style="font-size:75%">ABOUT</a> 
  <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-bar-item w3-button w3-center w3-padding-16" style="font-size:75%">  
    SERVICE <i class="fa fa-caret-down"></i>
  </a>
      <div id="demoAcc" class="w3-hide">
      
      <a href="#" class="w3-bar-item w3-button w3-center w3-padding-12" style="font-size:75%">the Garage</a>
    </div>
    <a href="index.php#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16" style="font-size:75%">CONTACT</a> 
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-white w3-large w3-padding-12">
  <span class="w3-left w3-padding"><img src="image/logo.png" style="width:13%"></span>
  <a href="javascript:void(0)" class="w3-right w3-button w3-white" onclick="w3_open()">☰</a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
</head>

<body >
<br/><br/>
	<!--show map-->
	<div class="container w3-center">
		<h2 class="w3-center"><span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">THE GARAGE IN HATYAI</span></h2>
		<br/>
		<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1loKgpHvoPH8GvhtMZtitE4Zuz2N5asPP" width="1000px" height="500px" ></iframe>
		
	</div>
	<!-- end map-->


</body>
</html>