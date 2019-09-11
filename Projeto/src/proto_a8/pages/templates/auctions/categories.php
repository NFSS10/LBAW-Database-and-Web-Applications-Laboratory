<?php

    try {
        $categoriesAux = getCategories();
    } catch (PDOException $e) {
        die($e->getMessage());
    }

    $categories = array();

    foreach($categoriesAux as $key => $value)
        $categories[$value['categoriamae']] = Array();

    foreach($categoriesAux as $key => $value)
    {
        array_push($categories[$value['categoriamae']], array($value['categoria'] => $value['idcategoria']));
    }
