<?php

require_once "../../Controlador/Controlador_categoriasSub_sub.php";
require_once "../../Modelo/Modelo_categoriasSub_sub.php";

class Ajax_categoriasSub_sub {

    public function obtenerCategoriaSub_subAjax($id_subcategoria,$estadoSubcategoria) {
        
     

    $subcategorias = Controlador_categoriasSub_sub::obtnerCategoriaSub_subControlador($id_subcategoria,$estadoSubcategoria);

    header('Content-Type: application/json');
    echo json_encode($subcategorias);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $id_subcategoria = $_POST['id_subcategoria'] ?? '';
    $estadoSubcategoria = $_POST['estadoSubcategoria'] ?? '';

    $ajaxCategorias = new Ajax_categoriasSub_sub();
    $ajaxCategorias->obtenerCategoriaSub_subAjax($id_subcategoria,$estadoSubcategoria);
}else {
    // Si no es POST, se puede devolver un error
    echo "Método no permitido";
}
