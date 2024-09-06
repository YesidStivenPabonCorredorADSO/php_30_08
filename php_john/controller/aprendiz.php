<?php
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'path/to/PHPMailer/src/Exception.php';
// require 'path/to/PHPMailer/src/PHPMailer.php';
// require 'path/to/PHPMailer/src/SMTP.php';
require_once(__DIR__ .'/../lips/Database.php');
require_once(__DIR__ .'/../lips/Model.php');
include_once("../clases/aprendiz.php");


$database=new Database();
$connection=$database->getConection();
$aprendiz=new Aprendiz($connection);


if (isset($_POST['nombre'])) {
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $edad=$_POST['edad'];
    $genero=$_POST['genero'];
    $carrera=$_POST['carrera'];
    $promedio=$_POST['promedio'];

    $id=isset($_POST['id']) ? $_POST['id'] : false;

    if (!$id) {
        $aprendiz->store([
            'nombre'=>$_POST['nombre'],
            'apellido'=>$_POST['apellido'],
            'edad'=>$_POST['edad'],
            'genero'=>$_POST['genero'],
            'carrera'=>$_POST['carrera'],
            'promedio'=>$_POST['promedio']
        ]);
        
    };

    if ($id) {
        $aprendiz->update($id,[
            'nombre'=> $nombre,
            'apellido'=>$apellido,
            'edad'=>$edad,
            'genero'=>$genero,
            'carrera'=>$carrera,
            'promedio'=>$promedio
        ]);
        
    }
}
// var_dump($aprendiz);

?>