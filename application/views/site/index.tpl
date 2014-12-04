<!DOCTYPE HTML>
<html lang="pt-br">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>

    <title>{if isset($busca)} Postos de saúde mais próximos a {$busca} |{/if} Saúde Acessível</title>
    <meta name="description" content="Confira os postos e unidades básicas de saúde mais próximas a você acesse já!"/>
    <meta name="keywords" content="saúde acessível, dados abertos{if isset($busca)}, {$busca} {/if}  "/>

    <link href="/assets/css/reset.css" rel="stylesheet" type="text/css" />
    {if isset($contraste) && $contraste == 1}
    <link href="/assets/css/contraste.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/responsive-contraste.css" rel="stylesheet" type="text/css" />
    {else}
    <link href="/assets/css/layout.css" rel="stylesheet" type="text/css" />
    
    {/if}
    {if isset($busca)}
        <link href="http://www.saudeacessivel.com.br/{$endereco}" rel="canonical">
    {/if}
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
                    {if isset($busca)}
                        <li><a href="#conteudo-hospitais" class="scroll-top" >conteúdo</a></li>
                    {else}
                        <li><a href="#mapa" class="scroll-top" >conteúdo</a></li>
                    {/if}

                    <li class="diminui"><a href="" title="Dimuir texto" class="ajustar-fonte" data-tipo="-" >-</a></li>
                    <li class="aumenta"><a href="" title="Aumentar texto" class="ajustar-fonte" data-tipo="+" >+</a></li>
                    <li><a href="{if isset($contraste)}{if isset($endereco)}/{$endereco}{else}/{/if}{else}{if isset($endereco)}/contraste/{$endereco}{else}/contraste{/if}{/if}">{if isset($contraste)} baixo {else} alto {/if}contraste</a></li>
                    <li><a href="{if isset($contraste)}/contraste{/if}/acessibilidade">acessibilidade</a></li>
                </ul>        
            </div>

            <div class="logo">
                <a href="{if isset($contraste)}/contraste{else}/{/if}" title="Saúde Acessível"><img src="/assets/img/saude-acessivel{if isset($contraste)}-contraste{/if}.svg" alt="Saúde Acessível" role="img" aria-label="Saúde Acessível" /></a>
            </div>

        </div>       

    </header>

    <!-- Busca -->

    <section class="busca" id="saudeacessivel">
        <div class="conteudo clear-fix">
            <h1><a href="#mapa" class="scroll-to" accesskey="0">Encontre um <strong>posto de saúde</strong></a></h1>
            <form action="{if isset($contraste)}/contrasteb/{else}/b/{/if}" role="search" data-contraste="{if isset($contraste)}1{else}0{/if}">
                <div class="form-grupo">
                    <label for="busca">digite aqui sua cidade, CEP ou endereço</label>
                    <input type="text" name="b" placeholder="digite aqui sua cidade, CEP ou endereço" id="busca" value="{if isset($busca)}{$busca}{/if}">
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
                    <li><a href="{if isset($contraste)}/contraste{/if}/deficientes"><span>busca rápida para</span> para deficientes</a></li>
                    <li><a href="{if isset($contraste)}/contraste{else}/{/if}#mapa"><span>busca rápida para</span> mais próximos</a></li>
                    <li><a href="{if isset($contraste)}/contraste{/if}/equipamentos"><span>busca rápida para</span>melhores equipados</a></li>
                    <li><a href="{if isset($contraste)}/contraste{/if}/medicamentos"><span>busca rápida para</span>mais medicamentos</a></li>
                    <li><a href="{if isset($contraste)}/contraste{/if}/idosos"><span>busca rápida para</span>para idosos</a></li>
                </ul>             
            </div>
        </div>
    </section>
    {$ir}
    <!-- Footer -->
    <footer role="contentinfo">
        <div class="conteudo clear-fix">
            <div class="logo-footer">
                <img src="/assets/img/logo-footer{if isset($contraste)}-contraste{/if}.svg" alt="Saúde Acessível marca no rodapé">
            </div>
            <div class="dados-abertos">
                <img src="/assets/img/acesso-informacao{if isset($contraste)}-contraste{/if}.png" role="img" aria-label="Acesso à informação" alt="Acesso à informação">
                <img src="/assets/img/dados-abertos{if isset($contraste)}-contraste{/if}.png" role="img" aria-label="Dados Abertos Governo Federal" alt="Dados Abertos Governo Federal">
            </div>
        </div>

        <div class="assinatura">
            <div class="conteudo clear-fix">
                <a href="http://www.mixd.com.br">Desenvolvido por Mixd Internet</a>
            </div>
        </div>
    </footer>

    <div id="mensagem_comando">
      <p role="alert" aria-live="polite"></p>
    </div>

</body>
</html>
