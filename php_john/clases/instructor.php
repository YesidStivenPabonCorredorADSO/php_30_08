<?php 
include_once("persona.php");
class Aprendiz extends persona{
    protected $salario;
    protected $horario;

    function getSalario(){
        return $this->cuenta;
    }
    function getHorario(){
        return $this->promedio;
    }
    function setSalario($salario){
        return $this->salario=$salario;
    }
    function setpromedio($horario){
        return $this->horario=$horario;
    }
}

?>