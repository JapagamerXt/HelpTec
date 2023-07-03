
<!DOCTYPE html>
<html>
<head>
  <title>Janela Pop-up</title>
  <link rel="stylesheet" href="css/bootstrap.css">
<style>
    body{
        width: 200px;
        height: 200px;

    }
    .table {
      width: 100%;
      height: 100%;
    }
</style>

</head>
<body>
<table class="table">
        <thead>
          <tr>
            <th scope='col'>ID</th>
            <th scope='col'>Funcionário</th>
            <th scope='col'>Nascimento</th>
            <th scope='col'>CPF</th>
          </tr>
        </thead>
    <?php include_once('conexao.php');
    $sql = $conn->query('select * from funcionario');
    
    foreach ($sql as $row)
    {   echo "
        <tbody>
          <tr>
            <th scope='row'>$row[0]</th>
            <td>$row[1]</td>
            <td>$row[2]</td>
            <td>$row[5]</td>
          </tr>
        </tbody>
      </table> ";}; ?>


</body>
</html>