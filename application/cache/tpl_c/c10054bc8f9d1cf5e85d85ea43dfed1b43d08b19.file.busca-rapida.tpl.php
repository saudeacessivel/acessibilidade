<?php /* Smarty version Smarty-3.1.19, created on 2014-10-22 08:18:57
         compiled from "/var/www/clients/client1/web839/web/application/views/site/busca-rapida.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204994463654478491459448-98173526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c10054bc8f9d1cf5e85d85ea43dfed1b43d08b19' => 
    array (
      0 => '/var/www/clients/client1/web839/web/application/views/site/busca-rapida.tpl',
      1 => 1413973061,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204994463654478491459448-98173526',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hospitais' => 0,
    'dadoUsado' => 0,
    'titulo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_544784914eb557_69958845',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544784914eb557_69958845')) {function content_544784914eb557_69958845($_smarty_tpl) {?>


<!-- Mapa Resultado Busca -->

<article class="mapa content" data-ajax='0'>


	<?php if (isset($_smarty_tpl->tpl_vars['hospitais']->value)) {?>
	<div class="conteudo clear-fix">
		<div class="col-esq">
			<h2><strong>Postos de saúde</strong> mais próximos(<?php echo $_smarty_tpl->tpl_vars['dadoUsado']->value;?>
) <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
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


	<?php } else { ?>
	<div class="conteudo clear-fix">
		<div class="col-esq">
			<h2>Não conseguimos localizar este local, seja mais específico e tente novamente!</h2>
		</div>
	</div>
		
	<?php }?>

</article>


<?php }} ?>
