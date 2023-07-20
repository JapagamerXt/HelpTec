<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center" style="font-size: 50px;">
                <p><B>Usuário</B></p> 
            </div>
        </div>
    </div>
    <form method="post" action="">
        <div class="container form-control">
            <div class="row">
                <div class="col-sm-2">
                    <input type="numero" name="txtID" id="txtID" placeholder="ID" class="form-control">
                </div>
                <!-- <div class="col-sm-1" class= "form-control">
                 <button formaction="frm_Usuario.php" class="btn btn-primary" name="btoPesquisar" id="btoPequisar">&#128269;</button>
                </div> -->
            </div>

            <div class="row mt-3">
                <div class="col-sm-6">
                    <label for="Nome">Nome</label>
                    <input type="texto" name="txtnome" id="txtnome" placeholder="nome" class="form-control">
                </div>

                <div class="col-sm-3">
                    <label for="CPF">CPF</label>
                    <input type="texto" name="txtcpf" id="txtcpf" placeholder="cpf" class="form-control">
                </div>

                <div class="col-sm-2">
                    <label for="Data de Nascimento">Data de Nascimento</label>
                    <input type="date" name="txtdatanas" id="txtdatanas" placeholder="Data Nascimento" class="form-control">
                </div>

                <div class="col-sm-1">
                    <label for="Genero">Genero</label>
                    <select name="txtGenero" id="txtGenero" class=" form-control text-center" aria-label="Default select example">
                    <option selected></option>
                        <option value="M">M</option>
                        <option value="F">F</option>
                        <option value="N">N</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-3">
                    <label for="Login">Login</label>
                    <input type="texto" name="txtlogin" id="txtlogin" placeholder="login" class="form-control">
                </div>

                <div class="col-sm-3">
                    <label for="Senha">Senha</label>
                    <input type="password" name="txtsenha" id="txtsenha" placeholder="Senha" class="form-control">
                </div>

                <div class="col-sm-3">
                    <label for="status">Status</label>
                    <select name="txtselect" id="txtselect" class="form-control">
                        <option value=""> -- Selecione -- </option>
                        <option value="Ativado">Ativado</option>
                        <option value="Desativado">Desativado</option>
                    </select>
                </div>

                <div class="col-sm-3">
                    <label for="img">Imagem</label>
                    <input type="file" name="txtimg" id="txtimg" placeholder="Imagem" class="form-control">
                </div>

            </div>
            <div class="row mt-2">
                <div class="col-sm-12">
                    <label for="OBS">OBS</label>
                    <textarea name="txtObs" id="txtObs" cols="15" rows="5" class="form-control"></textarea>
                </div>                
            </div>

            <div class="row mt-2">
                <div class="col-sm-2">
                    <button class="form-control" formaction="CadastroUsuario.php">Cadastro</button>
                </div> 

                <div class="col-sm-2">
                    <button class="form-control" formaction="alterar_Usuario.php">Alterar</button>
                </div>

                <div class="col-sm-2">
                    <button class="form-control">Limpar</button>
                </div>

                <div class="col-sm-2">
                    <button class="form-control">Sair</button>
                </div>
            </div>

        </div>
    </form>  


    <script>"../js/bootstrap.js"</script>
</body>
</html>