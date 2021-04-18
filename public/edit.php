<? $_POST["id"] ?? header('Location: .') ?>
<? [$id, $conteudo] = [$_POST["id"], $_POST["nova_descricao"]] ?>

<? require_once '../config.php' ?>

<?php
    $query = 'UPDATE Tarefas SET conteudo = :conteudo WHERE id = :id';

	$statement = $pdo->prepare($query);
	$statement->bindParam(':id', $id, PDO::PARAM_INT);
	$statement->bindParam(':conteudo', $conteudo);

	$statement->execute();
	header('Location: .');
?>