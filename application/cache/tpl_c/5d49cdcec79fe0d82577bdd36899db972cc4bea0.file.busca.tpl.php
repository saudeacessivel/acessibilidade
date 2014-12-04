<?php /* Smarty version Smarty-3.1.19, created on 2014-10-06 00:52:34
         compiled from "/Users/matheush/Sites/saudeacessivel/application/views/site/busca.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190969548154320682e45645-41128598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d49cdcec79fe0d82577bdd36899db972cc4bea0' => 
    array (
      0 => '/Users/matheush/Sites/saudeacessivel/application/views/site/busca.tpl',
      1 => 1412567550,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190969548154320682e45645-41128598',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54320682eeffc7_63503400',
  'variables' => 
  array (
    'hospitais' => 0,
    'hospital' => 0,
    'i' => 0,
    'paginacao' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54320682eeffc7_63503400')) {function content_54320682eeffc7_63503400($_smarty_tpl) {?><article class="mapa">

	<?php if (isset($_smarty_tpl->tpl_vars['hospitais']->value)&&$_smarty_tpl->tpl_vars['hospitais']->value!='') {?>
	<?php  $_smarty_tpl->tpl_vars['hospital'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hospital']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hospitais']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hospital']->key => $_smarty_tpl->tpl_vars['hospital']->value) {
$_smarty_tpl->tpl_vars['hospital']->_loop = true;
?>
	<?php if (isset($_smarty_tpl->tpl_vars['hospital']->value->nome)) {?>
	<div class="conteudo clear-fix listagem">

		<div class="col-esq">

			<div class="mapa" data-latitude="<?php echo $_smarty_tpl->tpl_vars['hospital']->value->latitude;?>
" data-longitude="<?php echo $_smarty_tpl->tpl_vars['hospital']->value->longitude;?>
" data-nome="<?php echo ucwords(strtolower($_smarty_tpl->tpl_vars['hospital']->value->nome));?>
"></div>

			<div class="ubs">
				<h4><?php echo ucwords(strtolower($_smarty_tpl->tpl_vars['hospital']->value->nome));?>
 - <?php echo ucwords(strtolower($_smarty_tpl->tpl_vars['hospital']->value->cidade));?>
</h4>
				<div class="box">Endereço completo</div>
				<address>
					<?php echo ucwords(strtolower($_smarty_tpl->tpl_vars['hospital']->value->endereco));?>
 - <?php echo ucwords(strtolower($_smarty_tpl->tpl_vars['hospital']->value->bairro));?>

					<br>
					<?php echo ucwords(strtolower($_smarty_tpl->tpl_vars['hospital']->value->cidade));?>

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
					

					<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['hospital']->value->nota_estrutura;?>
<?php $_tmp1=ob_get_clean();?><?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 1;
  if ($_smarty_tpl->tpl_vars['i']->value<=(5-$_tmp1)) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<=(5-$_tmp1); $_smarty_tpl->tpl_vars['i']->value++) {
?>
					<span class="estrela-vazia">&nbsp;</span>
					<?php }} ?>

					<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['hospital']->value->nota_estrutura;?>
<?php $_tmp2=ob_get_clean();?><?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 1;
  if ($_smarty_tpl->tpl_vars['i']->value<=$_tmp2) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<=$_tmp2; $_smarty_tpl->tpl_vars['i']->value++) {
?>
					<span class="estrela-cheia">&nbsp;</span>
					<?php }} ?>

				</li>

				<li>
					Para deficientes e idosos
					<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['hospital']->value->nota_def_idoso;?>
<?php $_tmp3=ob_get_clean();?><?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 1;
  if ($_smarty_tpl->tpl_vars['i']->value<=(5-$_tmp3)) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<=(5-$_tmp3); $_smarty_tpl->tpl_vars['i']->value++) {
?>
					<span class="estrela-vazia">&nbsp;</span>
					<?php }} ?>
					
					<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['hospital']->value->nota_def_idoso;?>
<?php $_tmp4=ob_get_clean();?><?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 1;
  if ($_smarty_tpl->tpl_vars['i']->value<=$_tmp4) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<=$_tmp4; $_smarty_tpl->tpl_vars['i']->value++) {
?>
					<span class="estrela-cheia">&nbsp;</span>
					<?php }} ?>
				</li>

				<li>
					Medicamentos

					<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['hospital']->value->nota_medicamento;?>
<?php $_tmp5=ob_get_clean();?><?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 1;
  if ($_smarty_tpl->tpl_vars['i']->value<=(5-$_tmp5)) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<=(5-$_tmp5); $_smarty_tpl->tpl_vars['i']->value++) {
?>
					<span class="estrela-vazia">&nbsp;</span>
					<?php }} ?>
					
					<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['hospital']->value->nota_medicamento;?>
<?php $_tmp6=ob_get_clean();?><?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 1;
  if ($_smarty_tpl->tpl_vars['i']->value<=$_tmp6) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<=$_tmp6; $_smarty_tpl->tpl_vars['i']->value++) {
?>
					<span class="estrela-cheia">&nbsp;</span>
					<?php }} ?>
					
				</li>

				<li>
					Equipamenos
					<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['hospital']->value->nota_equipamento;?>
<?php $_tmp7=ob_get_clean();?><?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 1;
  if ($_smarty_tpl->tpl_vars['i']->value<=(5-$_tmp7)) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<=(5-$_tmp7); $_smarty_tpl->tpl_vars['i']->value++) {
?>
					<span class="estrela-vazia">&nbsp;</span>
					<?php }} ?>
					
					<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['hospital']->value->nota_equipamento;?>
<?php $_tmp8=ob_get_clean();?><?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 1;
  if ($_smarty_tpl->tpl_vars['i']->value<=$_tmp8) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<=$_tmp8; $_smarty_tpl->tpl_vars['i']->value++) {
?>
					<span class="estrela-cheia">&nbsp;</span>
					<?php }} ?>
				</li>
			</ul>

		</div>

	</div>
	<?php }?>
	<?php } ?>

	<div class="row">
		<div class="col-sm-6">
			<div class="dataTables_info" id="dt_basic_info"><?php echo $_smarty_tpl->tpl_vars['paginacao']->value['total'];?>
</div>
		</div>
		<div class="col-sm-6 text-right">
			<?php echo $_smarty_tpl->tpl_vars['paginacao']->value['links'];?>

		</div>
	</div>
	<?php } else { ?>
	<p>Não conseguimos localizar este local, tente novamente!</p>
	<?php }?>

</article>


<?php }} ?>
