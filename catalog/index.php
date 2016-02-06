<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>
<?$APPLICATION->IncludeComponent("bitrix:catalog", ".default", array(
	"IBLOCK_TYPE" => "catalog",
	"IBLOCK_ID" => "3",
	"BASKET_URL" => "/personal/cart/",
	"ACTION_VARIABLE" => "action",
	"PRODUCT_ID_VARIABLE" => "id",
	"SECTION_ID_VARIABLE" => "SECTION_ID",
	"SEF_MODE" => "Y",
	"SEF_FOLDER" => "/catalog/",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_SHADOW" => "Y",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_FILTER" => "N",
	"CACHE_GROUPS" => "Y",
	"DISPLAY_PANEL" => "N",
	"SET_TITLE" => "Y",
	"SET_STATUS_404" => "Y",
	"USE_FILTER" => "Y",
	"FILTER_NAME" => "",
	"FILTER_FIELD_CODE" => array(
		0 => "NAME",
		1 => "",
	),
	"DETAIL_PROPERTY_CODE" => array(
		0 => "MANUFACTURER",
		1 => "MATERIAL",
		2 => "COLOR",
		3 => "SPECIALOFFER",
		4 => "NEWPRODUCT",
		5 => "SALELEADER",
		6 => "WIDTH",
		7 => "LENGHT",
		8 => "SIZE",
		9 => "STORAGE_COMPARTMENT",
		10 => "HEIGHT",
		11 => "DEPTH",
		12 => "LIGHTS",
		13 => "SHELVES",
		14 => "RECOMMEND",
		15 => "CORNER",
		16 => "SEATS",
		17 => "MORE_PHOTO",
		18 => "",
	),
	"FILTER_PRICE_CODE" => array(
		0 => "BASE",
	),
	"USE_REVIEW" => "Y",
	"FORUM_ID" => "1",
	"USE_COMPARE" => COption::GetOptionString("eshop", "catalogCompare", "Y", SITE_ID) == "Y" ? "Y" : "N",
	"COMPARE_NAME" => "CATALOG_COMPARE_LIST",
	"COMPARE_FIELD_CODE" => array(
		0 => "PREVIEW_TEXT",
		1 => "DETAIL_PICTURE",
		2 => "",
	),
	"COMPARE_PROPERTY_CODE" => array(
		0 => "NEWPRODUCT",
		1 => "SIZE",
		2 => "ARTNUMBER",
		3 => "MATERIAL",
		4 => "MANUFACTURER",
		5 => "",
	),
	"DISPLAY_ELEMENT_SELECT_BOX" => "N",
	"ELEMENT_SORT_FIELD_BOX" => "name",
	"ELEMENT_SORT_ORDER_BOX" => "asc",
	"COMPARE_ELEMENT_SORT_FIELD" => "sort",
	"COMPARE_ELEMENT_SORT_ORDER" => "asc",
	"PRICE_CODE" => array(
		0 => "BASE",
	),
	"USE_PRICE_COUNT" => "N",
	"SHOW_PRICE_COUNT" => "1",
	"PRICE_VAT_INCLUDE" => "Y",
	"PRICE_VAT_SHOW_VALUE" => "N",
	"SHOW_TOP_ELEMENTS" => "N",
	"PAGE_ELEMENT_COUNT" => COption::GetOptionInt("eshop", "catalogElementCount", "25", SITE_ID),
	"LINE_ELEMENT_COUNT" => "1",
	"ELEMENT_SORT_FIELD" => "sort",
	"ELEMENT_SORT_ORDER" => "asc",
	"LIST_PROPERTY_CODE" => array(
		0 => "NEWPRODUCT",
		1 => "SPECIALOFFER",
		2 => "SALELEADER",
	),
	"LIST_OFFERS_FIELD_CODE" => array(
		0 => "NAME",
		1 => "",
	),
	"LIST_OFFERS_PROPERTY_CODE" => array(
		0 => "COLOR",
		1 => "WIDTH",
		2 => "",
	),
	"OFFERS_CART_PROPERTIES" => array(
		0 => "COLOR",
		1 => "WIDTH",
	),
	"INCLUDE_SUBSECTIONS" => "Y",
	"LIST_META_KEYWORDS" => "UF_KEYWORDS",
	"LIST_META_DESCRIPTION" => "UF_META_DESCRIPTION",
	"LIST_BROWSER_TITLE" => "UF_BROWSER_TITLE",
	"SECTION_COUNT_ELEMENTS" => "N",
	"SECTION_TOP_DEPTH" => "1",
	"DETAIL_PROPERTY_CODE" => array(
		0 => "SIZE",
		1 => "ARTNUMBER",
		2 => "MATERIAL",
		3 => "MANUFACTURER",
		4 => "MORE_PHOTO",
		5 => "RECOMMEND",
		6 => "",
	),
	"DETAIL_META_KEYWORDS" => "KEYWORDS",
	"DETAIL_META_DESCRIPTION" => "META_DESCRIPTION",
	"DETAIL_BROWSER_TITLE" => "TITLE",
	"DETAIL_OFFERS_FIELD_CODE" => array(
		0 => "NAME",
		1 => "",
	),
	"DETAIL_OFFERS_PROPERTY_CODE" => array(
		0 => "COLOR",
		1 => "WIDTH",
		2 => "",
	),
	"LINK_IBLOCK_TYPE" => "",
	"LINK_IBLOCK_ID" => "",
	"LINK_PROPERTY_SID" => "",
	"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
	"USE_STORE" => "Y",
	"MAIN_TITLE" => "������� �� �������",
	"STORE_PATH" => "/store/#store_id#",
	"USE_ALSO_BUY" => "Y",
	"ALSO_BUY_ELEMENT_COUNT" => "3",
	"ALSO_BUY_MIN_BUYES" => "2",
	"DISPLAY_TOP_PAGER" => "N",
	"DISPLAY_BOTTOM_PAGER" => "Y",
	"PAGER_TITLE" => "������",
	"PAGER_SHOW_ALWAYS" => "N",
	"PAGER_TEMPLATE" => "arrows",
	"PAGER_DESC_NUMBERING" => "N",
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
	"PAGER_SHOW_ALL" => "N",
	"AJAX_OPTION_ADDITIONAL" => "",
	"DISPLAY_IMG_WIDTH" => "180",
	"DISPLAY_IMG_HEIGHT" => "225",
	"DISPLAY_DETAIL_IMG_WIDTH" => "450",
	"DISPLAY_DETAIL_IMG_HEIGHT" => "450",
	"DISPLAY_MORE_PHOTO_WIDTH" => "280",
	"DISPLAY_MORE_PHOTO_HEIGHT" => "280",
	"SHARPEN" => "30",	
	"SEF_URL_TEMPLATES" => array(
		"sections" => "",
		"section" => "#SECTION_CODE#/",
		"element" => "#SECTION_CODE#/#ELEMENT_CODE#/",
		"compare" => "compare/",
	)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>