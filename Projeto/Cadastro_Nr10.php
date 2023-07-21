<?php 
  echo "<pre>";
  print_r($_POST);
  echo "</pre>";
      include_once("Conexao.php");

  if ($_POST) 
  {
      $idApr = $_POST['txtIdAprNr10'];
      $idOs = $_POST['txtIdOsNr10'];
      $per1 = $_POST['txt01'];
      $per2 = $_POST['Rbto02'];
      $per3 = $_POST['Rbto03'];
      $per4 = $_POST['Rbto04'];
      $per5 = $_POST['Rbto05'];
      $per6 = $_POST['Rbto06'];
      $per7 = $_POST['Rbto07'];
      $nomeSuper = $_POST['txtSuper'];
      $assina = $_POST['Permicao'];
      $img = $_POST['txtimg'];
      $obs = $_POST['txtObs'];
      $status = $_POST['txtselect'];

      try 
      {
        $sql = $conn->prepare("
          insert into nr_10
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
            responsavel_Nr10,
            Assinatura_Nr10,
            serti_Nr_10,
            obs_Nr,
            status_Nr
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
            :responsavel_Nr10,
            :Assinatura_Nr10,
            :serti_Nr_10,
            :obs_Nr,
            :status_Nr
          ) 
        ");
        $sql->execute(array(
          ':Id_APR_Nr10'=>$idApr,
          ':Id_OrdemServico_Nr10'=>$idOs,        
          ':Per1_Nr10'=>$per1,
          ':Per2_Nr10'=>$per2,
          ':Per3_Nr10'=>$per3,
          ':Per4_Nr10'=>$per4,
          ':Per5_Nr10'=>$per5,
          ':Per6_Nr10'=>$per6,
          ':Per7_Nr10'=>$per7,
          ':responsavel_Nr10'=>$nomeSuper,
          ':Assinatura_Nr10'=>$assina,
          ':serti_Nr_10'=>$img,
          ':obs_Nr'=>$obs,
          ':status_Nr'=>$status
        ));
        if ($sql->rowCount()>=1) 
        {
          echo'<script> alert("Cadastro realizado com sucesso")</script>';
          
        }
      } 
      catch (\PDOException $ex)
      {
          echo $ex->getMessage();
      }
  }
  else 
  {
    header('Location:frmNr10.php');
  }
?>
<hr>
<img src="oks.jfif" alt="">
<button> <a href="frmNr10.php">Voltar</a> 
