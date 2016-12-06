<html>
<head>
<title>Test Site</title>

<style>
.cf:before,
.cf:after {
    content: " ";
    display: table;
}

.cf:after {
    clear: both;
}

.cf {
    *zoom: 1;
}

  .menu,
    .submenu {
    	margin: 0;
    	padding: 0;
    	list-style: none;
    }
	
	/* Main level */
.menu {			
	margin: 50px auto;
	width: 800px;
	width: fit-content;	
}

.menu > li {
	background: #34495e;
	float: left;
	position: relative;
	transform: skewX(25deg);
}

.menu a {
	display: block;
	color: #fff;
	text-transform: uppercase;
	text-decoration: none;
	font-family: Arial, Helvetica;
	font-size: 14px;
}		

.menu li:hover {
	background: #e74c3c;
}		

.menu > li > a {
	transform: skewX(-25deg);
	padding: 1em 2em;
}

/* Dropdown level*/
.submenu {
	position: absolute;
	width: 200px;
	left: 50%; margin-left: -100px;
	transform: skewX(-25deg);
	transform-origin: left top;
}

.submenu li {
	background-color: #34495e;
	position: relative;
	overflow: hidden;		
}						

.submenu > li > a {
	padding: 1em 2em;			
}

.submenu > li::after {
	content: '';
	position: absolute;
	top: -125%;
	height: 100%;
	width: 100%;			
	box-shadow: 0 0 50px rgba(0, 0, 0, .9);			
}		

/* Odd stuff */
.submenu > li:nth-child(odd){
	transform: skewX(-25deg) translateX(0);
}

.submenu > li:nth-child(odd) > a {
	transform: skewX(25deg);
}

.submenu > li:nth-child(odd)::after {
	right: -50%;
	transform: skewX(-25deg) rotate(3deg);
}				

/* Even stuff */
.submenu > li:nth-child(even){
	transform: skewX(25deg) translateX(0);
}

.submenu > li:nth-child(even) > a {
	transform: skewX(-25deg);
}

.submenu > li:nth-child(even)::after {
	left: -50%;
	transform: skewX(25deg) rotate(3deg);
}

/* Show dropdown */
.submenu,
.submenu li {
	opacity: 0;
	visibility: hidden;			
}

.submenu li {
	transition: .2s ease-out transform;
}

.menu > li:hover .submenu,
.menu > li:hover .submenu li {
	opacity: 1;
	visibility: visible;
}		

.menu > li:hover .submenu li:nth-child(even){
	transform: skewX(25deg) translateX(15px);			
}

.menu > li:hover .submenu li:nth-child(odd){
	transform: skewX(-25deg) translateX(-15px);			
}


body  {
    background-color: #e3e7f0;
	height:auto;
	width:1200px;
	margin-left:75px;
	background-image: url("Ingress badges-black.jpg");
}


</style>

</head>

<body>
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

<ul class="menu cf">
	<li><a href="">Menu item</a></li>
	<li>
		<a href="">Menu item</a>
		<ul class="submenu">
			<li><a href="">Submenu item</a></li>
			<li><a href="">Submenu item</a></li>
			<li><a href="">Submenu item</a></li>
			<li><a href="">Submenu item</a></li>
		</ul>			
	</li>
	<li><a href="">Menu item</a></li>
	<li><a href="">Menu item</a></li>
	<li><a href="">Menu item</a></li>
</ul>

</body>
</html>