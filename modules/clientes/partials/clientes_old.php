<?php

//require_once "conexao.php";

$id = $nome = null;
$acao = "inserir";

if(isset($_GET["id"])){
    $query = "SELECT * FROM teste WHERE id=".$_GET["id"];
    $result = mysqli_query($con, $query);
    $dados = mysqli_fetch_array($result);
    $id = $dados["id"];
    $nome = $dados["nome"];
}
?>
<script src="script.js" type="text/javascript"></script>
<div>    
    <div class="col s12 form">
        <div class="card-panel">
            <form action="banco_clientes.php" method="post">
                <div class="row">              
                    <div class="input-field col s12 m6 l6" >
                        <i class="material-icons prefix">account_circle</i>
                        <input type="text" id="nome" value="<?php echo $nome ?>" required/>
                       <label for="nome">NOME*</label>
                    </div>
                    <div class="input-field col s12 m6 l6" >
                        <i class="material-icons prefix">description</i>
                        <input type="text" id="cpf" value="<?php  ?>"  />
                       <label for="cpf">CPF*</label>
                    </div>
                    <div class="input-field col s12 m6 l6" >
                        <i class="material-icons prefix">place</i>
                        <input type="text" id="endereco" value="<?php  ?>"  />
                       <label for="endereco">ENDEREÇO</label>
                    </div>
                    <div class="input-field col s12 m2 l2" >
                        <i class="material-icons prefix">filter_1</i>
                        <input type="text" id="numero" value="<?php   ?>"  />
                       <label for="numero">NÚMERO</label>
                    </div>
                    <div class="input-field col s12 m4 l4" >
                        <i class="material-icons prefix">local_offer</i>
                        <input type="text" id="comple" value="<?php   ?>"  />
                       <label for="comple">COMPLEMENTO</label>
                    </div>
                    <div class="input-field col s12 m6 l6" >
                        <i class="material-icons prefix"></i>
                        <input id="email" type="email" class="validate" value="<?php   ?>"  />
                       <label for="email" data-error="Email inválido" data-success="right">EMAIL</label>
                    </div>  
                    <div class="input-field col s12 m6 l6" >
                        <i class="material-icons prefix"></i>
                        <input type="date" class="datepicker" id="nasci" value="<?php   ?>"  />
                       <label for="nasci">Aniversário</label>
                    </div>                      
                    <!--<input type="text" name="nome" style="width: 22.5em" placeholder="Nome" value="<?php echo $nome ?>"  />-->
                </div>                      
                <div class="row fim-form">
                    <div class="col s12 right-align">
 			<input type="hidden" name="id" value="<?php echo "$id" ?>" />
			<input type="hidden" name="acao" value="<?php echo "$acao" ?>" />                   
                        <button class="btn-large waves-effect waves-light" type="submit" name="action"><i class="material-icons left">send</i>SALVAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
