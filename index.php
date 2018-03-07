<!DOCTYPE html>
<html>
<head>
	<title>Pratique JavaScript</title>
	<meta charset="utf-8" />
</head>
<body>
	<h1>Hello World!</h1>
	<p id="p1" onclick="myFunction()">Roule un dragon.</p>
	<script>
	var next = "Fume un dragon.";
	function myFunction() {
    	document.getElementById("p1").innerHTML = next;
	}
	</script>
</body>
</html>