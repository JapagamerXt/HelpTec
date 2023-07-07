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
            <button class="btn btn-success" id="btn_proximo9" onclick="IrPergunta10()" >Próximo</button>
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
            <button class="btn btn-success" id="btn_proximo9" onclick="IrPergunta11()" >Próximo</button>
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
            <button class="btn btn-success" id="btn_proximo9" onclick="IrPergunta12()" >Próximo</button>
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
            <input type="text" id="resp_per12_inflamaveis" class="form-control" placeholder="Inflamáveis">
            </div>
            <div class="col-sm-3 text-center">
            <input type="text" id="resp_per12_gases" class="form-control" placeholder="Gases/Vapores/Tóxico">
            </div>
            <div class="col-sm-3 text-center">
            <input type="text" id="resp_per12_poeiras" class="form-control" placeholder="Poeiras/fumos/névoas">
            </div>
            <div class="col-sm-12 text-center mt-1">
            <input type="text" id="resp_per12_nome" class="form-control" placeholder="Nome legível e Assinatura do Supervisor dos testes">
            </div>
            <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo9" onclick="IrPergunta13()" >Próximo</button>
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
            <button class="btn btn-success" id="btn_proximo9" onclick="IrPergunta14()" >Próximo</button>
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
            <button class="btn btn-success" id="btn_proximo9" onclick="IrPergunta15()" >Próximo</button>
          </div>
      </div>
      <div class="row" id="per15">
         <div class="col-sm-12 text-center">
              <h2>Ventilação/Exaustão</h2>
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
            <button class="btn btn-success" id="btn_proximo9" onclick="IrPergunta16()" >Próximo</button>
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
            <button class="btn btn-success" id="btn_proximo9" onclick="IrPergunta17()" >Próximo</button>
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
            <button class="btn btn-success" id="btn_proximo9" onclick="IrPergunta18()" >Próximo</button>
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
            <button class="btn btn-success" id="btn_proximo9" onclick="IrPergunta19()" >Próximo</button>
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
            <button class="btn btn-success" id="btn_proximo9"onclick="IrPergunta20()" >Próximo</button>
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
            <button class="btn btn-success" id="btn_proximo9" onclick="IrPergunta21()" >Próximo</button>
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
            <button class="btn btn-success" id="btn_proximo9" onclick="IrPergunta22()" >Próximo</button>
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
            <button class="btn btn-success" id="btn_proximo9" onclick="IrPergunta23()" >Próximo</button>
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
            <button class="btn btn-success" id="btn_proximo9" onclick="IrPergunta24()" >Próximo</button>
          </div>
      </div>
      <div class="row" id="per24">
         <div class="col-sm-12 text-center">
              <h2>Lanternas</h2>
            </div>
          <div class="col-sm-12 text-center mt-1">
          <input type="radio" name="select" id="resp_per24" value="sim" class="form-check-input">
          <label class="form-check-label" for="resp_per24">
           Sim
          </label>
          <input type="radio" name="select" id="resp_per24" value="Não" class="form-check-input">
          <label class="form-check-label" for="resp_per24">
            Não
          </label>
          <input type="radio" name="select" id="resp_per23" value="N/A" class="form-check-input">
          <label class="form-check-label" for="resp_per24">
            N/A
          </label>
          </div>
      <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo9" onclick="IrPergunta25()" >Próximo</button>
          </div>
      </div>
      <div class="row" id="per25">
         <div class="col-sm-12 text-center">
              <h2>Roupas de Proteção</h2>
            </div>
          <div class="col-sm-12 text-center mt-1">
          <input type="radio" name="select" id="resp_per25" value="sim" class="form-check-input">
          <label class="form-check-label" for="resp_per25">
           Sim
          </label>
          <input type="radio" name="select" id="resp_per25" value="Não" class="form-check-input">
          <label class="form-check-label" for="resp_per25">
            Não
          </label>
          <input type="radio" name="select" id="resp_per25" value="N/A" class="form-check-input">
          <label class="form-check-label" for="resp_per25">
            N/A
          </label>
          </div>
      <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo9" onclick="IrPergunta26()" >Próximo</button>
          </div>
      </div>
      <div class="row" id="per26">
         <div class="col-sm-12 text-center">
              <h2>Extintores de Incendio</h2>
            </div>
          <div class="col-sm-12 text-center mt-1">
          <input type="radio" name="select" id="resp_per26" value="sim" class="form-check-input">
          <label class="form-check-label" for="resp_per26">
           Sim
          </label>
          <input type="radio" name="select" id="resp_per26" value="Não" class="form-check-input">
          <label class="form-check-label" for="resp_per26">
            Não
          </label>
          <input type="radio" name="select" id="resp_per26" value="N/A" class="form-check-input">
          <label class="form-check-label" for="resp_per26">
            N/A
          </label>
          </div>
      <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo9" onclick="IrPergunta27()" >Próximo</button>
          </div>
      </div>
      <div class="row" id="per27">
         <div class="col-sm-12 text-center">
              <h2>Capacetes, botas Luvas</h2>
            </div>
          <div class="col-sm-12 text-center mt-1">
          <input type="radio" name="select" id="resp_per27" value="sim" class="form-check-input">
          <label class="form-check-label" for="resp_per27">
           Sim
          </label>
          <input type="radio" name="select" id="resp_per27" value="Não" class="form-check-input">
          <label class="form-check-label" for="resp_per27">
            Não
          </label>
          <input type="radio" name="select" id="resp_per27" value="N/A" class="form-check-input">
          <label class="form-check-label" for="resp_per27">
            N/A
          </label>
          </div>
      <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo9" onclick="IrPergunta28()" >Próximo</button>
          </div>
      </div>
      <div class="row" id="per28">
         <div class="col-sm-12 text-center">
              <h2>Equipamentos de proteção respiratória</h2>
            </div>
          <div class="col-sm-12 text-center mt-1">
          <input type="radio" name="select" id="resp_per28" value="sim" class="form-check-input">
          <label class="form-check-label" for="resp_per28">
           Sim
          </label>
          <input type="radio" name="select" id="resp_per28" value="Não" class="form-check-input">
          <label class="form-check-label" for="resp_per28">
            Não
          </label>
          <input type="radio" name="select" id="resp_per28" value="N/A" class="form-check-input">
          <label class="form-check-label" for="resp_per28">
            N/A
          </label>
          </div>
      <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo9" onclick="IrPergunta29()" >Próximo</button>
          </div>
      </div>
      <div class="row" id="per29">
         <div class="col-sm-12 text-center">
              <h2>Cinturão de Segurança</h2>
            </div>
          <div class="col-sm-12 text-center mt-1">
          <input type="radio" name="select" id="resp_per29" value="sim" class="form-check-input">
          <label class="form-check-label" for="resp_per29">
           Sim
          </label>
          <input type="radio" name="select" id="resp_per29" value="Não" class="form-check-input">
          <label class="form-check-label" for="resp_per29">
            Não
          </label>
          <input type="radio" name="select" id="resp_per29" value="N/A" class="form-check-input">
          <label class="form-check-label" for="resp_per29">
            N/A
          </label>
          </div>
      <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo9" onclick="IrPergunta30()" >Próximo</button>
          </div>
      </div>
      <div class="row" id="per30">
         <div class="col-sm-12 text-center">
              <h2>Cinturão de segurança para equipe de resgate</h2>
            </div>
          <div class="col-sm-12 text-center mt-1">
          <input type="radio" name="select" id="resp_per30" value="sim" class="form-check-input">
          <label class="form-check-label" for="resp_per30">
           Sim
          </label>
          <input type="radio" name="select" id="resp_per30" value="Não" class="form-check-input">
          <label class="form-check-label" for="resp_per30">
            Não
          </label>
          <input type="radio" name="select" id="resp_per30" value="N/A" class="form-check-input">
          <label class="form-check-label" for="resp_per30">
            N/A
          </label>
          </div>
      <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo9" onclick="IrPergunta31()" >Próximo</button>
          </div>
      </div>
      <div class="row" id="per31">
         <div class="col-sm-12 text-center">
              <h2>Escada</h2>
            </div>
          <div class="col-sm-12 text-center mt-1">
          <input type="radio" name="select" id="resp_per31" value="sim" class="form-check-input">
          <label class="form-check-label" for="resp_per23">
           Sim
          </label>
          <input type="radio" name="select" id="resp_per31" value="Não" class="form-check-input">
          <label class="form-check-label" for="resp_per31">
            Não
          </label>
          <input type="radio" name="select" id="resp_per31" value="N/A" class="form-check-input">
          <label class="form-check-label" for="resp_per31">
            N/A
          </label>
          </div>
      <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo9" onclick="IrPergunta32()" >Próximo</button>
          </div>
      </div>
      <div class="row" id="per32">
         <div class="col-sm-12 text-center">
              <h2>Equipamento de movimentação</h2>
            </div>
          <div class="col-sm-12 text-center mt-1">
          <input type="radio" name="select" id="resp_per32" value="sim" class="form-check-input">
          <label class="form-check-label" for="resp_per32">
           Sim
          </label>
          <input type="radio" name="select" id="resp_per32" value="Não" class="form-check-input">
          <label class="form-check-label" for="resp_per32">
            Não
          </label>
          <input type="radio" name="select" id="resp_per32" value="N/A" class="form-check-input">
          <label class="form-check-label" for="resp_per32">
            N/A
          </label>
          </div>
      <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo9" onclick="IrPergunta33()" >Próximo</button>
          </div>
      </div>
      <div class="row" id="per33">
         <div class="col-sm-12 text-center">
              <h2>Equipamento de comunicação eletrônica aprovados e certificados</h2>
            </div>
          <div class="col-sm-12 text-center mt-1">
          <input type="radio" name="select" id="resp_per33" value="sim" class="form-check-input">
          <label class="form-check-label" for="resp_per33">
           Sim
          </label>
          <input type="radio" name="select" id="resp_per33" value="Não" class="form-check-input">
          <label class="form-check-label" for="resp_per33">
            Não
          </label>
          <input type="radio" name="select" id="resp_per33" value="N/A" class="form-check-input">
          <label class="form-check-label" for="resp_per33">
            N/A
          </label>
          </div>
      <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo9" onclick="IrPergunta34()" >Próximo</button>
          </div>
      </div>
      <div class="row" id="per34">
         <div class="col-sm-12 text-center">
              <h2>Equipamento de proteção respiratória autônomo ou sistema de ar com cilindro</h2>
            </div>
          <div class="col-sm-12 text-center mt-1">
          <input type="radio" name="select" id="resp_per34" value="sim" class="form-check-input">
          <label class="form-check-label" for="resp_per34">
           Sim
          </label>
          <input type="radio" name="select" id="resp_per34" value="Não" class="form-check-input">
          <label class="form-check-label" for="resp_per34">
            Não
          </label>
          <input type="radio" name="select" id="resp_per34" value="N/A" class="form-check-input">
          <label class="form-check-label" for="resp_per34">
            N/A
          </label>
          </div>
      <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo9" onclick="IrPergunta35()" >Próximo</button>
          </div>
      </div>
      <div class="row" id="per35">
         <div class="col-sm-12 text-center">
              <h2>Equipamentos eletricos e eletrônicos aprovados e certificados</h2>
            </div>
          <div class="col-sm-12 text-center mt-1">
          <input type="radio" name="select" id="resp_per35" value="sim" class="form-check-input">
          <label class="form-check-label" for="resp_per35">
           Sim
          </label>
          <input type="radio" name="select" id="resp_per35" value="Não" class="form-check-input">
          <label class="form-check-label" for="resp_per35">
            Não
          </label>
          <input type="radio" name="select" id="resp_per35" value="N/A" class="form-check-input">
          <label class="form-check-label" for="resp_per35">
            N/A
          </label>
          </div>
      <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo9" onclick="IrPergunta36()" >Próximo</button>
          </div>
      </div>
      <div class="row" id="per36">
          <div class="col-sm-12 text-center">
            <h2>Observações</h2>
          </div>
        <div class="col-sm-12 text-center">
          <input type="text" id="resp_per36" class="form-control">
        </div>
          <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo9" onclick="IrPergunta37()" >Próximo</button>
          </div>
      </div>   
          <div class="row" id="per37">
          <div class="col-sm-12 text-center">
            <h2>Status</h2>
          </div>
        <div class="col-sm-12 text-center">
          <input type="text" id="resp_per37" class="form-control">
        </div>
          <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo9" formaction="pet_cadastrar.php" >Finalizar</button>
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
  let p10 = document.getElementById("per10");
  let p11 = document.getElementById("per11");
  let p12 = document.getElementById("per12");
  let p13 = document.getElementById("per13");
  let p14 = document.getElementById("per14");
  let p15 = document.getElementById("per15");
  let p16 = document.getElementById("per16");
  let p17 = document.getElementById("per17");
  let p18 = document.getElementById("per18");
  let p19 = document.getElementById("per19");
  let p20 = document.getElementById("per20");
  let p21 = document.getElementById("per21");
  let p22 = document.getElementById("per22");
  let p23 = document.getElementById("per23");
  let p24 = document.getElementById("per24");
  let p25 = document.getElementById("per25");
  let p26 = document.getElementById("per26");
  let p27 = document.getElementById("per27");
  let p28 = document.getElementById("per28");
  let p29 = document.getElementById("per29");
  let p30 = document.getElementById("per30");
  let p31 = document.getElementById("per31");
  let p32 = document.getElementById("per32");
  let p33 = document.getElementById("per33");
  let p34 = document.getElementById("per34");
  let p35 = document.getElementById("per35");
  let p36 = document.getElementById("per36");
  let p37 = document.getElementById("per37");
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
     p10.style.display = "none";
     p11.style.display = "none";
     p12.style.display = "none";
     p13.style.display = "none";
     p14.style.display = "none";
     p15.style.display = "none";
     p16.style.display = "none";
     p17.style.display = "none";
     p18.style.display = "none";
     p19.style.display = "none";
     p20.style.display = "none";
     p21.style.display = "none";
     p22.style.display = "none";
     p23.style.display = "none";
     p24.style.display = "none";
     p25.style.display = "none";
     p26.style.display = "none";
     p27.style.display = "none";
     p28.style.display = "none";
     p29.style.display = "none";
     p30.style.display = "none";
     p31.style.display = "none";
     p32.style.display = "none";
     p33.style.display = "none";
     p34.style.display = "none";
     p35.style.display = "none";
     p36.style.display = "none";
     p37.style.display = "none";

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
    p10.style.display = "none";
     p11.style.display = "none";
     p12.style.display = "none";
     p13.style.display = "none";
     p14.style.display = "none";
     p15.style.display = "none";
     p16.style.display = "none";
     p17.style.display = "none";
     p18.style.display = "none";
     p19.style.display = "none";
     p20.style.display = "none";
     p21.style.display = "none";
     p22.style.display = "none";
     p23.style.display = "none";
     p24.style.display = "none";
     p25.style.display = "none";
     p26.style.display = "none";
     p27.style.display = "none";
     p28.style.display = "none";
     p29.style.display = "none";
     p30.style.display = "none";
     p31.style.display = "none";
     p32.style.display = "none";
     p33.style.display = "none";
     p34.style.display = "none";
     p35.style.display = "none";
     p36.style.display = "none";
     p37.style.display = "none";
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
    p10.style.display = "none";
     p11.style.display = "none";
     p12.style.display = "none";
     p13.style.display = "none";
     p14.style.display = "none";
     p15.style.display = "none";
     p16.style.display = "none";
     p17.style.display = "none";
     p18.style.display = "none";
     p19.style.display = "none";
     p20.style.display = "none";
     p21.style.display = "none";
     p22.style.display = "none";
     p23.style.display = "none";
     p24.style.display = "none";
     p25.style.display = "none";
     p26.style.display = "none";
     p27.style.display = "none";
     p28.style.display = "none";
     p29.style.display = "none";
     p30.style.display = "none";
     p31.style.display = "none";
     p32.style.display = "none";
     p33.style.display = "none";
     p34.style.display = "none";
     p35.style.display = "none";
     p36.style.display = "none";
     p37.style.display = "none";
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
    p10.style.display = "none";
     p11.style.display = "none";
     p12.style.display = "none";
     p13.style.display = "none";
     p14.style.display = "none";
     p15.style.display = "none";
     p16.style.display = "none";
     p17.style.display = "none";
     p18.style.display = "none";
     p19.style.display = "none";
     p20.style.display = "none";
     p21.style.display = "none";
     p22.style.display = "none";
     p23.style.display = "none";
     p24.style.display = "none";
     p25.style.display = "none";
     p26.style.display = "none";
     p27.style.display = "none";
     p28.style.display = "none";
     p29.style.display = "none";
     p30.style.display = "none";
     p31.style.display = "none";
     p32.style.display = "none";
     p33.style.display = "none";
     p34.style.display = "none";
     p35.style.display = "none";
     p36.style.display = "none";
     p37.style.display = "none";
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
    p10.style.display = "none";
     p11.style.display = "none";
     p12.style.display = "none";
     p13.style.display = "none";
     p14.style.display = "none";
     p15.style.display = "none";
     p16.style.display = "none";
     p17.style.display = "none";
     p18.style.display = "none";
     p19.style.display = "none";
     p20.style.display = "none";
     p21.style.display = "none";
     p22.style.display = "none";
     p23.style.display = "none";
     p24.style.display = "none";
     p25.style.display = "none";
     p26.style.display = "none";
     p27.style.display = "none";
     p28.style.display = "none";
     p29.style.display = "none";
     p30.style.display = "none";
     p31.style.display = "none";
     p32.style.display = "none";
     p33.style.display = "none";
     p34.style.display = "none";
     p35.style.display = "none";
     p36.style.display = "none";
     p37.style.display = "none";
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
    p10.style.display = "none";
     p11.style.display = "none";
     p12.style.display = "none";
     p13.style.display = "none";
     p14.style.display = "none";
     p15.style.display = "none";
     p16.style.display = "none";
     p17.style.display = "none";
     p18.style.display = "none";
     p19.style.display = "none";
     p20.style.display = "none";
     p21.style.display = "none";
     p22.style.display = "none";
     p23.style.display = "none";
     p24.style.display = "none";
     p25.style.display = "none";
     p26.style.display = "none";
     p27.style.display = "none";
     p28.style.display = "none";
     p29.style.display = "none";
     p30.style.display = "none";
     p31.style.display = "none";
     p32.style.display = "none";
     p33.style.display = "none";
     p34.style.display = "none";
     p35.style.display = "none";
     p36.style.display = "none";
     p37.style.display = "none";
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
    p10.style.display = "none";
     p11.style.display = "none";
     p12.style.display = "none";
     p13.style.display = "none";
     p14.style.display = "none";
     p15.style.display = "none";
     p16.style.display = "none";
     p17.style.display = "none";
     p18.style.display = "none";
     p19.style.display = "none";
     p20.style.display = "none";
     p21.style.display = "none";
     p22.style.display = "none";
     p23.style.display = "none";
     p24.style.display = "none";
     p25.style.display = "none";
     p26.style.display = "none";
     p27.style.display = "none";
     p28.style.display = "none";
     p29.style.display = "none";
     p30.style.display = "none";
     p31.style.display = "none";
     p32.style.display = "none";
     p33.style.display = "none";
     p34.style.display = "none";
     p35.style.display = "none";
     p36.style.display = "none";
     p37.style.display = "none";
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
    p10.style.display = "none";
     p11.style.display = "none";
     p12.style.display = "none";
     p13.style.display = "none";
     p14.style.display = "none";
     p15.style.display = "none";
     p16.style.display = "none";
     p17.style.display = "none";
     p18.style.display = "none";
     p19.style.display = "none";
     p20.style.display = "none";
     p21.style.display = "none";
     p22.style.display = "none";
     p23.style.display = "none";
     p24.style.display = "none";
     p25.style.display = "none";
     p26.style.display = "none";
     p27.style.display = "none";
     p28.style.display = "none";
     p29.style.display = "none";
     p30.style.display = "none";
     p31.style.display = "none";
     p32.style.display = "none";
     p33.style.display = "none";
     p34.style.display = "none";
     p35.style.display = "none";
     p36.style.display = "none";
     p37.style.display = "none";
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
    p10.style.display = "none";
     p11.style.display = "none";
     p12.style.display = "none";
     p13.style.display = "none";
     p14.style.display = "none";
     p15.style.display = "none";
     p16.style.display = "none";
     p17.style.display = "none";
     p18.style.display = "none";
     p19.style.display = "none";
     p20.style.display = "none";
     p21.style.display = "none";
     p22.style.display = "none";
     p23.style.display = "none";
     p24.style.display = "none";
     p25.style.display = "none";
     p26.style.display = "none";
     p27.style.display = "none";
     p28.style.display = "none";
     p29.style.display = "none";
     p30.style.display = "none";
     p31.style.display = "none";
     p32.style.display = "none";
     p33.style.display = "none";
     p34.style.display = "none";
     p35.style.display = "none";
     p36.style.display = "none";
     p37.style.display = "none";
  }
  function IrPergunta10(){
    p1.style.display = "none";
    p2.style.display = "none";
    p3.style.display = "none";
    p4.style.display = "none";
    p5.style.display = "none";
    p6.style.display = "none";
    p7.style.display = "none";
    p8.style.display = "none";
    p9.style.display = "none";
    p10.style.display = "block";
     p11.style.display = "none";
     p12.style.display = "none";
     p13.style.display = "none";
     p14.style.display = "none";
     p15.style.display = "none";
     p16.style.display = "none";
     p17.style.display = "none";
     p18.style.display = "none";
     p19.style.display = "none";
     p20.style.display = "none";
     p21.style.display = "none";
     p22.style.display = "none";
     p23.style.display = "none";
     p24.style.display = "none";
     p25.style.display = "none";
     p26.style.display = "none";
     p27.style.display = "none";
     p28.style.display = "none";
     p29.style.display = "none";
     p30.style.display = "none";
     p31.style.display = "none";
     p32.style.display = "none";
     p33.style.display = "none";
     p34.style.display = "none";
     p35.style.display = "none";
     p36.style.display = "none";
     p37.style.display = "none";
  }
  function IrPergunta11(){
    p1.style.display = "none";
    p2.style.display = "none";
    p3.style.display = "none";
    p4.style.display = "none";
    p5.style.display = "none";
    p6.style.display = "none";
    p7.style.display = "none";
    p8.style.display = "none";
    p9.style.display = "none";
    p10.style.display = "none";
     p11.style.display = "block";
     p12.style.display = "none";
     p13.style.display = "none";
     p14.style.display = "none";
     p15.style.display = "none";
     p16.style.display = "none";
     p17.style.display = "none";
     p18.style.display = "none";
     p19.style.display = "none";
     p20.style.display = "none";
     p21.style.display = "none";
     p22.style.display = "none";
     p23.style.display = "none";
     p24.style.display = "none";
     p25.style.display = "none";
     p26.style.display = "none";
     p27.style.display = "none";
     p28.style.display = "none";
     p29.style.display = "none";
     p30.style.display = "none";
     p31.style.display = "none";
     p32.style.display = "none";
     p33.style.display = "none";
     p34.style.display = "none";
     p35.style.display = "none";
     p36.style.display = "none";
     p37.style.display = "none";
  }
  function IrPergunta12(){
    p1.style.display = "none";
    p2.style.display = "none";
    p3.style.display = "none";
    p4.style.display = "none";
    p5.style.display = "none";
    p6.style.display = "none";
    p7.style.display = "none";
    p8.style.display = "none";
    p9.style.display = "nome";
    p10.style.display = "none";
     p11.style.display = "none";
     p12.style.display = "block";
     p13.style.display = "none";
     p14.style.display = "none";
     p15.style.display = "none";
     p16.style.display = "none";
     p17.style.display = "none";
     p18.style.display = "none";
     p19.style.display = "none";
     p20.style.display = "none";
     p21.style.display = "none";
     p22.style.display = "none";
     p23.style.display = "none";
     p24.style.display = "none";
     p25.style.display = "none";
     p26.style.display = "none";
     p27.style.display = "none";
     p28.style.display = "none";
     p29.style.display = "none";
     p30.style.display = "none";
     p31.style.display = "none";
     p32.style.display = "none";
     p33.style.display = "none";
     p34.style.display = "none";
     p35.style.display = "none";
     p36.style.display = "none";
     p37.style.display = "none";
  }
  function IrPergunta13(){
    p1.style.display = "none";
    p2.style.display = "none";
    p3.style.display = "none";
    p4.style.display = "none";
    p5.style.display = "none";
    p6.style.display = "none";
    p7.style.display = "none";
    p8.style.display = "none";
    p9.style.display = "nome";
    p10.style.display = "none";
     p11.style.display = "none";
     p12.style.display = "none";
     p13.style.display = "block";
     p14.style.display = "none";
     p15.style.display = "none";
     p16.style.display = "none";
     p17.style.display = "none";
     p18.style.display = "none";
     p19.style.display = "none";
     p20.style.display = "none";
     p21.style.display = "none";
     p22.style.display = "none";
     p23.style.display = "none";
     p24.style.display = "none";
     p25.style.display = "none";
     p26.style.display = "none";
     p27.style.display = "none";
     p28.style.display = "none";
     p29.style.display = "none";
     p30.style.display = "none";
     p31.style.display = "none";
     p32.style.display = "none";
     p33.style.display = "none";
     p34.style.display = "none";
     p35.style.display = "none";
     p36.style.display = "none";
     p37.style.display = "none";
  }
  function IrPergunta14(){
    p1.style.display = "none";
    p2.style.display = "none";
    p3.style.display = "none";
    p4.style.display = "none";
    p5.style.display = "none";
    p6.style.display = "none";
    p7.style.display = "none";
    p8.style.display = "none";
    p9.style.display = "nome";
    p10.style.display = "none";
     p11.style.display = "none";
     p12.style.display = "none";
     p13.style.display = "none";
     p14.style.display = "block";
     p15.style.display = "none";
     p16.style.display = "none";
     p17.style.display = "none";
     p18.style.display = "none";
     p19.style.display = "none";
     p20.style.display = "none";
     p21.style.display = "none";
     p22.style.display = "none";
     p23.style.display = "none";
     p24.style.display = "none";
     p25.style.display = "none";
     p26.style.display = "none";
     p27.style.display = "none";
     p28.style.display = "none";
     p29.style.display = "none";
     p30.style.display = "none";
     p31.style.display = "none";
     p32.style.display = "none";
     p33.style.display = "none";
     p34.style.display = "none";
     p35.style.display = "none";
     p36.style.display = "none";
     p37.style.display = "none";
  }
  function IrPergunta15(){
    p1.style.display = "none";
    p2.style.display = "none";
    p3.style.display = "none";
    p4.style.display = "none";
    p5.style.display = "none";
    p6.style.display = "none";
    p7.style.display = "none";
    p8.style.display = "none";
    p9.style.display = "nome";
    p10.style.display = "none";
     p11.style.display = "none";
     p12.style.display = "none";
     p13.style.display = "none";
     p14.style.display = "none";
     p15.style.display = "block";
     p16.style.display = "none";
     p17.style.display = "none";
     p18.style.display = "none";
     p19.style.display = "none";
     p20.style.display = "none";
     p21.style.display = "none";
     p22.style.display = "none";
     p23.style.display = "none";
     p24.style.display = "none";
     p25.style.display = "none";
     p26.style.display = "none";
     p27.style.display = "none";
     p28.style.display = "none";
     p29.style.display = "none";
     p30.style.display = "none";
     p31.style.display = "none";
     p32.style.display = "none";
     p33.style.display = "none";
     p34.style.display = "none";
     p35.style.display = "none";
     p36.style.display = "none";
     p37.style.display = "none";
  }
  function IrPergunta16(){
    p1.style.display = "none";
    p2.style.display = "none";
    p3.style.display = "none";
    p4.style.display = "none";
    p5.style.display = "none";
    p6.style.display = "none";
    p7.style.display = "none";
    p8.style.display = "none";
    p9.style.display = "nome";
    p10.style.display = "nome";
     p11.style.display = "none";
     p12.style.display = "none";
     p13.style.display = "none";
     p14.style.display = "none";
     p15.style.display = "none";
     p16.style.display = "block";
     p17.style.display = "none";
     p18.style.display = "none";
     p19.style.display = "none";
     p20.style.display = "none";
     p21.style.display = "none";
     p22.style.display = "none";
     p23.style.display = "none";
     p24.style.display = "none";
     p25.style.display = "none";
     p26.style.display = "none";
     p27.style.display = "none";
     p28.style.display = "none";
     p29.style.display = "none";
     p30.style.display = "none";
     p31.style.display = "none";
     p32.style.display = "none";
     p33.style.display = "none";
     p34.style.display = "none";
     p35.style.display = "none";
     p36.style.display = "none";
     p37.style.display = "none";
  }
  function IrPergunta17(){
    p1.style.display = "none";
    p2.style.display = "none";
    p3.style.display = "none";
    p4.style.display = "none";
    p5.style.display = "none";
    p6.style.display = "none";
    p7.style.display = "none";
    p8.style.display = "none";
    p9.style.display = "nome";
    p10.style.display = "none";
     p11.style.display = "none";
     p12.style.display = "none";
     p13.style.display = "none";
     p14.style.display = "none";
     p15.style.display = "none";
     p16.style.display = "none";
     p17.style.display = "block";
     p18.style.display = "none";
     p19.style.display = "none";
     p20.style.display = "none";
     p21.style.display = "none";
     p22.style.display = "none";
     p23.style.display = "none";
     p24.style.display = "none";
     p25.style.display = "none";
     p26.style.display = "none";
     p27.style.display = "none";
     p28.style.display = "none";
     p29.style.display = "none";
     p30.style.display = "none";
     p31.style.display = "none";
     p32.style.display = "none";
     p33.style.display = "none";
     p34.style.display = "none";
     p35.style.display = "none";
     p36.style.display = "none";
     p37.style.display = "none";
  }
  function IrPergunta18(){
    p1.style.display = "none";
    p2.style.display = "none";
    p3.style.display = "none";
    p4.style.display = "none";
    p5.style.display = "none";
    p6.style.display = "none";
    p7.style.display = "none";
    p8.style.display = "none";
    p9.style.display = "nome";
    p10.style.display = "none";
     p11.style.display = "none";
     p12.style.display = "none";
     p13.style.display = "none";
     p14.style.display = "none";
     p15.style.display = "none";
     p16.style.display = "none";
     p17.style.display = "none";
     p18.style.display = "block";
     p19.style.display = "none";
     p20.style.display = "none";
     p21.style.display = "none";
     p22.style.display = "none";
     p23.style.display = "none";
     p24.style.display = "none";
     p25.style.display = "none";
     p26.style.display = "none";
     p27.style.display = "none";
     p28.style.display = "none";
     p29.style.display = "none";
     p30.style.display = "none";
     p31.style.display = "none";
     p32.style.display = "none";
     p33.style.display = "none";
     p34.style.display = "none";
     p35.style.display = "none";
     p36.style.display = "none";
     p37.style.display = "none";
  }
  function IrPergunta19(){
    p1.style.display = "none";
    p2.style.display = "none";
    p3.style.display = "none";
    p4.style.display = "none";
    p5.style.display = "none";
    p6.style.display = "none";
    p7.style.display = "none";
    p8.style.display = "none";
    p9.style.display = "nome";
    p10.style.display = "none";
     p11.style.display = "none";
     p12.style.display = "none";
     p13.style.display = "none";
     p14.style.display = "none";
     p15.style.display = "none";
     p16.style.display = "none";
     p17.style.display = "none";
     p18.style.display = "none";
     p19.style.display = "block";
     p20.style.display = "none";
     p21.style.display = "none";
     p22.style.display = "none";
     p23.style.display = "none";
     p24.style.display = "none";
     p25.style.display = "none";
     p26.style.display = "none";
     p27.style.display = "none";
     p28.style.display = "none";
     p29.style.display = "none";
     p30.style.display = "none";
     p31.style.display = "none";
     p32.style.display = "none";
     p33.style.display = "none";
     p34.style.display = "none";
     p35.style.display = "none";
     p36.style.display = "none";
     p37.style.display = "none";
  }
  function IrPergunta20(){
    p1.style.display = "none";
    p2.style.display = "none";
    p3.style.display = "none";
    p4.style.display = "none";
    p5.style.display = "none";
    p6.style.display = "none";
    p7.style.display = "none";
    p8.style.display = "none";
    p9.style.display = "nome";
    p10.style.display = "none";
     p11.style.display = "none";
     p12.style.display = "none";
     p13.style.display = "none";
     p14.style.display = "none";
     p15.style.display = "none";
     p16.style.display = "none";
     p17.style.display = "none";
     p18.style.display = "none";
     p19.style.display = "none";
     p20.style.display = "block";
     p21.style.display = "none";
     p22.style.display = "none";
     p23.style.display = "none";
     p24.style.display = "none";
     p25.style.display = "none";
     p26.style.display = "none";
     p27.style.display = "none";
     p28.style.display = "none";
     p29.style.display = "none";
     p30.style.display = "none";
     p31.style.display = "none";
     p32.style.display = "none";
     p33.style.display = "none";
     p34.style.display = "none";
     p35.style.display = "none";
     p36.style.display = "none";
     p37.style.display = "none";
  }
  function IrPergunta21(){
    p1.style.display = "none";
    p2.style.display = "none";
    p3.style.display = "none";
    p4.style.display = "none";
    p5.style.display = "none";
    p6.style.display = "none";
    p7.style.display = "none";
    p8.style.display = "none";
    p9.style.display = "nome";
    p10.style.display = "none";
     p11.style.display = "none";
     p12.style.display = "none";
     p13.style.display = "none";
     p14.style.display = "none";
     p15.style.display = "none";
     p16.style.display = "none";
     p17.style.display = "none";
     p18.style.display = "none";
     p19.style.display = "none";
     p20.style.display = "none";
     p21.style.display = "block";
     p22.style.display = "none";
     p23.style.display = "none";
     p24.style.display = "none";
     p25.style.display = "none";
     p26.style.display = "none";
     p27.style.display = "none";
     p28.style.display = "none";
     p29.style.display = "none";
     p30.style.display = "none";
     p31.style.display = "none";
     p32.style.display = "none";
     p33.style.display = "none";
     p34.style.display = "none";
     p35.style.display = "none";
     p36.style.display = "none";
     p37.style.display = "none";
  }
  function IrPergunta22(){
    p1.style.display = "none";
    p2.style.display = "none";
    p3.style.display = "none";
    p4.style.display = "none";
    p5.style.display = "none";
    p6.style.display = "none";
    p7.style.display = "none";
    p8.style.display = "none";
    p9.style.display = "nome";
    p10.style.display = "none";
     p11.style.display = "none";
     p12.style.display = "none";
     p13.style.display = "none";
     p14.style.display = "none";
     p15.style.display = "none";
     p16.style.display = "none";
     p17.style.display = "none";
     p18.style.display = "none";
     p19.style.display = "none";
     p20.style.display = "none";
     p21.style.display = "none";
     p22.style.display = "block";
     p23.style.display = "none";
     p24.style.display = "none";
     p25.style.display = "none";
     p26.style.display = "none";
     p27.style.display = "none";
     p28.style.display = "none";
     p29.style.display = "none";
     p30.style.display = "none";
     p31.style.display = "none";
     p32.style.display = "none";
     p33.style.display = "none";
     p34.style.display = "none";
     p35.style.display = "none";
     p36.style.display = "none";
     p37.style.display = "none";
  }
  function IrPergunta23(){
    p1.style.display = "none";
    p2.style.display = "none";
    p3.style.display = "none";
    p4.style.display = "none";
    p5.style.display = "none";
    p6.style.display = "none";
    p7.style.display = "none";
    p8.style.display = "none";
    p9.style.display = "nome";
    p10.style.display = "none";
     p11.style.display = "none";
     p12.style.display = "none";
     p13.style.display = "none";
     p14.style.display = "none";
     p15.style.display = "none";
     p16.style.display = "none";
     p17.style.display = "none";
     p18.style.display = "none";
     p19.style.display = "none";
     p20.style.display = "none";
     p21.style.display = "none";
     p22.style.display = "none";
     p23.style.display = "block";
     p24.style.display = "none";
     p25.style.display = "none";
     p26.style.display = "none";
     p27.style.display = "none";
     p28.style.display = "none";
     p29.style.display = "none";
     p30.style.display = "none";
     p31.style.display = "none";
     p32.style.display = "none";
     p33.style.display = "none";
     p34.style.display = "none";
     p35.style.display = "none";
     p36.style.display = "none";
     p37.style.display = "none";
  }
  function IrPergunta24(){
    p1.style.display = "none";
    p2.style.display = "none";
    p3.style.display = "none";
    p4.style.display = "none";
    p5.style.display = "none";
    p6.style.display = "none";
    p7.style.display = "none";
    p8.style.display = "none";
    p9.style.display = "nome";
    p10.style.display = "none";
     p11.style.display = "none";
     p12.style.display = "none";
     p13.style.display = "none";
     p14.style.display = "none";
     p15.style.display = "none";
     p16.style.display = "none";
     p17.style.display = "none";
     p18.style.display = "none";
     p19.style.display = "none";
     p20.style.display = "none";
     p21.style.display = "none";
     p22.style.display = "none";
     p23.style.display = "none";
     p24.style.display = "block";
     p25.style.display = "none";
     p26.style.display = "none";
     p27.style.display = "none";
     p28.style.display = "none";
     p29.style.display = "none";
     p30.style.display = "none";
     p31.style.display = "none";
     p32.style.display = "none";
     p33.style.display = "none";
     p34.style.display = "none";
     p35.style.display = "none";
     p36.style.display = "none";
     p37.style.display = "none";
  }
  function IrPergunta25(){
    p1.style.display = "none";
    p2.style.display = "none";
    p3.style.display = "none";
    p4.style.display = "none";
    p5.style.display = "none";
    p6.style.display = "none";
    p7.style.display = "none";
    p8.style.display = "none";
    p9.style.display = "nome";
    p10.style.display = "none";
     p11.style.display = "none";
     p12.style.display = "none";
     p13.style.display = "none";
     p14.style.display = "none";
     p15.style.display = "none";
     p16.style.display = "none";
     p17.style.display = "none";
     p18.style.display = "none";
     p19.style.display = "none";
     p20.style.display = "none";
     p21.style.display = "none";
     p22.style.display = "none";
     p23.style.display = "none";
     p24.style.display = "none";
     p25.style.display = "block";
     p26.style.display = "none";
     p27.style.display = "none";
     p28.style.display = "none";
     p29.style.display = "none";
     p30.style.display = "none";
     p31.style.display = "none";
     p32.style.display = "none";
     p33.style.display = "none";
     p34.style.display = "none";
     p35.style.display = "none";
     p36.style.display = "none";
     p37.style.display = "none";
  }
  function IrPergunta26(){
    p1.style.display = "none";
    p2.style.display = "none";
    p3.style.display = "none";
    p4.style.display = "none";
    p5.style.display = "none";
    p6.style.display = "none";
    p7.style.display = "none";
    p8.style.display = "none";
    p9.style.display = "nome";
    p10.style.display = "none";
     p11.style.display = "none";
     p12.style.display = "none";
     p13.style.display = "none";
     p14.style.display = "none";
     p15.style.display = "none";
     p16.style.display = "none";
     p17.style.display = "none";
     p18.style.display = "none";
     p19.style.display = "none";
     p20.style.display = "none";
     p21.style.display = "none";
     p22.style.display = "none";
     p23.style.display = "none";
     p24.style.display = "none";
     p25.style.display = "none";
     p26.style.display = "block";
     p27.style.display = "none";
     p28.style.display = "none";
     p29.style.display = "none";
     p30.style.display = "none";
     p31.style.display = "none";
     p32.style.display = "none";
     p33.style.display = "none";
     p34.style.display = "none";
     p35.style.display = "none";
     p36.style.display = "none";
     p37.style.display = "none";
  }
  function IrPergunta27(){
    p1.style.display = "none";
    p2.style.display = "none";
    p3.style.display = "none";
    p4.style.display = "none";
    p5.style.display = "none";
    p6.style.display = "none";
    p7.style.display = "none";
    p8.style.display = "none";
    p9.style.display = "nome";
    p10.style.display = "none";
     p11.style.display = "none";
     p12.style.display = "none";
     p13.style.display = "none";
     p14.style.display = "none";
     p15.style.display = "none";
     p16.style.display = "none";
     p17.style.display = "none";
     p18.style.display = "none";
     p19.style.display = "none";
     p20.style.display = "none";
     p21.style.display = "none";
     p22.style.display = "none";
     p23.style.display = "none";
     p24.style.display = "none";
     p25.style.display = "none";
     p26.style.display = "none";
     p27.style.display = "block";
     p28.style.display = "none";
     p29.style.display = "none";
     p30.style.display = "none";
     p31.style.display = "none";
     p32.style.display = "none";
     p33.style.display = "none";
     p34.style.display = "none";
     p35.style.display = "none";
     p36.style.display = "none";
     p37.style.display = "none";
  }
  function IrPergunta28(){
    p1.style.display = "none";
    p2.style.display = "none";
    p3.style.display = "none";
    p4.style.display = "none";
    p5.style.display = "none";
    p6.style.display = "none";
    p7.style.display = "none";
    p8.style.display = "none";
    p9.style.display = "nome";
    p10.style.display = "none";
     p11.style.display = "none";
     p12.style.display = "none";
     p13.style.display = "none";
     p14.style.display = "none";
     p15.style.display = "none";
     p16.style.display = "none";
     p17.style.display = "none";
     p18.style.display = "none";
     p19.style.display = "none";
     p20.style.display = "none";
     p21.style.display = "none";
     p22.style.display = "none";
     p23.style.display = "none";
     p24.style.display = "none";
     p25.style.display = "none";
     p26.style.display = "none";
     p27.style.display = "none";
     p28.style.display = "block";
     p29.style.display = "none";
     p30.style.display = "none";
     p31.style.display = "none";
     p32.style.display = "none";
     p33.style.display = "none";
     p34.style.display = "none";
     p35.style.display = "none";
     p36.style.display = "none";
     p37.style.display = "none";
  }
  function IrPergunta29(){
    p1.style.display = "none";
    p2.style.display = "none";
    p3.style.display = "none";
    p4.style.display = "none";
    p5.style.display = "none";
    p6.style.display = "none";
    p7.style.display = "none";
    p8.style.display = "none";
    p9.style.display = "nome";
    p10.style.display = "none";
     p11.style.display = "none";
     p12.style.display = "none";
     p13.style.display = "none";
     p14.style.display = "none";
     p15.style.display = "none";
     p16.style.display = "none";
     p17.style.display = "none";
     p18.style.display = "none";
     p19.style.display = "none";
     p20.style.display = "none";
     p21.style.display = "none";
     p22.style.display = "none";
     p23.style.display = "none";
     p24.style.display = "none";
     p25.style.display = "none";
     p26.style.display = "none";
     p27.style.display = "none";
     p28.style.display = "none";
     p29.style.display = "block";
     p30.style.display = "none";
     p31.style.display = "none";
     p32.style.display = "none";
     p33.style.display = "none";
     p34.style.display = "none";
     p35.style.display = "none";
     p36.style.display = "none";
     p37.style.display = "none";
  }
  function IrPergunta30(){
    p1.style.display = "none";
    p2.style.display = "none";
    p3.style.display = "none";
    p4.style.display = "none";
    p5.style.display = "none";
    p6.style.display = "none";
    p7.style.display = "none";
    p8.style.display = "none";
    p9.style.display = "nome";
    p10.style.display = "none";
     p11.style.display = "none";
     p12.style.display = "none";
     p13.style.display = "none";
     p14.style.display = "none";
     p15.style.display = "none";
     p16.style.display = "none";
     p17.style.display = "none";
     p18.style.display = "none";
     p19.style.display = "none";
     p20.style.display = "none";
     p21.style.display = "none";
     p22.style.display = "none";
     p23.style.display = "none";
     p24.style.display = "none";
     p25.style.display = "none";
     p26.style.display = "none";
     p27.style.display = "none";
     p28.style.display = "none";
     p29.style.display = "none";
     p30.style.display = "block";
     p31.style.display = "none";
     p32.style.display = "none";
     p33.style.display = "none";
     p34.style.display = "none";
     p35.style.display = "none";
     p36.style.display = "none";
     p37.style.display = "none";
  }
  function IrPergunta31(){
    p1.style.display = "none";
    p2.style.display = "none";
    p3.style.display = "none";
    p4.style.display = "none";
    p5.style.display = "none";
    p6.style.display = "none";
    p7.style.display = "none";
    p8.style.display = "none";
    p9.style.display = "nome";
    p10.style.display = "none";
     p11.style.display = "none";
     p12.style.display = "none";
     p13.style.display = "none";
     p14.style.display = "none";
     p15.style.display = "none";
     p16.style.display = "none";
     p17.style.display = "none";
     p18.style.display = "none";
     p19.style.display = "none";
     p20.style.display = "none";
     p21.style.display = "none";
     p22.style.display = "none";
     p23.style.display = "none";
     p24.style.display = "none";
     p25.style.display = "none";
     p26.style.display = "none";
     p27.style.display = "none";
     p28.style.display = "none";
     p29.style.display = "none";
     p30.style.display = "none";
     p31.style.display = "block";
     p32.style.display = "none";
     p33.style.display = "none";
     p34.style.display = "none";
     p35.style.display = "none";
     p36.style.display = "none";
     p37.style.display = "none";
  }
  function IrPergunta32(){
    p1.style.display = "none";
    p2.style.display = "none";
    p3.style.display = "none";
    p4.style.display = "none";
    p5.style.display = "none";
    p6.style.display = "none";
    p7.style.display = "none";
    p8.style.display = "none";
    p9.style.display = "nome";
    p10.style.display = "none";
     p11.style.display = "none";
     p12.style.display = "none";
     p13.style.display = "none";
     p14.style.display = "none";
     p15.style.display = "none";
     p16.style.display = "none";
     p17.style.display = "none";
     p18.style.display = "none";
     p19.style.display = "none";
     p20.style.display = "none";
     p21.style.display = "none";
     p22.style.display = "none";
     p23.style.display = "none";
     p24.style.display = "none";
     p25.style.display = "none";
     p26.style.display = "none";
     p27.style.display = "none";
     p28.style.display = "none";
     p29.style.display = "none";
     p30.style.display = "none";
     p31.style.display = "none";
     p32.style.display = "block";
     p33.style.display = "none";
     p34.style.display = "none";
     p35.style.display = "none";
     p36.style.display = "none";
     p37.style.display = "none";
  }
  function IrPergunta33(){
    p1.style.display = "none";
    p2.style.display = "none";
    p3.style.display = "none";
    p4.style.display = "none";
    p5.style.display = "none";
    p6.style.display = "none";
    p7.style.display = "none";
    p8.style.display = "none";
    p9.style.display = "nome";
    p10.style.display = "none";
     p11.style.display = "none";
     p12.style.display = "none";
     p13.style.display = "none";
     p14.style.display = "none";
     p15.style.display = "none";
     p16.style.display = "none";
     p17.style.display = "none";
     p18.style.display = "none";
     p19.style.display = "none";
     p20.style.display = "none";
     p21.style.display = "none";
     p22.style.display = "none";
     p23.style.display = "none";
     p24.style.display = "none";
     p25.style.display = "none";
     p26.style.display = "none";
     p27.style.display = "none";
     p28.style.display = "none";
     p29.style.display = "none";
     p30.style.display = "none";
     p31.style.display = "none";
     p32.style.display = "none";
     p33.style.display = "block";
     p34.style.display = "none";
     p35.style.display = "none";
     p36.style.display = "none";
     p37.style.display = "none";
  }
  function IrPergunta34(){
    p1.style.display = "none";
    p2.style.display = "none";
    p3.style.display = "none";
    p4.style.display = "none";
    p5.style.display = "none";
    p6.style.display = "none";
    p7.style.display = "none";
    p8.style.display = "none";
    p9.style.display = "nome";
    p10.style.display = "none";
     p11.style.display = "none";
     p12.style.display = "none";
     p13.style.display = "none";
     p14.style.display = "none";
     p15.style.display = "none";
     p16.style.display = "none";
     p17.style.display = "none";
     p18.style.display = "none";
     p19.style.display = "none";
     p20.style.display = "none";
     p21.style.display = "none";
     p22.style.display = "none";
     p23.style.display = "none";
     p24.style.display = "none";
     p25.style.display = "none";
     p26.style.display = "none";
     p27.style.display = "none";
     p28.style.display = "none";
     p29.style.display = "none";
     p30.style.display = "none";
     p31.style.display = "none";
     p32.style.display = "none";
     p33.style.display = "none";
     p34.style.display = "block";
     p35.style.display = "none";
     p36.style.display = "none";
     p37.style.display = "none";
  }
  function IrPergunta35(){
    p1.style.display = "none";
    p2.style.display = "none";
    p3.style.display = "none";
    p4.style.display = "none";
    p5.style.display = "none";
    p6.style.display = "none";
    p7.style.display = "none";
    p8.style.display = "none";
    p9.style.display = "nome";
    p10.style.display = "none";
     p11.style.display = "none";
     p12.style.display = "none";
     p13.style.display = "none";
     p14.style.display = "none";
     p15.style.display = "none";
     p16.style.display = "none";
     p17.style.display = "none";
     p18.style.display = "none";
     p19.style.display = "none";
     p20.style.display = "none";
     p21.style.display = "none";
     p22.style.display = "none";
     p23.style.display = "none";
     p24.style.display = "none";
     p25.style.display = "none";
     p26.style.display = "none";
     p27.style.display = "none";
     p28.style.display = "none";
     p29.style.display = "none";
     p30.style.display = "none";
     p31.style.display = "none";
     p32.style.display = "none";
     p33.style.display = "none";
     p34.style.display = "none";
     p35.style.display = "block";
  }
  function IrPergunta36(){
    p1.style.display = "none";
    p2.style.display = "none";
    p3.style.display = "none";
    p4.style.display = "none";
    p5.style.display = "none";
    p6.style.display = "none";
    p7.style.display = "none";
    p8.style.display = "none";
    p9.style.display = "nome";
    p10.style.display = "none";
     p11.style.display = "none";
     p12.style.display = "none";
     p13.style.display = "none";
     p14.style.display = "none";
     p15.style.display = "none";
     p16.style.display = "none";
     p17.style.display = "none";
     p18.style.display = "none";
     p19.style.display = "none";
     p20.style.display = "none";
     p21.style.display = "none";
     p22.style.display = "none";
     p23.style.display = "none";
     p24.style.display = "none";
     p25.style.display = "none";
     p26.style.display = "none";
     p27.style.display = "none";
     p28.style.display = "none";
     p29.style.display = "none";
     p30.style.display = "none";
     p31.style.display = "none";
     p32.style.display = "none";
     p33.style.display = "none";
     p34.style.display = "none";
     p35.style.display = "none";
     p36.style.display = "block";
     p37.style.display = "none";
  }
  function IrPergunta37(){
    p1.style.display = "none";
    p2.style.display = "none";
    p3.style.display = "none";
    p4.style.display = "none";
    p5.style.display = "none";
    p6.style.display = "none";
    p7.style.display = "none";
    p8.style.display = "none";
    p9.style.display = "nome";
    p10.style.display = "none";
     p11.style.display = "none";
     p12.style.display = "none";
     p13.style.display = "none";
     p14.style.display = "none";
     p15.style.display = "none";
     p16.style.display = "none";
     p17.style.display = "none";
     p18.style.display = "none";
     p19.style.display = "none";
     p20.style.display = "none";
     p21.style.display = "none";
     p22.style.display = "none";
     p23.style.display = "none";
     p24.style.display = "none";
     p25.style.display = "none";
     p26.style.display = "none";
     p27.style.display = "none";
     p28.style.display = "none";
     p29.style.display = "none";
     p30.style.display = "none";
     p31.style.display = "none";
     p32.style.display = "none";
     p33.style.display = "none";
     p34.style.display = "none";
     p35.style.display = "none";
     p36.style.display = "none";
     p37.style.display = "block";
  }
</script>

</body>
</html>