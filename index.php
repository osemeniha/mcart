<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Биржа недвижимости");
?><?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Биржа недвижимости");
?>  <?$arrFilter = array(
    'PROPERTY_PRIORITY' => 2,
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"ads.slider",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "86400",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("",""),
		"FILTER_NAME" => "arrFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "ads",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MEDIA_PROPERTY" => "",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("PRICE",""),
		"SEARCH_PAGE" => "/search/",
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SLIDER_PROPERTY" => "",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"TEMPLATE_THEME" => "blue",
		"USE_RATING" => "N",
		"USE_SHARE" => "N"
	)
);?>
  <div class="py-5">
    <div class="container">

      <div class="row">
        <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
          <div class="feature d-flex align-items-start">
            <?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				Array(
					"AREA_FILE_SHOW" => "file", 
					"PATH" => "/include/card1.php",
				)
			);?>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
          <div class="feature d-flex align-items-start">
            <?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				Array(
					"AREA_FILE_SHOW" => "file", 
					"PATH" => "/include/card2.php",
				)
			);?>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
          <div class="feature d-flex align-items-start">
            <?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				Array(
					"AREA_FILE_SHOW" => "file", 
					"PATH" => "/include/card3.php",
				)
			);?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="site-section site-section-sm bg-light">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12">
          <div class="site-section-title">
            <h2>New Properties for You</h2>
          </div>
        </div>
      </div>
        <?$APPLICATION->IncludeComponent(
	"bitrix:news.line",
	"ads.line",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "86400",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array("PREVIEW_TEXT","PREVIEW_PICTURE","PROPERTY_GALLERY","PROPERTY_AREA","PROPERTY_NUMBER_OF_FLOORS","PROPERTY_NUMBER_OF_TOILETS","PROPERTY_PRICE","PROPERTY_GARAGE"),
		"IBLOCKS" => array("3"),
		"IBLOCK_TYPE" => "ads",
		"NEWS_COUNT" => "9",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?>


    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7 text-center mb-5">
          <div class="site-section-title">
            <h2>Our Services</h2>
          </div>
        </div>
      </div>
        <?$APPLICATION->IncludeComponent("bitrix:news.line", "services.line", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "2592000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
		"FIELD_CODE" => array(	// Поля
			0 => "PROPERTY_LINK",
			1 => "PROPERTY_DESCRIPTION",
			2 => "PROPERTY_ICON",
		),
		"IBLOCKS" => array(	// Код информационного блока
			0 => "4",
		),
		"IBLOCK_TYPE" => "services",	// Тип информационного блока
		"NEWS_COUNT" => "6",	// Количество новостей на странице
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
	),
	false
);?>
    </div>
  </div>

  <div class="site-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center">
          <div class="site-section-title">
            <h2>Our Blog</h2>
          </div>
        </div>
      </div>
      <?$APPLICATION->IncludeComponent(
	"bitrix:news.line",
	"news.line",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "259200",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array("NAME","PREVIEW_TEXT","PREVIEW_PICTURE","DATE_ACTIVE_FROM",""),
		"IBLOCKS" => array("1"),
		"IBLOCK_TYPE" => "news",
		"NEWS_COUNT" => "3",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?>
  </div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>