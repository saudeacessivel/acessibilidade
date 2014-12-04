<?php /* Smarty version Smarty-3.1.19, created on 2014-10-06 00:18:53
         compiled from "/Users/matheush/Sites/saudeacessivel/application/views/site/principal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14084957495431f64a901044-95298813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b9b45c3cb02b128a630335577efab0e267151da' => 
    array (
      0 => '/Users/matheush/Sites/saudeacessivel/application/views/site/principal.tpl',
      1 => 1412565372,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14084957495431f64a901044-95298813',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5431f64a927a99_36971843',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5431f64a927a99_36971843')) {function content_5431f64a927a99_36971843($_smarty_tpl) {?>
<!-- Topo -->

<header class="topo" role="banner" id="inicial">

	<div class="conteudo clear-fix">

		<div class="acessibilidade">
			<ul>
				<li><a href="#saudeacessivel" title="Página Inicial" class="scroll-to" >conteúdo</a></li>
				<li class="diminui"><a href="" title="Dimuir texto" class="ajustar-fonte" data-tipo="-" >-</a></li>
				<li class="aumenta"><a href="" title="Aumentar texto" class="ajustar-fonte" data-tipo="+" >+</a></li>
				<li><a href="/html/index-contraste.html" title="Site com mais contraste">contraste</a></li>
				<li><a href="/html/acessibilidade.html" title="Acessibilidade do site">acessibilidade</a></li>
			</ul>        
		</div>

		<div class="logo">
			<img src="/assets/img/saude-acessivel.svg" alt="Saúde Acessível" role="img" aria-label="Saúde Acessível" />
		</div>

	</div>       

</header>

<!-- Busca -->

<section class="busca" id="saudeacessivel">
	<div class="conteudo clear-fix">
		<h1>Encontre um <strong>posto de saúde</strong></h1>
		<form role="form">

			<div class="form-grupo">
				<label for="busca">digite aqui sua cidade, CEP ou endereço</label>
				<input type="text" placeholder="digite aqui sua cidade, CEP ou endereço" id="busca">
			</div>

			<div class="form-grupo-btn">
				<label for="botao-buscar">Buscar</label>    
				<input type="submit" id="botao-buscar" value="Buscar" />
			</div>

		</form>
		<p>a forma mais simples de você encontrar postos de saúde mais próximos de você!</p>
	</div>

	<div class="busca-rapida">
		<div class="conteudo clear-fix">
			<div class="legenda">
				Busca rápida

			</div>

			<ul>
				<li><a href="">para deficientes</a></li>
				<li><a href="">mais próximos</a></li>
				<li><a href="">melhores equipados</a></li>
				<li><a href="">atendimento 24 horas</a></li>
				<li><a href="">para idosos</a></li>
			</ul>             
		</div>

	</div>

</section>

<!-- Mapa Resultado Busca -->

<article class="mapa content">

	<div class="conteudo clear-fix">

		<div class="col-esq">
			<h2><strong>Postos de saúde</strong> mais próximos de você</h2>
			<span>encontramos alguns postos de saúde próximos a você, confira abaixo:</span>
		</div>

		<div class="col-dir">
			<h3>Selecione o tipo de visualização</h3>
			<a href="#" class="lista">Listagem</a>
			<a href="#" class="mapa active">Mapa grande</a>
		</div>

	</div>

	<div id="mapa"></div>
	
	
	

</article> <?php }} ?>
