<?php /* Smarty version Smarty-3.1.19, created on 2014-10-06 22:22:26
         compiled from "/var/www/clients/client1/web51/web/application/views/site/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203387829754332b00062d78-04722485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73787bdcb2c207a55cd14ae10b0a6a7bfb15f1cc' => 
    array (
      0 => '/var/www/clients/client1/web51/web/application/views/site/index.tpl',
      1 => 1412644943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203387829754332b00062d78-04722485',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54332b000933e2_06887366',
  'variables' => 
  array (
    'contraste' => 0,
    'endereco' => 0,
    'busca' => 0,
    'ir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54332b000933e2_06887366')) {function content_54332b000933e2_06887366($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>

    <title>Saúde Acessível</title>
    <meta name="description" content="Saúde Acessível"/>
    <meta name="keywords" content="saúde acessível, dados abertos"/>

    <link href="/assets/css/reset.css" rel="stylesheet" type="text/css" />
    <?php if (isset($_smarty_tpl->tpl_vars['contraste']->value)&&$_smarty_tpl->tpl_vars['contraste']->value==1) {?>
    <link href="/assets/css/contraste.css" rel="stylesheet" type="text/css" />
    <?php } else { ?>
    <link href="/assets/css/layout.css" rel="stylesheet" type="text/css" />
    
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

</head>

<body>


    <!-- Topo -->

    <header class="topo" role="banner" id="inicial">

        <div class="conteudo clear-fix">

            <div class="acessibilidade">
                <ul>
                    <li><a href="#saudeacessivel" title="Página Inicial" class="scroll-to" >conteúdo</a></li>
                    <li class="diminui"><a href="" title="Dimuir texto" class="ajustar-fonte" data-tipo="-" >-</a></li>
                    <li class="aumenta"><a href="" title="Aumentar texto" class="ajustar-fonte" data-tipo="+" >+</a></li>
                    <li><a href="<?php if (isset($_smarty_tpl->tpl_vars['contraste']->value)) {?><?php if (isset($_smarty_tpl->tpl_vars['endereco']->value)) {?>/<?php echo $_smarty_tpl->tpl_vars['endereco']->value;?>
<?php } else { ?>/<?php }?><?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['endereco']->value)) {?>/contraste/<?php echo $_smarty_tpl->tpl_vars['endereco']->value;?>
<?php } else { ?>/contraste<?php }?><?php }?>" title="Site com mais contraste">contraste</a></li>
                    <li><a href="/html/acessibilidade.html" title="Acessibilidade do site">acessibilidade</a></li>
                </ul>        
            </div>

            <div class="logo">
                <img src="/assets/img/saude-acessivel<?php if (isset($_smarty_tpl->tpl_vars['contraste']->value)) {?>-contraste<?php }?>.svg" alt="Saúde Acessível" role="img" aria-label="Saúde Acessível" />
            </div>

        </div>       

    </header>

    <!-- Busca -->

    <section class="busca" id="saudeacessivel">
        <div class="conteudo clear-fix">
            <h1>Encontre um <strong>posto de saúde</strong></h1>
            <form role="form" data-contraste="<?php if (isset($_smarty_tpl->tpl_vars['contraste']->value)) {?>1<?php } else { ?>0<?php }?>">

                <div class="form-grupo">
                    <label for="busca">digite aqui sua cidade, CEP ou endereço</label>
                    <input type="text" placeholder="digite aqui sua cidade, CEP ou endereço" id="busca" value="<?php if (isset($_smarty_tpl->tpl_vars['busca']->value)) {?><?php echo $_smarty_tpl->tpl_vars['busca']->value;?>
<?php }?>">
                </div>

                <div class="form-grupo-btn">
                    <label for="botao-buscar">Buscar</label>    
                    <input type="submit" id="botao-buscar" value="Buscar" />
                </div>

            </form>
            <p>a forma mais simples de você encontrar postos de saúde mais próximos de você!</p>
        </div>

        <div class="busca-rapida">
            <div class="conteudo clear-fix">
                <div class="legenda">
                    Busca rápida

                </div>

                <ul>
                    <li><a href="<?php if (isset($_smarty_tpl->tpl_vars['contraste']->value)) {?>/contraste/<?php } else { ?>/<?php }?>?filtro=deficiente">para deficientes</a></li>
                    <li><a href="<?php if (isset($_smarty_tpl->tpl_vars['contraste']->value)) {?>/contraste/<?php } else { ?>/<?php }?>#mapa" >mais próximos</a></li>
                    <li><a href="<?php if (isset($_smarty_tpl->tpl_vars['contraste']->value)) {?>/contraste/<?php } else { ?>/<?php }?>?filtro=equipamento">melhores equipados</a></li>
                    <li><a href="<?php if (isset($_smarty_tpl->tpl_vars['contraste']->value)) {?>/contraste/<?php } else { ?>/<?php }?>?filtro=medicamento">mais medicamentos</a></li>
                    <li><a href="<?php if (isset($_smarty_tpl->tpl_vars['contraste']->value)) {?>/contraste/<?php } else { ?>/<?php }?>?filtro=idoso">para idosos</a></li>
                </ul>             
            </div>

        </div>

    </section>


    <?php echo $_smarty_tpl->tpl_vars['ir']->value;?>


    <!-- Footer -->

    <footer role="contentinfo">

        <div class="conteudo clear-fix">

            <div class="logo-footer">
                <img src="/assets/img/logo-footer<?php if (isset($_smarty_tpl->tpl_vars['contraste']->value)) {?>-contraste<?php }?>.svg" alt="Saúde Acessível">
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


</body>
</html>
<?php }} ?>
