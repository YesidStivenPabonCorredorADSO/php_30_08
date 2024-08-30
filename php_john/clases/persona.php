<?php 
include_once("../lips/Model.php");
class persona extends Model{
    protected $nombre;
    protected $apellido;
    protected $edad;
    protected $genero;
    protected $carrera;



    public function __construct(
        $id,
        $table,
        PDO $connection
    )
    {
        parent::__construct($id,$table,$connection);
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getEdad(){
        return $this->edad;
    }
    public function getGenero(){
        return $this->genero;
    }
    // 
    public function setNombre($nombre){
        return $this->nombre=$nombre;
    }
    public function setApellido($apellido){
        return $this->apellido=$apellido;
    }
    public function setedad($edad){
        return $this->edad=$edad;
    }
    public function setGenero($genero){
        return $this->genero=$genero;
    }
    public function getCarrera($carrera){
        return $this->carrera=$carrera;
    }
}
?>