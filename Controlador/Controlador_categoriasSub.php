<?php



class Controlador_categoriasSub {

    // ********************* METODO LOGIN  *******************************    
public static  function obtnerCategoriaSubControlador($idcategoria,$estadoSubcategoria){


         return DatoscategoriaSub::obtnerCategoriaSubModelo($idcategoria,$estadoSubcategoria);

    }


}