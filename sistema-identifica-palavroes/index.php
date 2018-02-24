<html>

<head>
	<meta charset="utf-8" />
	<title>Bloqueio de Palavrões</title>	
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>	

<h1>Bloqueio de Palavrões</h1>

<div class="box">

	<form method='POST' action="processa.php">

		Comentários:<br/><br/>
		<textarea name='texto' rows='5' cols='70'></textarea>
		<br/><br/>
		<input type='submit' value='Enviar'>

	</form>
	
</div>


<?php 


/* Inserir os palavrões no banco 

// Rodar esse script uma vez para poder inserir os palavrões de forma automática no banco

$palavroes = 'abestado,anus,babaca,babaovo,babaovo,bacura,bagos,baitinga,baitola,baranga,baranga,bebum,besta,bicha,bisca,bixa,boazuda,boceta,boco,bocó,boiola,bolagato,bolcat,boquete,bosseta,bosta,bostana,bostas,brioco,bronha,broxa,buceta,bunda,bunduda,bura,bubonica,bobonica,burro,busseta,caga,cagado,cagao,cagão,cagona,canalha,caralho,carniça,casseta,cassete,charlatanismo,charlatao,charlatão,checheca,chereca,chibumba,chibumbo,chifruda,chifrudo,chochota,chotado,clitoris,chupada,chupa,clitóris,cocaina,cocaína,corna,corno,cornuda,cornudo,cretina,cretino,cu,curalho,caralho,karalho,cuzao,cuzão,cuzuda,cuzudo,debil,debiloide,defunto,demonio,demônio,desgracado,desgraçado,desgracados,desgraçado,doida,doido,egua,égua,embromation,enrolão,escrota,escroto,esporrada,esporrado,esporro,estelionatario,estelionatário,estelionato,estupida,estúpida,estupidez,estupido,estúpido,fake,fdp,puta,fiofó,foda,fodao,fodão,fode,fodida,fodido,fornica,fraude,fudecao,fudeção,fudendo,fudida,fudido,fulera,fuleragem,furada,furao,furão,furnica,furnicar,gay,gonorrea,gonorreia,grelinho,grelo,homosexual,homossexual,idiota,idiotas,imbecil,iscrota,iscroto,kenga,ladra,ladrao,ladrão,ladroeira,ladrona,lalau,leprosa,leproso,lesbica,lésbica,linguiça,ludibriar,machona,machorra,masturba,merda,mija,mijada,mijado,mijo,miseravel,mizeravel,mocrea,mocréa,mocreia,mocréia,mondronga,mondrongo,naba,nadega,otaria,otario,otarios,pau,peia,peido,pemba,penis,pentelha,pentelho,perereca,pica,picao,pilantra,piranha,piroca,piroco,piru,porra,pqp,prega,prostibulo,prostíbulo,prostituta,prostituto,punheta,punhetao,punhetão,pustula,pústula,puto,puxasaco,puxasaco,peste,quenga,rabao,rabão,rabo,rabuda,rabudao,rabudão,rabudo,rabudona,ramela,rapariga,rola,rôla,sacana,sacanagem,safada,safado,safados,salafrario,salafrário,safadao,safadona,sapatao,sapatão,sifilis,sífilis,siririca,tarada,tarado,tezao,tezão,tezuda,tezudo,trocha,trolha,troucha,trouchas,trouxa,trouxas,troxa,vagabunda,vagabundo,vagina,veada,veadao,veadão,veado,verme,viada,viadao,viadão,viado,viados,vigario,vigário,xana,xaninha,xavasca,xerereca,xexeca,xibiu,xibumba,xochota,xota,xoxota,geba,putinha';

$palavroes = strtoupper($palavroes);

$palavrao = explode(',', $palavroes);

//print_r($palavrao); exit;

for($i=0;$i<count($palavrao);$i++){

	$sql = $db->prepare("INSERT INTO palavroes SET palavrao = :palavrao");
	$sql->bindValue(':palavrao', $palavrao[$i]);
	$sql->execute();


	echo "Salvo com sucesso..."."<br/><br/>";

}
 
*/
?>

</body>

</html>