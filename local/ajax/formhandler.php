<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

spl_autoload_register(function (string $className) {
    require_once __DIR__ . '/' . $className . '.php';
});

if(!empty($_POST)){
    $form = new Form($_POST);
    $fieldsForm = $form->getValues();

    echo json_encode($fieldsForm);
}else{
    echo json_encode(["error" => "Не поступило данных"]);
}

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");

    
?>