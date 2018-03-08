<!DOCTYPE html>
<html>
<head>
	<title>Pratique JavaScript</title>
	<link rel="stylesheet" type="text/css" href="w3.css"/>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<meta charset="utf-8" />
</head>
<body>
	<header class="w3-container w3-teal w3-display-container w3-dark-grey" style="height: 8em">
		<h1 class="w3-display-middle Font-Montserrat w3-xxlarge">Zenboy</h1>
		<h2 class="w3-display-topleft Font-Montserrat" style="padding-left: 1em">Cisco Family</h2>
		<h3 id="p1" onclick="myFunction()" class="w3-display-bottomright Font-Montserrat" style="padding-right: 1em">Roule un dragon</h3>
	</header>

	<nav>

	</nav>
	<div class="w3-display-container w3-content w3-margin-top" style="width:65%">
		<div class="w3-display-container mySlides w3-animate-opacity">
			<img class="w3-round-large" src="Tai-Chi.jpg" style="width:100%"/>
		</div>
		
		<div class="w3-display-container mySlides w3-animate-opacity">
			<img class="w3-round-large" src="Norvege.jpg" style="width:100%"/>
		</div>
		
		<button class="w3-light-grey w3-button w3-display-left" onClick="plusDivs(-1)">&#10094;</button>
		<button class="w3-light-grey w3-button w3-display-right" onClick="plusDivs(+1)">&#10095;</button>
	</div>
	<script src="main.js"></script>
</body>
</html>