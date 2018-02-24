<?php 

try{
	$db = new PDO('mysql:dbname=sistema_palavroes;host=localhost;charset=utf8', 'root', '');

} catch(PDOException $ex){
		echo 'Erro de conexão: '.$ex->getMessage();
}

// Limpar caracteres especiais das palavras

	function limpaString($str) {

	    $str = preg_replace('/[áàãâä]/ui', 'a', $str);
	    $str = preg_replace('/[éèêë]/ui', 'e', $str);
	    $str = preg_replace('/[íìîï]/ui', 'i', $str);
	    $str = preg_replace('/[óòõôö]/ui', 'o', $str);
	    $str = preg_replace('/[úùûü]/ui', 'u', $str);
	    $str = preg_replace('/[ç]/ui', 'c', $str);	    
	    $str = preg_replace('/[^a-z0-9]/i', '-', $str);  
	    //$str = preg_replace('/[.,(),;:_+{}[`´¨|*!"#$%&=?~^><ªº-]/', '', $str);

    	return $str;
	}


	$sql = $db->query("SELECT palavrao FROM palavroes");
	$sql = $sql->fetchAll();	

		
	foreach($sql as $chave => $item){
		$palavroes[$chave] = $item['palavrao'];
	}

	//print_r($palavroes); exit;

	if(!empty($_POST['texto'])){

		$texto = $_POST['texto'];

		$texto = limpaString($texto); // Remove os caracteres especias das palavras

		$texto = strtoupper($texto); // Converte as palavras para maiúsculas	

		//print_r($texto);

		$palavras = explode('-', $texto); // Remove os -

		//print_r($palavras); exit;

		$qtdPalavroes = 0;
		$palavrao = [];

		for($i=0;$i<count($palavras);$i++){
			for($j=0;$j<count($palavroes);$j++){

				if($palavras[$i] == $palavroes[$j]){

					$palavrao[] = $palavras[$i];
					$qtdPalavroes ++;
				}
			}
		}

		//print_r($palavrao); exit;		

	}

?>

<html>

<head>
	<meta charset="utf-8" />
	<title>Bloqueio de Palavrões</title>	
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>
	
	<div class="box">

		<?php 
			echo 'Total de palavrões: '.$qtdPalavroes.'<br/><br/>';			

			echo 'Palavrões identificados:'.'<br/><br/>';

			for($i=0;$i<count($palavrao);$i++){
				echo $palavrao[$i].'<br/>';
			}

		?>
		
	</div>

</body>


</html>