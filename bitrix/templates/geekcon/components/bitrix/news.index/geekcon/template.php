<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?$LINE_ELEMENT_COUNT=2;?>

<div class="jumbotron">
    <div class="container">
        <?foreach($arResult["IBLOCKS"] as $arIBlock):?>
            <div class="col-xs-4">
                <div class="panel panel-success">
                   <div class="panel-heading">
                        <a href="<?=$arIBlock["LIST_PAGE_URL"]?>" title="<?=$arIBlock["NAME"]?>"><?=$arIBlock["NAME"]?></a>
                   </div>
                   <div class="panel-body">
                            <ul class="thumbnails">
                                <?$count = 0;?>
                                <?foreach($arIBlock["ITEMS"] as $arItem):?>
                                    <?
                                        if($count > 3){
                                            break;
                                        }
                                    ?>
                                    <?
                                        $arItem["~PREVIEW_PICTURE"] = (0 < $arItem["PREVIEW_PICTURE"] ? CFile::GetFileArray($arItem["PREVIEW_PICTURE"]) : false);
				                        if ($arItem["~PREVIEW_PICTURE"])
				                        {
					                        $arItem["PREVIEW_PICTURE"]["ALT"] = $arItem["IPROPERTY_VALUES"]["ELEMENT_PREVIEW_PICTURE_FILE_ALT"];
					                        if ($arItem["PREVIEW_PICTURE"]["ALT"] == "")
						                        $arItem["PREVIEW_PICTURE"]["ALT"] = $arItem["NAME"];
					                        $arItem["PREVIEW_PICTURE"]["TITLE"] = $arItem["IPROPERTY_VALUES"]["ELEMENT_PREVIEW_PICTURE_FILE_TITLE"];
					                        if ($arItem["PREVIEW_PICTURE"]["TITLE"] == "")
						                        $arItem["PREVIEW_PICTURE"]["TITLE"] = $arItem["NAME"];
				                        }
                                    ?>
                                    <li class="span4" style="list-style-type: none;">
                                        <div class="thumbnail">
                                            <img border="0" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"/>
                                            <P></p>
                                            <div class="caption">
                                                <h3><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></h3>
                                                <p><?=$arItem["PREVIEW_TEXT"]?></p>
                                                <p><a href="#" class="btn btn-primary"><?=GetMessage("DESCRIPTION");?></a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <?$count++;?>    
                                <?endforeach;?>
                            </ul>
                   </div>
                </div>
            </div>
        <?endforeach;?>
    </div>
</div>