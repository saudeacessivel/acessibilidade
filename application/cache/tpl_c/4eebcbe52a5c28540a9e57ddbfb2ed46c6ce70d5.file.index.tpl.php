<?php /* Smarty version Smarty-3.1.19, created on 2014-12-01 18:17:54
         compiled from "/var/www/clients/client1/web839/web/application/views/site/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1707057929543287d0d71070-05904327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4eebcbe52a5c28540a9e57ddbfb2ed46c6ce70d5' => 
    array (
      0 => '/var/www/clients/client1/web839/web/application/views/site/index.tpl',
      1 => 1417452313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1707057929543287d0d71070-05904327',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543287d0e98a45_49086358',
  'variables' => 
  array (
    'busca' => 0,
    'contraste' => 0,
    'endereco' => 0,
    'ir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543287d0e98a45_49086358')) {function content_543287d0e98a45_49086358($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>

    <title><?php if (isset($_smarty_tpl->tpl_vars['busca']->value)) {?> Postos de saúde mais próximos a <?php echo $_smarty_tpl->tpl_vars['busca']->value;?>
 |<?php }?> Saúde Acessível</title>
    <meta name="description" content="Confira os postos e unidades básicas de saúde mais próximas a você acesse já!"/>
    <meta name="keywords" content="saúde acessível, dados abertos<?php if (isset($_smarty_tpl->tpl_vars['busca']->value)) {?>, <?php echo $_smarty_tpl->tpl_vars['busca']->value;?>
 <?php }?>  "/>

    <link href="/assets/css/reset.css" rel="stylesheet" type="text/css" />
    <?php if (isset($_smarty_tpl->tpl_vars['contraste']->value)&&$_smarty_tpl->tpl_vars['contraste']->value==1) {?>
    <link href="/assets/css/contraste.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/responsive-contraste.css" rel="stylesheet" type="text/css" />
    <?php } else { ?>
    <link href="/assets/css/layout.css" rel="stylesheet" type="text/css" />
    
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['busca']->value)) {?>
        <link href="http://www.saudeacessivel.com.br/<?php echo $_smarty_tpl->tpl_vars['endereco']->value;?>
" rel="canonical">
    <?php }?>
    <link href="/assets/css/normalize.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/component.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/responsive.css" rel="stylesheet" type="text/css" />

    <link href="/assets/css/MyFontsWebfontsKit.css" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,900,300' rel='stylesheet' type='text/css'>
    


    <link rel="apple-touch-icon" href="/assets/img/iphone.png"/>

    <!-- INICIALIZA-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>

    <!-- Maps API Javascript -->
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>


    <script src="/assets/js/site.js" type="text/javascript"></script>
    <script src="/assets/js/modernizr.custom.js" type="text/javascript"></script>
    <script src="/assets/js/classie.js" type="text/javascript"></script>
    
    <script src="/assets/js/index.js"></script>

    <script src="/assets/js/annyang.js"></script>
</head>

<body>


    <!-- Topo -->

    <header class="topo" role="banner" id="inicial">

        <div class="conteudo clear-fix">

            <div class="acessibilidade">
                <ul>
                    <?php if (isset($_smarty_tpl->tpl_vars['busca']->value)) {?>
                        <li><a href="#conteudo-hospitais" class="scroll-top" >conteúdo</a></li>
                    <?php } else { ?>
                        <li><a href="#mapa" class="scroll-top" >conteúdo</a></li>
                    <?php }?>

                    <li class="diminui"><a href="" title="Dimuir texto" class="ajustar-fonte" data-tipo="-" >-</a></li>
                    <li class="aumenta"><a href="" title="Aumentar texto" class="ajustar-fonte" data-tipo="+" >+</a></li>
                    <li><a href="<?php if (isset($_smarty_tpl->tpl_vars['contraste']->value)) {?><?php if (isset($_smarty_tpl->tpl_vars['endereco']->value)) {?>/<?php echo $_smarty_tpl->tpl_vars['endereco']->value;?>
<?php } else { ?>/<?php }?><?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['endereco']->value)) {?>/contraste/<?php echo $_smarty_tpl->tpl_vars['endereco']->value;?>
<?php } else { ?>/contraste<?php }?><?php }?>"><?php if (isset($_smarty_tpl->tpl_vars['contraste']->value)) {?> baixo <?php } else { ?> alto <?php }?>contraste</a></li>
                    <li><a href="<?php if (isset($_smarty_tpl->tpl_vars['contraste']->value)) {?>/contraste<?php }?>/acessibilidade">acessibilidade</a></li>
                </ul>        
            </div>

            <div class="logo">
                <a href="<?php if (isset($_smarty_tpl->tpl_vars['contraste']->value)) {?>/contraste<?php } else { ?>/<?php }?>" title="Saúde Acessivel"><img src="/assets/img/saude-acessivel<?php if (isset($_smarty_tpl->tpl_vars['contraste']->value)) {?>-contraste<?php }?>.svg" alt="Saúde Acessível" role="img" aria-label="Saúde Acessível" /></a>
            </div>

        </div>       

    </header>

    <!-- Busca -->

    <section class="busca" id="saudeacessivel">
        <div class="conteudo clear-fix">
            <h1><a href="#mapa" class="scroll-to" accesskey="0">Encontre um <strong>posto de saúde</strong></a></h1>
            <form action="<?php if (isset($_smarty_tpl->tpl_vars['contraste']->value)) {?>/contrasteb/<?php } else { ?>/b/<?php }?>" role="search" data-contraste="<?php if (isset($_smarty_tpl->tpl_vars['contraste']->value)) {?>1<?php } else { ?>0<?php }?>">

                <div class="form-grupo">
                    <label for="busca">digite aqui sua cidade, CEP ou endereço</label>
                    <input type="text" name="b" placeholder="digite aqui sua cidade, CEP ou endereço" id="busca" value="<?php if (isset($_smarty_tpl->tpl_vars['busca']->value)) {?><?php echo $_smarty_tpl->tpl_vars['busca']->value;?>
<?php }?>">
                </div>

                <div class="form-grupo-btn">
                    <input type="submit" id="botao-buscar" value="Buscar" />
                </div>

            </form>
            <p>A forma mais simples de encontrar um posto de saúde acessível próximo a você!</p>
        </div>

        <div class="busca-rapida">
            <div class="conteudo clear-fix">
                <h2 class="legenda" tabindex="0">
                    Busca rápida
                </h2>

                <ul>
                    <li><a href="<?php if (isset($_smarty_tpl->tpl_vars['contraste']->value)) {?>/contraste<?php }?>/deficientes"><span>busca rápida para</span> para deficientes</a></li>
                    <li><a href="<?php if (isset($_smarty_tpl->tpl_vars['contraste']->value)) {?>/contraste<?php } else { ?>/<?php }?>#mapa"><span>busca rápida para</span> mais próximos</a></li>
                    <li><a href="<?php if (isset($_smarty_tpl->tpl_vars['contraste']->value)) {?>/contraste<?php }?>/equipamentos"><span>busca rápida para</span>melhores equipados</a></li>
                    <li><a href="<?php if (isset($_smarty_tpl->tpl_vars['contraste']->value)) {?>/contraste<?php }?>/medicamentos"><span>busca rápida para</span>mais medicamentos</a></li>
                    <li><a href="<?php if (isset($_smarty_tpl->tpl_vars['contraste']->value)) {?>/contraste<?php }?>/idosos"><span>busca rápida para</span>para idosos</a></li>
                </ul>             
            </div>

        </div>

    </section>


    <?php echo $_smarty_tpl->tpl_vars['ir']->value;?>


    <!-- Footer -->

    <footer role="contentinfo">

        <div class="conteudo clear-fix">

            <div class="logo-footer">
                <img src="/assets/img/logo-footer<?php if (isset($_smarty_tpl->tpl_vars['contraste']->value)) {?>-contraste<?php }?>.svg" alt="Saúde Acessível marca no rodapé">
            </div>

            <div class="dados-abertos">
                <img src="/assets/img/acesso-informacao<?php if (isset($_smarty_tpl->tpl_vars['contraste']->value)) {?>-contraste<?php }?>.png" role="img" aria-label="Acesso à informação" alt="Acesso à informação">
                <img src="/assets/img/dados-abertos<?php if (isset($_smarty_tpl->tpl_vars['contraste']->value)) {?>-contraste<?php }?>.png" role="img" aria-label="Dados Abertos Governo Federal" alt="Dados Abertos Governo Federal">
            </div>


        </div>

        <div class="assinatura">
            <div class="conteudo clear-fix">
                <a href="http://www.mixd.com.br">Desenvolvido por Mixd Internet</a>
            </div>
        </div>

    </footer>


</body>
</html>
<?php }} ?>
