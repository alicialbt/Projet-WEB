<!DOCTYPE html>

<html>
<head>
	<title>TC Advisor - Students</title>
	<meta charset="utf-8">
	<link href="site.css" rel="stylesheet">
	<script src="http://www.w3schools.com/appml/2.0.1/appml.js">
	</script>
</head>

<body>
	<?php include("entete.php"); ?>
	<nav id="nav01"></nav>
	
	<div id="main">
		<h2>Banque de Données</h2>
		<div id="id01"></div>
		<footer id="foot01"></footer>
	</div>

	<script src="script.js"></script>

	<script>
	var xmlhttp = new XMLHttpRequest();
	var url = "http://www.w3schools.com/website/customers_db_sql.aspx";

	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			myFunction(xmlhttp.responseText);
		}
	}
	xmlhttp.open("GET", url, true);
	xmlhttp.send();

	function myFunction(response){
		var obj = JSON.parse(response);
		var arr = obj.records;
		var i;
		var out = "<table><tr><th>Name</th><th>City></th><th>Country</th></tr>";

		for(i=0; i < arr.length; i++) {
			out += "<tr><td>" + arr[i].Name + "</td><td>" + arr[i].City + "</td><td>" + arr[i].Countrt + "</td></tr>";
			}

		out += "</table>"
		document.getElementById("id01").innerHTML = out;
	}

	</script>
</body>
</html>


	
