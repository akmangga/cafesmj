<!--header.php-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cafe</title>
	<link rel="stylesheet" href="css/w3.css"> 
</head>
<body>
	<div class="w3-block w3-orange" style="text-align:right">
		<button class="w3-button" onclick="resizeText(1)"><font size="2"></font></button>
		<script type="text/javascript">
			function resizeText(multiplier) {
				if (document.body.style.fontSize == "") {
					document.body.style.fontSize = "1.0em";
					document.body.style.fontSize = (multiplier * 0.2) + "em";
				}
			</script>
		</div>

		<div class="w3-bar" style="background-color: lightyreen; width: 14%; height: 30px;">
  <b class="w3-section w3-large" style="color: orangered; font-size: 28px;">
    Cafe
    <img src="img/LOGO.jpeg" style="height: 28px; width: auto; vertical-align: middle;">
    
  </b>
</div>
		<?php
		if(isset($_SESSION['username'])) {
			$pengguna = $_SESSION['username'];
		?>
		<a href="logkeluar.php" class="w3-bar-item w3-button w3-section w3-right">Log out</a>
		<div class="w3-bar-item w3-section w3-right">Welcome</div>
		<?php 
		}
		?>


	</div>


</body>
</html>