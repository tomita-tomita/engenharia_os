(function (){
    //var mainModule = angular.module('mainModule', ['mainDirectives', 'servidorModule','instituicaoModule','cursoModule', 
    //'regimeModule','nivelModule','turnoModule','unidadeModule', 'tipoModule','turmaModule','matriculaModule', 'transferenciaModule', 'dateTimeComponent']);
    var mainModule = angular.module('mainModule', ['clienteModule','orcamentoModule','loginModule','produtoModule']);
    mainModule.controller('MainController', function($templateCache){
        
        $templateCache.removeAll();
        
        this.tab = 'home';
        this.tabAtual = "";
        
        this.abreMenu = function (menu){
            if ($('#menu'+menu).hasClass('closed')) {
                $('.slider-menu').addClass('closed');
                $('#menu'+menu).removeClass('closed');
            } else {
                $('.slider-menu').addClass('closed');
            }
        };
        
        this.selecionar = function (modulo, options) {
            if (options === undefined) { options = ""; }
            if (modulo !== this.tab) {
                this.tab = modulo;
                this.tabAtual = this.carregarConteudo(modulo, options);
            }
        };
        
        this.carregarConteudo = function (modulo, options) {
            return "modules/" + modulo + "/partials/" + modulo + options + ".php";
        };      
    });
})();
