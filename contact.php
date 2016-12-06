<html>

<title>
<?php
include("title.php")
?>
</title>

<head>
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
		
<p><span>Contact Our Staff..<span class='spacer'></span><br />
<span class='spacer'></span>Staff can be contacted through phone, Skype or email. <span class='spacer'>
<br>If you have any questions, please send us a Email. For any other concerns, please Call us to contact someone who can help..</a></span></p>

<div class="form">
  <form action="contact.ok.php" method="POST">

<br><strong>
<label for="text">Your Name : <span class="req">&#42;</span></label>
<input type="text" class="form-control" name="name"  placeholder="" required="required"/>
<br/><br/>

<label for="text">Your Email : <span class="req">&#42;</span></label>
<input type="text" class="form-control" name="email"  placeholder="" required/>
<br/><br/>

<label for="text">Your Contact Number : <span class="req">&#42;</span></label>
<input type="text" class="form-control" name="num"  placeholder="" required/>
<br/><br/></strong>

<b><label for="text">Your Message : <span class="req">&#42;</span></label>
<textarea name="msg" placeholder="What do you want to know ?" required/></textarea>

<center><div class="container">
  <input type="submit" class="btn btn-info btn-lg" value="Send Message" value="Submit"/></button>      
</div></center></strong>
	
</form></div>

<table class="cnt">

  <tr>
    <th><h4>Contact Info:</h4></th>
    <th><h4>Location:</h4></th>
  </tr>

  <tr>
    <td>Galle Fort ,<br>
Galle ,<br>
Sri Lanka<br>
Tel: ( Amila ) <a href="tel:+(94) 112565511" class="tel">+(94) 112565511</a><br>
Tel: ( Prakash ) <a href="tel:+(94) 112565594" class="tel">+(94) 112565594</a><br>

    <td>Get Directhion From Google Maps. <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.7652775469433!2d80.21568254410845!3d6.0269220437436815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae173a378ee025d%3A0xb96f8a16ae16c3fe!2sGalle+fort!5e0!3m2!1sen!2sus!4v1481026300005" width="100%" height="380px" frameborder="0" style="border:0" allowfullscreen></iframe></td>

  </tr>

</table>

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
