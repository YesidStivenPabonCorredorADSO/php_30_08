<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';





require_once(__DIR__ .'/../lips/Database.php');
require_once(__DIR__ .'/../lips/Model.php');
include_once("../clases/aprendiz.php");


$database=new Database();
$connection=$database->getConection();
$aprendiz=new Aprendiz($connection);


if (isset($_POST['nombre'])) {
    $aprendiz->store([
        'Nombre'=>$_POST['nombre'],
        'Apellido'=>$_POST['apellido'],
        'Edad'=>$_POST['edad'],
        'Genero'=>$_POST['genero'],
        'Carrera'=>$_POST['carrera'],
        'Promedio'=>$_POST['promedio']
    ]);
}
var_dump($aprendiz)

?>