<?php
class EnlacesPaginas
{
    public static function enlacesPaginasModelOficinista($enlacesModel)
    {
        if($enlacesModel == "buses" ||
            $enlacesModel == "frequencies" ||
            $enlacesModel == "sales" ||
            $enlacesModel == "validation"){
                $module = "views/modules/".$enlacesModel.".php";
            }else{
            $module = "views/modules/homeoficinista.php";
        }
        return $module;
    }
}
?>