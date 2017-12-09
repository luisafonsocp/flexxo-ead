<h1>Forum</h1>

<a href="forum_adicionar.php">Adicionar Tópico</a>

<table border="1">
<tr>
<th>Assunto</th>
<th>açoes</th>
</tr>


<?php for($i=0; $i<10; $i++){?>
<tr>
	<td>PHP</td>
	<td>
		<a href="index.php?pagina=forum&acao=visualizar">Visualizar</a>
		<a href="index.php?pagina=forum&acao=editar">Editar</a>
		<a href="index.php?pagina=forum&acao=excluir">Excluir</a>
	</td>
</tr>
<?php } ?>
</table>