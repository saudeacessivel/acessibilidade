
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
						{ucwords(strtolower($hospital->endereco))} {if $hospital->numero != ''}, {ucwords(strtolower($hospital->numero))}{/if} - {ucwords(strtolower($hospital->bairro))} - {ucwords(strtolower($hospital->cidade))}  - Telefone: {ucwords(strtolower($hospital->telefone))}
					</address>
					<div class="comentarios">
                    	<a href="http://www.saudeacessivel.com.br/{if isset($contraste) && $contraste == 1}contraste/{/if}posto-saude/{$hospital->cnes_id}" title="mais detalhes do {ucwords(strtolower($hospital->nome))} em {ucwords(strtolower($hospital->cidade))}">ver mais detalhes</a>
                    </div>
				</div>

			</div>

			<div class="col-dir">

				<table>
					<caption>Classificações deste Posto de Saúde</caption> 
					<thead>
						<tr>
							<th id="atributo-{$hospital->cnes_id}">Atributo</th>
							<th id="nota-{$hospital->cnes_id}">Nota</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td headers="atributo-{$hospital->cnes_id}">Estrutura física</td>
							<td headers="nota-{$hospital->cnes_id}" class="{if $hospital->nota_estrutura == 1}estrela{else}estrelas{/if}-{$hospital->nota_estrutura}">{$hospital->nota_estrutura} {if $hospital->nota_estrutura == 1}estrela{else}estrelas{/if}</td>
						</tr>
						<tr>
							<td headers="atributo-{$hospital->cnes_id}">Para deficiêntes e idosos</td>
							<td headers="nota-{$hospital->cnes_id}" class="{if $hospital->nota_def_idoso == 1}estrela{else}estrelas{/if}-{$hospital->nota_def_idoso}">{$hospital->nota_def_idoso} {if $hospital->nota_def_idoso == 1}estrela{else}estrelas{/if}</td>
						</tr>
						<tr>
							<td headers="atributo-{$hospital->cnes_id}">Medicamentos</td>
							<td headers="nota-{$hospital->cnes_id}" class="{if $hospital->nota_medicamento == 1}estrela{else}estrelas{/if}-{$hospital->nota_medicamento}">{$hospital->nota_medicamento}  {if $hospital->nota_medicamento == 1}estrela{else}estrelas{/if}</td>
						</tr>
						<tr>
							<td headers="atributo-{$hospital->cnes_id}">Equipamenos</td>
							<td headers="nota-{$hospital->cnes_id}" class="{if $hospital->nota_equipamento == 1}estrela{else}estrelas{/if}-{$hospital->nota_equipamento}">{$hospital->nota_equipamento} {if $hospital->nota_equipamento == 1}estrela{else}estrelas{/if}</td> 
						</tr>
					</tbody>
				</table>
				
			</div>

		</li>

		{/if}
	{/foreach}

{/if}

</ol>



