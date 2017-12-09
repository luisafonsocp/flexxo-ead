<h1>Conteudo</h1>

<a href="conteudo_adicionar.php">adicionar</a>

<table border="1">
<tr>
<th>titulo</th>
<th>açoes</th>
</tr>

<?php for($i=0; $i<10; $i++) {?>
<tr>
	<td>PHP</td>
	<td>
		<a href="index.php?pagina=conteudos&acao=editar">Editar</a>
		<a href="index.php?pagina=conteudos&acao=excluir">Excluir</a>
	</td>
</tr>
<?php } ?>
</table>