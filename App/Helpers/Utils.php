<?php

class Utils {

    /**
     * CARGA CONSTANTES BASICAS PARA SMARTY
     * 
     * @param object $smarty_obj
     * @return void
     */
    public static function getConstantSmarty($smarty_obj) {
        $usuario = null;
        
        if (isset($_SESSION['user'])) {
            $usuario = $_SESSION['user'];
        }
        
        $smarty_obj->assign('base_url', ROOT);
        $smarty_obj->assign('view_url', views_path);
        $smarty_obj->assign('user', $usuario);
    }
} // FIN DE LA CLASE