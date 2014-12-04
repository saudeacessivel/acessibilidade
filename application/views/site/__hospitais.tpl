
<ol id="conteudo-hospitais">

{$n = 1}
{if isset($hospitais) && $hospitais != ''}
	{foreach $hospitais as $hospital}
		{if isset($hospital->nome)}

		<li class="conteudo clear-fix listagem" id="{$hospital->cnes_id}" >

			<div class="col-esq">

				<div id="mapa-{$hospital->cnes_id}" class="mapa google-api" data-cnes="{$hospital->cnes_id}" data-nome="{ucwords(strtolower($hospital->nome))}" data-latitude="{$hospital->latitude}" data-longitude="{$hospital->longitude}">
					
				</div>

				<div class="ubs">
					<h4><a class="scroll-to" href="#{$hospital->cnes_id}" accesskey="{$n++}" title="{ucwords(strtolower($hospital->nome))} - {ucwords(strtolower($hospital->cidade))}">{ucwords(strtolower($hospital->nome))} - {ucwords(strtolower($hospital->cidade))}</a></h4>
					<div class="box">Endereço completo</div>
					<address>
						{ucwords(strtolower($hospital->endereco))} - {ucwords(strtolower($hospital->bairro))} - {ucwords(strtolower($hospital->cidade))}
					</address>

					<div class="comentarios">
						<a href="#">Comentários de quem já foi atendido</a>
					</div>

				</div>

			</div>

			<div class="col-dir">
				<h5>Classificações deste Posto de Saúde</h5>
				<ul>
				<li>
					Estrutura física
					

					{for $i=1; $i <= (5-{$hospital->nota_estrutura}); $i++}
					<span class="estrela-vazia">&nbsp;</span>
					{/for}

					{for $i=1; $i <= {$hospital->nota_estrutura}; $i++}
					<span class="estrela-cheia">&nbsp;</span>
					{/for}
					
					<div class="nota">nota: {$hospital->nota_estrutura} {if $hospital->nota_estrutura == 1}estrela{else}estrelas{/if}</div>
				</li>

				<li>
					Para deficiêntes e idosos
					{for $i=1; $i <= (5-{$hospital->nota_def_idoso}); $i++}
					<span class="estrela-vazia">&nbsp;</span>
					{/for}
					
					{for $i=1; $i <= {$hospital->nota_def_idoso}; $i++}
					<span class="estrela-cheia">&nbsp;</span>
					{/for}

					<div class="nota">nota: {$hospital->nota_def_idoso} {if $hospital->nota_def_idoso == 1}estrela{else}estrelas{/if}</div>
				</li>

				<li>
					Medicamentos

					{for $i=1; $i <= (5-{$hospital->nota_medicamento}); $i++}
					<span class="estrela-vazia">&nbsp;</span>
					{/for}
					
					{for $i=1; $i <= {$hospital->nota_medicamento}; $i++}
					<span class="estrela-cheia">&nbsp;</span>
					{/for}

					<div class="nota">nota: {$hospital->nota_medicamento}  {if $hospital->nota_medicamento == 1}estrela{else}estrelas{/if}</div>
					
				</li>

				<li>
					Equipamentos
					{for $i=1; $i <= (5-{$hospital->nota_equipamento}); $i++}
					<span class="estrela-vazia">&nbsp;</span>
					{/for}
					
					{for $i=1; $i <= {$hospital->nota_equipamento}; $i++}
					<span class="estrela-cheia">&nbsp;</span>
					{/for}
					
					<div class="nota">nota: {$hospital->nota_equipamento} {if $hospital->nota_equipamento == 1}estrela{else}estrelas{/if}</div>
				</li>
			</ul>

			</div>

		</li>

		{/if}
	{/foreach}

{/if}

</ol>



