<?php 

class Suma{

    private $valorserie;
    
    public function __construct(){
        $this-> valorserie =0;
    }

    public function getValorserie(){
        return $this->valorserie;
    }
    public function setValorserie($valor){
        $this->valorserie =$valor;
    }

    public function listarNumeros(){
        for($i=1; $i<= $this ->getValorserie(); $i++){
        echo $i." ";
        }



    }

    public function sumaConsecutivo(){
        $suma =0;
        for($i=1; $i<= $this ->getValorserie(); $i++){
            $suma = $suma + $i;
            
        }       
         echo $suma;

    }
       
        

        
        

    

}
?>
