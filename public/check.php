<? $_POST["id"] ?? header('Location: .') ?>

<? require '../config.php' ?>

<?php
	$id = $_POST["id"];

	$query = 'UPDATE Tarefas SET estado = 1 WHERE id = :id';
	$statement = $pdo->prepare($query);

	$statement->bindParam(':id', $id, PDO::PARAM_INT);
	$statement->execute();
	header('Location: .');
?>