
<!DOCTYPE HTML>
<html lang="pt">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>

    <title>{ucwords(strtolower($hospital->nome))} - {ucwords(strtolower($hospital->cidade))}</title>
    <meta name="description" content="Saúde Acessível"/>
    <meta name="keywords" content="saúde acessível, dados abertos"/>

    <link href="/assets/css/reset.css" rel="stylesheet" type="text/css" />


    <link href="/assets/css/normalize.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/component.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/acessibilidade.css" rel="stylesheet" type="text/css" />

    {if isset($contraste) && $contraste == 1}
        <link href="/assets/css/contraste.css" rel="stylesheet" type="text/css" />
    {else}
        <link href="/assets/css/layout.css" rel="stylesheet" type="text/css" />
    {/if}
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
                    <li><a href="#conteudo-hospitais" title="Página Inicial" class="scroll-to-interna" >conteúdo</a></li>
                    <li class="diminui"><a href="" title="Dimuir texto" class="ajustar-fonte" data-tipo="-" >-</a></li>
                    <li class="aumenta"><a href="" title="Aumentar texto" class="ajustar-fonte" data-tipo="+" >+</a></li>
                    <li><a href="{if isset($contraste)}/posto-saude/{$hospital->cnes_id}{else}/contraste/posto-saude/{$hospital->cnes_id}{/if}" title="Site com mais contraste" {if isset($contraste)}id="contraste-ativado"{/if}>{if isset($contraste)} baixo {else} alto {/if}contraste</a></li>
                    <li><a href="{if isset($contraste)}/contraste{/if}/acessibilidade" title="Acessibilidade do site">acessibilidade</a></li>
                </ul>        
            </div>
            <div class="logo">
                <a href="{if isset($contraste)}/contraste{else}/{/if}"><img src="/assets/img/saude-acessivel{if isset($contraste)}-contraste{/if}.svg" alt="Saúde Acessível" role="img" aria-label="Saúde Acessível" /></a>
            </div>
        </div>
    </header>

    <article class="mapa content interna-hospital" data-ajax='0'>
        <ol id="conteudo-hospitais">
            <li class="conteudo clear-fix listagem" id="{$hospital->cnes_id}" >
                <div class="col-esq">
                    <div id="mapa-{$hospital->cnes_id}" class="mapa google-api" data-cnes="{$hospital->cnes_id}" data-nome="{ucwords(strtolower($hospital->nome))}" data-latitude="{$hospital->latitude}" data-longitude="{$hospital->longitude}">
                    </div>
                    <div class="ubs">
                        <h1><a class="scroll-to-interna" href="#{$hospital->cnes_id}" accesskey="1" title="{ucwords(strtolower($hospital->nome))} - {ucwords(strtolower($hospital->cidade))}">{ucwords(strtolower($hospital->nome))} - {ucwords(strtolower($hospital->cidade))}</a></h1>
                        <div class="box">Endereço completo</div>
                        <address>
                            {ucwords(strtolower($hospital->endereco))} {if $hospital->numero != ''}, {ucwords(strtolower($hospital->numero))}{/if} - {ucwords(strtolower($hospital->bairro))} - {ucwords(strtolower($hospital->cidade))} - Telefone: {ucwords(strtolower($hospital->telefone))}
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
                                <th id="atributo-{$hospital->cnes_id}">Atributo</th>
                                <th id="nota-{$hospital->cnes_id}">Nota</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td headers="atributo-{$hospital->cnes_id}">Estrutura física</td>
                                <td headers="nota-{$hospital->cnes_id}" class="{if $hospital->nota_estrutura == 1}estrela{else}estrelas{/if}-{$hospital->nota_estrutura}">{$hospital->nota_estrutura} {if $hospital->nota_estrutura == 1}estrela{else}estrelas{/if}</td>
                            </tr>
                            <tr>
                                <td headers="atributo-{$hospital->cnes_id}">Para deficiêntes e idosos</td>
                                <td headers="nota-{$hospital->cnes_id}" class="{if $hospital->nota_def_idoso == 1}estrela{else}estrelas{/if}-{$hospital->nota_def_idoso}">{$hospital->nota_def_idoso} {if $hospital->nota_def_idoso == 1}estrela{else}estrelas{/if}</td>
                            </tr>
                            <tr>
                                <td headers="atributo-{$hospital->cnes_id}">Medicamentos</td>
                                <td headers="nota-{$hospital->cnes_id}" class="{if $hospital->nota_medicamento == 1}estrela{else}estrelas{/if}-{$hospital->nota_medicamento}">{$hospital->nota_medicamento}  {if $hospital->nota_medicamento == 1}estrela{else}estrelas{/if}</td>
                            </tr>
                            <tr>
                                <td headers="atributo-{$hospital->cnes_id}">Equipamenos</td>
                                <td headers="nota-{$hospital->cnes_id}" class="{if $hospital->nota_equipamento == 1}estrela{else}estrelas{/if}-{$hospital->nota_equipamento}">{$hospital->nota_equipamento} {if $hospital->nota_equipamento == 1}estrela{else}estrelas{/if}</td> 
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
            <div class="fb-comments" data-href="http://www.saudeacessivel.com.br/posto-saude/{$hospital->cnes_id}" data-width="100%" data-numposts="5" {if isset($contraste)} data-colorscheme="dark"{else}data-colorscheme="light"{/if} ></div>

       </div>

    </article>

    <footer role="contentinfo">
        <div class="conteudo clear-fix">
            <div class="logo-footer">
                <img src="/assets/img/logo-footer.svg" alt="Saúde Acessível">
            </div>

            <div class="dados-abertos">
                <img src="/assets/img/acesso-informacao{if isset($contraste)}-contraste{/if}.png" role="img" aria-label="Acesso à informação" alt="Acesso à informação">
                <img src="/assets/img/dados-abertos{if isset($contraste)}-contraste{/if}.png" role="img" aria-label="Dados Abertos Governo Federal" alt="Dados Abertos Governo Federal">
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
        <p role="alert" aria-live="polite"></p>
    </div>

</body>
</html>