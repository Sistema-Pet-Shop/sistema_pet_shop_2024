<?php
error_reporting(0);
include "conexao.php";

$matricula=$_POST['matricula'];
$funcao_idfuncao=$_POST['funcao_idfuncao'];
$data_admissao=$_POST['data_admissao'];
$data_demissao=$_POST['data_demissao'];
$pessoa_idpessoa=$_POST['pessoa_idpessoa'];
				
$alterar = mysql_query("UPDATE funcionario 
                    SET funcao_idfuncao = '$funcao_idfuncao',
					data_admissao = '$data_admissao', 
					data_demissao = '$data_demissao',
					pessoa_idpessoa = '$pessoa_idpessoa'
					WHERE matricula = '$matricula'")
					or die (mysql_error());
mysql_close ($db);
include "consulta_funcionario.php";
?>