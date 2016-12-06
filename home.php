<html>

<title>
<?php
include("title.php")
?>
</title>

<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="icon" href="MissionDayLogoSplash.png" type="image/gif" sizes="16x16">
<link rel="stylesheet" type="text/css" href="homecss.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>

body  {
    background-color: #e3e7f0;
	height:auto;
	width:1200px;
	margin-left:75px;
	background-image: url("Ingress badges-black.jpg");
}

.content
{
	height:auto;
	margin-left:0px;
	margin-bottom:0px;
	width:1200px;
	background-color: #FFFFFF;
}

.about{
	margin-left:50px;
	margin-right:50px;
	font-family: Times New Roman;
	line-height: 180%;
	font-size:135%;
	text-align: left;
	color:#353c47;
}

.btnhome {
    background-color: #4CAF50;
    border: none;
    color: white;
    height:54px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
	margin-left:200px;
	width:800px;
}

.btnhome:hover{
    background-color: #002147;
	color:white;
}

img.opacity {
    opacity: 0.7;
    filter: alpha(opacity=50); /* For IE8 and earlier */

}

img.opacity:hover {
    opacity: 1.0;
    filter: alpha(opacity=100); /* For IE8 and earlier */
}

table.pictable{
    border: 0px solid black;
    border-collapse: collapse;
    text-align:center;
    margin-left:50px;
	float:center;
}

</style>

<?php
include("backtop.php")
?>

</head>

<body>
<div class="content">

<div id="container">

<?php
include("header.php")
?>

<?php
include("navigation.php")
?>

<!-- End Of The Top Part Of The Page -->
		
<center>
 <div class="w3-content w3-section" style="max-width:1200px">
  <a href="se.php"><img class="mySlides" src="photo388216966150728980.jpg" width="1200px" height="450px"></a>
  <a href="csec.php"><img class="mySlides" src="photo339757601769237301.jpg" width="1200px" height="450px"></a>
  <a href="cn.php"><img class="mySlides" src="photo388216966150729011.jpg" width="1200px" height="450px"></a>
</div>
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var
     x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
<br>

<p class="about">

Agents, we want to discover Galle, Sri Lanka on Saturday Dec 17, 2016. In collaboration with the City of Galle we will provide you high quality missions to explore the city on foot together. Sign up to receive more information. <br><br>

You can get further details from this Apply Now Page.
<br>
<li><a href="http://events.ingress.com/MissionDay/Galle" class="btnhome" target="_blank">Apply Now</a></li>
<br><br><br><br>
</p> <!-- End Of The About Class -->

<table style="width:100%;font-size:200%;font-family:Times New Roman;" class="pictable">

  <tr>
    <td>T Shirt - $ 5.50 | Rs 650<br><a href="se.php"><img src="photo776291880096868514.jpg" alt="SE" width="300px" height="200px" class="opacity"></a></td>
    <td>Pin - $ 5.50 | Rs 650<br><a href="csec.php"><img src="photo339757601769237303.jpg" alt="CSec" width="300px" height="200px" class="opacity"></a></td>
	<td>Pin - $ 5.50 | Rs 650<br><a href="csec.php"><img src="photo339757601769237303.jpg" alt="CSec" width="300px" height="200px" class="opacity"></a></td>
  </tr>
  </table>
<table style="width:100%;font-size:200%;font-family:Times New Roman;margin-top:50px" class="pictable">
  <tr>
    <td>Badge - $ 5.50 | Rs 650<br><a href="cn.php"><img src="photo629576750748249532.jpg" alt="CN" width="300px" height="200px" class="opacity"></a></td>
    <td>Sticker - $ 5.50 | Rs 650<br><a href="csci.php"><img src="Shaz N 2.2.jpeg" alt="CSci" width="300px" height="200px" class="opacity"></a></td>
	<td>Pin - $ 5.50 | Rs 650<br><a href="csec.php"><img src="photo339757601769237303.jpg" alt="CSec" width="300px" height="200px" class="opacity"></a></td>
  </tr>

</table> <!-- End Of The PicTable -->

<br>
<!-- Below Part Of The Page -->

<!-- <div id ="left"></div>
<div id ="right"></div>
<div id ="center"></div> -->

<?php
include("footer.php")
?>

</div> <!-- End Of ID Container CSS / White Background -->

</div> <!--End Of Body Class Content CSS-->
</body>
</html>
