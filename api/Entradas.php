<?php

   class Entradas{
      function obtenerEntradas(){
        
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
               $idAutor=$post["author"];
               $getAutorData=file_get_contents('http://localhost/wordpress/index.php/wp-json/wp/v2/users/'.$idAutor);
               $autorData=json_decode($getAutorData,true);
               $entradaItems->author_name=$autorData["name"];
               
               $entradaItems->author_avatar=$autorData["avatar_urls"];
               $idsCategorias=$post["categories"];
               $entradaItems->categories=$idsCategorias;
               $entradaItems->date=$post["date"];
              
               
               array_push($entradasArray,$entradaItems);
                   

                      //        print_r($arrayCategories);
              // $entradaItems->categories=$arraycategories;
              // print_r(json_encode($entradaItems)) ."<br>";
           }
           
           
          echo json_encode($entradasArray);
    }
    

  /*  entradas=[
        {
            id_entrada:1,
            title:"Titulo de la entrada",
            author_name:"carranza12",
            author_avatar:"imagen.png",
            categoria:"programacion",
            content:"contenido de la entrada.",
            comentarios:[
                {
                    id:1,
                    author_name:"carranza12",
                    author_avatar:"imagen.png",
                    content:"comentario xd",


                }]
        },
    ]*/
   }
    
?>



