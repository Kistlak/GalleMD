<html>

<title>
<?php
include("title.php")
?>
</title>

<head>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="icon" href="SLSOC.jpg" type="image/gif" sizes="16x16">
<link rel="stylesheet" type="text/css" href="homecss.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>

body  {
    background-color: #e3e7f0;
	height:auto;
	width:1200px;
	margin-left:75px;
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

p span { 
   color: white; 
   line-height: 300%; 
   background: rgb(0, 0, 0); /* fallback color */
   background: rgba(0, 0, 0, 0.5);
   padding: 8px; 
}	

input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

textarea {
    width: 100%;
	height:150px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 800px;
    background-color: #002147;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	font-size: 15px;
	font-weight: bold;
}

input[type=submit]:hover {
    background-color: #8B008B;
}
	
.form{
	text-align:left;
	margin-left:50px;
	margin-right:50px;
}

.req{
	color:red;
}

table.cnt {
    border-collapse: collapse;
    vertical-align: text-top;
	line-height: 180%;
	font-family: Times New Roman;
	font-size: 100%;
	margin-left:50px;
	margin-bottom:20px;
}
th, td {
    padding: 5px;
    text-align: left;
}

h4{
	font-weight: bold;
}	

a.tel{
	color:blue;
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
		
<p class="about">

<?php

error_reporting(E_ALL ^ E_DEPRECATED);

// 1. Create Database Connection
$connection = mysql_connect("localhost","root","");
if(!$connection){
	die("Error Connection: ".mysql_error());

}

// 2. Select Database
mysql_select_db("a3075631_slsoc",$connection);

// 3. Perform database query
$sql = "INSERT INTO contact (name,email,num,msg) VALUES
('$_POST[name]','$_POST[email]','$_POST[num]','$_POST[msg]')";

// 4.Use Returned Data
if(!mysql_query($sql,$connection)){
	die("Error Query: ".mysql_error());
}
echo " ".$_POST["name"]." , We Have Got Your Message.<br><br>
We will reply you as soon as possible to your email which you have filled in this form.<br><br>
Thank You !!<br><br>";

if (isset($_REQUEST['email']))  {

  //Email information
  $admin_email = "kistlakall@gmail.com";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['name'];
  $comment = $_REQUEST['msg'];

  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  }


// 5. Close Connection
mysql_close($connection);

?>
</P> <!-- End Of The P Class -->

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
