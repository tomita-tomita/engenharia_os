<script src="script.js" type="text/javascript"></script> 
<div class="col s12 form">        

    <div class="card-panel">
        <span class="card-title"><h5>
                <i class="material-icons prefix">assignment</i>
                Orçamento</h5></span>
        <div class="row">
            <div class="input-field col s12 m6 l6" >
                <!--<i class="material-icons prefix">account_circle</i>-->
                <input type="text" id="nomeProduto" value="" required/>
                <label for="nome">Nome</label>
            </div>
            <div class="input-field col s12 m6 l6" >
               <!--<i class="material-icons prefix">account_circle</i>-->
                <input type="text" id="precoProduto" value="" required/>
                <label for="nome">Código</label>
            </div>
            
        </div>

        <div class="row fim-form">
            <div class="col s12 right-align">
                <input type="hidden" name="id" value="" />
                <input type="hidden" name="acao" value="" />                   
                <button class="btn waves-effect waves-light" type="submit" name="action"><i class="material-icons left">send</i>Cadastrar Produto</button>
            </div>                

        </div>
    </div>
</div>

