<?php 

class Model{
    protected $id;
    protected $table;
    protected $db;

    public function __construct(
        $id,
        $table,
        PDO $connection
    )
    {
        $this->id=$id;
        $this->table=$table;
        $this->db=$connection;
    }
    public function getAll(){
        $stm=$this->db->prepare("select * from {$this->table}");
        $stm->execute();
        return $stm->fetchAll();
    }
    public function getbyId($id)
    {
        $stm=$this->db->prepare("select * from {$this->table} where id= :id");
        $stm->bindValue(":id",$id);
        $stm->execute();
        return $stm->fetch();
    }
    public function store($data)
    {
        $sql="insert into {$this->table}(";
        foreach($data as $key=> $value){
            $sql .= "{$key},";
        }
        $sql=trim($sql, ',');
        $sql .="(values(";
        // 
        foreach ($data as $key =>$value){
            $sql.=":{$key},";
        }
        // 
        $sql=trim($sql,',');
        $sql.=")";

        $stm =$this->db->prepare($sql);
        foreach($data as $key=>$value){
            $stm->bindValue(":{$key}".$value);
        }
        $stm->execute();

    }
    public function update($id,$data)
    {
        $sql="UPDATE {$this->table}SET";
        foreach($data as $key=>$value){
            $sql.="{$key}=:{$key},";
        }
        $sql.=trim($sql,',');
        $sql.=" WHERE id = :id";
        $stm=$this->db->prepare($sql);
        foreach($data as $key=>$value){
            $stm->bindValue(":{$key}",$value);
        }
        $stm->bindValue(":id",$id);
        $stm->execute();
    }



    }

        // $name=$data['nombre']
        // $apellido=$data['apellido']
        // $edad=$data['edad']
        // $genero=$data['genero']
        // $carrera=$data['']





?>