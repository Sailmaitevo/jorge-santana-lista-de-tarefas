function edit(e, id){
	const element = e
		.target
		.parentElement.parentElement.parentElement
		.querySelector('.conteudo')
	
	element.innerHTML = `<form action="edit.php" method="POST">
		<input
			value="${element.innerText}"
			class="form-control w-50 d-inline"
			autofocus
			name="nova_descricao"
		/>
		<input readonly class="d-none" name="id" value="${id}"/>
		<button class="btn btn-success">Ir</button>
	</form>`
}