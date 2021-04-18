<? require_once '../../config.php' ?>
<? require_once '../../tarefa.php' ?>

<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<link rel="stylesheet" href="../css/estilo.css"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"/>

		<title>App Lista Tarefas</title>
	</head>
	<body>
		<? $p = 2; require '../import/navbar.php'?>
		<main class="container app">
			<div class="row">
				<? $p = 2; require '../import/nav.php' ?>
				<div class="col-md-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h1 class="h4">Nova tarefa</h1>
								<form action="new.php" method="POST">
									<div class="form-group">
										<label>Descrição da tarefa:</label>
										<input type="text" class="form-control" name="conteudo" placeholder="Exemplo: Lavar o carro"/>
									</div>
									<button class="btn btn-success">Cadastrar</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</body>
</html>