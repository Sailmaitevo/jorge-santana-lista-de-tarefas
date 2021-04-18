<?php
	class Tarefa {
		private int    $id;
		private string $conteudo;
		private bool   $estado;

		public function __construct (array $dados){
			$this->id  = $dados["id"];
			$this->conteudo = $dados["conteudo"];
			$this->estado   = $dados["estado"];
		}
		public function __get(string $arg){
			return $this->$arg;
		}

		public function buttons(){
			return !$this->estado ? "
				<button
					class='border-0 bg-transparent p-0'
					onclick='edit(event, $this->id)'
				>
					<i class='fas fa-edit fa-lg text-info'></i>
				</button>
				<form
					action='check.php'
					method='POST'
				>
					<input readonly value='$this->id' class='d-none' name='id'>
					<button type='submit' class='border-0 bg-transparent p-0'>
						<i class='fas fa-check-square fa-lg text-success'></i>
					</button>
				</form>
			" : null;
		}
		public function state(bool $text = true){
			if($text) return $this->estado ? 'Concluída' : 'Pendente';
		}

		public function html(bool $all = false){
			$buttons = $this->buttons();
			$estado = $all ? '('.$this->state().')' : null;

			return <<<EOL
			<div class="row mb-3 d-flex align-items-center tarefa">
				<div class="col-sm-9">
					<span class="conteudo">$this->conteudo</span>
					<span class='text-muted'>$estado</span>
				</div>
				<div class="col-sm-3 mt-2 d-flex justify-content-between">
					<a href="delete.php?id=$this->id">
						<i class="fas fa-trash-alt fa-lg text-danger"></i>
					</a>
					$buttons
				</div>
			</div>
			EOL;
		}
	}
?>