
<script src="script.js" type="text/javascript"></script>
<div>    
    <div class="col s12 form">
        <div class="card-panel">
            <form>
                <div class="row">              
                    <div class="input-field col s12 m6 l6" >
                        <i class="material-icons prefix">account_circle</i>
                        <input type="text" id="nome" value="" required/>
                       <label for="nome">NOME*</label>
                    </div>
                    <div class="input-field col s12 m6 l6" >
                        <i class="material-icons prefix">description</i>
                        <input type="text" id="cpf" value=""  />
                       <label for="cpf">CPF*</label>
                    </div>
                    <div class="input-field col s12 m6 l6" >
                        <i class="material-icons prefix">place</i>
                        <input type="text" id="endereco" value=""  />
                       <label for="endereco">ENDEREÇO</label>
                    </div>
                    <div class="input-field col s12 m2 l2" >
                        <i class="material-icons prefix">filter_1</i>
                        <input type="text" id="numero" value=""  />
                       <label for="numero">NÚMERO</label>
                    </div>
                    <div class="input-field col s12 m4 l4" >
                        <i class="material-icons prefix">local_offer</i>
                        <input type="text" id="comple" value=""  />
                       <label for="comple">COMPLEMENTO</label>
                    </div>
                    <div class="input-field col s12 m6 l6" >
                        <i class="material-icons prefix"></i>
                        <input id="email" type="email" class="validate" value=""  />
                       <label for="email" data-error="Email inválido" data-success="right">EMAIL</label>
                    </div>  
                    <div class="input-field col s12 m6 l6" >
                        <i class="material-icons prefix"></i>
                        <input type="date" class="datepicker" id="nasci" value=""  />
                       <label for="nasci">Aniversário</label>
                    </div>                      
                    <!--<input type="text" name="nome" style="width: 22.5em" placeholder="Nome" value="<?php echo $nome ?>"  />-->
                </div>                      
                <div class="row fim-form">
                    <div class="col s12 right-align">
 			<input type="hidden" name="id" value="" />
			<input type="hidden" name="acao" value="" />                   
                        <button class="btn-large waves-effect waves-light" type="submit" name="action"><i class="material-icons left">send</i>SALVAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
