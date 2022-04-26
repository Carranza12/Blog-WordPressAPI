<?php
  
    class Paginacion{
        public function paginacion($paginasPorPost,$NumeroPag){
            $dataEntradas=json_decode(file_get_contents("http://localhost/wordpress/api/"),true);
            $paginasPorArticulo=$paginasPorPost;
            $numPagina=$NumeroPag;
            $totalDatos=count($dataEntradas);
            $totalPaginas=ceil($totalDatos/$paginasPorArticulo);
            $array_chunck= array_chunk($dataEntradas, $totalPaginas-1);
            return json_encode($array_chunck[$numPagina]);
        }

        
    }
  
?>



