<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="icon" href="../img/Icon.png">
    <title>Consulta Financeiro</title>
	<script src="https://kit.fontawesome.com/0df5057ab7.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
</head>

<body>
<header>
	<div class="navbar navbar-dark bg-dark shadow p-3 fixed-top">
		<div class="container d-flex justify-content-between">
			<a href="../index.html" class="navbar-brand d-flex align-items-center">
				<i class="fa-solid fa-paw" style="color:rgb(13,110,253); margin: 5px;"></i>
				<strong>Sistema Pet Shop</strong>
			</a>
			<a href="../consultar.html">Voltar</a>
		</div>
	</div>

</header>

<main role="main" class="container my-5 p-5 mx-auto">
	<?php
	error_reporting(0);
	include "../conexao.php";
	$result = mysql_query("select * from financeiro", $db);
	echo "<table class='table table-bordered table-striped'>
	<tr>
		<td scope='col' style='background-color: var(--color-purple);'><h6 class='text-white'>ID Financeiro</h6></td>
		<td scope='col' style='background-color: var(--color-purple);'><h6 class='text-white'>Valor</h6></td>
		<td scope='col' style='background-color: var(--color-purple);'><h6 class='text-white'>Data Vencimento</h6></td>
		<td scope='col' style='background-color: var(--color-purple);'><h6 class='text-white'>Data Pagamento</h6></td>
		<td scope='col' style='background-color: var(--color-purple);'><h6 class='text-white'>ID Atendimento</h6></td>
		<td scope='col' style='background-color: var(--color-purple);'><h6 class='text-white'>Compra e Venda</h6></td>
		<td scope='col' style='background-color: var(--color-purple);'><h6 class='text-white'>Status</h6></td>
		<td scope='col' style='background-color: var(--color-purple);'><h6 class='text-white'>Tipo Financeiro</h6></td>
	</tr>";
	// Escreve resultado até que não haja mais linhas na tabela
	while($row = mysql_fetch_array($result)) {
	echo "<tr>
		<td>".$row["idfinanceiro"]."</td>
		<td>".$row["valor"]."</td>
		<td>".$row["data_vencimento"]."</td>
		<td>".$row["data_pagamento"]."</td>
		<td>".$row["idatendimento"]."</td>
		<td>".$row["compra_venda"]."</td>
		<td>".$row["status"]."</td>
		<td>".$row["financeiro_tipo"]."</td>
		</tr><br>";
		}
		echo "</table></center>";
		echo "<br />";mysql_free_result($result);
	mysql_close ($db);
	?>
</main>

</body>

</html>