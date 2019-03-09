<?php

/**
 * @author Ricardo Braz
 * @copyright 2019
 */

class Usuario {
    
    private $idUsuario;
    private $dessenha;
    private $deslogin;
    private $dtcadastro;
    
    
    public function getIdusuario(){
        return $this->idUsuario;
    }
    public function setIdusuario($value){
        $this->idUsuario = $value;
    }
    
    public function getDeslogin(){
        return $this->deslogin;
    }
    public function setDeslogin($value){
        $this->deslogin = $value;
    }
    
    public function getDessenha(){
        return $this->dessenha;
    }
    public function setDessenha($value){
        $this->dessenha = $value;
    }
    
    public function getDtcadastro(){
        return $this->dtcadastro;
    }
    public function setDtcadastro($value){
        $this->dtcadastro = $value;
    }
    
    public function loadbyId($id){
        
        $sql = new Sql();
        
        $result = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
            ":ID"=>$id
        ));
        
        if(count($result) > 0){
            
            $row = $result[0];
            
            $this->setIdusuario($row['idusuario']);
            $this->setDeslogin($row['deslogin']);
            $this->setDessenha($row['dessenha']);
            $this->setDtcadastro(new DateTime($row['dtcadastro']));
        }
    }
    
    public function __toString(){
        return json_encode(array(
        "idusuario"=>$this->getIdusuario(),
        "deslogin"=>$this->getDeslogin(),
        "dessenha"=>$this->getDessenha(),
        "dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
        ));
    }
}

?>