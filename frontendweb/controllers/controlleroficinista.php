<?php
class MvcController{
    public function plantilla(){
        include "views/templateoficinista.php";
    }
    public function enlacesPaginasController(){
        if(isset($_GET["action"])){
            $enlacesController = $_GET ["action"];
        }else{
            $enlacesController = "homeoficinista.php";
        }
        $respuesta = EnlacesPaginas ::enlacesPaginasModel($enlacesController);
        include $respuesta;
    }
}
?>