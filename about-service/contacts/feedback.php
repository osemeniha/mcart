<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Обратная связь");
?>
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8 mb-5">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.feedback",
                    "contacts.feedback",
                    Array(
                        "EMAIL_TO" => "o.semeniha@yandex.ru",
                        "EVENT_MESSAGE_ID" => array("7"),
                        "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                        "REQUIRED_FIELDS" => array("NAME","EMAIL","MESSAGE"),
                        "USE_CAPTCHA" => "N"
                    )
                );?>
            </div>
            <div class="col-lg-4">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/include/feedback.php",
                    )
                );?>
        </div>
    </div>
</div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>