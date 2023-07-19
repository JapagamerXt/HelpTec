<?php
include_once('conexao.php');

try {
    $sql = $conn->query('select * from pet where id_pet = 2');
    if($sql->rowCount()>=1){
        foreach ($sql as $row) {
       echo "<p>Id: $row[0]</p>
       <p>Nome da Empresa: $row[1]</p>
       <p>Local espaço confinado: $row[2]</p>
       ";

    }
}
} catch (\Throwable $th) {
    //throw $th;
}



?>