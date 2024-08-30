<?php 
include_once("persona.php");
class Aprendiz extends persona{
    protected $cuenta;
    protected $promedio;


    public function __construct(
        PDO $connection
    )
    {
        parent::__construct('id','users', $connection);
    }

    function getcuenta(){
        return $this->cuenta;
    }
    function getpromedio(){
        return $this->promedio;
    }
    function setcuenta($cuenta){
        return $this->cuenta=$cuenta;
    }
    function setpromedio($promedio){
        return $this->promedio=$promedio;
    }

}


?>