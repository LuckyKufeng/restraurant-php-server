<?php
session_start();
?>
<!DOCTYPE html>
<html lang = "en" >
<head>

<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>

<link href="bigdata.css" rel="stylesheet">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

<meta name="description" content="Flat UI Kit Free is a Twitter Bootstrap Framework design and Theme, this responsive framework includes a PSD and HTML version."/>

<meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">
<!-- Loading Bootstrap -->
<link href="dist/css/vendor/bootstrap.min.css" rel="stylesheet">

<!-- Loading Flat UI -->
<link href="dist/css/flat-ui.min.css" rel="stylesheet">
<link href="docs/assets/css/demo.css" rel="stylesheet">

<link rel="shortcut icon" href="img/favicon.ico">

<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
      #map_canvas {
		width:400px;
		height: 200px;; 
		position:absolute;
		left:28%;
		top:500px;
	  }
 
    </style>
    <script type="text/javascript"
      src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCG473lGtn5JHpXK0Ds3teV2yozYTJR080&sensor=SET_TO_TRUE_OR_FALSE">
    </script>
    <script type="text/javascript">
	
		//google map area
      function initialize() {
		var myLocation = new google.maps.LatLng(42.3395230,-71.0879000);
        var mapOptions = {
          center: myLocation,
          zoom: 14,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
		
        var map = new google.maps.Map(document.getElementById("map_canvas"),
            mapOptions);
		
		var marker = new google.maps.Marker({
      	position: myLocation,
      	map: map,
      	title: 'Find Us Here!'
  });
      }
    </script>

<script>
	$(document).ready(function(){
	
		$("#leftnav").click(function(){
			$("#leftnav").hide();
			$("#secondicon").animate({left:'20px'});
			$("#firsticon").animate({left:'20px'});
			$("#thirdicon").animate({left:'20px'});
			$("#close").animate({left:'90px'});
		});
	
		$("#close").click(function(){
			$("#leftnav").show();
			$("#secondicon").animate({left:'-100px'});
			$("#firsticon").animate({left:'-100px'});
			$("#thirdicon").animate({left:'-100px'});
			$("#close").animate({left:'-100px'});
		});//left nav slider
		
		$("#imgclick1").mouseover(function(){
		$("#cover1").slideUp(1000);
		$(this).preventDefault();
		});
		
		$("#imgclick2").mouseover(function(){
		$("#cover2").slideUp(1000);
		$(this).preventDefault();
		});
		
		$("#imgclick3").mouseover(function(){
		$("#cover3").slideUp(1000);
		$(this).preventDefault();
		});
		
		$("#imgclick1").mouseout(function(){
		$("#cover1").slideDown(1000);
		$(this).preventDefault();
		});
		
		$("#imgclick2").mouseout(function(){
		$("#cover2").slideDown(1000);
		$(this).preventDefault();
		});
		
		$("#imgclick3").mouseout(function(){
		$("#cover3").slideDown(1000);
		$(this).preventDefault();
		});//img slider up and down
		
		
		
		
		$("#firsticon").mouseover(function(){
			$("#firsticon").css("width","90px");
			$("#firsticon").css("height","90px");
		});
		$("#firsticon").mouseout(function(){
			$("#firsticon").css("width","64px");
			$("#firsticon").css("height","64px");
		});
		
		$("#secondicon").mouseover(function(){
			$("#secondicon").css("width","90px");
			$("#secondicon").css("height","90px");
		});
		$("#secondicon").mouseout(function(){
			$("#secondicon").css("width","64px");
			$("#secondicon").css("height","64px");
		});
		
		$("#thirdicon").mouseover(function(){
			$("#thirdicon").css("width","90px");
			$("#thirdicon").css("height","90px");
		});
		$("#thirdicon").mouseout(function(){
			$("#thirdicon").css("width","64px");
			$("#thirdicon").css("height","64px");
		});
		
		// window scroll method
		$(window).scroll(function(){
	
		if ($("body").scrollTop() > 500){
			$("#sentence").fadeIn("4000");
		}
        if ($("body").scrollTop() > 700){
            $("#imgclick1").delay(100).fadeIn("2000");
			$("#imgclick2").delay(500).fadeIn("2000");
			$("#imgclick3").delay(900).fadeIn("2000");
        }
		if($("body").scrollTop() > 1600){
			$("#middletitle").fadeIn("4000");
			$("#backtotop").fadeIn("4000");
		}
		if($("body").scrollTop() < 1600){
			$("#backtotop").css("display","none");
		}
		if ($("body").scrollTop() > 2900){
			$("#contactme").fadeIn("4000");
		}
		
		});
	});
	
</script>

</head>
<body onload="initialize()">
<div id="username"> Welcome, <?php echo $_SESSION['password'];?></div>
<img id="close" src="close-icon.png" name="top">
<img id="leftnav" src="2.png">
<a href="#databody"><img id="firsticon" src="1.png"></a>
<a href="#middlebody"><img id="secondicon" src="3.png"></a>
<a href="#formcontainer"><img id="thirdicon" src="4.png"></a>

<div id="toppanel" class="row">
	<div class="collapse navbar-collapse">
		<ul class="nav navbar-nav navbar-left">
			<li id="li1"><a id="a1" href="#top"><span>big data</span></a></li>
			<li id="li1"><a id="a1" href="#top"><span>what</span></a></li>
			<li id="li1"><a id="a1" href="#databody"><span>why</span></a></li>
			<li id="li1"><a id="a1" href="#middlebody"><span>how</span></a></li>
			<li id="li1"><a id="a1" href="#formcontainer"><span>contact</span></a></li>
		</ul>
	</div>
</div>
	
<div id="topwordarea">
	<div id="topword">big data</div>
	<div id="secondword"><span class="pb">A vast quantity of</span> <span class="pred">UNSTRUCTURED</span><span class="pb"> data<br>which we now have the ability to process in</span><span class="pred"> REAL-TIME.</span></div>
</div>

<div id="databody" name="databody">
	<div id="sentence"><span class="pred">why</span> <span class="pb">is it becoming <br>important</span> <span class="pred" color="red">now?</span></div>
	<div id="ulcontainer">
		<ul>
			<li><img id="imgclick1" src="1-1.png"></li>
			<li><img id="imgclick2" src="1-2.png"></li>
			<li><img id="imgclick3" src="1-3.png"></li>
		</ul>
	</div>
	
	<div id="ulcontainer">
		<ul>
			<li><p id="p1">There are 4.6 billion mobile-phone subscriptions worldwide and there are between 1 and 2 billion people accessing the internet.</p></li>
			<li><p id="p1">The NASA Center for Climate Simulation stores 32 petabytes of climate observations and simulations on the Discover supercomputing cluster.</p></li>
			<li><p id="p1">Facebook has 1.06 billion monthly active users with 30 billion pieces of content shared on Facebook every month.There are roughly 175 million tweets every day, from more than 465 million accounts.</p></li>
		</ul>
	</div>
	<div id="cover1"></div>
	<div id="cover2"></div>
	<div id="cover3"></div>
</div>

<div id="middlebody" name="middlebody">
	<div id="middletitle"><span class="pb">How are</span> <span class="pred">people</span> <span class="pb" color="red">using it?</span></div>
	<form name="myform" method="post">
	<div class="has-error"><input name="title" type="text" class="form-control has-error" placeholder="Search"></div>
	<span><button class="btn btn-danger" name="search" value="search"><b>Search</b></button></span>
	</form>
<?php
	$db = new mysqli("localhost","webdesign","webdesign","webfinal");// database connection
	if(isset($_POST['search'])){
		$titlename = $_POST['title'];
		$query = "select * from mycase where casename like '%$titlename%'";
		$result = $db ->query($query);
	}
	else{
		$query1 = "select * from mycase;";
		$result = $db ->query($query1);	
	}
		$i = 0;
	while($row = $result->fetch_assoc()){//result set
	if($i % 4 === 0){
	?>	
	<ul>
	<?php
		}
	?>
	<li><img src="3-<?php echo $row['id'];?>.png"><span><?php echo $row['casename']?></span></li>
	<?php
		$i++;
		if($i % 4 === 0){
	?>	
	</ul>
	<?php
			}//end of if, populate images. 4 images a line
		}// end of the while loop
	?>
</div>
<?php
	//registration form 
	if(isset($_POST["submit"])){
		$name = $_POST["name"];
		$phone = $_POST["phone"];
		$email = $_POST["email"];
		$comment = $_POST["comment"];
		$query2 = "insert into contact()values('$name','$phone','$email','$comment');";
		$db -> query($query2);
		$db -> close();
	}
?>
<div id="formcontainer" name="formcontainer">
		<div id="contactme"><span class="pred">contact </span><span class="pb">me</span></div>
		<form class="form-group" method="post">
			<div id="title"><h3>Your Suggestions are valuable</h3></div>
			<div class = "row">
				<img src="formIcon\Finder-1-icon.png">
				<div class="has-error">
					<input type="text" placeholder="Name" class="form-control" name="name">
				</div>
			</div>

			<div class = "row">
				<img src="formIcon\Mail-4-icon.png">
				<div class="has-error">
					<input type="text" placeholder="123-123-1234" pattern="\d{3}[\-]\d{3}[\-]\d{4}" class="form-control" name = "phone">
				</div>
			</div>

			<div class = "row">
				<img src="formIcon\Mail-icon.png">
				<div class="has-error">
					<input type="email" placeholder="E-mail" class="form-control" name="email" >
				</div>
			</div>

			<div class = "row">
				<img src="formIcon\Customize-ControlPanel-icon.png">
				<div class="has-error">
					<input type="text" placeholder="Comment" class="form-control" name="comment">
				</div>
			</div>
			<button type="submit" id="submitbutton" class="btn btn-danger" name="submit" value="submit"><b>Submit</b></button>
		</form>
		<div id="map_canvas"></div>
		<div id="address"><p>360 Huntington Avenue<br> Boston<br> MA 02115</p></div>
</div>


<a href="#top"><img id="backtotop" src="upload-icon.png"></a>
</body>
</html>