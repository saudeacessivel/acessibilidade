<?php /* Smarty version Smarty-3.1.19, created on 2014-10-05 15:46:28
         compiled from "/Users/matheush/Sites/ubs/application/views/ajax/hospitais-proximos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1761710473542c9c68db0da6-77391325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5610eaf9f10023de8538f2359c50cd73c50fb5a' => 
    array (
      0 => '/Users/matheush/Sites/ubs/application/views/ajax/hospitais-proximos.tpl',
      1 => 1412534766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1761710473542c9c68db0da6-77391325',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542c9c68e36ca2_36954216',
  'variables' => 
  array (
    'hospitais' => 0,
    'hospital' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542c9c68e36ca2_36954216')) {function content_542c9c68e36ca2_36954216($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['hospitais']->value)&&$_smarty_tpl->tpl_vars['hospitais']->value!='') {?>
<?php  $_smarty_tpl->tpl_vars['hospital'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hospital']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hospitais']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hospital']->key => $_smarty_tpl->tpl_vars['hospital']->value) {
$_smarty_tpl->tpl_vars['hospital']->_loop = true;
?>
	<?php if (isset($_smarty_tpl->tpl_vars['hospital']->value->nome)) {?>
	<li>
		<div class="mapa-posto">
			<div class="mapa" data-latitude="<?php echo $_smarty_tpl->tpl_vars['hospital']->value->latitude;?>
" data-longitude="<?php echo $_smarty_tpl->tpl_vars['hospital']->value->longitude;?>
" data-nome="<?php echo ucwords(strtolower($_smarty_tpl->tpl_vars['hospital']->value->nome));?>
">
			</div>
		</div>

		<div class="dados-posto">
			<h3><?php echo ucwords(strtolower($_smarty_tpl->tpl_vars['hospital']->value->nome));?>
</h3>

			<div class="coluna-dados-posto">
				<p><strong>Endereço:</strong> <?php echo ucwords(strtolower($_smarty_tpl->tpl_vars['hospital']->value->endereco));?>
</p>
				<p><strong>Bairro:</strong> <?php echo ucwords(strtolower($_smarty_tpl->tpl_vars['hospital']->value->bairro));?>
</p>
				<p><strong>Cidade:</strong> <?php echo ucwords(strtolower($_smarty_tpl->tpl_vars['hospital']->value->cidade));?>
</p>
				<p><strong>Telefone:</strong> <?php echo $_smarty_tpl->tpl_vars['hospital']->value->telefone;?>
</p>
			</div>

			<div class="coluna-dados-posto last">
				<p>
					<strong>Estrutura Fisica</strong>
					<?php if ($_smarty_tpl->tpl_vars['hospital']->value->situacao_fisica=='Desempenho acima da média') {?>
						<i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star"></i>
					<?php } elseif ($_smarty_tpl->tpl_vars['hospital']->value->situacao_fisica=='Desempenho muito acima da média') {?>
						<i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i>
					<?php } else { ?>
						<i class="fa fa-star active"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
					<?php }?>
				</p>
				<p>
					<strong>Para Deficientes e Idosos</strong>
					<?php if ($_smarty_tpl->tpl_vars['hospital']->value->situacao_deficiente_fisico_idoso=='Desempenho acima da média') {?>
						<i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star"></i>
					<?php } elseif ($_smarty_tpl->tpl_vars['hospital']->value->situacao_deficiente_fisico_idoso=='Desempenho muito acima da média') {?>
						<i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i>
					<?php } else { ?>
						<i class="fa fa-star active"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
					<?php }?>
				</p>
				<p>
					<strong>Medicamentos</strong>
					<?php if ($_smarty_tpl->tpl_vars['hospital']->value->situacao_medicamentos=='Desempenho acima da média') {?>
						<i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star"></i>
					<?php } elseif ($_smarty_tpl->tpl_vars['hospital']->value->situacao_medicamentos=='Desempenho muito acima da média') {?>
						<i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i>
					<?php } else { ?>
						<i class="fa fa-star active"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
					<?php }?>
				</p>
				<p>
					<strong>Equipamentos</strong>
					<?php if ($_smarty_tpl->tpl_vars['hospital']->value->situacao_equipamentos=='Desempenho acima da média') {?>
						<i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star"></i>
					<?php } elseif ($_smarty_tpl->tpl_vars['hospital']->value->situacao_equipamentos=='Desempenho muito acima da média') {?>
						<i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i>
					<?php } else { ?>
						<i class="fa fa-star active"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
					<?php }?>
				</p>
			</div>

		</div>
	</li>
	<?php }?>
<?php } ?>
<?php }?>

<?php }} ?>
