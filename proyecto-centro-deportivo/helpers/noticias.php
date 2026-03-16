<?php

function cargarNoticias(){

    $archivo = __DIR__ . '/../data/noticias.json';

    if(!file_exists($archivo)){
        return [];
    }

    $noticias = json_decode(file_get_contents($archivo), true);

    usort($noticias, function($a,$b){
        return strtotime($b['fecha']) - strtotime($a['fecha']);
    });

    return $noticias;
}


function obtenerNoticiasPorCategoria($categoria){

    $noticias = cargarNoticias();

    return array_filter($noticias,function($n) use ($categoria){
        return $n['categoria'] === $categoria;
    });

}


function obtenerNoticiaPorId($id){

    $noticias = cargarNoticias();

    foreach($noticias as $n){

        if($n['id'] == $id){
            return $n;
        }

    }

    return null;

}


function obtenerNoticiasRelacionadas($categoria,$id){

    $noticias = cargarNoticias();

    $relacionadas = array_filter($noticias,function($n) use ($categoria,$id){

        return $n['categoria'] === $categoria && $n['id'] != $id;

    });

    return array_slice($relacionadas,0,3);

}