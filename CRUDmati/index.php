<?php

  $servername="localhost";
  $username="root";
  $password="" ;
  $database="mati";
  $connection=new mysqli($servername,$username,$password,$database);
  if($connection->connect_error){
  die("connetion failed:".$connection->connect_error);
  }
  $sql="SELECT * FROM usuario";
  $result = $connection->query($sql);

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>
  <div class="container my-5">
    <h2>Crud mati</h2>
    <a class="btn btn-primary" href="create.php" role="button">nuevo</a>
    <br>
    <table class="table">
      <thead>

        <tr>

          <th>ID </th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Email</th>
          <th>Edad</th>
          <th>action</th>


        </tr>

      </thead>

      <tbody>
          <?php 
          
       
        while($row=$result->fetch_assoc() ){


          echo "

            <tr>
            
              <td>$row[id]</td>
              <td>$row[nombre]</td>
              <td>$row[apellido]</td>
              <td>$row[email]</td>
              <td>$row[edad]</td>
              <td style='margin-right:5px;width: 29px;'><a class='btn btn-primary btn-sm' href='/MATI/edit.php?id=$row[id]'>Editar</a></td>
              <td style='margin-left:5px'><a class='btn btn-danger btn-sm' href='/MATI/delete.php?id=$row[id]'>Borrar</a></td>

            </tr>


          ";

        }

          ?>

      </tbody>


      </table>







</div>
  
</body>
</html>