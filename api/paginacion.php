<?php
  
    class Paginacion{
        public function paginacion($paginasPorPost,$NumeroPag,$arrayData){
            $dataEntradas=$arrayData;
            $paginasPorArticulo=$paginasPorPost;
            $numPagina=$NumeroPag;
            $totalDatos=count($dataEntradas);
            $totalPaginas=ceil($totalDatos/$paginasPorArticulo);
            $array_chunck= array_chunk($dataEntradas, $paginasPorArticulo);
            return json_encode($array_chunck[$numPagina-1]);
        }

        
    }
  
?>



