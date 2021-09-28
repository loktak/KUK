<?php

require_once "php/init.php";

$page = 'sphere';
$sphere = $_GET['sphere'] ?? NULL;
$paints = 'inner';


$sphereMenu = include_template('sphere/sphere-menu.php', [
    'sphere' => $sphere
]);


switch ($sphere) {
    case 'architectural':
        $title = 'Архитектурные порошковые краски';
        break;
    case 'industrial':
        $title = 'Промышленные порошковые краски';
        break;
    case 'automotive':
        $title = 'Автомобильные порошковые краски';
        break;
    case 'interior':
        $title = 'Интерьерные порошковые краски';
        break;
    case 'decorative':
        $title = 'Декоративные порошковые краски';
        break;
    case 'sports-equipment':
        $title = 'Порошковые краски для спортивного инвентаря';
        break;
}

//Эпоксидно-полиэфирные порошковые краски
$epoxyPolyester = include_template('paints/epoxy-polyester.php', [
    'paints' => $paints,
    'page' => $page,
    'title' => $title
]);
//Эпоксидные порошковые краски
$epoxy = include_template('paints/epoxy.php', [
    'paints' => $paints,
    'page' => $page,
    'title' => $title
]);
//Полиэфирные порошковые краски
$polyester = include_template('paints/polyester.php', [
    'paints' => $paints,
    'page' => $page,
    'title' => $title
]);
//Порошковые краски с эффектом «металлик»
$metallicEffect = include_template('paints/metallic-effect.php', [
    'paints' => $paints,
    'page' => $page,
    'title' => $title
]);
//Полиуретановые порошковые краски и лаки
$polyurethane = include_template('paints/polyurethane.php', [
    'paints' => $paints,
    'page' => $page,
    'title' => $title
]);


switch ($sphere) {
    case 'architectural':
        $assortmentList = include_template('sphere/architectural-assortment-list.php', [
            'polyester' => $polyester,
            'metallicEffect' => $metallicEffect,
            'polyurethane' => $polyurethane,
            'paints' => $paints
        ]);
        break;
    case 'industrial':
        $assortmentList = include_template('sphere/industrial-assortment-list.php', [
            'polyester' => $polyester,
            'polyurethane' => $polyurethane,
            'epoxy' => $epoxy,
            'paints' => $paints
        ]);
        break;
    case 'automotive':
        $assortmentList = include_template('sphere/automotive-assortment-list.php', [
            'polyester' => $polyester,
            'metallicEffect' => $metallicEffect,
            'polyurethane' => $polyurethane,
            'paints' => $paints
        ]);
        break;
    case 'interior':
        $assortmentList = include_template('sphere/interior-assortment-list.php', [
            'epoxyPolyester' => $epoxyPolyester,
            'epoxy' => $epoxy,
            'metallicEffect' => $metallicEffect,
            'paints' => $paints
        ]);
        break;
    case 'decorative':
        $assortmentList = include_template('sphere/decorative-assortment-list.php', [
            'epoxyPolyester' => $epoxyPolyester,
            'epoxy' => $epoxy,
            'metallicEffect' => $metallicEffect,
            'paints' => $paints
        ]);
        break;
    case 'sports-equipment':
        $assortmentList = include_template('sphere/sports-equipment-assortment-list.php', [
            'polyester' => $polyester,
            'polyurethane' => $polyurethane,
            'paints' => $paints
        ]);
        break;
}

$promo = include_template('sphere/sphere-promo.php', [
    'sphere' => $sphere,
    'title' => $title
]);


$content = include_template('sphere/sphere-content.php', [
    'sphereMenu' => $sphereMenu,
    'assortmentList' => $assortmentList,
    'promo' => $promo
]);

$layout = include_template('layout.php', [
    'content' => $content,
    'page' => $page,
    'title'=> $title
]);

print_r($layout);
