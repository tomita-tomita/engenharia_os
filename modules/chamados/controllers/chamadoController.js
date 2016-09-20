(function (){
    var chamadoModule = angular.module('chamadoModule',[]);
    
    chamadoModule.controller('ChamadoController', ['$scope', function($scope) {
        /* Inicializando */
        $('.tooltipped').tooltip({delay: 50});
    }]);
    
})();