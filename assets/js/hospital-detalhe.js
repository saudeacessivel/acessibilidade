$(document).ready(function(){
    var dados = new Object();
    dados.latitude = $('.google-api').data('latitude');
    dados.longitude = $('.google-api').data('longitude');
    dados.nome = $('.google-api').data('nome');
    dados.id = $('.google-api').data('cnes');

    initialize(dados);
    adicionaPonto(dados,'/assets/img/pin');
});

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&appId=414218845354355&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));