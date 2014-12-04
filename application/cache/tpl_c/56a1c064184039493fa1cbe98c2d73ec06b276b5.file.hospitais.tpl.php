<?php /* Smarty version Smarty-3.1.19, created on 2014-12-03 10:51:45
         compiled from "/var/www/clients/client1/web839/web/application/views/site/hospitais.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179709816543342e026c657-81142342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56a1c064184039493fa1cbe98c2d73ec06b276b5' => 
    array (
      0 => '/var/www/clients/client1/web839/web/application/views/site/hospitais.tpl',
      1 => 1417611016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179709816543342e026c657-81142342',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543342e04905c5_97322275',
  'variables' => 
  array (
    'hospitais' => 0,
    'hospital' => 0,
    'n' => 0,
    'contraste' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543342e04905c5_97322275')) {function content_543342e04905c5_97322275($_smarty_tpl) {?>
<ol id="conteudo-hospitais">

<?php $_smarty_tpl->tpl_vars['n'] = new Smarty_variable(1, null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['hospitais']->value)&&$_smarty_tpl->tpl_vars['hospitais']->value!='') {?>
	<?php  $_smarty_tpl->tpl_vars['hospital'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hospital']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hospitais']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hospital']->key => $_smarty_tpl->tpl_vars['hospital']->value) {
$_smarty_tpl->tpl_vars['hospital']->_loop = true;
?>
		<?php if (isset($_smarty_tpl->tpl_vars['hospital']->value->nome)) {?>

		<li class="conteudo clear-fix listagem" id="<?php echo $_smarty_tpl->tpl_vars['hospital']->value->cnes_id;?>
" >

			<div class="col-esq">

				<div id="mapa-<?php echo $_smarty_tpl->tpl_vars['hospital']->value->cnes_id;?>
" class="mapa google-api" data-cnes="<?php echo $_smarty_tpl->tpl_vars['hospital']->value->cnes_id;?>
" data-nome="<?php echo ucwords(strtolower($_smarty_tpl->tpl_vars['hospital']->value->nome));?>
" data-latitude="<?php echo $_smarty_tpl->tpl_vars['hospital']->value->latitude;?>
" data-longitude="<?php echo $_smarty_tpl->tpl_vars['hospital']->value->longitude;?>
">
					
				</div>

				<div class="ubs">
					<h4><a class="scroll-to" href="#<?php echo $_smarty_tpl->tpl_vars['hospital']->value->cnes_id;?>
" accesskey="<?php echo $_smarty_tpl->tpl_vars['n']->value++;?>
" title="<?php echo ucwords(strtolower($_smarty_tpl->tpl_vars['hospital']->value->nome));?>
 - <?php echo ucwords(strtolower($_smarty_tpl->tpl_vars['hospital']->value->cidade));?>
"><?php echo ucwords(strtolower($_smarty_tpl->tpl_vars['hospital']->value->nome));?>
 - <?php echo ucwords(strtolower($_smarty_tpl->tpl_vars['hospital']->value->cidade));?>
</a></h4>
					<div class="box">Endereço completo</div>
					<address>
						<?php echo ucwords(strtolower($_smarty_tpl->tpl_vars['hospital']->value->endereco));?>
 <?php if ($_smarty_tpl->tpl_vars['hospital']->value->numero!='') {?>, <?php echo ucwords(strtolower($_smarty_tpl->tpl_vars['hospital']->value->numero));?>
<?php }?> - <?php echo ucwords(strtolower($_smarty_tpl->tpl_vars['hospital']->value->bairro));?>
 - <?php echo ucwords(strtolower($_smarty_tpl->tpl_vars['hospital']->value->cidade));?>
  - Telefone: <?php echo ucwords(strtolower($_smarty_tpl->tpl_vars['hospital']->value->telefone));?>

					</address>
					<div class="comentarios">
                    	<a href="http://www.saudeacessivel.com.br/<?php if (isset($_smarty_tpl->tpl_vars['contraste']->value)&&$_smarty_tpl->tpl_vars['contraste']->value==1) {?>contraste/<?php }?>posto-saude/<?php echo $_smarty_tpl->tpl_vars['hospital']->value->cnes_id;?>
">ver mais detalhes</a>
                    </div>
				</div>

			</div>

			<div class="col-dir">

				<table>
					<caption>Classificações deste Posto de Saúde</caption> 
					<thead>
						<tr>
							<th id="atributo-<?php echo $_smarty_tpl->tpl_vars['hospital']->value->cnes_id;?>
">Atributo</th>
							<th id="nota-<?php echo $_smarty_tpl->tpl_vars['hospital']->value->cnes_id;?>
">Nota</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td headers="atributo-<?php echo $_smarty_tpl->tpl_vars['hospital']->value->cnes_id;?>
">Estrutura física</td>
							<td headers="nota-<?php echo $_smarty_tpl->tpl_vars['hospital']->value->cnes_id;?>
" class="<?php if ($_smarty_tpl->tpl_vars['hospital']->value->nota_estrutura==1) {?>estrela<?php } else { ?>estrelas<?php }?>-<?php echo $_smarty_tpl->tpl_vars['hospital']->value->nota_estrutura;?>
"><?php echo $_smarty_tpl->tpl_vars['hospital']->value->nota_estrutura;?>
 <?php if ($_smarty_tpl->tpl_vars['hospital']->value->nota_estrutura==1) {?>estrela<?php } else { ?>estrelas<?php }?></td>
						</tr>
						<tr>
							<td headers="atributo-<?php echo $_smarty_tpl->tpl_vars['hospital']->value->cnes_id;?>
">Para deficiêntes e idosos</td>
							<td headers="nota-<?php echo $_smarty_tpl->tpl_vars['hospital']->value->cnes_id;?>
" class="<?php if ($_smarty_tpl->tpl_vars['hospital']->value->nota_def_idoso==1) {?>estrela<?php } else { ?>estrelas<?php }?>-<?php echo $_smarty_tpl->tpl_vars['hospital']->value->nota_def_idoso;?>
"><?php echo $_smarty_tpl->tpl_vars['hospital']->value->nota_def_idoso;?>
 <?php if ($_smarty_tpl->tpl_vars['hospital']->value->nota_def_idoso==1) {?>estrela<?php } else { ?>estrelas<?php }?></td>
						</tr>
						<tr>
							<td headers="atributo-<?php echo $_smarty_tpl->tpl_vars['hospital']->value->cnes_id;?>
">Medicamentos</td>
							<td headers="nota-<?php echo $_smarty_tpl->tpl_vars['hospital']->value->cnes_id;?>
" class="<?php if ($_smarty_tpl->tpl_vars['hospital']->value->nota_medicamento==1) {?>estrela<?php } else { ?>estrelas<?php }?>-<?php echo $_smarty_tpl->tpl_vars['hospital']->value->nota_medicamento;?>
"><?php echo $_smarty_tpl->tpl_vars['hospital']->value->nota_medicamento;?>
  <?php if ($_smarty_tpl->tpl_vars['hospital']->value->nota_medicamento==1) {?>estrela<?php } else { ?>estrelas<?php }?></td>
						</tr>
						<tr>
							<td headers="atributo-<?php echo $_smarty_tpl->tpl_vars['hospital']->value->cnes_id;?>
">Equipamenos</td>
							<td headers="nota-<?php echo $_smarty_tpl->tpl_vars['hospital']->value->cnes_id;?>
" class="<?php if ($_smarty_tpl->tpl_vars['hospital']->value->nota_equipamento==1) {?>estrela<?php } else { ?>estrelas<?php }?>-<?php echo $_smarty_tpl->tpl_vars['hospital']->value->nota_equipamento;?>
"><?php echo $_smarty_tpl->tpl_vars['hospital']->value->nota_equipamento;?>
 <?php if ($_smarty_tpl->tpl_vars['hospital']->value->nota_equipamento==1) {?>estrela<?php } else { ?>estrelas<?php }?></td> 
						</tr>
					</tbody>
				</table>
				
			</div>

		</li>

		<?php }?>
	<?php } ?>

<?php }?>

</ol>



<?php }} ?>
