<? require_once '../config.php' ?>
<?php
	$array_table = $pdo
		->query('SELECT * FROM Tarefas')
		->fetchAll(PDO::FETCH_ASSOC)
	;
	if(count($array_table) == 0){
		$pdo->exec('TRUNCATE Tarefas');
	}

	$conteudo = $_POST["conteudo"];

	$query = "INSERT INTO Tarefas
		(conteudo, estado) VALUES (:conteudo, 0);
	";

	$statement = $pdo->prepare($query);
	$statement->bindValue(':conteudo', $conteudo);

	$statement->execute();

	header('Location: .');
?>