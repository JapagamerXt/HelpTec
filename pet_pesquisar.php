<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <div class="row">
	   <div class="col-sm-6">
	      <h1> PET: $row[0]</h1>
		</div>
		<div class="col-sm-6">
           <h1>OS: 2</H1>
        </div>
     </div>		
<?php
include_once('conexao.php');
echo "
    <div class='row'>
	   <div class='col-sm-6 h-75'>
	      <h1> PET: $row[0]</h1>
		</div>
		<div class='col-sm-6 h-75'>
           <h1>OS: 2</H1>
        </div>
     </div>	
	 ";
try {
    $sql = $conn->query('select * from pet where id_pet = 2');
    if($sql->rowCount()>=1){
        foreach ($sql as $row) {
       $documento = "
	   
       <table class='table table-striped'>
       <thead>
         <tr>
           <th scope='col'>#</th>
           <th scope='col'>Pergunta</th>
           <th scope='col'>Resposta</th>
         </tr>
       </thead>
       <tbody>
         <tr>
           <th scope='row'>1</th>
           <td>Id:</td>
           <td>$row[0]</td>
         </tr>
         <tr>
           <th scope='row'>2</th>
           <td>Nome da Empresa</td>
           <td>$row[1]</td>
         </tr>
         <tr>
           <th scope='row'>3</th>
           <td>Espaço confinado:</td>
           <td>$row[2]</td>
         </tr>
         <tr>
           <th scope='row'>4</th>
           <td>N° Espaço confinado:</td>
           <td>$row[3]</td>
         </tr>
         <tr>
           <th scope='row'>5</th>
           <td>Data e Horário de Emissão</td>
           <td>$row[4]</td>
         </tr>
         <tr>
         <th scope='row'>6</th>
         <td>Data e Horário de Término</td>
         <td>$row[5]</td>
       </tr>
       <tr>
       <th scope='row'>7</th>
       <td>Trabalho a ser realizado:</td>
       <td>$row[6]</td>
     </tr>
    <tr>
     <th scope='row'>8</th>
     <td>Trabalhadores Autorizados:</td>
     <td>$row[7]</td>
    </tr>
    <tr>
     <th scope='row'>9</th>
     <td>Vigia:</td>
     <td>$row[8]</td>
    </tr>
    <tr>
     <th scope='row'>10</th>
     <td>Equipe de Resgate:</td>
     <td>$row[9]</td>
    </tr>
    <tr>
     <th scope='row'>11</th>
     <td>Supervisor de entrada:</td>
     <td>$row[10]</td>
    </tr>
    <tr>
     <th scope='row'>12</th>
     <td>Isolamento:</td>
     <td>$row[11]</td>
    </tr>
    <tr>
    <th scope='row'>13</th>
    <td>Teste Inicial da Atmosfera:</td>
    <td>$row[12]</td>
   </tr>
   <tr>
    <th scope='row'>14</th>
    <td>Bloqueios, travamentos e etiquetagem:</td>
    <td>$row[13]</td>
   </tr>
   <tr>
    <th scope='row'>15</th>
    <td>Purga e ou Lavagem:</td>
    <td>$row[14]</td>
   </tr>
   <tr>
    <th scope='row'>16</th>
    <td>Ventilação/Exaustão:</td>
    <td>$row[15]</td>
   </tr>
   <tr>
            <th scope='row'>17</th>
            <td>Teste após ventilação e isolamento:</td>
            <td>$row[16]</td>
        </tr>
        <tr>
            <th scope='row'>18</th>
            <td>Iluminação Geral:</td>
            <td>$row[17]</td>
        </tr>
        <tr>
        <th scope='row'>19</th>
        <td>Procedimento de comunicação:</td>
        <td>$row[18]</td>
        </tr>
        <tr>
        <th scope='row'>20</th>
        <td>Procedimento de resgate:</td>
        <td>$row[19]</td>
        </tr>
        <tr>
        <th scope='row'>21</th>
        <td>Procedimento e proteção de movimento vertical:</td>
        <td>$row[20]</td>
        </tr>
        <tr>
        <th scope='row'>22</th>
        <td>Treinamento para todos os colaborades. É atual?:</td>
        <td>$row[21]</td>
        </tr>
        <tr>
        <th scope='row'>23</th>
        <td>Equipamentos:</td>
        <td>$row[22]</td>
        </tr>
        <tr>
        <th scope='row'>24</th>
        <td>Equipamento de monitoramento contínuo de gases aprovados:</td>
        <td>$row[23]</td>
        </tr>
        <tr>
        <th scope='row'>25</th>
        <td>Lanternas:</td>
        <td>$row[24]</td>
        </tr>
        <tr>
        <th scope='row'>26</th>
        <td>Roupas de Proteção:</td>
        <td>$row[25]</td>
        </tr>
        <tr>
        <th scope='row'>27</th>
        <td>Extintores de Incendio:</td>
        <td>$row[26]</td>
        </tr>
        <tr>
        <th scope='row'>28</th>
        <td>Capacetes, botas Luvas:</td>
        <td>$row[27]</td>
        </tr>
        <tr>
        <th scope='row'>29</th>
        <td>Equipamentos de proteção respiratória:</td>
        <td>$row[28]</td>
        </tr>
        <tr>
        <th scope='row'>30</th>
        <td>Cinturão de Segurança:</td>
        <td>$row[29]</td>
        </tr>
        <tr>
        <th scope='row'>31</th>
        <td>Cinturão de segurança para equipe de resgate:</td>
        <td>$row[30]</td>
        </tr>
        <tr>
        <th scope='row'>32</th>
        <td>Escada:</td>
        <td>$row[31]</td>
        </tr>
        <tr>
        <th scope='row'>33</th>
        <td>Equipamento de movimentação:</td>
        <td>$row[32]</td>
        </tr>
        <tr>
        <th scope='row'>34</th>
        <td>Equipamento de comunicação eletrônica aprovados e certificados:</td>
        <td>$row[33]</td>
        </tr>
        <tr>
        <th scope='row'>35</th>
        <td>Equipamento de proteção respiratória autônomo ou sistema de ar com cilindro:</td>
        <td>$row[34]</td>
        </tr>
        <tr>
        <th scope='row'>36</th>
        <td>Equipamentos eletricos e eletrônicos aprovados e certificados:</td>
        <td>$row[35]</td>
        </tr>
        <tr>
        <th scope='row'>37</th>
        <td>Observações:</td>
        <td>$row[36]</td>
        </tr>
        <tr>
        <th scope='row'>38</th>
        <td>Status:</td>
        <td>$row[37]</td>
        </tr>
       </tbody>
     </table>
     
       ";
       echo $documento;
    }
	echo "
	<div class='col-sm-12 text-center mt-1'>
      <button name='btoCadastrar' id='btAnterior' class='btn btn-success'formaction='exportarpdf.php?doc=$documento'>Exportar PDF</button>
      <button name='btoCadastrar' id='btoProximo' class='btn btn-success' onclick='Cadastrar()'>Finalizar</button>
    </div>
  </div>
  </div>
  ";
}
} catch (\Throwable $th) {
    //throw $th;
}



?>
</body>
</html>