<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мои объявления");
?><?
$arrFilter = [
	'CREATED_BY' => $GLOBALS['USER']->GetID(),
	//'PROPERTY_PRIORITY' => 2,
];?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news",
	"ads.news",
	Array(
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array("NAME","DETAIL_TEXT","DETAIL_PICTURE","TIMESTAMP_X",""),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array("NUMBER_OF_TOILETS","NUMBER_OF_FLOORS","AREA","LINKS","PRICE","GALLERY","ADDITIONAL_MATERIALS",""),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FILTER_FIELD_CODE" => array("CREATED_BY",""),
		"FILTER_NAME" => "arrFilter",
		"FILTER_PROPERTY_CODE" => array("",""),
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "ads",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array("NAME","DETAIL_TEXT","DETAIL_PICTURE","CREATED_BY","TIMESTAMP_X",""),
		"LIST_PROPERTY_CODE" => array("NUMBER_OF_TOILETS","NUMBER_OF_FLOORS","AREA","LINKS","PRICE","PROPERTY_GALLERY","PROPERTY_ADDITIONAL_MATERIALS",""),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PAGE_TITLE" => "Мои объявления",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_FOLDER" => "/seller-account/my-ads/",
		"SEF_MODE" => "Y",
		"SEF_URL_TEMPLATES" => Array("detail"=>"#ELEMENT_CODE#/","news"=>"","section"=>""),
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "Y",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>