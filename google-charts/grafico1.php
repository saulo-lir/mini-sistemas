
<?php 

try{
	$db = new PDO('mysql:dbname=google_charts;host=localhost;charset:utf8','root','');

}catch(PDOException $ex){
	echo 'Erro: '.$ex->getMessage('Erro de conexão');
}

$datas = array();
$valorpp = array();
$valorcc = array();

$sql = $db->query("SELECT * FROM extrato");
$dados = $sql->fetchAll();

// Salvando os dados vindos do banco para serem colocados no gráfico

for($i=0;$i<6;$i++){
	$datas[$i] = $dados[$i]['data'];
	$valorpp[$i] = $dados[$i]['valorpp'];
	$valorcc[$i] = $dados[$i]['valorcc'];
}

?>

<html>
	<head>
		<meta charset="utf-8">
		<title>Google Charts</title>

		<!-- Carrgando a biblioteca js do google que contém o mapa -->
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		
		<script type="text/javascript">

			/* Estrutura básica para contrução do gráfico */

			google.load('visualization','1',{'packages':['corechart']});

			google.setOnLoadCallback(desenhaGrafico); // Sempre que a página for carregada, será executada a função desenhaGrafico

			function desenhaGrafico(){
				var data = new google.visualization.DataTable();

				//Definido as colunas
				data.addColumn('string','Data');
				data.addColumn('number','Conta Poupança');
				data.addColumn('number','Conta Corrente');

				//Definindo o número de linhas
				data.addRows(<?= $i ?>);


				// Definindo os valores das linhas e colunas de forma dinâmica

				<?php 
				$k = $i;

				for($i = 0;$i < $k; $i++){

				?>
					data.setValue(<?= $i ?>, 0, '<?= $datas[$i] ?>'); // Coluna 0
					data.setValue(<?= $i ?>, 1, '<?= $valorpp[$i] ?>'); // Coluna 1
					data.setValue(<?= $i ?>, 2, '<?= $valorcc[$i] ?>'); // Coluna 2

				<?php	
					}
				?>

				/*

				Definindo os valores das linhas e colunas de forma estática

				// Dados de Janeiro
				data.setValue(0, 0, 'JAN');
				data.setValue(0, 1, 3450.0);

				// Dados de Fevereiro
				data.setValue(1, 0, 'FEV');
				data.setValue(1, 1, 2870.0);

				// Dados de Março
				data.setValue(2, 0, 'MAR');
				data.setValue(2, 1, 2250.0);

				// Dados de Abril
				data.setValue(3, 0, 'ABR');
				data.setValue(3, 1, 2300.0);

				// Dados de Maio
				data.setValue(4, 0, 'MAI');
				data.setValue(4, 1, 2540.0);

				// Dados de Junho
				data.setValue(5, 0, 'JUN');
				data.setValue(5, 1, 3450.0);
				
				*/

				var options = {
					title: 'Minhas contas',
					width: 800, 
					height: 300,
					lineWidth: 8,
					colors: ['#00FF7F', '#00BFFF'], // Cores do gráfico 1 e 2
					legend: {position: 'bottom'}
				};

			/* Estrutura básica para contrução do gráfico */

			/* Criando o gráfico */

			
			// 1) Cria o gráfico dentro do elemento que contém o id 'chart_div'
			var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

			// 2) Desenha o gráfico
			chart.draw(data, options);

			}
		</script>
	</head>

	<body>
	
		<div id='chart_div'>
			
		</div>		
		
	</body>
</html>