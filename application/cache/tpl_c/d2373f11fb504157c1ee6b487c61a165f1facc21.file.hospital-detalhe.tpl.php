<?php /* Smarty version Smarty-3.1.19, created on 2014-12-03 10:50:51
         compiled from "/var/www/clients/client1/web839/web/application/views/site/hospital-detalhe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:320871706547eed1a578277-50024762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2373f11fb504157c1ee6b487c61a165f1facc21' => 
    array (
      0 => '/var/www/clients/client1/web839/web/application/views/site/hospital-detalhe.tpl',
      1 => 1417611020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '320871706547eed1a578277-50024762',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_547eed1a9602b7_23390287',
  'variables' => 
  array (
    'hospital' => 0,
    'contraste' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547eed1a9602b7_23390287')) {function content_547eed1a9602b7_23390287($_smarty_tpl) {?>
<!DOCTYPE HTML>
<html lang="pt">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>

    <title><?php echo ucwords(strtolower($_smarty_tpl->tpl_vars['hospital']->value->nome));?>
 - <?php echo ucwords(strtolower($_smarty_tpl->tpl_vars['hospital']->value->cidade));?>
</title>
    <meta name="description" content="Saúde Acessível"/>
    <meta name="keywords" content="saúde acessível, dados abertos"/>

    <link href="/assets/css/reset.css" rel="stylesheet" type="text/css" />


    <link href="/assets/css/normalize.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/component.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/acessibilidade.css" rel="stylesheet" type="text/css" />

    <?php if (isset($_smarty_tpl->tpl_vars['contraste']->value)&&$_smarty_tpl->tpl_vars['contraste']->value==1) {?>
        <link href="/assets/css/contraste.css" rel="stylesheet" type="text/css" />
    <?php } else { ?>
        <link href="/assets/css/layout.css" rel="stylesheet" type="text/css" />
    <?php }?>
    <link href="/assets/css/MyFontsWebfontsKit.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,900,300' rel='stylesheet' type='text/css'>
    <link rel="apple-touch-icon" href="../assets/img/iphone.png"/>
    <!-- INICIALIZA-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/js/site.js" type="text/javascript"></script>
    <script src="/assets/js/modernizr.custom.js" type="text/javascript"></script>
    <script src="/assets/js/classie.js" type="text/javascript"></script>
    <script src="/assets/js/annyang.js"></script>
     <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="/assets/js/index.js"></script>
    <script type="text/javascript" src="/assets/js/hospital-detalhe.js"></script>
</head>

<body>
    <!-- Topo -->
    <header class="topo interna" role="banner" id="inicial">
        <div class="conteudo clear-fix">
            <div class="acessibilidade">
                <ul>
                    <li><a href="#conteudo-hospitais" title="Página Inicial" class="scroll-to" >conteúdo</a></li>
                    <li class="diminui"><a href="" title="Dimuir texto" class="ajustar-fonte" data-tipo="-" >-</a></li>
                    <li class="aumenta"><a href="" title="Aumentar texto" class="ajustar-fonte" data-tipo="+" >+</a></li>
                    <li><a href="<?php if (isset($_smarty_tpl->tpl_vars['contraste']->value)) {?>/posto-saude/<?php echo $_smarty_tpl->tpl_vars['hospital']->value->cnes_id;?>
<?php } else { ?>/contraste/posto-saude/<?php echo $_smarty_tpl->tpl_vars['hospital']->value->cnes_id;?>
<?php }?>" title="Site com mais contraste" <?php if (isset($_smarty_tpl->tpl_vars['contraste']->value)) {?>id="contraste-ativado"<?php }?>><?php if (isset($_smarty_tpl->tpl_vars['contraste']->value)) {?> baixo <?php } else { ?> alto <?php }?>contraste</a></li>
                    <li><a href="<?php if (isset($_smarty_tpl->tpl_vars['contraste']->value)) {?>/contraste<?php }?>/acessibilidade" title="Acessibilidade do site">acessibilidade</a></li>
                </ul>        
            </div>
            <div class="logo">
                <a href="<?php if (isset($_smarty_tpl->tpl_vars['contraste']->value)) {?>/contraste<?php } else { ?>/<?php }?>"><img src="/assets/img/saude-acessivel<?php if (isset($_smarty_tpl->tpl_vars['contraste']->value)) {?>-contraste<?php }?>.svg" alt="Saúde Acessível" role="img" aria-label="Saúde Acessível" /></a>
            </div>
        </div>
    </header>

    <article class="mapa content interna-hospital" data-ajax='0'>

        <ol id="conteudo-hospitais">
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
                        <h1><a class="scroll-to" href="#<?php echo $_smarty_tpl->tpl_vars['hospital']->value->cnes_id;?>
" accesskey="1" title="<?php echo ucwords(strtolower($_smarty_tpl->tpl_vars['hospital']->value->nome));?>
 - <?php echo ucwords(strtolower($_smarty_tpl->tpl_vars['hospital']->value->cidade));?>
"><?php echo ucwords(strtolower($_smarty_tpl->tpl_vars['hospital']->value->nome));?>
 - <?php echo ucwords(strtolower($_smarty_tpl->tpl_vars['hospital']->value->cidade));?>
</a></h1>
                        <div class="box">Endereço completo</div>
                        <address>
                            <?php echo ucwords(strtolower($_smarty_tpl->tpl_vars['hospital']->value->endereco));?>
 <?php if ($_smarty_tpl->tpl_vars['hospital']->value->numero!='') {?>, <?php echo ucwords(strtolower($_smarty_tpl->tpl_vars['hospital']->value->numero));?>
<?php }?> - <?php echo ucwords(strtolower($_smarty_tpl->tpl_vars['hospital']->value->bairro));?>
 - <?php echo ucwords(strtolower($_smarty_tpl->tpl_vars['hospital']->value->cidade));?>
 - Telefone: <?php echo ucwords(strtolower($_smarty_tpl->tpl_vars['hospital']->value->telefone));?>

                        </address>
                        <div class="comentarios">
                            <a href="#comentario-facebook" class="scroll-to">ver comentários</a>
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
        </ol>

        <div class="conteudo-posto">
            <h2 class="detalhes-title">Confira a Localização</h2>
        </div>

       <div class="mapa-visualiza conteudo-posto">
            <div id="mapa"></div>
       </div>

       <div class="conteudo" id="comentario-facebook">
            <h3 class="detalhes-title">Já esteve nesta UBS? Comente o atendimento</h3>
            <div class="fb-comments" data-href="http://www.saudeacessivel.com.br/posto-saude/<?php echo $_smarty_tpl->tpl_vars['hospital']->value->cnes_id;?>
" data-width="100%" data-numposts="5" <?php if (isset($_smarty_tpl->tpl_vars['contraste']->value)) {?> data-colorscheme="dark"<?php } else { ?>data-colorscheme="light"<?php }?> ></div>

       </div>

    </article>

    <footer role="contentinfo">
        <div class="conteudo clear-fix">
            <div class="logo-footer">
                <img src="/assets/img/logo-footer.svg" alt="Saúde Acessível">
            </div>

            <div class="dados-abertos">
                <img src="/assets/img/acesso-informacao<?php if (isset($_smarty_tpl->tpl_vars['contraste']->value)) {?>-contraste<?php }?>.png" role="img" aria-label="Acesso à informação" alt="Acesso à informação">
                <img src="/assets/img/dados-abertos<?php if (isset($_smarty_tpl->tpl_vars['contraste']->value)) {?>-contraste<?php }?>.png" role="img" aria-label="Dados Abertos Governo Federal" alt="Dados Abertos Governo Federal">
            </div>


        </div>

        <div class="assinatura">
            <div class="conteudo clear-fix">
                <a href="http://www.mixd.com.br" title="Desenvolvido por Mixd Internet">Desenvolvido por Mixd Internet</a>
            </div>
        </div>

    </footer>
    <div id="fb-root"></div>
    <div id="mensagem_comando">
        <p role="alert" aria-atomic="true"></p>
    </div>

</body>
</html><?php }} ?>
