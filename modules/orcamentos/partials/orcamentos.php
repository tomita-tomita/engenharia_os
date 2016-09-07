<script src="script.js" type="text/javascript"></script> 
<div class="col s12 form">        

    <div class="card-panel">
        <span class="card-title"><h5><i class="material-icons prefix">assignment</i>Orçamento</h5></span>
        <div class="row">

            <div class="input-field col s11 m6 16">
                <select disabled>
                    <option value="" disabled selected>Funcionário</option>
                    <option value="1">Funcionário 1</option>
                    <option value="2">Funcionáio 2</option>
                    <option value="3">Funcionáio 3</option>
                </select>
            </div>

            <div class="input-field col s11 m6 16">
                <select>
                    <option value="" disabled selected>Selecionar Cliente</option>
                    <option value="1">Cliente 1</option>
                    <option value="2">Cliente 2</option>
                    <option value="3">Cliente 3</option>
                </select>
            </div>
            
            <div class="row input-field col s11 m6 16">
                 <label>Data de Emissão</label>
                 <input type="date" class="datepicker">
            </div>
            
            <div class="row input-field col s11 m6 16">
                 <label>Data de Vencimento</label>
                  <input type="date" class="datepicker">
            </div>
        </div>


    </div>

    <div class="card-panel">
        <span class="card-title"><h5><i class="material-icons prefix"></i>Produtos</h5></span>
        <div id="listas">
            <div class="row">
                <div class="input-field col s12 m6 16">
                    <input disabled id="disabled" type="text" class="validate">
                    <label for="disabled">Mão de Obra</label>
                </div>
                <div class="input-field col s12 m5 15">
                    <input type="text" id="precoMaoObra" value="" class="preço" />
                    <label for="precoMaoObra">Valor Mão de Obra R$</label>
                </div>
            </div>
            
           
            
            <div class="row">               
                <div class="input-field col s12 m6 16">
                    <input type="text" id="produtos[0]" value=""/>
                    <label for="produtos[0]">Nome do Produto</label>
                </div>
                <div class="input-field col s12 m5 15">
                    <input type="text" id="preço[0]" value="" class="preço" />
                    <label for="preço[0]">Preço Unitário R$</label>
                </div>
                <button href="#" class="btn remover_campo" style="margin-top: 1rem;"><i class="material-icons prefix">clear</i></button>
            </div>
        </div>
        <button class="btn prefix add_a" type="button" id="add_a">Incluir Produtos</button>
        
        
        



    </div>
    <div class="row fim-form">
        <div class="col s12 right-align">
            <input type="hidden" name="id" value="" />
            <input type="hidden" name="acao" value="" />                   
            <button class="btn waves-effect waves-light" type="submit" name="action"><i class="material-icons left">send</i>Enviar Oçamento</button>
        </div>                

    </div>

</div>

