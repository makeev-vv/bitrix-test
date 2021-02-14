<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тестовое задание Sigma");
?>
    <main class="main">
        <div class="main__container container">
            <form class="main__form form" id="form_1" method="post">
                <input class="form__input" type="text" name="text_field1" placeholder="Текстовое поле 1">
                <input class="form__input" type="text" name="text_field2" placeholder="Текстовое поле 2">
                <input class="form__input" type="text" name="text_field3" placeholder="Текстовое поле 3">
                <input class="form__input" type="text" name="text_field4" placeholder="Текстовое поле 4">
                <button class="form__btn" type="submit">Отправить</button>
            </form>
        </div>
    </main>
    <button class="btn-popup">Открыть Popup</button>
    <div class="popup" id="popup">
        <div class="popup__area"></div>
        <div class="popup__body">
            <div class="popup__content">
                <div class="popup__close"><img src="<?= SITE_TEMPLATE_PATH . '/images/close-icon.svg' ?>" alt="Иконка закрытия"></img></div>
                <div class="popup__title">Popup c данными</div>
                <div class="popup__text"></div>
            </div>
        </div>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>