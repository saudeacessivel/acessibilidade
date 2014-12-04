<?php /* Smarty version Smarty-3.1.19, created on 2014-10-06 21:54:19
         compiled from "/var/www/clients/client1/web51/web/application/views/site/hospitais.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5190271055433081ae024e5-25128346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bc8b5fc21594d2de74b69f6acd9ce316746c3a2' => 
    array (
      0 => '/var/www/clients/client1/web51/web/application/views/site/hospitais.tpl',
      1 => 1412643258,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5190271055433081ae024e5-25128346',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5433081ae81559_41627287',
  'variables' => 
  array (
    'hospitais' => 0,
    'hospital' => 0,
    'latitude_mapa' => 0,
    'longitude_mapa' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5433081ae81559_41627287')) {function content_5433081ae81559_41627287($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['hospitais']->value)&&$_smarty_tpl->tpl_vars['hospitais']->value!='') {?>
	<?php  $_smarty_tpl->tpl_vars['hospital'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hospital']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hospitais']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hospital']->key => $_smarty_tpl->tpl_vars['hospital']->value) {
$_smarty_tpl->tpl_vars['hospital']->_loop = true;
?>
		<?php if (isset($_smarty_tpl->tpl_vars['hospital']->value->nome)) {?>
		<div class="conteudo clear-fix listagem" id="<?php echo $_smarty_tpl->tpl_vars['hospital']->value->cnes_id;?>
">

			<div class="col-esq">

				<div class="mapa" data-cnes="<?php echo $_smarty_tpl->tpl_vars['hospital']->value->cnes_id;?>
" data-nome="<?php echo $_smarty_tpl->tpl_vars['hospital']->value->nome;?>
" data-latitude="<?php echo $_smarty_tpl->tpl_vars['hospital']->value->latitude;?>
" data-longitude="<?php echo $_smarty_tpl->tpl_vars['hospital']->value->longitude;?>
">
					<iframe width="100%" height="100%" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/directions?origin=<?php echo $_smarty_tpl->tpl_vars['latitude_mapa']->value;?>
%2C<?php echo $_smarty_tpl->tpl_vars['longitude_mapa']->value;?>
&destination=<?php echo $_smarty_tpl->tpl_vars['hospital']->value->latitude;?>
%2C<?php echo $_smarty_tpl->tpl_vars['hospital']->value->longitude;?>
&key=AIzaSyAax8fdEvFPskcLwKLb2NvrQ67iR-DQGVU&maptype=satellite"></iframe>
				</div>

				<div class="ubs">
					<h4><a href="#<?php echo $_smarty_tpl->tpl_vars['hospital']->value->cnes_id;?>
"><?php echo ucwords(strtolower($_smarty_tpl->tpl_vars['hospital']->value->nome));?>
 - <?php echo ucwords(strtolower($_smarty_tpl->tpl_vars['hospital']->value->cidade));?>
</a></h4>
					<div class="box">Endereço completo</div>
					<address>
						<?php echo ucwords(strtolower($_smarty_tpl->tpl_vars['hospital']->value->endereco));?>
 - <?php echo ucwords(strtolower($_smarty_tpl->tpl_vars['hospital']->value->bairro));?>
 - <?php echo ucwords(strtolower($_smarty_tpl->tpl_vars['hospital']->value->cidade));?>

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
					
					<div style="display:none;"><?php echo $_smarty_tpl->tpl_vars['hospital']->value->nota_estrutura;?>
</div>
				</li>

				<li>
					Para deficiêntes e idosos
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

					<div style="display:none;"><?php echo $_smarty_tpl->tpl_vars['hospital']->value->nota_def_idoso;?>
</div>
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

					<div style="display:none;"><?php echo $_smarty_tpl->tpl_vars['hospital']->value->nota_medicamento;?>
</div>
					
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
					
					<div style="display:none;"><?php echo $_smarty_tpl->tpl_vars['hospital']->value->nota_equipamento;?>
</div>
				</li>
			</ul>

			</div>

		</div>
		<?php }?>
	<?php } ?>

<?php }?>



<?php }} ?>
