<? require_once '../../config.php' ?>
<? require_once '../../tarefa.php' ?>

<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link rel="stylesheet" href="../css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<script src="import/functions.js"></script>

		<title>App Lista Tarefas</title>
	</head>
	<body>
		<? $p = 3; require '../import/navbar.php' ?>
		<main class="container app">
			<div class="row">
				<? require '../import/nav.php' ?>
				<div class="col-sm-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h1 class="h4">Todas tarefas</h1>
								<hr />
								<?php
									$query = 'SELECT * FROM Tarefas';
									$statement = $pdo->query($query);

									$dados = $statement
										->fetchAll(PDO::FETCH_ASSOC)
									;

									foreach($dados as $tarefa_array){
										$tarefa = new Tarefa($tarefa_array);
										echo $tarefa->html(true);
									}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</body>
</html>
<script src="import/no_results.js"></script>