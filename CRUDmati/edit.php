<?php
$servername="localhost";
$username="root";
$password="" ;
$database="mati";

$connection = new mysqli($servername,$username,$password, $database );

$id="";
$nombre="";
$apellido="";
$email="";
$edad="";

$errorMessage="";
$successmessage=""; 
$id=$_GET["id"];

if($_SERVER['REQUEST_METHOD']=='GET'){
  
    if(!isset($_GET["id"] ) ){
        header("location/MATI/index.php");
        exit;
    }
    


$sql="SELECT * FROM usuario WHERE id=$id";

$result=$connection->query($sql);
$row=$result->fetch_assoc();


$nombre=$row["nombre"];
$apellido=$row["apellido"];
$email=$row["email"];
$edad=$row["edad"];

if(!$row) {
    header("location:/mati/index.php");
    exit;
}

 
}
else {

    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
   $email=$_POST["email"];
   $edad=$_POST["edad"];
    
    $sql = "UPDATE usuario SET nombre = '$nombre' , apellido = '$apellido',  email = '$email', edad = '$edad' WHERE id = $id";

    $result = $connection->query($sql);





    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mati</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <SCript src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></SCript>
</head>
<body>
    <div class="container my-5">
        <h2>Nuevo</h2>
        

<?php
if(!empty($errorMessage)){
    echo"<div class= 'alert alert-waring alert dismissible fade show'role='alert'>
    <strong>$errorMessage</strong>
    <button type='button' class='btn-close' data-ds-dismiss='alert' area-label='close'></buttontype>
    </div>
    ";
}


?>
    
    <Form method="post">
    <input type="hidden"value="<?php echo $id; ?>">

        <div class="row mb-3">

            <label class="col-sm-3 col-form label ">email</label>
            <div class=" col-sm-6">
                <input type ="text"class="Form-control" name="email" values="<?php echo $email;?>">
            </div>

        </div>    

        <div class="row mb-3">

            <label class="col-sm-3 col-form label ">apellido</label>
            <div class=" col-sm-6">
                <input type ="text"class="Form-control" name="apellido" values="<?php echo $apellido;?>">
            </div>

        </div>

        <div class="row mb-3">

            <label class="col-sm-3 col-form label ">edad</label>
            <div class=" col-sm-6">
                <input type ="text"class="Form-control" name="edad" values="<?php echo $edad;?>">
            </div>
        </div> 
        
        
        <div class="row mb-3">

            <label class="col-sm-3 col-form label ">Nombre</label>
            <div class=" col-sm-6">
                <input type ="text"class="Form-control" name="nombre" values="<?php echo $nombre;?>">
            </div>
        </div> 

        <?php
        if(!empty($successmessage)){

            echo"
            <div class= 'alert alert-waring alert dismissible fade show'role='alert'>
             
                <strong>$successmessage</strong>
                <button type='button' class='btn-close' data-ds-dismiss='alert' area-label='close'></buttontype>
            
            </div>
            ";

        }
        ?>

        <div class="row mb-3">
        <div class="offset-sm-3 -dgrid">
        <a class="btn btn-outline-primary"href="/MATI/index.php/" role="button">cancel</a>
        <button type="submit" class="btn btn-primary" >submit</button>

        </div>

    </form>



    </div>
</body>
</html>