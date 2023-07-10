<?php
include_once('conexao.php');
if($_POST){
    $idos = $_POST['id_os'];
    $idfuncos = $_POST['id_func_os'];
    $idsesmet = $_POST['id_sesmt_os'];
    $atividadeos = $_POST['atividade_os'];
    $nros = $_POST['nr_os'];
    $descos = $_POST['desc_os'];
    $obsos = $_POST['obs_os'];
    $statusos = $_POST['status_os'];

  try {
    $sql = $conn->prepare("
         update OS set
         Id_Funcionario_OrdemServico=:idfuncos,
         Id_Sesmet_OrdemServico=:idsesmet,
         nome_OrdemServico=:atividadeos, 
        Id_Nr=:nros,
        descricao_OrdemServico=:descos, 
        obs_OrdemServico =:obsos,
        status_OrdemServico=:statusos 
        where Id_OrdemServico=:id_os

  ");

  } catch (PDOException $ex) {
    echo $ex->getMessage();
}

}