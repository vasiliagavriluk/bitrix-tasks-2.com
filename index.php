<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новости банка");
?>

<?$APPLICATION->IncludeComponent(
	"bitrix:form.result.new", 
	"task-2", 
	array(
		"SEF_MODE" => "Y",
		"WEB_FORM_ID" => "1",
		"LIST_URL" => "",
		"EDIT_URL" => "",
		"SUCCESS_URL" => "success.php",
		"CHAIN_ITEM_TEXT" => "",
		"CHAIN_ITEM_LINK" => "",
		"IGNORE_CUSTOM_TEMPLATE" => "N",
		"USE_EXTENDED_ERRORS" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"SEF_FOLDER" => "/",
		"COMPONENT_TEMPLATE" => "task-2"
	),
	false
);?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>