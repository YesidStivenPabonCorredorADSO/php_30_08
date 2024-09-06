<form action="controller/aprendiz.php" method="POST">
    <div>
        <label for="nombre">nombre</label>
        <input type="text">
    </div>
    <div>
        <label for="apellido">apellido</label>
        <input type="text">
    </div>
    <div>
        <label for="edad">edad</label>
        <input type="text">
    </div>
    <div>
        <label for="genero">genero</label>
        <input type="text">
    </div>
    <div>
        <label for="carrera">carrera</label>
        <input type="text">
    </div>
    <div>
        <label for="promedio">promedio</label>
        <input type="text">
    </div>
    <button type="submit">Guardar</button>
 
</form>
<?php 
// require_once("services/emial.php");
// $correo="yesidpabon145@gmail.com";
// $mensaje="Hola se envio";
// $subject="Enviamos un correo eletronico";
// $body="Hola voy a intentar que se envie";
// $mail=new Mail($correo,$mensaje,$subject,$body);
// $mail->send();
?>
