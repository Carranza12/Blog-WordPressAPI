<?php

require("Entradas.php");
$entradas= new Entradas();
    
    if($_SERVER['REQUEST_METHOD']=='GET'){

      $var=$_GET['url'];

   
       switch($var){
            case "entradas";
            $entradas->obtenerEntradas();
            break;

            default;
        }



        
                  
    }
    
?>