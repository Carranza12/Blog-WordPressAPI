<?php
   
        
        //ENTRADAS
            //URL
            $url_posts="http://localhost/wordpress/wp-json/wp/v2/posts";
            //ARRAY
           $entradasArray=array();
           
            //CONSUMO GET
            $jsonPosts=file_get_contents($url_posts);
            
            //CONVERT JSON TO DATA
            $posts=json_decode($jsonPosts,true);
            
            
        
           foreach($posts as $post){
              
               $entradaItems= new stdClass();
               $entradaItems ->id=$post["id"];
               $entradaItems ->title=$post["title"]["rendered"];
                $entradaItems->authorId=$post["author"];
               $idsCategorias=$post["categories"];
               $entradaItems->categories=$idsCategorias;
               $entradaItems->date=$post["date"];
               array_push($entradasArray,$entradaItems);
            }
           
           
           $result=$entradasArray;
    

?>



