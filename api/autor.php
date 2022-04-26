<?php
   class Autor{
        public function getAutorById($id){

        $getAutorData=file_get_contents('http://localhost/wordpress/index.php/wp-json/wp/v2/users/'.$id);
        $autorById=json_decode($getAutorData,true);
        $autorData= new stdClass();
        $autorData->author_name=$autorById["name"];
        $autorData->author_avatar=$autorById["avatar_urls"];

        return $autorData;
       }
   }
    
?>