<?php
class MvcController{
    public function plantillaadmin(){
        include "views/templateadmin.php";
    }
    public function enlacesPaginasControllerAdmin(){
        if(isset($_GET["action"])){
            $enlacesController = $_GET ["action"];
        }else{
            $enlacesController = "homeadmin.php";
        }
        $respuesta = EnlacesPaginas ::enlacesPaginasModelAdmin($enlacesController);
        include $respuesta;
    }
}
?>