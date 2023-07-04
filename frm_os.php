<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\bootstrap.css">
    <title>Document</title>
</head>
<body>
    <?php include_once('os_pesquisar.php') ?>
<form action="" method="post" class="form-control" enctype="multipart/form-data">
    <div class="container">
       <div class="row">
        <div class="col-sm-12 text-center">
            <h1>Ordem de serviço</h1>
        </div>
    
       <div class="row">
          <div class="col-xl-3 col-sm-3">
            <input type="text" name="id_os" class="form-control" placeholder="Id_Ordem de serviço" value="<?=$idos?>">
          </div>
          <div class="col-sm-1">
          <button name="btoCadastrar" id="pesquisarfunc" class="btn btn-success" formaction="frm_os.php">&#128269;</button>
          </div>
          <div class="col-xl-3 col-sm-3">
                  <input type="text" name="id_func_os" class="form-control" placeholder="Id_funcionário" value="<?=$idfuncos?>">
          </div>
          <div class="col-xl-1 col-sm-1">
          <button name="btoCadastrar" id="pesquisarfunc" class="btn btn-success" onclick="abrirJanelaPopUp()">&#128269;</button>
          </div>
          <div class="col-xl-3 col-sm-3">
            <input type="text" name="id_sesmt_os" class="form-control" placeholder="Id_sesmt" value="<?=$idsesmetos?>">
          </div>
          <div class="col-xl-1 col-sm-1">
          <button name="btoCadastrar" id="btoCadastrar" class="btn btn-success" onclick="abrirJanelaPopUp2()">&#128269;</button>
          </div>
       </div>
       <div class="row mt-1">
        <div class="col-xl-4 col-sm-4">
           <input type="text" name="atividade_os" class="form-control" placeholder="Serviço" value="<?=$atividadeos?>">
       </div>
        <div class="col-xl-4 col-sm-4">
            <input type="text" name="nr_os" class="form-control" placeholder="NR" value="<?=$idnr?>">
        </div>
        <div class="col-sm-4">
                <select name="status_os" id="txtStatus" class="form-control">
                    <option value="">-- Selecione um Status --</option>
                    <option value="Ativo">Ativo</option>
                    <option value="Inativo">Inativo</option>
                </select>
            </div>
         <div class="row mt-1">
            <div class="col-xl-12 col-sm-12">
                <textarea name="desc_os" id="" cols="30" rows="5" placeholder="Descrição do Serviço" class="form-control" value=""><?=$descricaoos?></textarea>
            </div>
         </div>
         <div class="row mt-1">
            <div class="col-xl-12 col-sm-12">
                <textarea name="obs_os" id="" cols="30" rows="5" placeholder="Observações da Ordem de Serviço" class="form-control" value=""><?=$obsapros?></textarea>
            </div>
         </div>
         <div class="row mt-2 text-center">
            <div class="col-xl-12 col-sm-12">
            <button name="btoCadastrar" id="btoCadastrar" class="btn btn-success" formaction="os_cadastrar.php">Cadastrar</button>
                <button type="button" class="btn btn-success">Alterar</button>
                <button type="button" class="btn btn-success">Excluir</button>
            </div>
    </div>
            
</form>
    <script src="js/scripts.js"></script>
</body>
</html>