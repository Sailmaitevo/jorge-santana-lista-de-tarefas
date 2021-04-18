<aside class="col-md-3 menu">
	<ul class="list-group">
		<li class="list-group-item<?= $p == 1 ? ' active' : ''?>">
			<a href="<?=$path?>">Tarefas pendentes</a>
		<li class="list-group-item<?= $p == 2 ? ' active' : ''?>">
			<a href="<?=$path?>/nova">Nova  tarefa</a>
		<li class="list-group-item<?= $p == 3 ? ' active' : ''?>">
			<a href="<?=$path?>/tudo">Todas tarefas</a>
	</ul>
</aside>