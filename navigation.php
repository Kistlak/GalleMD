<html>
<head>
<title>Test Site</title>

<style>
ul {
 
    width:1200px;
    list-style-type: none;
    margin: 0;
    padding: 5px;
    overflow: hidden;
    background-color: #002147;
	font-family: Times New Roman;
	font-size:22px;
	font-weight: 0;
	height:67px;
	margin-top:10px;
}
 
li {
    float: left;
border-right:1px solid #bbb;
 
}
 
li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: left;
    padding: 14px 16px;
    text-decoration: none;
}
 
li a:hover, .dropdown:hover .dropbtn {
    background-color: white;
	color:black;
}
 
li.dropdown {
    display: inline-block;
}
 
.dropdown-content {
    display: none;
    position: absolute;
    background-color: white;
    min-width: 160px;
    box-shadow: 0px 8px 16px 8px rgba(0,0,0,0.2);
}
 
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
/* border-bottom:1px solid #bbb; */
}
 
.dropdown-content a:hover {color:white;background-color: #002147}
 
.dropdown:hover .dropdown-content {
    display: block;
}


@media screen and (max-width:100%) {
	nav a{
		width:100%; }
}

</style>

</head>

<body>

<ul>
  <li><a class="active" href="home.php">Home</a></li>

  <li><a href="https://reslk.org/" target="_blank">About RESISTANCE LK</a></li>

 <li><a href="contact.php">Contact</a></li>

<li style="float:right"><a href="http://events.ingress.com/MissionDay/Galle" class="button" target="_blank">Apply Now</a></li>
</ul>

</body>
</html>