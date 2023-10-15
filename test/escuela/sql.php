<?php

class Inscripcion{
    public $stm;
    public function Bdconnect(){
        try{
            $this->stm=new PDO('mysql:host=localhost;dbname=prueba','root','');
            echo "si da";
        }
        catch(PDOException $error){
            echo 'Error en: ->'. $error->getMessage();
        }
    }
}

?>