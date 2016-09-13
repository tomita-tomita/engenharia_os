(function () {
    var clienteModule = angular.module('clienteModule', []);

    clienteModule.controller('ClienteController', ['$scope', function ($scope) {

        var x = 1;

        //Adicionar Campos de Telefone
        $('#add_field').click(function (e) {
            e.preventDefault();     //prevenir novos clicks                
            $('#listas').append('<div>\
                                <div class="row">\n\
                                    <div class="input-field col s12 m6 l6" >\n\
                                        <!--<i class="material-icons prefix">portrait</i>-->\n\
                                        <input type="text" id="contato[' + x + ']" value=""  />\n\
                                        <label for="contato[' + x + ']">Contato</label>\n\
                                    </div>\n\
                                    <div class="input-field col s12 m5 l5" >\n\
                                        <!--<i class="material-icons prefix">call</i>-->\n\
                                        <input type="text" id="fone[' + x + ']" value="" class="fone"/>\n\
                                        <label for="fone[' + x + ']">Número</label>\n\
                                    </div>\n\
                                <button href="#" class="btn remover_campo" style="margin-top: 1rem;"><i class="material-icons prefix">clear</i></button>\n\
                                </div>\
                            </div>');
            x++;
        });

        // Remover o div anterior
        $('#listas').on("click", ".remover_campo", function (e) {
            e.preventDefault();
            $(this).parent('div').remove();
        });

        $scope.ativaClienteJuridico = function (ativar) {            
            if (ativar == true) {
                document.getElementById('divDataNasci').style.display = "none";
                document.getElementById('divRG').style.display = "none";
                document.getElementById('label_cpf_cnpj').innerHTML = "CNPJ*";
                $('#cpf_cnpj').inputmask({ "mask": "99.999.999/9999-99" });
            } else {
                document.getElementById('divDataNasci').style.display = "inline";
                document.getElementById('divRG').style.display = "inline";
                document.getElementById('label_cpf_cnpj').innerHTML = "CPF*";
                $('#cpf_cnpj').inputmask({ "mask": "999.999.999-99" });
            }
        }

        $("#register").validate();

    }]);
})();
