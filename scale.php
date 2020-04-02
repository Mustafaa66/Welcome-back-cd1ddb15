<!DOCTYPE HTML>
<html>  
<body>

<label>getal 1:</label>
	<input type= "number" id="getal1">
	<br><br>

<label>getal 2:</label>
	<input type= "number" id="getal2">
	<br><br>

<button onclick="vergelijk()">vergelijk</button>
<div id="resultaat"></div>

	<script>
		function  vergelijk(){
			var getal1 = document.getElementById('getal1').value;
			var getal2 = document.getElementById('getal2').value;
			
			if (getal1==getal2) {	
			document.getElementById("resultaat").innerHTML= "In balans";
			}
			
			else if (getal1 > getal2) {
			document.getElementById("resultaat").innerHTML= "Niet in balans";
			}

			else {
			document.getElementById("resultaat").innerHTML= "Niet in balans";
			}
			
		}
	</script>
</body>
</html>