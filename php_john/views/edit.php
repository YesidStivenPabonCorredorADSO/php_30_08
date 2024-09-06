<?php 
require_once(__DIR__ .'/../lips/Database.php');
require_once(__DIR__ .'/../lips/Model.php');
include_once("../clases/aprendiz.php");
$database=new Database();
$connection=$database->getConection();
$objeto=new Aprendiz($connection);
$id= $_GET['id'];
if(isset($id)){

    $usuarios=$objeto->getByid($id); 
    ?>
    <form action="../controller/aprendiz.php" method="POST">
        <input type="hidden" name="id"value="<?php echo $usuarios['id'];?>">
    <div>
        <label for="nombre">nombre</label> 
        <input type="text" name="nombre" value="<?php echo $usuarios['nombre'];?>"> 
    </div>
    <div>
        <label for="apellido">apellido</label>
        <input type="text" name="apellido" value="<?php echo $usuarios['apellido'];?>">
    </div>
    <div>
        <label for="edad">edad</label>
        <input type="text" name="edad"value="<?php echo $usuarios['edad'];?>">
    </div>
    <div>
        <label for="genero">genero</label>
        <input type="text" name="genero"value="<?php echo $usuarios['genero'];?>">
    </div>
    <div>
        <label for="carrera">carrera</label>
        <input type="text" name="carrera"value="<?php echo $usuarios['carrera'];?>">
    </div>
    <div>
        <label for="promedio">promedio</label>
        <input type="text" name="promedio" value="<?php echo $usuarios['promedio'];?>">
    </div>
    <button type="submit">Actualizar</button>
 
    </form>
    <?php
}

