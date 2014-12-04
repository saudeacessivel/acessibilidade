<?php /* Smarty version Smarty-3.1.19, created on 2014-10-22 08:19:25
         compiled from "/var/www/clients/client1/web839/web/application/views/site/principal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:815180110543287d0d3d4d3-13310826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1919efb8732f4d5a55e58f29c1a658747f9fbc36' => 
    array (
      0 => '/var/www/clients/client1/web839/web/application/views/site/principal.tpl',
      1 => 1413973158,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '815180110543287d0d3d4d3-13310826',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543287d0d6bb73_42398327',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543287d0d6bb73_42398327')) {function content_543287d0d6bb73_42398327($_smarty_tpl) {?>
<!-- Mapa Resultado Busca -->

<article class="mapa content" data-ajax='1'>

	<div class="conteudo clear-fix">

		<div class="col-esq">
			<h2><strong>Postos de saúde</strong> mais próximos de você</h2>
			<span>encontramos alguns postos de saúde próximos a você, confira abaixo:</span>
		</div>

		<div class="col-dir links-mapa">
			<h3>Selecione o tipo de visualização</h3>
			<a href="#" class="lista" data-mapa="false">Listagem</a>
			<a href="#" class="mapa active" data-mapa="true">Mapa grande</a>
		</div>

	</div>
	
	<div class="mapa-visualiza conteudo clear-fix">
		<div id="mapa"></div>
	</div>
	
	

</article> <?php }} ?>
