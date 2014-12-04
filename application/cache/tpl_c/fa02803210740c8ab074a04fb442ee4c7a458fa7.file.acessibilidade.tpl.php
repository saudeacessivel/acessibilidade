<?php /* Smarty version Smarty-3.1.19, created on 2014-12-02 15:54:00
         compiled from "/var/www/clients/client1/web839/web/application/views/site/acessibilidade.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7408736585433fb228dd3a3-35948298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa02803210740c8ab074a04fb442ee4c7a458fa7' => 
    array (
      0 => '/var/www/clients/client1/web839/web/application/views/site/acessibilidade.tpl',
      1 => 1417542837,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7408736585433fb228dd3a3-35948298',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5433fb22958477_94625941',
  'variables' => 
  array (
    'contraste' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5433fb22958477_94625941')) {function content_5433fb22958477_94625941($_smarty_tpl) {?>
<!DOCTYPE HTML>
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
    <link href="/assets/css/acessibilidade.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/MyFontsWebfontsKit.css" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,900,300' rel='stylesheet' type='text/css'>

    <link rel="apple-touch-icon" href="../assets/img/iphone.png"/>


    <!-- INICIALIZA-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/js/site.js" type="text/javascript"></script>
    <script src="/assets/js/modernizr.custom.js" type="text/javascript"></script>
    <script src="/assets/js/classie.js" type="text/javascript"></script>
    <script src="/assets/js/annyang.js"></script>

</head>

<body>

    <!-- Topo -->

    <header class="topo interna" role="banner" id="inicial">

        <div class="conteudo clear-fix">

            <div class="acessibilidade">
                <ul>
                    <li><a href="#acessibilidade" title="Página Inicial" class="scroll-to" >conteúdo</a></li>
                    <li class="diminui"><a href="" title="Dimuir texto" class="ajustar-fonte" data-tipo="-" >-</a></li>
                    <li class="aumenta"><a href="" title="Aumentar texto" class="ajustar-fonte" data-tipo="+" >+</a></li>
                    <li><a href="<?php if (isset($_smarty_tpl->tpl_vars['contraste']->value)) {?>/acessibilidade<?php } else { ?>/contraste/acessibilidade<?php }?>" title="Site com mais contraste"><?php if (isset($_smarty_tpl->tpl_vars['contraste']->value)) {?> - <?php }?>contraste</a></li>
                    <li><a href="<?php if (isset($_smarty_tpl->tpl_vars['contraste']->value)) {?>/contraste<?php }?>/acessibilidade" title="Acessibilidade do site">acessibilidade</a></li>
                </ul>        
            </div>

            <div class="logo">
                <a href="<?php if (isset($_smarty_tpl->tpl_vars['contraste']->value)) {?>/contraste<?php } else { ?>/<?php }?>"><img src="/assets/img/saude-acessivel<?php if (isset($_smarty_tpl->tpl_vars['contraste']->value)) {?>-contraste<?php }?>.svg" alt="Saúde Acessível" role="img" aria-label="Saúde Acessível" /></a>
            </div>

        </div>



    </header>

    
    


<!-- Benefícios -->

	<section class="acessibilidade-site" id="acessibilidade">
    	
        
        <div class="conteudo clear-fix">
        
        
        	<h1>Somos acessíveis!</h1>

			<p>O Saúde Acessível tenta cumprir com aquilo que consideramos nossa obrigação:</p>

            <p>Ajudar e compartilhar nosso conteúdo para idosos e pessoas com algum tipo de deficiência.</p>

			<p>Tomamos as devidas providências para que você consiga visualizar nosso conteúdo, seguindo a proposta do W3C para uma boa navegação.</p>
            
            <p>E você pensa que é fácil, testamos, testamos e com certeza ainda podemos melhorar. Não encontrou algo, envie sua sugestão para <a href="mailto:melhorar@saudeacessivel.com.br">melhorar@saudeacessivel.com.br</a></p>
           
            <h2>Navegue pelo teclado!</h2>
            
            <div class="mac">
            Para MAC / Apple OS
            </div>

            <p>Safari, Chrome e Firefox, utilize a tecla <span>Control</span> + <span>Alt</span> + os números:</p>
            
            <ul>
            	<li><strong>0</strong> Busca de Postos de Saúde</li>
                <li><strong>1</strong> Primeiro Posto de Saúde</li>
                <li><strong>2</strong> Segundo Posto de Saúde</li>
                <li><strong>3</strong> Terceiro Posto de Saúde</li>
                <li><strong>4</strong> Quarto Posto de Saúde</li>
                <li><strong>5</strong> Quinto Posto de Saúde</li>
            </ul>
            
            <p>Ou utilize a tecla TAB.</p>
            

            <div class="microsoft">
            Para PC / Windows
            </div>

            <p>Internet Explorer utilize a tecla <span>Alt</span> + os números e na sequência pressione <span>Enter</span>:</p>

            <p>Firefox utilize a tecla <span>Alt</span> + <span>Shift</span> + os números:</p>

            <p>Chrome utilize a tecla <span>Alt</span> + os números:</p>

            
            <ul>
                <li><strong>0</strong> Busca de Postos de Saúde</li>
                <li><strong>1</strong> Primeiro Posto de Saúde</li>
                <li><strong>2</strong> Segundo Posto de Saúde</li>
                <li><strong>3</strong> Terceiro Posto de Saúde</li>
                <li><strong>4</strong> Quarto Posto de Saúde</li>
                <li><strong>5</strong> Quinto Posto de Saúde</li>
            </ul>
            
            <p>Ou utilize a tecla TAB.</p>

            
           
                
            <h2>Tamanho da Letra</h2>
            <p>As páginas de conteúdo possuem, no canto superior direito, botões que controlam o tamanho das letras. Esse recurso possibilita a melhoria na leitura de grandes blocos de texto, na tela do computador.</p>

            <p>Fonte Padrão -  Permite ao usuário retornar ao tamanho padrão das letras.</p>
            <p>Diminuir Fonte - Permite ao usuário diminuir em até três vezes o tamanho normal das letras.Aumentar Fonte Permite ao usuário aumentar em até três vezes o tamanho normal das letras.</p>

            <h2>Alto-contraste</h2>
            <p>As páginas de conteúdo possuem, no canto superior direito, o botão que controla o contraste da página. Esse recurso possibilita uma melhor visualização do conteúdo para pessoas portadoras de deficiência visual.</p>

            <p>Alto-Contraste -  Permite ao usuário ativar e desativar o Alto-Contraste da página.</p>

            <h2>Acessibilidade WCAG e E-GOV</h2>
            <p>Este site se encontra dentro dos princípios de acessibilidade preconizados pela lei federal de acessibilidade (Lei no. 10 098, de 19 de dezembro de 2000), que estabelece normas gerais e critérios básicos para a promoção da acessibilidade das pessoas portadoras de deficiência ou com mobilidade reduzida e dá outras providências.</p>

            <p><br>Convidamos você a cuidar da sua saúde e fazer uma ótima navegação. Volte para a <a href="/">página incial</a>.<br></p>


            </div>
    
    </section>	


   <!-- Footer -->

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


</body>
</html><?php }} ?>
