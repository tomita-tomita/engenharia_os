(function (){
    var app = angular.module('novoEducar', ['mainModule']);
    
    app.defaultHeaders = '"Content-type":"application/json"';
    
    app.controller('AppController', function($templateCache){
        $templateCache.removeAll();
        
    });
})();
