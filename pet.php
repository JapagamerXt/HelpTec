<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\bootstrap.css">
    <link rel="stylesheet" href="css\estilo.css">
    <title>PET</title>
  
</head>
<body onload="Esconder()">
    <h1 id="pet">PET</h1>
    <form action="" method="post" class="form-control border-0" onsubmit="return false;">
     <div class="container">
       <div class="row" id="per01">
          <div class="col-sm-12 text-center">
            <h2>Nome da Empresa:</h2>
          </div>
          <div class="col-sm-12">
          <input type="text" id="resp_per01" class="form-control">
          </div>
          <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo1" onclick="IrPergunta2()">Próximo 2</button>
          </div>
         
       </div>
       <div class="row" id="per02">
          <div class="col-sm-12 text-center">
            <h2>Local espaço confinado:</h2>
          </div>
          <div class="col-sm-12">
          <input type="text" id="resp_per02" class="form-control">
          </div>
          <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo2" onclick="IrPergunta3()">Próximo</button>
          </div>
         
       </div>
       <div class="row" id="per03">
          <div class="col-sm-12 text-center">
            <h2>N° Espaço confinado:</h2>
          </div>
        <div class="col-sm-12 text-center">
        <input type="text" id="resp_per03" class="form-control">
        </div>
          <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo3" onclick="IrPergunta4()">Próximo</button>
          </div>
        </div>
        <div class="row" id="per04">
          <div class="col-sm-12 text-center">
            <h2>Data e Horário de Emissão</h2>
          </div>
          <div class="col-sm-12">
            <input type="date" class="form-control" id="resp_per04">
          </div>
          <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo4" onclick="IrPergunta5()">Próximo</button>
          </div>
         
       </div>
       <div class="row" id="per05">
          <div class="col-sm-12 text-center">
            <h2>Data e Horário de Término</h2>
          </div>
          <div class="col-sm-12">
          <input type="date" class="form-control" id="resp_per05">
          </div>
          <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo5" onclick="IrPergunta6()">Próximo</button>
          </div>
         
       </div>
       <div class="row" id="per06">
          <div class="col-sm-12 text-center">
            <h2>Trabalho a ser realizado:</h2>
          </div>
          <div class="col-sm-12 text-center">
          <input type="text" id="resp_per06" class="form-control">
          </div>
          <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo6" onclick="IrPergunta7()">Próximo</button>
          </div>
       </div>
       <div class="row" id="per07">
          <div class="col-sm-12 text-center">
            <h2>Trabalhadores Autorizados</h2>
          </div>
          <div class="col-sm-12">
            <textarea name="" id="resp_per07" cols="30" rows="05" placeholder="Teste" class="form-control"></textarea>
          </div>
          <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo7" onclick="IrPergunta8()">Próximo</button>
          </div>
         
       </div>
       <div class="row" id="per08">
          <div class="col-sm-12 text-center">
            <h2>Vigia</h2>
          </div>
          <div class="col-sm-12">
          <input type="text" id="resp_per08" class="form-control">
          </div>
          <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo8" onclick="IrPergunta9()">Próximo</button>
          </div>
         
       </div>
       <div class="row" id="per09">
          <div class="col-sm-12 text-center">
            <h2>Equipe de Resgate</h2>
          </div>
        <div class="col-sm-12 text-center">
          <input type="text" id="resp_per09" class="form-control">
        </div>
          <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo9" >Próximo</button>
          </div>
     </div>
     <div class="row" id="per10">
          <div class="col-sm-12 text-center">
            <h2>Supervisor de entrada</h2>
          </div>
        <div class="col-sm-12 text-center">
          <input type="text" id="resp_per10" class="form-control">
        </div>
          <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo9" >Próximo</button>
          </div>
      </div>
    <div class="row" id="per11">
          <div class="col-sm-12 text-center">
            <h2>Isolamento</h2>
          </div>
        <div class="col-sm-12 text-center">
        <input type="radio" name="select" id="resp_per11" value="sim" class="form-check-input">
          <label class="form-check-label" for="resp_per11">
           Sim
          </label>
          <input type="radio" name="select" id="resp_per11" value="Não" class="form-check-input">
          <label class="form-check-label" for="resp_per11">
            Não
          </label>
        </div>
          <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo9" >Próximo</button>
          </div>
     </div>
     <div class="row" id="per12">
            <div class="col-sm-12 text-center">
              <h2>Teste Inicial da Atmosfera</h2>
            </div>
            <div class="col-sm-3 text-center">
            <input type="text" id="resp_per12_oxigenio" class="form-control" placeholder="Oxigênio">
            </div>
            <div class="col-sm-3 text-center">
            <input type="text" id="resp_per10_inflamaveis" class="form-control" placeholder="Inflamáveis">
            </div>
            <div class="col-sm-3 text-center">
            <input type="text" id="resp_per10_gases" class="form-control" placeholder="Gases/Vapores/Tóxico">
            </div>
            <div class="col-sm-3 text-center">
            <input type="text" id="resp_per10_poeiras" class="form-control" placeholder="Poeiras/fumos/névoas">
            </div>
            <div class="col-sm-12 text-center mt-1">
            <input type="text" id="resp_per10" class="form-control" placeholder="Nome legível e Assinatura do Supervisor dos testes">
            </div>
            <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo9" >Próximo</button>
          </div>
     </div>
     <div class="row" id="per13">
         <div class="col-sm-12 text-center">
              <h2>Bloqueios, travamentos e etiquetagem</h2>
            </div>
          <div class="col-sm-12 text-center mt-1">
          <input type="radio" name="select" id="resp_per13" value="sim" class="form-check-input">
          <label class="form-check-label" for="resp_per13">
           Sim
          </label>
          <input type="radio" name="select" id="resp_per13" value="Não" class="form-check-input">
          <label class="form-check-label" for="resp_per13">
            Não
          </label>
          <input type="radio" name="select" id="resp_per13" value="Não" class="form-check-input">
          <label class="form-check-label" for="resp_per13">
            N/A
          </label>
          </div>
          <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo9" >Próximo</button>
          </div>
      </div>
      <div class="row" id="per14">
         <div class="col-sm-12 text-center">
              <h2>Purga e ou Lavagem</h2>
            </div>
          <div class="col-sm-12 text-center mt-1">
          <input type="radio" name="select" id="resp_per14" value="sim" class="form-check-input">
          <label class="form-check-label" for="resp_per14">
           Sim
          </label>
          <input type="radio" name="select" id="resp_per14" value="Não" class="form-check-input">
          <label class="form-check-label" for="resp_per14">
            Não
          </label>
          <input type="radio" name="select" id="resp_per14" value="Não" class="form-check-input">
          <label class="form-check-label" for="resp_per14">
            N/A
          </label>
          </div>
          <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo9" >Próximo</button>
          </div>
      </div>
      <div class="row" id="per15">
         <div class="col-sm-12 text-center">
              <h2>Purga e ou Lavagem</h2>
            </div>
          <div class="col-sm-12 text-center mt-1">
          <input type="radio" name="select" id="resp_per15" value="sim" class="form-check-input">
          <label class="form-check-label" for="resp_per15">
           Sim
          </label>
          <input type="radio" name="select" id="resp_per15" value="Não" class="form-check-input">
          <label class="form-check-label" for="resp_per15">
            Não
          </label>
          <input type="radio" name="select" id="resp_per15" value="Não" class="form-check-input">
          <label class="form-check-label" for="resp_per15">
            N/A
          </label>
          </div>
          <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo9" >Próximo</button>
          </div>
      </div>
      <div class="row" id="per16">
            <div class="col-sm-12 text-center">
              <h2>Teste após ventilação e isolamento</h2>
            </div>
            <div class="col-sm-3 text-center">
            <input type="text" id="resp_per16_oxigenio" class="form-control" placeholder="Oxigênio">
            </div>
            <div class="col-sm-3 text-center">
            <input type="text" id="resp_per16_inflamaveis" class="form-control" placeholder="Inflamáveis">
            </div>
            <div class="col-sm-3 text-center">
            <input type="text" id="resp_per16_gases" class="form-control" placeholder="Gases/Vapores/Tóxico">
            </div>
            <div class="col-sm-3 text-center">
            <input type="text" id="resp_per16_poeiras" class="form-control" placeholder="Poeiras/fumos/névoas">
            </div>
            <div class="col-sm-12 text-center mt-1">
            <input type="text" id="resp_per16_supervisor" class="form-control" placeholder="Nome legível e Assinatura do Supervisor dos testes">
            </div>
            <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo9" >Próximo</button>
          </div>
     </div>
     <div class="row" id="per17">
         <div class="col-sm-12 text-center">
              <h2>Iluminação Geral</h2>
            </div>
          <div class="col-sm-12 text-center mt-1">
          <input type="radio" name="select" id="resp_per17" value="sim" class="form-check-input">
          <label class="form-check-label" for="resp_per17">
           Sim
          </label>
          <input type="radio" name="select" id="resp_per17" value="Não" class="form-check-input">
          <label class="form-check-label" for="resp_per15">
            Não
          </label>
          <input type="radio" name="select" id="resp_per17" value="Não" class="form-check-input">
          <label class="form-check-label" for="resp_per17">
            N/A
          </label>
          </div>
          <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo9" >Próximo</button>
          </div>
      </div>
      <div class="row" id="per18">
         <div class="col-sm-12 text-center">
              <h2>Procedimento de comunicação</h2>
            </div>
          <div class="col-sm-12 text-center mt-1">
          <input type="radio" name="select" id="resp_per18" value="sim" class="form-check-input">
          <label class="form-check-label" for="resp_per18">
           Sim
          </label>
          <input type="radio" name="select" id="resp_per18" value="Não" class="form-check-input">
          <label class="form-check-label" for="resp_per18">
            Não
          </label>
          <input type="radio" name="select" id="resp_per18" value="Não" class="form-check-input">
          <label class="form-check-label" for="resp_per18">
            N/A
          </label>
          </div>
          <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo9" >Próximo</button>
          </div>
      </div>
      <div class="row" id="per19">
         <div class="col-sm-12 text-center">
              <h2>Procedimento de resgate</h2>
            </div>
          <div class="col-sm-12 text-center mt-1">
          <input type="radio" name="select" id="resp_per19" value="sim" class="form-check-input">
          <label class="form-check-label" for="resp_per19">
           Sim
          </label>
          <input type="radio" name="select" id="resp_per19" value="Não" class="form-check-input">
          <label class="form-check-label" for="resp_per19">
            Não
          </label>
          <input type="radio" name="select" id="resp_per19" value="N/A" class="form-check-input">
          <label class="form-check-label" for="resp_per19">
            N/A
          </label>
          </div>
          <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo9" >Próximo</button>
          </div>
      </div>
      <div class="row" id="per20">
         <div class="col-sm-12 text-center">
              <h2>Procedimento e proteção de movimento vertical:</h2>
            </div>
          <div class="col-sm-12 text-center mt-1">
          <input type="radio" name="select" id="resp_per20" value="sim" class="form-check-input">
          <label class="form-check-label" for="resp_per20">
           Sim
          </label>
          <input type="radio" name="select" id="resp_per20" value="Não" class="form-check-input">
          <label class="form-check-label" for="resp_per20">
            Não
          </label>
          <input type="radio" name="select" id="resp_per20" value="N/A" class="form-check-input">
          <label class="form-check-label" for="resp_per20">
            N/A
          </label>
          </div>
          <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo9" >Próximo</button>
          </div>
      </div>
      <div class="row" id="per21">
         <div class="col-sm-12 text-center">
              <h2>Treinamento para  todos os colaborades. É atual?</h2>
            </div>
          <div class="col-sm-12 text-center mt-1">
          <input type="radio" name="select" id="resp_per21" value="sim" class="form-check-input">
          <label class="form-check-label" for="resp_per21">
           Sim
          </label>
          <input type="radio" name="select" id="resp_per21" value="Não" class="form-check-input">
          <label class="form-check-label" for="resp_per21">
            Não
          </label>
          <input type="radio" name="select" id="resp_per21" value="N/A" class="form-check-input">
          <label class="form-check-label" for="resp_per21">
            N/A
          </label>
          </div>
          <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo9" >Próximo</button>
          </div>
      </div>
      <div class="row" id="per22">
          <div class="col-sm-12 text-center">
            <h2>Equipamentos</h2>
          </div>
        <div class="col-sm-12 text-center">
          <input type="text" id="resp_per22" class="form-control">
        </div>
          <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo9" >Próximo</button>
          </div>
      </div>
      <div class="row" id="per23">
         <div class="col-sm-12 text-center">
              <h2>Equipamento de monitoramento contínuo de gases aprovados</h2>
            </div>
          <div class="col-sm-12 text-center mt-1">
          <input type="radio" name="select" id="resp_per23" value="sim" class="form-check-input">
          <label class="form-check-label" for="resp_per23">
           Sim
          </label>
          <input type="radio" name="select" id="resp_per23" value="Não" class="form-check-input">
          <label class="form-check-label" for="resp_per23">
            Não
          </label>
          <input type="radio" name="select" id="resp_per23" value="N/A" class="form-check-input">
          <label class="form-check-label" for="resp_per23">
            N/A
          </label>
          </div>
      <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo9" >Próximo</button>
          </div>
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
  let p8 = document.getElementById("per08");
  let p9 = document.getElementById("per09");

  function Esconder()
  {
     p1.style.display = "block";
     p2.style.display = "none";
     p3.style.display = "none";
     p4.style.display = "none";
     p5.style.display = "none";
     p6.style.display = "none";
     p7.style.display = "none";
     p8.style.display = "none";
     p9.style.display = "none";

  }

  function IrPergunta2()
  {
    p1.style.display = "none";
    p2.style.display = "block";
    p3.style.display = "none";
    p4.style.display = "none";
    p5.style.display = "none";
    p6.style.display = "none";
    p7.style.display = "none";
    p8.style.display = "none";
    p9.style.display = "none";
  }
  function IrPergunta3()
  {
    p1.style.display = "none";
    p2.style.display = "none";
    p3.style.display = "block";
    p4.style.display = "none";
    p5.style.display = "none";
    p6.style.display = "none";
    p7.style.display = "none";
    p8.style.display = "none";
    p9.style.display = "none";
  }
  function IrPergunta4()
  {
    p1.style.display = "none";
    p2.style.display = "none";
    p3.style.display = "none";
    p4.style.display = "block";
    p5.style.display = "none";
    p6.style.display = "none";
    p7.style.display = "none";
    p8.style.display = "none";
    p9.style.display = "none";
  }
  function IrPergunta5()
  {
    p1.style.display = "none";
    p2.style.display = "none";
    p3.style.display = "none";
    p4.style.display = "none";
    p5.style.display = "block";
    p6.style.display = "none";
    p7.style.display = "none";
    p8.style.display = "none";
    p9.style.display = "none";
  }
  function IrPergunta6()
  {
    p1.style.display = "none";
    p2.style.display = "none";
    p3.style.display = "none";
    p4.style.display = "none";
    p5.style.display = "none";
    p6.style.display = "block";
    p7.style.display = "none";
    p8.style.display = "none";
    p9.style.display = "none";
  }
  function IrPergunta7()
  {
    p1.style.display = "none";
    p2.style.display = "none";
    p3.style.display = "none";
    p4.style.display = "none";
    p5.style.display = "none";
    p6.style.display = "none";
    p7.style.display = "block";
    p8.style.display = "none";
    p9.style.display = "none";
  }
  function IrPergunta8()
  {
    p1.style.display = "none";
    p2.style.display = "none";
    p3.style.display = "none";
    p4.style.display = "none";
    p5.style.display = "none";
    p6.style.display = "none";
    p7.style.display = "none";
    p8.style.display = "block";
    p9.style.display = "none";
  }
  function IrPergunta9()
  {
    p1.style.display = "none";
    p2.style.display = "none";
    p3.style.display = "none";
    p4.style.display = "none";
    p5.style.display = "none";
    p6.style.display = "none";
    p7.style.display = "none";
    p8.style.display = "none";
    p9.style.display = "block";
  }


</script>

</body>
</html>