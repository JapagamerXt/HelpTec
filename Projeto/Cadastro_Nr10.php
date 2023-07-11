<?php 
    include_once("conexao.php");

    if ($_POST) 
    {
        $idApr = $_POST['txtIdAprNr10'];
        $idOs = $_POST['txtIdOsNr10'];
        $per1 = $_POST['bto01'];
        $per2 = $_POST['bto02'];
        $per3 = $_POST['bto03'];
        $per4 = $_POST['bto04'];
        $per5 = $_POST['bto05'];
        $per6 = $_POST['bto06'];
        $per7 = $_POST['bto07'];
        $per8 = $_POST['bto08'];
        $per9 = $_POST['bto09'];
        $per10 = $_POST['bto10'];
        $per11 = $_POST['bto11'];
        $nomeSuper = $_POST['Supervisor'];
        $assina = $_POST['Liberado'];
 
        try 
        {
          $sql = $conn->prepare("
            insert into nr10
            (
                Id_APR_Nr10,
                Id_OrdemServico_Nr10,
                Per1_Nr10,
                Per2_Nr10,
                Per3_Nr10,
                Per4_Nr10,
                Per5_Nr10,
                Per6_Nr10,
                Per7_Nr10,
                Per8_Nr10,
                Per9_Nr10,
                Per10_Nr10,
                Per11_Nr10,
                responsavel_Nr10,
                Assinatura_Nr10
            )
            values
            (
                :Id_APR_Nr10,
                :Id_OrdemServico_Nr10,
                :Per1_Nr10,
                :Per2_Nr10,
                :Per3_Nr10,
                :Per4_Nr10,
                :Per5_Nr10,
                :Per6_Nr10,
                :Per7_Nr10,
                :Per8_Nr10,
                :Per9_Nr10,
                :Per10_Nr10,
                :Per11_Nr10,
                :responsavel_Nr10,
                :Assinatura_Nr10
            ) 
          ");
          $sql->execute(array(
            ':Id_APR_Nr10'=>$idApr,
            ':Id_OrdemServico_Nr10'=> $idOs,
            ':Per1_Nr10'=>$per1,
            ':Per2_Nr10'=>$per2,
            ':Per3_Nr10'=>$per3,
            ':Per4_Nr10'=>$per4,
            ':Per5_Nr10'=>$per5,
            ':Per6_Nr10'=>$per6,
            ':Per7_Nr10'=>$per7,
            ':Per8_Nr10'=>$per8,
            ':Per9_Nr10'=>$per9,
            ':Per10_Nr10'=>$per10,
            ':Per11_Nr10'=>$per11,
            ':responsavel_Nr10'=>$nomeSuper,
            ':Assinatura_Nr10'=>$assina
          ));
          if ($sql->rowCount()>=1) 
          {
           echo'<script> alert("Cadastro realizado com sucesso")</script>';
           header('Location:frmNr10.php');
          }
        } 
        catch (\PDOException $ex)
        {
            echo $ex->getMessage();
        }
    }
