<?php 
session_start();

try{
	$pdo = new PDO('mysql:dbname=sistema_rating_estrela;host=localhost;charset=utf8','root','');

}catch(PDOException $ex){
	echo 'Erro: '.$ex->getMessage();
}

if(!empty($_POST['estrela'])){
	$estrela = $_POST['estrela'];

	$sql = $pdo->prepare("INSERT INTO avaliacao SET qnt_estrela = :estrela, created = NOW()");

	$sql->bindValue(':estrela', $estrela);
	$sql->execute();

	$_SESSION['msg'] = 'Avaliação realizada com sucesso!';

	header('Location: index.php');

}else{
	$_SESSION['msg'] = 'Informe sua avaliação';
	header('Location: index.php');
}


?>