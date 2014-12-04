<?php /* Smarty version Smarty-3.1.19, created on 2014-10-06 20:34:37
         compiled from "/var/www/clients/client1/web51/web/application/views/site/busca.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87127628154328253316fd9-38988760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89928baba3340a393ed31d61480596f11fbff378' => 
    array (
      0 => '/var/www/clients/client1/web51/web/application/views/site/busca.tpl',
      1 => 1412638466,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87127628154328253316fd9-38988760',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5432825339a786_85245553',
  'variables' => 
  array (
    'hospitais' => 0,
    'busca' => 0,
    'paginacao' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5432825339a786_85245553')) {function content_5432825339a786_85245553($_smarty_tpl) {?>


<!-- Mapa Resultado Busca -->

<article class="mapa content">
	<?php if (isset($_smarty_tpl->tpl_vars['hospitais']->value)) {?>
	<div class="conteudo clear-fix">
		<div class="col-esq">
			<h2><strong>Postos de saúde</strong> mais próximos a <?php echo $_smarty_tpl->tpl_vars['busca']->value;?>
</h2>
		</div>
	</div>
	

	<?php echo $_smarty_tpl->getSubTemplate ("site/hospitais.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
	<div class="conteudo clear-fix">
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
