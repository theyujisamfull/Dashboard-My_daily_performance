<?php include("../../../conexao.php"); ?>
<?php date_default_timezone_set('America/Sao_Paulo');?>
 
 <?php include "minhas_funcoes.php" ?>
 
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<title> Dashboard - Desempenho acadêmico </title><meta charset="utf-8">
		<style> 
		
		
		table{font-size:12px;}
		
		.table-hover > tbody > tr:hover {background-color:rgb(204, 204, 255); }
		

		
		</style>
	</head>
	<body>
		
		<div class='container-fluid'>
			<div class='row'>
				<div class='col-md-2'> <?php include('Tabela_datas_proximas.php');?>	</div>
				<div class='col-md-4'> </div>
				<div class='col-md-3'> <?php include('tabela_horarios_de_sono.php');?>	</div>
				
				<div class='col-md-2'> <?php include('Tabela_rotina.php');?>	</div>
				<div class='col-md-1'> </div>
				
			</div>
			
			
			<div class='row'>
				<div class='col-md-6'> </div>
				<div class='col-md-6'> <?php include("Tabela_constancia.php");  ?> </div>
				
				
				
			</div>
		</div>
		
	
	</body>
	
</html>