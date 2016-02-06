<?
/**
 * @global CMain $APPLICATION
 * @param array $arParams
 * @param array $arResult
 */
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();
?>

<div class="jumbotron">
    <div class="container">

        <?ShowError($arResult["strProfileError"]);?>
        <?
        if ($arResult['DATA_SAVED'] == 'Y')
	        ShowNote(GetMessage('PROFILE_DATA_SAVED'));
        ?>
        <script type="text/javascript">
        <!--
        var opened_sections = [<?
        $arResult["opened"] = $_COOKIE[$arResult["COOKIE_PREFIX"]."_user_profile_open"];
        $arResult["opened"] = preg_replace("/[^a-z0-9_,]/i", "", $arResult["opened"]);
        if (strlen($arResult["opened"]) > 0)
        {
	        echo "'".implode("', '", explode(",", $arResult["opened"]))."'";
        }
        else
        {
	        $arResult["opened"] = "reg";
	        echo "'reg'";
        }
        ?>];
        //-->

        var cookie_prefix = '<?=$arResult["COOKIE_PREFIX"]?>';
        </script>



        <form class="form-horizontal" method="post" name="form1" action="<?=$arResult["FORM_TARGET"]?>" enctype="multipart/form-data">
            <?=$arResult["BX_SESSION_CHECK"]?>
            <input type="hidden" name="lang" value="<?=LANG?>" />
            <input type="hidden" name="ID" value=<?=$arResult["ID"]?> />
            <div class="panel panel-success">
                <div class="panel-heading">
                    <?=GetMessage("SHARE_INFO");?>
                </div>
                <div class="panel-body">
                    <?if (strlen($arResult["arUser"]["TIMESTAMP_X"])>0):?>
                        <div class="form-group">
                            <label for="LAST_UPDATE" class="control-label col-xs-2"><?=GetMessage('LAST_UPDATE')?></label>
                            <div class="col-xs-10">
                              <p class="form-control-static"><?=$arResult["arUser"]["TIMESTAMP_X"]?></p>
                            </div>
                        </div>
                    <?endif;?>

                    <?if (strlen($arResult["arUser"]["LAST_LOGIN"])>0):?>
                        <div class="form-group">
                            <label for="LAST_LOGIN" class="control-label col-xs-2"><?=GetMessage('LAST_LOGIN')?></label>
                            <div class="col-xs-10">
                              <p class="form-control-static"><?=$arResult["arUser"]["LAST_LOGIN"]?></p>
                            </div>
                        </div>
                    <?endif;?>

                    <div class="form-group">
                        <label for="InputNAME" class="control-label col-xs-2"><?=GetMessage('NAME')?></label>
                        <div class="col-xs-10">
                            <input class="form-control" type="text" name="NAME" id="InputNAME" placeholder="<?=GetMessage('NAME')?>" value="<?=$arResult["arUser"]["NAME"]?>"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="LAST_NAME" class="control-label col-xs-2"><?=GetMessage('LAST_NAME')?></label>
                        <div class="col-xs-10">
                            <input class="form-control" type="text" name="LAST_NAME" id="LAST_NAME" placeholder="<?=GetMessage('LAST_NAME')?>" value="<?=$arResult["arUser"]["LAST_NAME"]?>"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="LOGIN" class="control-label col-xs-2"><?=GetMessage('LOGIN')?></label>
                        <div class="col-xs-10">
                            <input class="form-control" type="text" name="LOGIN" id="LOGIN" placeholder="<?=GetMessage('LOGIN')?>" value="<?=$arResult["arUser"]["LOGIN"]?>"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="EMAIL" class="control-label col-xs-2"><?=GetMessage('EMAIL')?></label>
                        <div class="col-xs-10">
                            <input class="form-control" type="text" name="EMAIL" id="EMAIL" placeholder="<?=GetMessage('EMAIL')?>" value="<?=$arResult["arUser"]["EMAIL"]?>"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="NEW_PASSWORD" class="control-label col-xs-2"><?=GetMessage('NEW_PASSWORD')?></label>
                        <div class="col-xs-10">
                            <input class="form-control" type="PASSWORD" name="NEW_PASSWORD" id="NEW_PASSWORD" placeholder="<?=GetMessage('NEW_PASSWORD')?>" value=""/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="NEW_PASSWORD_CONFIRM" class="control-label col-xs-2"><?=GetMessage('NEW_PASSWORD_CONFIRM')?></label>
                        <div class="col-xs-10">
                            <input class="form-control" type="PASSWORD" name="NEW_PASSWORD_CONFIRM" id="NEW_PASSWORD_CONFIRM" placeholder="<?=GetMessage('NEW_PASSWORD_CONFIRM')?>" value=""/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="InputTitle" class="control-label col-xs-2"><?=GetMessage('main_profile_title')?></label>
                        <div class="col-xs-10">
                            <input class="form-control" type="text" name="TITLE" id="InputTitle" placeholder="<?=GetMessage('main_profile_title')?>" value="<?=$arResult["arUser"]["TITLE"]?>"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="USER_BIRTHDAY_DT" class="control-label col-xs-2"><?=GetMessage('USER_BIRTHDAY_DT')?></label>
                        <div class="col-xs-10">
                            <!--<input class="form-control" type="text" name="USER_BIRTHDAY_DT" id="USER_BIRTHDAY_DT" placeholder="<?=GetMessage('USER_BIRTHDAY_DT')?>" value="<?=$arResult["arUser"]["DATE_FORMAT"]?>"/>-->
                            <?
			                    $APPLICATION->IncludeComponent(
				                    'bitrix:main.calendar',
				                    '',
				                    array(
					                    'SHOW_INPUT' => 'Y',
					                    'FORM_NAME' => 'form1',
					                    'INPUT_NAME' => 'PERSONAL_BIRTHDAY',
					                    'INPUT_VALUE' => $arResult["arUser"]["PERSONAL_BIRTHDAY"],
					                    'SHOW_TIME' => 'N'
				                    ),
				                    null,
				                    array('HIDE_ICONS' => 'Y')
			                    );

			                    //=CalendarDate("PERSONAL_BIRTHDAY", $arResult["arUser"]["PERSONAL_BIRTHDAY"], "form1", "15")
			                    ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="USER_PHOTO" class="control-label col-xs-2"><?=GetMessage('USER_PHOTO')?></label>
                        <div class="col-xs-10">
                            <?=$arResult["arUser"]["PERSONAL_PHOTO_INPUT"]?>
                            <?if (strlen($arResult["arUser"]["PERSONAL_PHOTO"])>0)
			                {
			                ?>
			                <br />
				                <?=$arResult["arUser"]["PERSONAL_PHOTO_HTML"]?>
			                <?
			                }?>
                            <!--<input class="form-control" type="text" name="TITLE" id="USER_PHOTO" placeholder="<?=GetMessage('USER_PHOTO')?>" value="<?=$arResult["arUser"]["TITLE"]?>"/>-->
                        </div>
                    </div>
                    <?if($arResult["IS_ADMIN"]):?>
                        <div class="form-group">
                            <label for="ADMIN_NOTES" class="control-label col-xs-2"><?=GetMessage('USER_ADMIN_NOTES')?></label>
                            <div class="col-xs-10">
                                <input class="form-control" type="text" name="TITLE" id="ADMIN_NOTES" placeholder="<?=GetMessage('USER_ADMIN_NOTES')?>" value="<?=$arResult["arUser"]["ADMIN_NOTES"]?>"/>
                            </div>
                        </div>
	                <?endif;?>
                    <input class="btn btn-primary" type="submit" name="save" value="<?=(($arResult["ID"]>0) ? GetMessage("MAIN_SAVE") : GetMessage("MAIN_ADD"))?>">
                    <input class="btn btn-primary" type="reset" value="<?=GetMessage('MAIN_RESET');?>">
                </div>
            </div>
        </form>
    <div>
</div>