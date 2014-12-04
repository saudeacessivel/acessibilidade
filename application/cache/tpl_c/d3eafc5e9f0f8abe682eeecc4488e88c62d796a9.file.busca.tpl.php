<?php /* Smarty version Smarty-3.1.19, created on 2014-12-02 15:33:24
         compiled from "/var/www/clients/client1/web839/web/application/views/site/busca.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12698837554328842888858-50266412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3eafc5e9f0f8abe682eeecc4488e88c62d796a9' => 
    array (
      0 => '/var/www/clients/client1/web839/web/application/views/site/busca.tpl',
      1 => 1417541600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12698837554328842888858-50266412',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54328842a7fa43_49223204',
  'variables' => 
  array (
    'hospitais' => 0,
    'busca' => 0,
    'paginacao' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54328842a7fa43_49223204')) {function content_54328842a7fa43_49223204($_smarty_tpl) {?>


<!-- Mapa Resultado Busca -->

<article class="mapa content" data-ajax='0'>


	<?php if (isset($_smarty_tpl->tpl_vars['hospitais']->value)) {?>
	<div class="conteudo clear-fix">
		<div class="col-esq">
			<h2><strong>Postos de saúde</strong> mais próximos a <?php echo $_smarty_tpl->tpl_vars['busca']->value;?>
</h2>
		</div>

		<div class="col-dir links-mapa">
			<h3>Selecione o tipo de visualização</h3>
			<a href="#" class="lista active" data-mapa="false">Listagem</a>
			<a href="#" class="mapa" data-mapa="true">Mapa grande</a>
		</div>
	</div>

	<div class="mapa-visualiza conteudo clear-fix">
		
	</div>
	
	<?php echo $_smarty_tpl->getSubTemplate ("site/hospitais.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
	<div class="conteudo clear-fix pagination-margem">
		<div><?php echo $_smarty_tpl->tpl_vars['paginacao']->value['links'];?>
</div>
	</div>

	<?php } else { ?>
	<div class="conteudo clear-fix">
		<div class="col-esq">
			<h2>Não conseguimos localizar este local, seja mais específico e tente novamente!</h2>
		</div>
	</div>
		
	<?php }?>

</article>


<?php }} ?>
