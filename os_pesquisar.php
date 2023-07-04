<?php

include_once('conexao.php');

$idos='';
$idfuncos='';
$idsesmetos='';
$idnr ='';
$atividadeos='';
$descricaoos = '';
$obsapros='';
$statusapros='';

if($_POST)
{
    $id = $_POST['id_os'];

    $sql = $conn->query('select * from OS where Id_OrdemServico ='.$id);

    if($sql->rowCount()>=1)
    {
        foreach ($sql as $row) {

            $$idos=$row[0];
            $idfuncos=$row[1];
            $idsesmetos=$row[2];
            $idnr=$row[3];
            $atividadeos=$row[4];
            $descricaoos=$row[5];
            $obsapros=$row[6];
            $statusapros=$row[7];
            


        }
    }
    else
    {
        echo '<p>Usuário não existe</p>';
    }
}