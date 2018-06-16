<?php
    function conectar(){
        $lnk = @new mysqli("localhost","root","", "freereviews");
        if($lnk->connect_errno){
            echo "no se ha podido conectar con la base de datos<br/>";
            die("Error: ".$lnk->connect_errno);
        }else{
            return $lnk;
        }
        
    } 
    
?>