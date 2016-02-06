<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("GeekCon - Попробуй поменять реальность.");
?>

<?$APPLICATION->IncludeComponent("bitrix:main.feedback","",Array(
        "USE_CAPTCHA" => "Y",
        "OK_TEXT" => "Спасибо, ваше сообщение принято.",
        "EMAIL_TO" => "geekcon@inbox.ru",
        "REQUIRED_FIELDS" => Array("NAME","EMAIL","MESSAGE"),
        "EVENT_MESSAGE_ID" => Array("5")
    )
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>