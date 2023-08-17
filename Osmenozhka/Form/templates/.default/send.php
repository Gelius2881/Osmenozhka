
<?php
    define('STOP_STATISTICS', true);
    define('PUBLIC_AJAX_MODE', true);
    require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');
    $APPLICATION->RestartBuffer();
    use Bitrix\Main\Mail\Event;
    Event::send(array(
        "EVENT_NAME" => "OSM_FORM",
        "LID" => "s1",
        "C_FIELDS" => array(
            "NAME" => $_POST['inputUser'],
            "PHONE" => $_POST['inputPhone'],
            "OSM_EMAIL" => $_POST['inputEmail'],
            "COMMENTS" => $_POST['floatingTextarea'],

        ),
    ));
?>