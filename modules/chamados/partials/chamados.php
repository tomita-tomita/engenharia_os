<!--<script src="script.js" type="text/javascript"></script>
<div>    
    <div class="col s12 form">        
        <form action="banco_clientes.php" method="post">                  
            <div class="card-panel">
                <span class="card-title"><h5>
                        <i class="material-icons prefix">library_add</i>Chamado</h5></span>
                <div class="row"> 
                    <div class="input-field col s12 m6 16">                        
                        <i class="material-icons prefix">textsms</i>
                        <input type="text" id="autocomplete-input" class="autocomplete">
                        <label for="autocomplete-input">Nome do Cliente</label>                        
                    </div>
                    <div class="input-field col s12 m3 16" style="text-align: left;">
                        <select disabled>
                            <option value="" disabled selected>Nome do Funcionário</option>
                            <option value="1">Funcionário 1</option>
                            <option value="2">Funcionário 2</option>
                            <option value="3">Funcionário 3</option>
                        </select>                        
                    </div>
                    <div class="row input-field col s12 m3 16">
                        <input type="text" class="data" id="dataEmissao" value=""  />
                        <label for="dataEmissao">Data de Emissão</label>
                    </div>                    
                </div>
                <div class="row">
                    <div class="input-field col s12 m12 16">
                        <textarea id="descricao" class="materialize-textarea" length="120"></textarea>
                        <label for="descricao">Descrição</label>
                    </div>
                </div>                
            </div>   
            <div class="row fim-form">
                <div class="col s12 right-align">
                    <input type="hidden" name="id" value="" />
                    <input type="hidden" name="acao" value="" />                   
                    <button class="btn waves-effect waves-light" type="submit" name="action"><i class="material-icons left">send</i>GRAVAR</button>
                </div>                
            </div>  
        </form>        
    </div>
</div>-->

<div ng-app='chamadoModule' ng-controller='ChamadoController'>    
    <div class="col s12 form">        
        <form action="#" method="post">                  
            <div class="card-panel">
<!--                <span class="card-title"><i class="material-icons prefix">library_add</i><h5>Chamado</h5></span>-->
                <div>
                    <div class="row"> 
                        <div class="input-field col s12 m6 l6">                        
                            <i class="material-icons prefix">perm_identity</i>
                            <input type="text" id="autocomplete-input" class="autocomplete">
                            <label for="autocomplete-input">Nome do Cliente</label>                        
                        </div>
                        <div class="row input-field col s12 m6 l6">
                            <i class="material-icons prefix">description</i>
                            <input type="text" class="data" id="cpf" value=""  />
                            <label for="cpf">CPF</label>
                        </div>                    
                    </div>
                    <div class="row"> 
                        <div class="row input-field col s12 m6 l6">
                            <i class="material-icons prefix">description</i>
                            <input type="text" class="data" id="dataEmissao" value=""  />
                            <label for="dataEmissao">Código</label>
                        </div>  
                        <div class="row input-field col s12 m6 l6">
                            <i class="material-icons prefix">today</i>
                            <input type="text" class="data" id="dataEmissao" value=""  />
                            <label for="dataEmissao">Data de Emissão</label>
                        </div>                          
                    </div>                    

                    <div class="row fim-form">
                        <div class="col s12 right-align">
                            <input type="hidden" name="id" value="" />
                            <input type="hidden" name="acao" value="" />                   
                            <button class="btn waves-effect waves-light" type="submit" name="action"><i class="material-icons left">search</i>PESQUISAR</button>
                        </div>                
                    </div>    
                </div>
            </div>   
        </form>        
    </div>
</div>

<div     
    <div class="col s12 form">                              
        <div class="card-panel">            
            <table class="highlight">
                <thead>
                  <tr>
                      <th data-field="id">Name</th>
                      <th data-field="name">Data</th>
                      <th data-field="price">Funcionário</th>
                      <th data-field="price" class="center">Ações</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td>Fulano</td>
                    <td>20/09/2016</td>
                    <td>Fulaninho</td>
                    <td class="center">
                        <i class="material-icons prefix tooltipped" data-position="top" data-delay="50" data-tooltip="Editar">edit</i>
                        <i class="material-icons prefix tooltipped" data-position="top" data-delay="50" data-tooltip="Fechar">close</i>
                        <i class="material-icons prefix tooltipped" data-position="top" data-delay="50" data-tooltip="Excluir">delete</i>                    
                    </td>
                  </tr>


                </tbody>
            </table>
        </div>      
    </div>
</div>
