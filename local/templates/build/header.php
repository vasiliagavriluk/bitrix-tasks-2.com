<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php $APPLICATION->ShowHead(); ?>
    <title><?php $APPLICATION->ShowTitle(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" type="image/x-icon">

    <?= CJSCore::Init(array("jquery"));?>

    <?= Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/myscript.js");?>
    <?= Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/common.css');?>
</head>
<body>
<div id="panel"><?php $APPLICATION->ShowPanel(); ?></div>

<div id="barba-wrapper">



