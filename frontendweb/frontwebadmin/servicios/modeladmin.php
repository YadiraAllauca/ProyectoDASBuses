<?php
class EnlacesPaginas
{
    public static function enlacesPaginasModelAdmin($enlacesModel)
    {
        if($enlacesModel == "cooperativas" ||
            $enlacesModel == "frecuencias"){
                $module = "views/modules/".$enlacesModel."admin.php";
        }else if($enlacesModel == "cooperativasform" ||
            $enlacesModel == "frecuenciasform"){
                $module = "views/modules/formularios/".$enlacesModel."admin.php";
                
        }else{
            $module = "views/modules/homeadmin.php";
        }
        return $module;
    }
}
?>