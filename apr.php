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
            <h2>Grau de Risco</h2>
          </div> 
            <div class="col-sm-12">
                 <input type="radio" id="resp_per02A"   name="grau_risco_apr" value="sim" class="form-check-input">
          <label class="form-check-label" for="resp_per13A">
           Sim
          </label>
          <input type="radio" id="resp_per02B" name="resp_per02" value="Não" class="form-check-input">
          <label class="form-check-label" for="resp_per13B">
            Não
          </label>
          <input type="radio" id="resp_per02C"  name="resp_per02" value="N/A" class="form-check-input">
          <label class="form-check-label" for="resp_per13C">
            N/A
          </label>
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
            <h2>Atividades</h2>
          </div>
            <div class="col-sm-12">
                <textarea name="atividades_apr" id="atividades_apr" cols="30" rows="5" placeholder="Serviços a Executar" class="form-control"></textarea>
            </div>
            <div class="col-sm-12 text-center mt-1">
            <button name="btoCadastrar" id="btAnterior" class="btn btn-success" onclick="IrPergunta4()" >Anterior</button>
            <button name="btoCadastrar" id="btoProximo" class="btn btn-success" onclick="IrPergunta6()" >Próximo</button>
            </div>
       </div>
		<div class="row mt-1" id="per06">
				<div class="col-sm-12 text-center">
            <h2>Riscos</h2>
				</div>
            <div class="col-sm-12">
                <textarea name="risco_apr" id="risco_apr" cols="30" rows="5" placeholder="Riscos(O que pode dar errado)" class="form-control"></textarea>
            </div>
           <div class="col-sm-12 text-center mt-1">
            <button name="btoCadastrar" id="btAnterior" class="btn btn-success" onclick="IrPergunta5()" >Anterior</button>
            <button name="btoCadastrar" id="btoProximo" class="btn btn-success" onclick="IrPergunta7()" >Próximo</button>
           </div>
        </div>
         <div class="row mt-1" id="per07">
				<div class="col-sm-12 text-center">
                  <h2>Prevenção para possivel perdas</h2>
				</div>
            <div class="col-sm-12">
                <textarea name="prev_apr" id="prev_apr" cols="30" rows="5" placeholder="Prevenção para possivel perdas" class="form-control"></textarea>
            </div>
           <div class="col-sm-12 text-center mt-1">
            <button name="btoCadastrar" id="btAnterior" class="btn btn-success" onclick="IrPergunta6()" >Anterior</button>
            <button name="btoCadastrar" id="btoProximo" class="btn btn-success" onclick="IrPergunta8()" >Próximo</button>
           </div>
        </div>  		
        <div class="row mt-1" id="per08">
        <div class="col-sm-12 text-center">
            <h2>Observações</h2>
          </div>
            <div class="col-sm-12 mt-1">
                <textarea name="obs_apr" id="obs_apr" cols="30" rows="5" placeholder="Observações da Apr" class="form-control"></textarea>
            </div>
            <div class="col-sm-12 text-center">
            <button name="btoCadastrar" id="btAnterior" class="btn btn-success" onclick="IrPergunta7()" >Anterior</button>
            <button name="btoCadastrar" id="btoProximo" class="btn btn-success" onclick="IrPergunta9()" >Próximo</button>
            </div>
        </div>  
       </div>   
    <div class="row" id="per09">
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
            <button name="btoCadastrar" id="btAnterior" class="btn btn-success" onclick="IrPergunta8()" >Anterior</button>
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
     let text1 = document.getElementById("resp_per02A");
    let text2 = document.getElementById("resp_per02B");
    let text3 = document.getElementById("resp_per02C");
    if(text1.checked == false && text2.checked == false && text3.checked == false){
      alert("Por favor, preencha os campos obrigatórios");
    }else{
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
}
function IrPergunta3()
  {
    let text = document.getElementById("garu_risco_apr");
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
	 p8.style.display = "none";
	 p9.style.display = "none";
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
	 p8.style.display = "none";
	 p9.style.display = "none";
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
	 p8.style.display = "none";
	 p9.style.display = "none";
    }
} 
function IrPergunta6()
  {
    let text = document.getElementById("atividades_apr");
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
    let text = document.getElementById("risco_apr");
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
	 p8.style.display = "none";
	 p9.style.display = "none";
    }
}  
function IrPergunta8()
  {
    let text = document.getElementById("prev_apr");
    if(text.value == ''){
      alert("Por favor, preencha os campos obrigatórios");
    }else{
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
}  
function IrPergunta9()
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
    p7.style.display = "none";
	 p8.style.display = "none";
	 p9.style.display = "block";
    }
}  


</script>

</body>
</html>