<?php

require("Entradas.php");

require("paginacion.php");
$pag=new Paginacion();

require("autor.php");
$autor=new Autor();
    
    if($_SERVER['REQUEST_METHOD']=='GET'){

      $var=$_GET['url'];

     //  $arrayData=$entradas->obtenerEntradas();
       switch($var){
            case "entradas":
               
            print_r(json_encode($result));
            //gettype($arrayData);
        
            break;
            case "entrada":
                //http://localhost/wordpress/api/entrada?ppp=5&ndp=2
               
                $ppp=intval($_GET['ppp']);
                $ndp=intval($_GET['ndp']);
               print_r($pag->paginacion($ppp,$ndp,$result));
            break;
            

            case "autor":
                $id=$_GET['id'];
                print_r(json_encode($autor->getAutorById(intval($id))));
            break;


            default;
        }



        
                  
    }
    
?>