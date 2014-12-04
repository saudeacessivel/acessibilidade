<?php /* Smarty version Smarty-3.1.19, created on 2014-10-05 17:11:47
         compiled from "/Users/matheush/Sites/ubs/application/views/site/principal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:347609717542c9a95ba1a38-02590636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '134bb31057f51004d067e84327192c8030cad489' => 
    array (
      0 => '/Users/matheush/Sites/ubs/application/views/site/principal.tpl',
      1 => 1412539842,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '347609717542c9a95ba1a38-02590636',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542c9a95bccba4_94875726',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542c9a95bccba4_94875726')) {function content_542c9a95bccba4_94875726($_smarty_tpl) {?><header class="topo">

		<div class="acessibilidade">
			<ul>
				<li class="diminui">
					<a href="#" title="Dimuir texto" class="ajustar-fonte" data-tipo="-" >-</a>
				</li>
				<li class="aumenta">
					<a href="#" title="Aumentar texto" class="ajustar-fonte" data-tipo="+" >+</a>
				</li>
				<li>
					<a href="/html/index-contraste.html" title="Site com mais contraste">contraste</a>
				</li>
				<li>
					<a href="/html/acessibilidade.html" title="Acessibilidade do site">acessibilidade</a>
				</li>
			</ul>  
		</div>

		<h1 id="Encontre%20um%20Posto%20de%20Saúde!">Encontre um <strong>Posto de Saúde</strong>!</h1>

		<form class="formulario-busca-posto-saude">
			<fieldset>
				<label for="busque-posto-saude">
					<input type="text" name="busca-posto-saude" id="busque-posto-saude" placeholder="Digite aqui sua busca por postos de saúde">
				</label>

				<button type="submit" name="buscar" id="buscar"> <i class="fa fa-search"></i> Buscar</button>
			</fieldset>
		</form>

		<div class="busca-rapida">
			<ul>
				<li><a href="#Sujestões%20de%20Postos%20de%20Saúde%20mais%20próximos" title="encontre os mais próximos">encontre os mais próximos</a></li>
				<li><a href="" title="encontre os melhores em medicamentos">encontre os melhores em medicamentos</a></li>
				<li><a href="" title="encontre os melhores para deficientes">encontre os melhores para deficientes</a></li>
				<li><a href="" title="encontre os melhores para idosos">encontre os melhores para idosos</a></li>
				<li><a href="" title="encontre os melhores em estrutura">encontre os melhores em estrutura</a></li>
			</ul>
		</div>
	</header>

	<section class="lista-posto-saude">
		<h2 id="Sujestões%20de%20Postos%20de%20Saúde%20mais%20próximos">Sujestões de <strong>Postos de Saúde</strong> mais próximos.</h2>
		
		<div id="mapa"></div>

		<ul>
			<li class="load">
				<img src="/assets/img/loader.gif" alt="estamos carregando os Postos de Saúde mais próximos, aguarde alguns instantes">
				<p>Estamos carregando os Postos de Saúde mais próximos, aguarde alguns instantes</p>
			<li>
		<ul>
	</section><?php }} ?>
