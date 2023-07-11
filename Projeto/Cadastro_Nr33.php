<?php 
    include_once("conexao.php");
    
    if ($_POST) 
    {
        $idPET = $_POST['txtIdPETNr33'];
        $idOs = $_POST['txtIdOsNr33'];
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
        $nomeSuper = $_POST['txtNomeSuper'];
        $assina = $_POST['Liberado'];
    }
    try 
    {
        $sql = $conn->prepare("
            insert into nr33
            (
                Id_pet_Nr33,
                Id_OrdemServico_Nr33,
                Per1_Nr33,
                Per2_Nr33,
                Per3_Nr33,
                Per4_Nr33,
                Per5_Nr33,
                Per6_Nr33,
                Per7_Nr33,
                Per8_Nr33,
                Per9_Nr33,
                Per10_Nr33,
                responsavel_Nr10,
                Assinatura_Nr10
            )
            values
            (
                :Id_pet_Nr33,
                :Id_OrdemServico_Nr33,
                :Per1_Nr33,
                :Per2_Nr33,
                :Per3_Nr33,
                :Per4_Nr33,
                :Per5_Nr33,
                :Per6_Nr33,
                :Per7_Nr33,
                :Per8_Nr33,
                :Per9_Nr33,
                :Per10_Nr33,
                :responsavel_Nr10,
                :Assinatura_Nr10
            )
        ");
        $sql->execute(array(
            ':Id_pet_Nr33'=>$idPET,
            ':Id_OrdemServico_Nr33'=>$idOs,
            ':Per1_Nr33'=>$per1,
            ':Per2_Nr33'=>$per2,
            ':Per3_Nr33'=>$per3,
            ':Per4_Nr33'=>$per4,
            ':Per5_Nr33'=>$per5,
            ':Per6_Nr33'=>$per6,
            ':Per7_Nr33'=>$per7,
            ':Per8_Nr33'=>$per8,
            ':Per9_Nr33'=> $per9,
            ':Per10_Nr33'=>$per10,
            ':responsavel_Nr10'=>$nomeSuper,
            ':Assinatura_Nr10'=> $assina
        ));

        if ($sql->rowCount()>=1) 
        {
            echo'<script>alert("Cadastro realizado com sucesso")</script>';
            header('Location:frmNr33.php');
        }
        
    }
    catch (PDOException $ex)
    {

        echo $ex->getMessage();        
    }
?>