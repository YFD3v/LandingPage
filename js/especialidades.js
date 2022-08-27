//Animação de 'aparecer'

$(function(){
    var atual = -1;
    var maximo = $('.box-especialidade-single').length -1;
    var t1mer;
    var animacaoDelay = 2;

    executarAnimaçao();
    function executarAnimaçao(){
        $('.box-especialidade-single').hide();
        t1mer = setInterval(logicaAnimacao, animacaoDelay*1000)
        function logicaAnimacao(){
            atual++;
            if(atual > maximo){
                clearInterval(t1mer);
                return false;
            }
            $('.box-especialidade-single').eq(atual).fadeIn();
        }
    
    }
})