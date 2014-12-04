
<!DOCTYPE HTML>
<html lang="pt">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>

    <title>Saúde Acessível</title>
    <meta name="description" content="Saúde Acessível"/>
    <meta name="keywords" content="saúde acessível, dados abertos"/>

    <link href="/assets/css/reset.css" rel="stylesheet" type="text/css" />
    {if isset($contraste) && $contraste == 1}
    <link href="/assets/css/contraste.css" rel="stylesheet" type="text/css" />
    {else}
    <link href="/assets/css/layout.css" rel="stylesheet" type="text/css" />
    
    {/if}

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
                    <li><a href="{if isset($contraste)}/acessibilidade{else}/contraste/acessibilidade{/if}" title="Site com mais contraste">{if isset($contraste)} baixo {else} alto {/if}contraste</a></li>
                    <li><a href="{if isset($contraste)}/contraste{/if}/acessibilidade" title="Acessibilidade do site">acessibilidade</a></li>
                </ul>        
            </div>

            <div class="logo">
                <a href="{if isset($contraste)}/contraste{else}/{/if}"><img src="/assets/img/saude-acessivel{if isset($contraste)}-contraste{/if}.svg" alt="Saúde Acessível" role="img" aria-label="Saúde Acessível" /></a>
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

            <h2>Navegue por Comando de Voz</h2>

            <p>Através de termos pré-definidos você pode navegar pelo site utilizando a sua voz:</p> 
            <p>Comandos de voz para busca de Postos de Saúde:</p>
                <ul>
                    <li>"Buscar Posto em” + Nome da cidade ou Endereço ou CEP</li>
                    <li>"Buscar Posto na” + Nome da cidade ou Endereço ou CEP</li>
                    <li>"Buscar Posto no” + Nome da cidade ou Endereço ou CEP</li>
                </ul>

                <ul>
                    <li>"Posto em” + Nome da cidade ou Endereço ou CEP</li>
                    <li>"Posto na” + Nome da cidade ou Endereço ou CEP</li>
                    <li>"Posto no” + Nome da cidade ou Endereço ou CEP</li>
                </ul>

            <p>Comandos de voz para busca de Postos de Saúde mais próximos:</p>
                <ul>
                    <li>"Estou em” + Nome da cidade ou Endereço ou CEP</li>
                    <li>"Estou no” + Nome da cidade ou Endereço ou CEP</li>
                    <li>"Estou na” + Nome da cidade ou Endereço ou CEP</li>
                </ul>
            <p>Comandos de voz para acesso a Barra de Acessibilidade:</p>

             <ul>
                <li>"Conteúdo"</li>
                <li>"Alto Contraste"</li>
                <li>"Baixo Contraste"</li>
                <li>"Aumentar Texto"</li>
                <li>"Diminuir Texto"</li>
                <li>"Acessar Acessibilidade"</li>
            </ul>
                
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
    
    <div id="mensagem_comando">
      <p role="alert" aria-atomic="true"></p>
    </div>
</body>
</html>