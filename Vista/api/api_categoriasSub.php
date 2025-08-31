<?php

require_once "../../Controlador/Controlador_categoriasSub.php";
require_once "../../Modelo/Modelo_categoriasSub.php";

class Ajax_categoriasSub {

    public function obtenerCategoriaSubAjax($id_categoria,$estadoSubcategoria) {
        
     

    $subcategorias = Controlador_categoriasSub::obtnerCategoriaSubControlador($id_categoria,$estadoSubcategoria);

    header('Content-Type: application/json');
    echo json_encode($subcategorias);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $id_categoria = $_POST['id_categoria'] ?? '';
    $estadoSubcategoria = $_POST['estadoSubcategoria'] ?? '';

    $ajaxCategorias = new Ajax_categoriasSub();
    $ajaxCategorias->obtenerCategoriaSubAjax($id_categoria,$estadoSubcategoria);
}else {
    // Si no es POST, se puede devolver un error
    echo "Método no permitido";
}
