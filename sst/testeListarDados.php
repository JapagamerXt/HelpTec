<?php
    include_once('conexao.php');

    try {
        
        $sql = $conn->query('select * from usuario');

        if($sql->rowCount() != 0)
        {
            foreach ($sql as $linha) {
                echo '<pre>';
                    print_r($linha);
                echo '</pre>';
                echo "Nome: ".$linha[1]."<br>";
                echo "Login: ".$linha['usuario_Usuario']."<br>";
                echo'<hr>';
                
            }
        }
        else
        {
            echo "Banco de dados limpo!";
        }


    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }

    ?>