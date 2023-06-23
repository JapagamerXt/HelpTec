<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\bootstrap.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
       <div class="row">
        <div class="col-sm-12 text-center">
            <h1>Ordem de serviço</h1>
        </div>
   <form action="" method="post" class="form-control">
       <div class="row">
          <div class="col-xl-4 col-sm-4">
            <input type="text" name="id_os" class="form-control" placeholder="Id_Ordem de serviço">
          </div>
          <div class="col-xl-4 col-sm-4">
                  <input type="text" name="id_func_os" class="form-control" placeholder="Id_funcionário">
          </div>
          <div class="col-xl-4 col-sm-4">
            <input type="text" name="id_sesmt_os" class="form-control" placeholder="Id_sesmt">
          </div>
       </div>
       <div class="row mt-1">
        <div class="col-xl-6 col-sm-6">
           <input type="text" name="atividade_os" class="form-control" placeholder="Serviço">
       </div>
        <div class="col-xl-6 col-sm-6">
            <input type="text" name="nr_os" class="form-control" placeholder="NR">
        </div>
         <div class="row mt-1">
            <div class="col-xl-12 col-sm-12">
                <textarea name="desc_os" id="" cols="30" rows="5" placeholder="Descrição do Serviço" class="form-control"></textarea>
            </div>
         </div>
    <div class="row mt-1">
        <div class="col-sm-12 text-center">
            <h2>PET</h2>
        </div>

        <div class="row mt-1">
            <div class="col-xl-6 col-sm-6">
            <input type="text" name="local_pet" class="form-control" placeholder="Local">
            </div>
            <div class="col-xl-6 col-sm-6">
            <input type="text" name="espaco_pet" class="form-control" placeholder="Espaço">
            </div>
        </div>
        <div class="row mt-1">
            <div class="col-sm-4 col-xl-4">
                <input type="date" name="data_emissao_pet" class="form-control">
            </div>
            <div class="col-sm-4 col-xl-4">
                <input type="date" name="data_termino_pet" class="form-control">
            </div>
            <div class="col-sm-4 col-xl-4">
                <input type="text" name="acao_pet" class="form-control" placeholder="Ação">
            </div>
        </div>
        <div class="row mt-1">
            <div class="col-sm-4 col-xl-4">
                <input type="text" name="autorizado_pet" class="form-control" placeholder="Autorizado por:">
            </div>
            <div class="col-sm-4 col-xl-4">
                <input type="text" name="vigia_pet" class="form-control" placeholder="Vigia">
            </div>
            <div class="col-sm-4 col-xl-4">
                <input type="text" name="resgate_pet" class="form-control" placeholder="Regaste">
            </div>
        </div>
    </div>
            <div class="row mt-1">
                <div class="col-sm-6 col-xl-6">
                    <input type="text" name="supervisor_pet" class="form-control" placeholder="Supervisor">
                </div>
                <div class="col-sm-6 col-xl-6">
                    <input type="text" name="titulo_pet" class="form-control" placeholder="Titulo">
                </div>
            </div>
            <div class="row mt-1">
            <div class="col-xl-12 col-sm-12">
                <textarea name="desc_os" id="" cols="30" rows="5" placeholder="Descrição PET" class="form-control"></textarea>
            </div>
         </div>
         <div class="row mt-1">
        <div class="col-sm-12 text-center">
            <h2>APR</h2>
        </div>
        <div class="row mt-1">
            <div class="col-sm-4 col-xl-4">
                <input type="text" name="setor_apr" class="form-control" placeholder="Setor">
            </div>
            <div class="col-sm-4 col-xl-4">
                <input type="text" name="risco_apr" class="form-control" placeholder="Risco">
            </div>
            <div class="col-sm-4 col-xl-4">
                <input type="date" name="data_apr" class="form-control">
            </div>
            <div class="row mt-1">
            <div class="col-xl-12 col-sm-12">
                <textarea name="equipamento_apr" id="" cols="30" rows="4" placeholder="Equipamentos Utilizados" class="form-control"></textarea>
            </div>
        </div>
        <div class="row mt-1">
            <div class="col-xl-12 col-sm-12">
                <textarea name="servico_apr" id="" cols="30" rows="5" placeholder="Serviços a Executar" class="form-control"></textarea>
            </div>
        <div class="row mt-1 text-center">
            <div class="col-xl-12 col-sm-12">
                <button type="button" class="btn btn-success">Cadastrar</button>
                <button type="button" class="btn btn-success">Alterar</button>
                <button type="button" class="btn btn-success">Excluir</button>
            </div>
   </form>

       </div>

    </div>
    
</body>
</html>