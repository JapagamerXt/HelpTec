<?php
include_once('conexao.php');
if($_POST){
    $idfuncos = $_POST['id_func_os'];
    $idsesmet = $_POST['id_sesmt_os'];
    $atividadeos = $_POST['atividade_os'];
    $nros = $_POST['nr_os'];
    $descos = $_POST['desc_os'];
    $obsos = $_POST['obs_os'];
    $statusos = $_POST['status_os'];

}

try {
    $sql = $conn->prepare("
          insert into OS
          (Id_funcionario_OrdemServico,
           Id_Sesmet_OrdemServico,
           Id_Nr,
           nome_ordemServico,
           descricao_OrdemServico,
           obs_OrdemServico,
           status_OrdemServico
        )values(
            :Id_funcionario_OrdemServico,
            :Id_Sesmet_OrdemServico,
            :Id_Nr10,
            :nome_ordemServico,
            :descricao_OrdemServico,
            :obs_OrdemServico,
            :status_OrdemServico
          )
    ");
    $sql->execute(Array(
        ':Id_funcionario_OrdemServico'=>$idfuncos,
        ':Id_Sesmet_OrdemServico'=>$idsesmet,
        ':Id_Nr10'=>$nros,
        ':nome_ordemServico'=>$atividadeos,
        ':descricao_OrdemServico'=>$descos,
        ':obs_OrdemServico'=>$obsos,
        ':status_OrdemServico'=>$statusos,

    ));
    if($sql->rowCount()>=1)
    {
     
        echo '<script> alert("Cadastrado com sucesso")</script>';
        header('Location:frm_os.php');
    }


} catch (PDOException $ex) {
    echo $ex->getMessage();
}
?>
