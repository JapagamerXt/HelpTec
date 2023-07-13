<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Document</title>
</head>
<body onload="Esconder()">
<h1>APR</h1>
        </div>
    <form action="" method="post" class="form-control border-0" onsubmit="return false;" id="form_apr_cadastrar">
        <div class="row mt-1" id="per01">
        <div class="col-sm-12 text-center">
            <h2>Setor</h2>
        </div>
            <div class="col-sm-12 mt-1">
                <input type="text" name="setor_apr" id="setor_apr" class="form-control" placeholder="Setor">
            </div>
            <div class="col-sm-12 text-center mt-1">
            <button name="btoCadastrar" id="btoProximo" class="btn btn-success"onclick="IrPergunta2()">Próximo</button>
            </div>
       </div>

        </div>
        <div class="row mt-1" id="per02">  
        <div class="col-sm-12 text-center">
            <h2>Risco</h2>
          </div> 
            <div class="col-sm-12">
                <input type="text" name="risco_apr" id="risco_apr" class="form-control" placeholder="Risco">
            </div>
            <div class="col-sm-12 text-center mt-1">
            <button name="btoCadastrar" id="btAnterior" class="btn btn-success" onclick="Esconder()" >Anterior</button>
            <button name="btoCadastrar" id="btoProximo" class="btn btn-success" onclick="IrPergunta3()" >Próximo</button>
            </div>
        </div>
        <div class="row mt-1" id="per03">
        <div class="col-sm-12 text-center">
            <h2>Data APR</h2>
          </div>   
            <div class="col-sm-12">
                <input type="date" name="data_apr" id="data_apr" class="form-control">
            </div>
            <div class="col-sm-12 text-center mt-1">
            <button name="btoCadastrar" id="btAnterior" class="btn btn-success" onclick="IrPergunta2()" >Anterior</button>
            <button name="btoCadastrar" id="btoProximo" class="btn btn-success" onclick="IrPergunta4()" >Próximo</button>
            </div>
        </div> 
        <div class="row mt-1" id="per04">
        <div class="col-sm-12 text-center">
            <h2>Equipamentos</h2>
          </div>
            <div class="col-xl-12 col-sm-12 mt-1">
                <textarea name="equipamento_apr" id="equipamento_apr" cols="30" rows="4" placeholder="Equipamentos Utilizados" class="form-control"></textarea>
            </div>
            <div class="col-sm-12 text-center">
            <button name="btoCadastrar" id="btAnterior" class="btn btn-success" onclick="IrPergunta3()" >Anterior</button>
            <button name="btoCadastrar" id="btoProximo" class="btn btn-success" onclick="IrPergunta5()" >Próximo</button>
            </div>
        </div>
        <div class="row mt-1" id="per05">
        <div class="col-sm-12 text-center">
            <h2>Serviços</h2>
          </div>
            <div class="col-sm-12">
                <textarea name="servico_apr" id="servico_apr" cols="30" rows="5" placeholder="Serviços a Executar" class="form-control"></textarea>
            </div>
            <div class="col-sm-12 text-center mt-1">
            <button name="btoCadastrar" id="btAnterior" class="btn btn-success" onclick="IrPergunta4()" >Anterior</button>
            <button name="btoCadastrar" id="btoProximo" class="btn btn-success" onclick="IrPergunta6()" >Próximo</button>
            </div>
        </div>   
        <div class="row mt-1" id="per06">
        <div class="col-sm-12 text-center">
            <h2>Observações</h2>
          </div>
            <div class="col-sm-12 mt-1">
                <textarea name="obs_apr" id="obs_apr" cols="30" rows="5" placeholder="Observações da Apr" class="form-control"></textarea>
            </div>
            <div class="col-sm-12 text-center">
            <button name="btoCadastrar" id="btAnterior" class="btn btn-success" onclick="IrPergunta5()" >Anterior</button>
            <button name="btoCadastrar" id="btoProximo" class="btn btn-success" onclick="IrPergunta7()" >Próximo</button>
            </div>
        </div>  
       </div>   
    <div class="row" id="per07">
          <div class="col-sm-12 text-center mt-1">
            <h2>Status</h2>
          </div>
        <div class="col-sm-12 text-center">
        <select  id="status_apr" name="status_apr" class="form-control">
                    <option value="">-- Selecione um Status --</option>
                    <option value="Ativo">Ativo</option>
                    <option value="Inativo">Inativo</option>
                </select>
        </div>
        <div class="col-sm-12 text-center">
            <button name="btoCadastrar" id="btAnterior" class="btn btn-success" onclick="IrPergunta6()" >Anterior</button>
            <button name="btoCadastrar" id="btoProximo" class="btn btn-success" onclick="Cadastrar()" >Finalizar</button>
            </div>
    </div> 
        
</form>
<script>
  let p1 = document.getElementById("per01");
  let p2 = document.getElementById("per02");
  let p3 = document.getElementById("per03");
  let p4 = document.getElementById("per04");
  let p5 = document.getElementById("per05");
  let p6 = document.getElementById("per06");
  let p7 = document.getElementById("per07");

  function Esconder()
  {
     p1.style.display = "block";
     p2.style.display = "none";
     p3.style.display = "none";
     p4.style.display = "none";
     p5.style.display = "none";
     p6.style.display = "none";
     p7.style.display = "none";
  }
  function IrPergunta2()
  {
    let text = document.getElementById("setor_apr");
    if(text.value == ''){
      alert("Por favor, preencha os campos obrigatórios");
    }else{
  
    p1.style.display = "none";
    p2.style.display = "block";
    p3.style.display = "none";
    p4.style.display = "none";
    p5.style.display = "none";
    p6.style.display = "none";
    p7.style.display = "none";
    }
}
function IrPergunta3()
  {
    let text = document.getElementById("risco_apr");
    if(text.value == ''){
      alert("Por favor, preencha os campos obrigatórios");
    }else{
    p1.style.display = "none";
    p2.style.display = "none";
    p3.style.display = "block";
    p4.style.display = "none";
    p5.style.display = "none";
    p6.style.display = "none";
    p7.style.display = "none";
    }
}  
function IrPergunta4()
  {
    let text = document.getElementById("data_apr");
    if(text.value == ''){
      alert("Por favor, preencha os campos obrigatórios");
    }else{
    p1.style.display = "none";
    p2.style.display = "none";
    p3.style.display = "none";
    p4.style.display = "Block";
    p5.style.display = "none";
    p6.style.display = "none";
    p7.style.display = "none";
    }
} 
function IrPergunta5()
  {
    let text = document.getElementById("equipamento_apr");
    if(text.value == ''){
      alert("Por favor, preencha os campos obrigatórios");
    }else{
    p1.style.display = "none";
    p2.style.display = "none";
    p3.style.display = "none";
    p4.style.display = "none";
    p5.style.display = "Block";
    p6.style.display = "none";
    p7.style.display = "none";
    }
} 
function IrPergunta6()
  {
    let text = document.getElementById("servicos_apr");
    if(text.value == ''){
      alert("Por favor, preencha os campos obrigatórios");
    }else{
    p1.style.display = "none";
    p2.style.display = "none";
    p3.style.display = "none";
    p4.style.display = "none";
    p5.style.display = "none";
    p6.style.display = "Block";
    p7.style.display = "none";
    }
}
function IrPergunta7()
  {
    let text = document.getElementById("obs_apr");
    if(text.value == ''){
      alert("Por favor, preencha os campos obrigatórios");
    }else{
    p1.style.display = "none";
    p2.style.display = "none";
    p3.style.display = "none";
    p4.style.display = "none";
    p5.style.display = "none";
    p6.style.display = "none";
    p7.style.display = "Block";
    }
}  
</script>

</body>
</html>