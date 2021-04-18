if(!document
	.querySelector('.pagina > .row > .col')
	.innerHTML
	.includes('<div')
) document
	.querySelector('.pagina > .row > .col')
	.innerHTML += '<h2 class="display-4">Sem resultados</h2>'