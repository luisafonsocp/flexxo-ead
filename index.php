<html>
	<head>
    <chaset>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- JQUERY --> 
		
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	</head>	
		
	<body>
	<head>
	<?php include ('menu.php'); ?>
	</head>
	
	<section>
	<?php
	switch($_GET['pagina']) {
		case 'conteudos': {
			
			if ( $_GET['acao'] == 'lista' ) {
				include ( 'conteudos.php' );
			} elseif ( $_GET['acao'] == 'editar' ) {
				include ('conteudos_editar.php');
			} elseif ( $_GET['acao'] == 'excluir' ) {
				include ('conteudo_excluir.php');	
			}elseif ( $_GET['acao'] == 'adicionar' ) {
				include ('conteudo_adicionar.php');
			} else {
				include ('erro.php');	
			}	
			
			break;
		}	
		case 'forum': {
			if ( $_GET['acao'] == 'lista' ) {
				include ( 'forum.php' );
			} elseif ( $_GET['acao'] == 'visualizar' ) {
				include ('forum_visualizar.php');
			} elseif ( $_GET['acao'] == 'mensagem' ) {
				include ('forum_mensagem.php');
			} elseif ( $_GET['acao'] == 'editar' ) {
				include ('forum_editar.php');
			} elseif ( $_GET['acao'] == 'excluir' ) {
				include ('forum_excluir.php');	
			}elseif ( $_GET['acao'] == 'adicionar' ) {
				include ('forum_adicionar.php');
			} else {
				include ('erro.php');	
			}	
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
	}
	?>
	</section>
	
	<footer>Desenvolvido por Luis</footer>
	
	</body>
	
</html>				