<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="bx-system-auth-form">

<?
if ($arResult['SHOW_ERRORS'] == 'Y' && $arResult['ERROR'])
	ShowMessage($arResult['ERROR_MESSAGE']);
?>

<?if($arResult["FORM_TYPE"] == "login"):?>
    <p class="navbar-text navbar-right">
        <a href="#myModal" class="btn btn-primary" data-toggle="modal"><?=GetMessage("AUTH_LOGIN_BUTTON")?></a>
    </p>
    <div id="myModal" class="modal fade">  
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">?</button>
                    <h4 class="modal-title"><?=GetMessage("socserv_as_user_form")?></h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" name="system_auth_form<?=$arResult["RND"]?>" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
                    <?if($arResult["BACKURL"] <> ''):?>
	                    <input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
                    <?endif?>
                    <?foreach ($arResult["POST"] as $key => $value):?>
	                    <input type="hidden" name="<?=$key?>" value="<?=$value?>" />
                    <?endforeach?>
	                    <input type="hidden" name="AUTH_FORM" value="Y" />
	                    <input type="hidden" name="TYPE" value="AUTH" />

                        <div class="form-group">
                            <label class="control-label col-xs-2" for="inputEmail"><?=GetMessage("AUTH_LOGIN")?></label>
                            <div class="col-xs-10">
                                <input type="text" id="inputEmail" class="form-control" name="USER_LOGIN" maxlength="50" value='<?=$arResult["USER_LOGIN"]?>' placeholder="Email" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-2" for="inputPassword"><?=GetMessage("AUTH_PASSWORD")?></label>
                            <div class="col-xs-10">
                                <input type="password" id="inputPassword" class="form-control" name="USER_PASSWORD" maxlength="50"  autocomplete="off" placeholder="PassWord"/>
                            </div>
                            <?if($arResult["SECURE_AUTH"]):?>
		                        <span class="bx-auth-secure" id="bx_auth_secure<?=$arResult["RND"]?>" title="<?echo GetMessage("AUTH_SECURE_NOTE")?>" style="display:none"/>
			                        <div class="bx-auth-secure-icon"></div>
		                        </span>
		                        <noscript>
		                        <span class="bx-auth-secure" title="<?echo GetMessage("AUTH_NONSECURE_NOTE")?>">
			                        <div class="bx-auth-secure-icon bx-auth-secure-unlock"></div>
		                        </span>
		                        </noscript>
                            <script type="text/javascript">
                            document.getElementById('bx_auth_secure<?=$arResult["RND"]?>').style.display = 'inline-block';
                            </script>
                            <?endif?>
                        </div>

                       <div class="col-xs-offset-2 col-xs-10">
                            <div class="checkbox">
                                <input type="checkbox" id="USER_REMEMBER_frm" name="USER_REMEMBER" value="Y"><?echo GetMessage("AUTH_REMEMBER_SHORT")?>
                            </div>
                        </div>

                        <?if ($arResult["CAPTCHA_CODE"]):?>
		                    <tr>
			                    <td colspan="2">
			                    <?echo GetMessage("AUTH_CAPTCHA_PROMT")?>:<br />
			                    <input type="hidden" name="captcha_sid" value="<?echo $arResult["CAPTCHA_CODE"]?>" />
			                    <img src="/bitrix/tools/captcha.php?captcha_sid=<?echo $arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" /><br /><br />
			                    <input type="text" name="captcha_word" maxlength="50" value="" /></td>
		                    </tr>
                        <?endif?>

                        <button type="submit" style="float:right;" class="btn btn-primary"><?=GetMessage("AUTH_LOGIN_BUTTON")?></button>
                        </br>
                        <a href="<?=$arResult["AUTH_REGISTER_URL"]?>" rel="nofollow"><?=GetMessage("AUTH_REGISTER")?></a>
                        </br>
                        <a href="<?=$arResult["AUTH_FORGOT_PASSWORD_URL"]?>" rel="nofollow"><?=GetMessage("AUTH_FORGOT_PASSWORD_2")?></a>
                    </form>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
<?
else:
?>

<form action="<?=$arResult["AUTH_URL"]?>">
                 


				<p class="navbar-text navbar-right">
                    <a class="navbar-link" href="<?=$arResult["PROFILE_URL"]?>" title="<?=GetMessage("AUTH_PROFILE")?>"><?=$arResult["USER_NAME"]?></a>


			        <?foreach ($arResult["GET"] as $key => $value):?>
				        <input type="hidden" name="<?=$key?>" value="<?=$value?>" />
			        <?endforeach?>
			        <input type="hidden" name="logout" value="yes" />
			        <input type="submit" class="btn btn-primary" name="logout_butt" value="<?=GetMessage("AUTH_LOGOUT_BUTTON")?>" />
                </p>
</form>
<?endif?>