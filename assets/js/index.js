var classUnidades = '.content';
var styles = [{stylers: [{ hue: "#000000" },{ saturation: -100 }]},{featureType: 'all',rules: [{visibility: 'off'}]},{featureType: 'water',rules: [{visibility: 'on'}, {lightness: -100 }]}];
var map;
var mapas;

function getLocation() {
  if (navigator.geolocation) {
    $('#mapa').html('<img src="/assets/img/loader.gif"><p>Acessando geolocalização...</p>');
    navigator.geolocation.getCurrentPosition(showPosition,showError);
  } else {
    showError(0);
  }
}

function showPosition(position) {
  var dados = new Object();
  dados.latitude = position.coords.latitude;
  dados.longitude = position.coords.longitude;
  dados.nome = 'Onde você está agora';
  var filtrando = window.location.href.split('?filtro=');
  var filtro = filtrando[1];
  
  dados.filtro = filtro;

  enviaLocalizacao(dados);
}

function showError(err) {

  if(err.code == 1){
    $('#mapa').html('<p>Não temos permissão para acessar seus dados :(</p>');
  }else if(err.code == 2){
    $('#mapa').html('<p>Sua internet ou o satelite não estão em funcionamento :(</p>');
  }else if(err.code == 3){
    $('#mapa').html('<p>Não conseguimos te localizar a tempo :(</p>');
  }else{
    $('#mapa').html('<p>Seu navegador não oferece suporte :(</p>');
  }

}

function enviaLocalizacao(dados){

  $('#mapa').html('<img src="/assets/img/loader.gif"><p>Carregando mapas e postos de saúde...</p>');

  $.ajax({                 
    url:'/busca/procurarHospitaisProximos',
    type:'GET',
    data:dados,
    success: function(response) {

      initialize(dados);
      $(classUnidades).append(response);
      adicionaHospitaisNoMapa(dados);

      
      $('a.scroll-top').click(function(){
        $('html,body').animate({
          scrollTop: ($('#conteudo-hospitais').offset().top - 67),
        },
        { 
          duration: 1000, 
          complete: function(){
            $('#conteudo-hospitais').find('h4 a:first').focus();
          }
        });
      })

      $('.scroll-top').prop('href', '#conteudo-hospitais');
      
      //$('h4 a:first').focus();

      carregaMiniMapas();
    }            
  });

}

function adicionaHospitaisNoMapa(dados){

  adicionaPonto(dados,'/assets/img/pin-local');

  $('.google-api').each(function() {

    var hospital = new Object();

    hospital.latitude = $(this).data('latitude');
    hospital.longitude = $(this).data('longitude');
    hospital.nome = $(this).data('nome');
    hospital.cnes = $(this).data('cnes');

    adicionaPonto(hospital,'/assets/img/pin');

  });
}



function adicionaPonto(dados,pin){

  if($('form').data('contraste') == 1 || $('#contraste-ativado').length){
    var pin = pin+'-contraste.png'
  }else{
    var pin = pin+'.png';
  }

  var marker = new google.maps.Marker({
    position: new google.maps.LatLng(dados.latitude, dados.longitude),
    title: dados.nome,
    map: map,
    icon: pin
  });

  var infowindow = new google.maps.InfoWindow(), marker;

  google.maps.event.addListener(marker, 'click', (function(marker, i) {
    return function() {
      infowindow.setContent(dados.nome+'<br/><a href="#'+dados.cnes+'" class="scroll-to">saiba mais >></a>');
      infowindow.open(map, marker);
    }
  })(marker));
}


function adicionaPontoSemInfo(dados,pin){

  if($('form').data('contraste') == 1 || $('#contraste-ativado').length){
    var pin = pin+'-contraste.png'
  }else{
    var pin = pin+'.png';
  }

  var marker = new google.maps.Marker({
    position: new google.maps.LatLng(dados.latitude, dados.longitude),
    title: dados.nome,
    map: mapas,
    icon: pin
  });
}


function initialize(dados) { 

  var styledMap = new google.maps.StyledMapType(styles,
    {name: "Contraste"});

  var latlng = new google.maps.LatLng(dados.latitude, dados.longitude);

  var options = {
    zoom: 13,
    center: latlng,
    scrollwheel : false ,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    streetViewControl: false
  };

  map = new google.maps.Map(document.getElementById("mapa"), options);

  if($('form').data('contraste') == 1 || $('#contraste-ativado').length){
    map.mapTypes.set('map_style', styledMap);
    map.setMapTypeId('map_style');
  }
  
}


function formaMapa(position) {
  var dados = new Object();

  dados.latitude = position.coords.latitude;
  dados.longitude = position.coords.longitude;
  dados.nome = 'Onde você está agora';

  initialize(dados);
  adicionaHospitaisNoMapa(dados);
}





function retira_acentos(palavra) {
  com_acento = 'áàãâäéèêëíìîïóòõôöúùûüçÁÀÃÂÄÉÈÊËÍÌÎÏÓÒÕÖÔÚÙÛÜÇ ,.;/';
  sem_acento = 'aaaaaeeeeiiiiooooouuuucaaaaaeeeeiiiiooooouuuuc-----';

  nova='';
  for(i=0;i<palavra.length;i++) {
    if (com_acento.search(palavra.substr(i,1))>=0) {
      nova+=sem_acento.substr(com_acento.search(palavra.substr(i,1)),1);
    }
    else {
     nova+=palavra.substr(i,1);
   }
 }
 return nova.toLowerCase();
}  

var showConteudo = function(){
  if($('#conteudo-hospitais').length){
    $('html,body').animate({
      scrollTop: ($('#conteudo-hospitais').offset().top - 67),
    },
    { 
      duration: 1000, 
      complete: function(){
        $('#conteudo-hospitais').find('h4 a:first').focus();
      }
    });
  }else{
    $('html,body').animate({
      scrollTop: ($('#mapa').offset().top - 67),
    },
    { 
      duration: 1000, 
      complete: function(){
        $('#mapa').find('p:first').focus();
      }
    });
  }
}

function carregaMiniMapas(){
  $('.google-api').each(function() {

    var dados = new Object();
    dados.latitude = $(this).data('latitude');
    dados.longitude = $(this).data('longitude');
    dados.nome = $(this).data('nome');
    dados.id = $(this).data('cnes');

    var styledMap = new google.maps.StyledMapType(styles,
      {name: "Contraste"});

    var latlng = new google.maps.LatLng(dados.latitude, dados.longitude);

    var options = {
      zoom: 16,
      center: latlng,
      scrollwheel : false ,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      streetViewControl: false
    };

    mapas = new google.maps.Map(document.getElementById("mapa-"+dados.id), options);

    if($('form').data('contraste') == 1 || $('#contraste-ativado').length){
      mapas.mapTypes.set('map_style', styledMap);
      mapas.setMapTypeId('map_style');
    }

    adicionaPontoSemInfo(dados,'/assets/img/pin')

  });
}

$(document).ready(function(e){

  if($('.content').data('ajax') == 1){
    getLocation();
  }
  

  $('form').submit(function(){
    var campo_busca = $('input[type=text]', this).val();
    var busca_limpa = retira_acentos(campo_busca);

    if($(this).data('contraste') == 1){
      var contraste = '/contraste';
    }else{
      var contraste = '';
    }

    //console.log(busca_limpa);
    $(window.document.location).attr('href', contraste+'/'+busca_limpa);
    return false;
  });


  //Link de Mapa e Sem Mapa
  $('.links-mapa a').click(function(e){

    $('.links-mapa a').removeClass('active');
    $(this).addClass('active');

    if($(this).data('mapa') == true){

      $('.mapa-visualiza').html('<div id="mapa"></div>');
      $('#mapa').html('<img src="/assets/img/loader.gif"><p>Atualizando o mapa...</p>');

      navigator.geolocation.getCurrentPosition(formaMapa,showError);

    }else{
      var mapaHTML = $('.mapa-visualiza').html();
      $('.mapa-visualiza #mapa').remove();

    }
    return false;
  });


  //Carrega Mapas Menores
  carregaMiniMapas();

});

