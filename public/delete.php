<? require '../config.php' ?>
<?php
	$_GET["id"] ?? header('Location: .');
	$id = $_GET["id"];

	$command = 'DELETE FROM Tarefas WHERE id = :id';
	$statement = $pdo->prepare($command);
	$statement->bindParam(':id', $id, PDO::PARAM_INT);
	$statement->execute();
	
	header('Location: .');
?>