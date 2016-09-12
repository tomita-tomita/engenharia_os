<script src="script.js" type="text/javascript"></script>
<div>    
    <div class="col s12 form">        
        <form action="banco_clientes.php" method="post">                  
            <div class="card-panel">
                <span class="card-title"><h5>
                        <i class="material-icons prefix">library_add</i>Chamado</h5></span>
                <div class="row"> 
                    <div class="input-field col s12 m6 16">
                    <input disabled id="disabled" type="text" class="validate">
                    <label for="disabled">Funcionario</label>
                </div>

            <div class="input-field col s12 m6 16">                                        
                <input type="text" id="autocomplete-input" class="autocomplete">
                <label for="autocomplete-input">Nome do Cliente</label>                        
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
        </form>        
    </div>
</form>        
</div>
</div>
