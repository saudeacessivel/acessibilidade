<?php /* Smarty version Smarty-3.1.19, created on 2014-10-06 20:35:11
         compiled from "/var/www/clients/client1/web51/web/application/views/site/principal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12719186275432eda22f0517-60093754%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1932d835ed158a205199ea641e74acd483653af' => 
    array (
      0 => '/var/www/clients/client1/web51/web/application/views/site/principal.tpl',
      1 => 1412638509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12719186275432eda22f0517-60093754',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5432eda230a117_61736913',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5432eda230a117_61736913')) {function content_5432eda230a117_61736913($_smarty_tpl) {?>
<!-- Mapa Resultado Busca -->

<article class="mapa content">

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
