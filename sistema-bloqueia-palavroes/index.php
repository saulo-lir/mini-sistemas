<?php 
	try{
		$db = new PDO('mysql:dbname=sistema_palavroes;host=localhost;charset=utf8', 'root', '');

	}catch(PDOException $ex){
		echo 'Erro de conexão: '.$ex->getMessage();
	}


	$sql = $db->query("SELECT palavrao FROM palavroes");
	$sql = $sql->fetchAll();	
		

	foreach($sql as $chave => $item){
		$palavroes[$chave] = $item['palavrao'];
	}

	//print_r($palavrao); exit;


	if(!empty($_POST['texto'])){
		$texto = $_POST['texto'];

		$palavras = explode(' ', $texto);				

		$qtdPalavroes = 0;

		for($i=0;$i<count($palavras);$i++){

			for($j=0;$j<count($palavroes);$j++){

				if($palavras[$i] == $palavroes[$j]){
					$qtdPalavroes ++;
				}
			}
		}

		echo 'Total de palavões: '.$qtdPalavroes;
	}

?>

<h1>Formulário para bloqueio de palavrões</h1>

<form method='POST'>
	Comentários:<br/><br/>
	<textarea name='texto' rows='5' cols='80'></textarea>
	<br/><br/>
	<input type='submit' value='Enviar'>
</form>