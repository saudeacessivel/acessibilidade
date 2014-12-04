


<!-- Mapa Resultado Busca -->

<article class="mapa content" data-ajax='0'>


	{if isset($hospitais)}
	<div class="conteudo clear-fix">
		<div class="col-esq">
			<h2><strong>Postos de saúde</strong> mais próximos a {$busca}</h2>
		</div>

		<div class="col-dir links-mapa">
			<h3>Selecione o tipo de visualização</h3>
			<a href="#" class="lista active" data-mapa="false">Listagem</a>
			<a href="#" class="mapa" data-mapa="true">Mapa grande</a>
		</div>
	</div>

	<div class="mapa-visualiza conteudo clear-fix">
		
	</div>
	
	{include file="site/hospitais.tpl" }
	
	<div class="conteudo clear-fix pagination-margem">
		<div>{$paginacao.links}</div>
	</div>

	{else}
	<div class="conteudo clear-fix">
		<div class="col-esq">
			<h2>Não conseguimos localizar este local, seja mais específico e tente novamente!</h2>
		</div>
	</div>
		
	{/if}

</article>


