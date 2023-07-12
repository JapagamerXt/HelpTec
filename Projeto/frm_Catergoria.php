<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Document</title>
</head>

<body>
    <h1 class="text-center">Categoria</h1>
    <form action="" method="post" class= "form-control">
        <div class="container mt-3">
            <div class="row">

                <div class="col-sm-3" class= "form-control">
                    <input type="numero" class= "form-control" min="0" name="txtID" id="txtID" placeholder="ID da Categoria" >
                </div>
                <div class="col-sm-1" class= "form-control">
                <button formaction="frm_Usuario.php" class="btn btn-primary" name="btoPesquisar" id="btoPequisar">&#128269;</button>
                </div>

                <div class="col-sm-4" class= "form-control">
                    <input type="text" class= "form-control" min="0" name="txtnome" id="txtnome" placeholder="Nome" >
                </div>

                <div class="col-sm-4" class= "form-control">
                    <select name="txtStatus" id="txtStatus"  class= "form-control">
                        <option value="">-- Selecione um status --</option>
                        <option value="Ativo"> Ativo </option>
                        <option value="Inativo"> Inativo </option>
                    </select>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-sm-12" class= "form-control">
                    <div class="mb-3">
                        <textarea name="txtObs" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Obs:"></textarea>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12 text-end">
                    <button  name="btocadastro" id="btocadastro" class="btn btn-primary" formaction="Categoria_Cadastro.php" >Cadastrar</button>
                    <button  name="btoaltura" id="btoaltura" class="btn btn-primary" formaction="Categoria_alterar.php">Alterar</button>
                    <button href  name="btolimpar" id="btolimpar" class="btn btn-primary">Limpar</button>
                    <button  name="btoexcluir" id="btoexcluir" class="btn btn-primary">Excluir</button>
                    <button  name="btosair" id="btosair" class="btn btn-primary">Sair</button>
                </div>
            </div>
        </div>

    </form>


    <link rel="stylesheet" href="../js/bootstrap.js">

</body>
</html>