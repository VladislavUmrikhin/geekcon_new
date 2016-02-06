<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("GeekCon - Попробуй поменять реальность.");
?>

<?$APPLICATION->IncludeComponent("bitrix:news.index","geekcon",Array(
        "IBLOCK_TYPE" => "news", 
        "IBLOCKS" => Array("1","4","5"), 
        "NEWS_COUNT" => "5", 
        "IBLOCK_SORT_BY" => "SORT", 
        "IBLOCK_SORT_ORDER" => "ASC", 
        "SORT_BY1" => "ID", 
        "SORT_ORDER1" => "ASC", 
        "SORT_BY2" => "ID", 
        "SORT_ORDER2" => "ASC", 
        "FIELD_CODE" => Array(), 
        "PROPERTY_CODE" => Array(), 
        "FILTER_NAME" => "arrFilter", 
        "IBLOCK_URL" => "section.php?ID=#IBLOCK_ID#", 
        "DETAIL_URL" => "detail.php?ID=#ELEMENT_ID#", 
        "ACTIVE_DATE_FORMAT" => "d-m-Y", 
        "CACHE_TYPE" => "A", 
        "CACHE_TIME" => "3600",
        "CACHE_GROUPS" => "Y" 
    )
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>