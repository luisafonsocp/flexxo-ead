<html>
	<head>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- JQUERY -->
		
		
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	</head>	
		
	<body>
	
	<?php include ('menu.php'); ?>
	
	<?php
	switch($GET['pagina']) {
		case 'conteudos': {
			include ('conteudos.php');
			break;
		}	
		case 'forum': {
			include ('forum.php');
			break;
		}	
		case 'perfil': {
			include ('perfil.php');
			break;
		}	
		case 'sair': {
			include ('sair.php');
			break;
		}	
	?>
	
	</body>
	
</html>				