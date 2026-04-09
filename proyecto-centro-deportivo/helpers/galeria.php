<?php

function cargarGaleria(){
    $ruta = __DIR__ . '/../data/galeria.json';

    if(!file_exists($ruta)){
        return [];
    }

    return json_decode(file_get_contents($ruta), true);
}