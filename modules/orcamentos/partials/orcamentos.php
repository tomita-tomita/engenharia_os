<script src="script.js" type="text/javascript"></script> 
<div class="col s12 form">        

    <div class="card-panel">
        <span class="card-title"><h5>
                <i class="material-icons prefix">assignment</i>
                Orçamento</h5></span>
        
        <div id="listas">
            <div class="row">
                <div class="input-field col s12 m6 16">
                    <input type="text" id="produtos[0]" value=""/>
                    <label for="produtos[0]">Nome do Produto</label>
                </div>
                <div class="input-field col s12 m5 15">
                    <input type="text" id="preço[0]" value="" class="preço" />
                    <label for="preço[0]">Preço Unitário</label>
                </div>
                <button href="#" class="btn remover_campo" style="margin-top: 1rem;"><i class="material-icons prefix">clear</i></button>
            </div>
        </div>
        <button class="btn material-icons prefix add_a" type="button" id="add_a">add</button>
               
    </div>
     <div class="row fim-form">
            <div class="col s12 right-align">
                <input type="hidden" name="id" value="" />
                <input type="hidden" name="acao" value="" />                   
                <button class="btn waves-effect waves-light" type="submit" name="action"><i class="material-icons left">send</i>Enviar Oçamento</button>
            </div>                

        </div>
    
</div>

