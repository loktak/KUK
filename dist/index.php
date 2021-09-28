<?php

require_once "php/init.php";

$page = 'index';
$paints = $_GET['paints'] ?? NULL;
$title = 'Порошковые краски для различных сфер применения';

$promo = include_template('index/promo-index.php', []);

$applicationSphere = include_template('index/application-sphere.php', []);

$assortmentMenu = include_template('index/assortment-menu.php', [
    'title' => 'Мы предлагаем:',
    'page' => $page,
    'paints' => $paints
]);

$epoxyPolyester = include_template('paints/epoxy-polyester.php', [
    'paints' => $paints,
    'page' => $page
]);
$epoxy = include_template('paints/epoxy.php', [
    'paints' => $paints,
    'page' => $page
]);
$polyester = include_template('paints/polyester.php', [
    'paints' => $paints,
    'page' => $page
]);
$metallicEffect = include_template('paints/metallic-effect.php', [
    'paints' => $paints,
    'page' => $page
]);
$polyurethane = include_template('paints/polyurethane.php', [
    'paints' => $paints,
    'page' => $page
]);


$assortmentList = include_template('index/assortment-list.php', [
            'epoxyPolyester' => $epoxyPolyester,
            'epoxy' => $epoxy,
            'polyester' => $polyester,
            'metallicEffect' => $metallicEffect,
            'polyurethane' => $polyurethane,
            'paints' => $paints
]);

$assortment = include_template('index/assortment.php', [
    'assortmentList' => $assortmentList,
    'assortmentMenu' => $assortmentMenu
]);

$content = include_template('index/index-content.php', [
    'applicationSphere' => $applicationSphere,
    'assortment' => $assortment,
    'promo' => $promo
]);

$layout = include_template('layout.php', [
    'promo'=> $promo,
    'content' => $content,
    'title' => $title,
    'page' => $page
]);


print_r($layout);