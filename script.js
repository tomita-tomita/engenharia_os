$('document').ready(function () {
    // Máscaras    
    $('.fone').inputmask({ "mask": "(99) 9999-9999" });
    $('.cpf').inputmask({ "mask": "999.999.999-99" });
    $('.rg').inputmask({ "mask": "9.999.999" });
    $('.data').inputmask({ "mask": "99/99/9999" });
    $('.cep').inputmask({ "mask": "99999-999" });
    //$('.numero').inputmask({"mask": "9#"});

    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15 // Creates a dropdown of 15 years to control year
    });
    $('.tooltipped').tooltip({ delay: 50 });

    var x = 1;

    // Remover o div anterior
    $('#listas').on("click", ".remover_campo", function (e) {
        e.preventDefault();
        $(this).parent('div').remove();
    });

    //Adicionar Campos de Telefone
    $('#add_a').click(function (e) {
        e.preventDefault();     //prevenir novos clicks                
        $('#listas').append('<div>\
                                <div class="row">\n\
                                    <div class="input-field col s12 m6 l6" >\n\
                                        <!--<i class="material-icons prefix">portrait</i>-->\n\
                                        <input type="text" id="produtos[' + x + ']" value=""  />\n\
                                        <label for="produtos[' + x + ']">Nome do Produto</label>\n\
                                    </div>\n\
                                    <div class="input-field col s12 m5 l5" >\n\
                                        <!--<i class="material-icons prefix">call</i>-->\n\
                                        <input type="text" id="precos[' + x + ']" value="" class="fone"/>\n\
                                        <label for="precos[' + x + ']">Preço Unitário</label>\n\
                                    </div>\n\
                                <button href="#" class="btn remover_campo" style="margin-top: 1rem;"><i class="material-icons prefix">clear</i></button>\n\
                                </div>\
                            </div>');
        x++;
    });

    $('select').material_select();
});
