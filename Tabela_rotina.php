<table class='table table-striped table-sm table-hover table-bordered table-dark'>
	
	<?php
	// Puxa os dados do banco de dados e printa a tabela
	$resp = mysqli_query($link,"SELECT MAX(id) AS ultimo_id FROM rotina "); 
	while($dado=$resp->fetch_array()){  $id_limite = $dado['ultimo_id'] - 7 ;} 	
	
	//Apenda os nomes das colunas no vetor $colunas
	$resp = mysqli_query($link,"SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'id2368944_bmacao17' AND TABLE_NAME = 'rotina'  "); 
	$colunas = array(); 
	while($dado=$resp->fetch_array()){ 
		array_push($colunas, $dado['COLUMN_NAME']);
	
	;} 
	//Retira as colunas id e data 
	unset($colunas[0]);unset($colunas[1]);
	
	//Constrói vetor $lista que irá armazenar as contagens de quantas vezes fiz a atividade nos últimos sete dias
	$lista = array();
	foreach($colunas as $i){ array_push( $lista, 0 );	}

	$resp = mysqli_query($link,"SELECT * FROM rotina WHERE id > $id_limite "); 
	while($dado=$resp->fetch_array()){ 
		$i=0;
		foreach ($colunas as $c){
			$lista[$i] = $lista[$i] + $dado[$c] ;
			$i = $i+1;
		}
	}
	
	
	//Printa a tabela
	for ($i=0;$i<count($lista)-9;$i++) {
		
		if($lista[$i] <=3 ) { $cor = 'text-danger'; }
		if($lista[$i] ==4 ) { $cor = 'text-info'; }
		if($lista[$i] >=5 ) { $cor = 'text-white'; }
		echo "<tr>
				<th class='text-center text-capitalize'>".$colunas[$i+2]."</th>
				<th class='".$cor."'>".$lista[$i]."/7</th>
			</tr>";
	}
	
	
	
	
	
	
	?>
</table>