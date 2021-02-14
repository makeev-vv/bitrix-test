<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html>
<head>
    <?
    // Метод предназначен для вывода в шаблоне сайта основных полей тега <head>
    $APPLICATION->ShowHead();
    use Bitrix\Main\Page\Asset;

    // SITE_TEMPLATE_PATH = /local/templates/sigma-test

    CJSCore::Init(array("jquery", "popup"));

    // JS
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/myscript.js');

    // STRING
    Asset::getInstance()->addString("<meta http-equiv='X-UA-Compatible' content='IE=edge'>");
    Asset::getInstance()->addString("<meta name='viewport' content='width=device-width, initial-scale=1.0'>");
    ?>
     <!-- Отображает заголовок страницы --> 
    <title><?= $APPLICATION->ShowTitle()?></title>
</head>
<body>
    <? $APPLICATION->ShowPanel(); ?>
    <header class="header">
        <div class="header__container container">
            <div class="header__logo logo">
                <img src="<?= SITE_TEMPLATE_PATH . '/images/logo_white.png' ?>" alt="Логотип Сигма">
            </div>
        </div>
    </header>
</body>
</html>
