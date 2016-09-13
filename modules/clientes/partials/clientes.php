<script src="script.js" type="text/javascript"></script>
<div ng-app='clienteModule' ng-controller='ClienteController'>  
    <div class="col s12 form">        
        <form action="banco_clientes.php" method="post">        
            <div class="card-panel">
                <span class="card-title"><h5>
                        <i class="material-icons prefix">account_circle</i>
                        Dados Pessoais</h5></span>
                    <div class="row" style="margin-top:3rem;">                                                                                                    
                    <p>
                        <input class="with-gap" name="group1" type="radio" id="fisico" ng-click="ativaClienteJuridico(false)" checked/>
                        <label for="fisico">Cliente Físico</label>
                        <input class="with-gap" name="group1" type="radio" id="juridico" ng-click="ativaClienteJuridico(true)"/>
                        <label for="juridico">Cliente Jurídico</label>
                    </p>
                    </div>
                    <div class="row">                          
                    <div class="input-field col s12 m6 l6" >                        
                        <input type="text" id="nome" value="" required/>
                        <label for="nome">Nome*</label>
                    </div>
                    <div class="input-field col s12 m6 l6" >                        
                        <input type="text" id="sobrenome" value="" required/>
                        <label for="sobrenome">Sobrenome*</label>
                    </div>
                </div>                
                <div class="row">
                    <div class="input-field col s12 m6 l6" >                        
                        <input type="text" id="cpf_cnpj" value="" class="form-control cpf" />
                        <label for="cpf_cnpj" id="label_cpf_cnpj">CPF*</label>
                    </div>
                    <div class="input-field col s12 m6 l6" id="divRG" >                        
                        <input type="text" id="rg" value="" class="rg"  />
                        <label for="rg">RG*</label>
                    </div>                    
                </div>
                <div class="row">
                    <div class="input-field col s12 m6 l6" id="divDataNasci">                        
                        <input type="text" class="data" id="nasci" value=""  />
                        <label for="nasci">Data de Nascimento</label>
                    </div> 
                </div> 
            </div>
            <div class="card-panel">
                <span class="card-title"><h5>
                        <i class="material-icons prefix">place</i>
                        Endereço</h5></span>
                <div class="row">
                    <div class="input-field col s12 m6 l6" >                        
                        <input type="text" id="endereco" value=""  />
                        <label for="endereco">Endereço</label>
                    </div>
                    <div class="input-field col s12 m2 l2" >                        
                        <input type="text" id="numero" value=""  />
                        <label for="numero">Número</label>
                    </div>
                    <div class="input-field col s12 m4 l4" >                        
                        <input type="text" id="comple" value=""  />
                        <label for="comple">Complemento</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6 l6" >                        
                        <input type="text" id="bairro" value=""  />
                        <label for="bairro">Bairro</label>
                    </div>
                    <div class="input-field col s12 m2 l2">                    
                        <input type="text" id="cidade" value=""  />
                        <label for="cidade">Cidade</label>
                    </div>
                    <div class="input-field col s12 m2 l2">                        
                        <input type="text" id="uf" value=""  />
                        <label for="uf">UF</label>                        
                    </div>
                    <div class="input-field col s12 m2 l2" >                        
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
                        <input id="email" type="email" class="validate" value=""/>
                        <label for="email" data-error="Email inválido" data-success="right">E-mail</label>
                    </div>                     
                </div>                                                 

                <br>
                <div id="listas">
                    <div class="row">                        
                        <div class="input-field col s12 m6 l6" >                            
                            <input type="text" id="contato[0]" value=""  />
                            <label for="contato[0]">Contato</label>
                        </div>
                        <div class="input-field col s12 m5 l5">                            
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
                        <input type="text" id="login" value=""  />
                        <label for="login">Login</label>
                    </div>
                    <div class="input-field col s12 m2 l2" >                        
                        <input type="password" id="senha" value=""  />
                        <label for="senha">Senha</label>
                    </div>                                        
                </div>            
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
