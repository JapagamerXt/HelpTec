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
            <h2>Pergunta 1</h2>
          </div>
          <div class="col-sm-12">
            <textarea name="" id="resp_per01" cols="30" rows="05" placeholder="Teste" class="form-control"></textarea>
          </div>
          <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo1" onclick="IrPergunta2()">Próximo 2</button>
          </div>
         
       </div>
       <div class="row" id="per02">
          <div class="col-sm-12 text-center">
            <h2>Pergunta 2</h2>
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
            <h2>Pergunta 3</h2>
          </div>
        <div class="col-sm-12 text-center">
        <input type="radio" name="select" id="resp_per06" value="opção1" class="form-check-input">
          <label class="form-check-label" for="resp_per06">
            Opção 01
          </label>
          <input type="radio" name="select" id="resp_per06" value="opção2" class="form-check-input">
          <label class="form-check-label" for="resp_per06">
            Opção 02
          </label>
        </div>
          <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo3" onclick="IrPergunta4()">Próximo</button>
          </div>
        </div>
        <div class="row" id="per04">
          <div class="col-sm-12 text-center">
            <h2>Pergunta 4</h2>
          </div>
          <div class="col-sm-12">
            <textarea name="" id="resp_per04" cols="30" rows="05" placeholder="Teste" class="form-control"></textarea>
          </div>
          <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo4" onclick="IrPergunta5()">Próximo</button>
          </div>
         
       </div>
       <div class="row" id="per05">
          <div class="col-sm-12 text-center">
            <h2>Pergunta 5</h2>
          </div>
          <div class="col-sm-12">
          <input type="text" id="resp_per05" class="form-control">
          </div>
          <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo5" onclick="IrPergunta6()">Próximo</button>
          </div>
         
       </div>
       <div class="row" id="per06">
          <div class="col-sm-12 text-center">
            <h2>Pergunta 6</h2>
          </div>
          <div class="col-sm-12 text-center">
          <input type="radio" name="select" id="resp_per06" value="opção1" class="form-check-input">
          <label class="form-check-label" for="resp_per06">
            Opção 01
          </label>
          <input type="radio" name="select" id="resp_per06" value="opção2" class="form-check-input">
          <label class="form-check-label" for="resp_per06">
            Opção 02
          </label>
          </div>
          <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo6" onclick="IrPergunta7()">Próximo</button>
          </div>
       </div>
       <div class="row" id="per07">
          <div class="col-sm-12 text-center">
            <h2>Pergunta 7</h2>
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
            <h2>Pergunta 8</h2>
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
            <h2>Pergunta 9</h2>
          </div>
        <div class="col-sm-12 text-center">
          <input type="radio" name="select" id="resp_per09" value="opção1" class="form-check-input">
          <label class="form-check-label" for="resp_per09">
            Opção 01
          </label>
          <input type="radio" name="select" id="resp_per09" value="opção2" class="form-check-input">
          <label class="form-check-label" for="resp_per09">
            Opção 02
          </label>
        </div>
          <div class="col-sm-12 mt-1 text-center">
            <button class="btn btn-success" id="btn_anterior">Anterior</button>
            <button class="btn btn-success" id="btn_proximo9" >Próximo</button>
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