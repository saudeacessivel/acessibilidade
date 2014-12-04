
{if isset($hospitais) && $hospitais != ''}
	{foreach $hospitais as $hospital}
		{if isset($hospital->nome)}
		<div class="conteudo clear-fix listagem">

			<div class="col-esq">

				<div class="mapa" data-latitude="{$hospital->latitude}" data-longitude="{$hospital->longitude}" data-nome="{ucwords(strtolower($hospital->nome))}"></div>

				<div class="ubs">
					<h4>{ucwords(strtolower($hospital->nome))} - {ucwords(strtolower($hospital->cidade))}</h4>
					<div class="box">Endereço completo</div>
					<address>
						{ucwords(strtolower($hospital->endereco))} - {ucwords(strtolower($hospital->bairro))}
						<br>
						{ucwords(strtolower($hospital->cidade))}
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
					
					<div style="display:none;">{$hospital->nota_estrutura}</div>
				</li>

				<li>
					Para deficientes e idosos
					{for $i=1; $i <= (5-{$hospital->nota_def_idoso}); $i++}
					<span class="estrela-vazia">&nbsp;</span>
					{/for}
					
					{for $i=1; $i <= {$hospital->nota_def_idoso}; $i++}
					<span class="estrela-cheia">&nbsp;</span>
					{/for}

					<div style="display:none;">{$hospital->nota_def_idoso}</div>
				</li>

				<li>
					Medicamentos

					{for $i=1; $i <= (5-{$hospital->nota_medicamento}); $i++}
					<span class="estrela-vazia">&nbsp;</span>
					{/for}
					
					{for $i=1; $i <= {$hospital->nota_medicamento}; $i++}
					<span class="estrela-cheia">&nbsp;</span>
					{/for}

					<div style="display:none;">{$hospital->nota_medicamento}</div>
					
				</li>

				<li>
					Equipamenos
					{for $i=1; $i <= (5-{$hospital->nota_equipamento}); $i++}
					<span class="estrela-vazia">&nbsp;</span>
					{/for}
					
					{for $i=1; $i <= {$hospital->nota_equipamento}; $i++}
					<span class="estrela-cheia">&nbsp;</span>
					{/for}
					
					<div style="display:none;">{$hospital->nota_equipamento}</div>
				</li>
			</ul>

			</div>

		</div>
		{/if}
	{/foreach}

{else}
	<p>Não conseguimos localizar este local, tente novamente!</p>
{/if}



