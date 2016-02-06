<?
/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2014 Bitrix
 */

/**
 * Bitrix vars
 * @global CMain $APPLICATION
 * @global CUser $USER
 * @param array $arParams
 * @param array $arResult
 * @param CBitrixComponentTemplate $this
 */

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();
?>

<div class="jumbotron">
    <div class="container">

        <?if($USER->IsAuthorized()):?>

            <?LocalRedirect("/");?>

        <?else:?>
            <?
            if (count($arResult["ERRORS"]) > 0):
	            foreach ($arResult["ERRORS"] as $key => $error)
		            if (intval($key) == 0 && $key !== 0) 
			            $arResult["ERRORS"][$key] = str_replace("#FIELD_NAME#", "&quot;".GetMessage("REGISTER_FIELD_".$key)."&quot;", $error);

	            ShowError(implode("<br />", $arResult["ERRORS"]));

            elseif($arResult["USE_EMAIL_CONFIRMATION"] === "Y"):
            ?>
            <p><?echo GetMessage("REGISTER_EMAIL_WILL_BE_SENT")?></p>
            <?endif?>


            <form class="form-horizontal" method="post" action="<?=POST_FORM_ACTION_URI?>" name="regform" enctype="multipart/form-data">
                <?if($arResult["BACKURL"] <> ''):?>
	                <input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
                <?endif;?>
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <?=GetMessage("AUTH_REGISTER")?>
                    </div>
                    <div class="panel-body">
                        <?foreach ($arResult["SHOW_FIELDS"] as $FIELD):?>
                            <?switch ($FIELD)
	                        {
		                        case "PASSWORD":
			                        ?>
                                    <div class="form-group">
                                        <label for="<?=$FIELD?>" class="control-label col-xs-2"><?=GetMessage('REGISTER_FIELD_'.$FIELD)?></label>
                                        <div class="col-xs-10">
                                            <input class="form-control" type="password" name="REGISTER[<?=$FIELD?>]" id="<?=$FIELD?>" placeholder="<?=GetMessage('REGISTER_FIELD_'.$FIELD)?>" autocomplete="off"/>
                                        </div>
                                    </div>
                               <?
                                break;
                                case "CONFIRM_PASSWORD":
                               ?>

                                    <div class="form-group">
                                        <label for="<?=$FIELD?>" class="control-label col-xs-2"><?=GetMessage('REGISTER_FIELD_'.$FIELD)?></label>
                                        <div class="col-xs-10">
                                            <input class="form-control" type="password" name="REGISTER[<?=$FIELD?>]" id="<?=$FIELD?>" placeholder="<?=GetMessage('REGISTER_FIELD_'.$FIELD)?>" autocomplete="off"/>
                                        </div>
                                    </div>


                                <?
                                break;
                                case "EMAIL":
                                ?>
                                    <div class="form-group">
                                        <label for="<?=$FIELD?>" class="control-label col-xs-2"><?=GetMessage('REGISTER_FIELD_'.$FIELD)?></label>
                                        <div class="col-xs-10">
                                            <input class="form-control" type="email" name="REGISTER[<?=$FIELD?>]" id="<?=$FIELD?>" placeholder="<?=GetMessage('REGISTER_FIELD_'.$FIELD)?>" autocomplete="off"/>
                                        </div>
                                    </div>
                                <?
                                break;
                                default:
                                ?>
                                    <div class="form-group">
                                        <label for="<?=$FIELD?>" class="control-label col-xs-2"><?=GetMessage('REGISTER_FIELD_'.$FIELD)?></label>
                                        <div class="col-xs-10">
                                            <input class="form-control" type="text" name="REGISTER[<?=$FIELD?>]" id="<?=$FIELD?>" placeholder="<?=GetMessage('REGISTER_FIELD_'.$FIELD)?>" autocomplete="off"/>
                                        </div>
                                    </div>
                                <?break;?>
                            <?}?>
                        <?endforeach;?>
                        <input class="btn btn-primary" type="submit" name="register_submit_button" value="<?=GetMessage("AUTH_REGISTER")?>" />
                    </div>
                </div>
            </form>
        <?endif?>
    </div>
</div>