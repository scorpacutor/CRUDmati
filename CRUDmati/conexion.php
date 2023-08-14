<?php
class conexion{

    public function ConexionDB(){
        $Host='localhost';
        $dbname='mati';
        $username='root';
        $password='';

        try{
            $conn= new PDO ("MYSQL:host=$Host;port=3306;dbname=$dbname", $username,$password);
            echo "se conecto a la ase de datos";
        }
        catch(PDOxception $pe){
            die("no se logro conectar a la ase de datos".$pe-> getmesagge());


    }
    return $conn;

}

}

?>