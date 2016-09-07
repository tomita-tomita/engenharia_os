<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="col s12 form">
            <div class="card-panel">
                <form action="banco_clientes.php" method="post">
                    <div class="row">              
                        <div class="input-field col s12 m12 l12" >
                            <i class="material-icons prefix">account_circle</i>
                            <input type="text" id="nome" required/>
                            <label for="nome">Usuário*</label>
                        </div>
                        <div class="input-field col s12 m12 l12" >
                            <i class="material-icons prefix">description</i>
                            <input type="password" id="cpf" />
                            <label for="cpf">Senha*</label>
                        </div>                                             
                    </div>                      
                    <div class="row fim-form">
                        <div class="col s12 center">
                            <input type="hidden" name="id" value="<?php echo "$id" ?>" />
                            <input type="hidden" name="acao" value="<?php echo "$acao" ?>" />                   
                            <button class="btn waves-effect waves-light" type="submit" name="action">Entrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
