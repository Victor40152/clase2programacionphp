<?php 

if(isset($_POST["btncalcular"])){

    require_once "Suma.php";
    $suma = new Suma();
    $valor =$_POST["txtnumero"];
    $suma ->setValorserie($valor);
    $suma ->listarNumeros();
    $suma->sumaConsecutivo();
    



}else{
    echo "No hackear";
}


?>