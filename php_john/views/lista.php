<?php 
require_once(__DIR__ .'/../lips/Database.php');
require_once(__DIR__ .'/../lips/Model.php');
include_once("../clases/aprendiz.php");
$database=new Database();
$connection=$database->getConection();
$objeto=new Aprendiz($connection);

$usuarios=$objeto->getAll(); 
echo("<pre>");
print_r($usuarios);
echo("</pre>");
?>
<table>
    <thead>
        <tbody>
        <thead>
        <tbody>
        <tr>
            <td>id</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Edad</td>
            <td>Genero</td>
            <td>Carrera</td>
            <td>Promedio</td>
        </tr>
        </tbody>
    </thead>
            <?php
            for($i=0;$i<count($usuarios);$i++){
                ?>
            <tr>
                <th><?php echo $usuarios[$i]['id']; ?></th>
                <th><?php echo $usuarios[$i]['nombre']; ?></th>
                <th><?php echo $usuarios[$i]['apellido']; ?></th>
                <th><?php echo $usuarios[$i]['edad']; ?></th>
                <td><?php echo $usuarios[$i]['genero']; ?></td>
                <td><?php echo $usuarios[$i]['carrera']; ?></td>
                <td><?php echo $usuarios[$i]['promedio']; ?></td>
            </tr>
            <td>
                <a href="edit.php?id=<?php echo $usuarios[$i]['id']  ?>">Editar</a>
                <a href="">Eliminar</a>
            </td>
            <?php
            }
            
            ?>
          
        <tbody>
    </thead>

</table>