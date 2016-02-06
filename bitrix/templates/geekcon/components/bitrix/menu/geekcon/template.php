<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

    <?foreach($arResult as $arItem):?>
    <li <?if($arItem["SELECTED"]):?> class="active" <?endif;?>>
        <a href=<?=$arItem["LINK"]?>>
            <?=$arItem["TEXT"]?>
        </a>
    </li>
    <?endforeach?>

<?endif?>