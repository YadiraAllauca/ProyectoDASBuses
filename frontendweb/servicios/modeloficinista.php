<?php
class EnlacesPaginas
{
    public static function enlacesPaginasModelOficinista($enlacesModel)
    {
        if($enlacesModel == "buses" ||
            $enlacesModel == "frequencies" ||
            $enlacesModel == "sales" ||
            $enlacesModel == "validation" ||
            $enlacesModel == "newbus"){
                $module = "views/modules/".$enlacesModel."oficinista.php";
            }else{
            $module = "views/modules/home.php";
        }
        return $module;
    }
}
?>