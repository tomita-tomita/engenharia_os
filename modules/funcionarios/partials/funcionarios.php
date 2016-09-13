<script src="script.js" type="text/javascript"></script>
<div>    
    <div class="col s12 form">        
        <form action="banco_clientes.php" method="post">                  
            <div class="card-panel">
                <span class="card-title"><h5>
                        <i class="material-icons prefix">account_circle</i>
                        Dados Pessoais</h5></span>
                <div class="row">                
                    <div class="input-field col s12 m6 l6" >
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="text" id="nome" value="" required/>
                        <label for="nome">Nome*</label>
                    </div>
                    <div class="input-field col s12 m6 l6" >
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="text" id="sobrenome" value="" required/>
                        <label for="sobrenome">Sobrenome*</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6 l6" >
                        <!--<i class="material-icons prefix">description</i>-->
                        <input type="text" id="cpf" value="" class="form-control cpf" />
                        <label for="cpf">CPF*</label>
                    </div>                    
                </div>                
            </div> 

            <div class="card-panel">
                <span class="card-title"><h5>
                        <i class="material-icons prefix">place</i>
                        Endereço</h5></span>
                <div class="row">
                    <div class="input-field col s12 m6 l6" >
                        <!--<i class="material-icons prefix">place</i>-->
                        <input type="text" id="endereco" value=""  />
                        <label for="endereco">Endereço</label>
                    </div>
                    <div class="input-field col s12 m2 l2" >
                        <!--<i class="material-icons prefix">filter_1</i>-->
                        <input type="text" id="numero" value=""  />
                        <label for="numero">Número</label>
                    </div>
                    <div class="input-field col s12 m4 l4" >
                        <!--<i class="material-icons prefix">local_offer</i>-->
                        <input type="text" id="comple" value=""  />
                        <label for="comple">Complemento</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6 l6" >
                        <!--<i class="material-icons prefix">place</i>-->
                        <input type="text" id="bairro" value=""  />
                        <label for="bairro">Bairro</label>
                    </div>
                    <div class="input-field col s12 m2 l2">
                        <!--<i class="material-icons prefix">local_offer</i>-->
                        <input type="text" id="cidade" value=""  />
                        <label for="cidade">Cidade</label>
                    </div>
                    <div class="input-field col s12 m2 l2">
                        <!--<i class="material-icons prefix">local_offer</i>-->
                        <input type="text" id="uf" value=""  />
                        <label for="uf">UF</label>                        
                    </div>
                    <div class="input-field col s12 m2 l2" >
                        <!--<i class="material-icons prefix">filter_1</i>-->
                        <input type="text" id="cep" value="" class="cep" />
                        <label for="cep">CEP</label>
                    </div>
                </div>
            </div>
            <div class="card-panel">
                <span class="card-title"><h5>
                        <i class="material-icons prefix">portrait</i>
                        Contato</h5></span>
                <div class="row">
                    <div class="input-field col s12 m6 l6" >
                        <!--<i class="material-icons prefix">mail</i>-->
                        <input id="email" type="email" class="validate" value=""/>
                        <label for="email" data-error="Email inválido" data-success="right">E-mail</label>
                    </div>                     
                </div>                                                 

                <br>
                <div id="listas">
                    <div class="row">                        
                        <div class="input-field col s12 m6 l6" >
                            <!--<i class="material-icons prefix">portrait</i>-->
                            <input type="text" id="contato[0]" value=""  />
                            <label for="contato[0]">Contato</label>
                        </div>
                        <div class="input-field col s12 m5 l5">
                            <!--<i class="material-icons prefix">call</i>-->
                            <input type="text" id="fone[0]" value="" class="fone"/>
                            <label for="fone[0]">Número</label>
                        </div>                                                
                        <button href="#" class="btn remover_campo" style="margin-top: 1rem;"><i class="material-icons prefix">clear</i></button>
                    </div>                    
                </div>                
                <button class="btn material-icons prefix add_field" type="button" id="add_field">add</button>

            </div>                         
            <!--<input type="text" name="nome" style="width: 22.5em" placeholder="Nome" value="<?php echo $nome ?>"  />-->

            <div class="card-panel">
                <span class="card-title"><h5>
                        <i class="material-icons prefix">person</i>
                        Usuário</h5></span>
                <div class="row">
                    <div class="input-field col s12 m6 l6" >
                        <!--<i class="material-icons prefix">place</i>-->
                        <input type="text" id="login" value=""  />
                        <label for="login">Login</label>
                    </div>
                    <div class="input-field col s12 m2 l2" >
                        <!--<i class="material-icons prefix">filter_1</i>-->
                        <input type="password" id="senha" value=""  />
                        <label for="senha">Senha</label>
                    </div>                                        
                </div>            
                <div class="row">
                    <!--Incluir dropdown para selecionar o cargo-->
                </div>
            </div>                      
            <div class="row fim-form">
                <div class="col s12 right-align">
                    <input type="hidden" name="id" value="" />
                    <input type="hidden" name="acao" value="" />                   
                    <button class="btn waves-effect waves-light" type="submit" name="action"><i class="material-icons left">send</i>SALVAR</button>
                </div>                
        </form>        
    </div>
</div>
