<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if ($arResult["NEED_AUTH"] == "Y")
{
	LocalRedirect("/");
}
elseif (strlen($arResult["FatalError"]) > 0)
{
	?><div class="alert alert-danger"><?=$arResult["FatalError"]?></div><?
}
else
{
	if(strlen($arResult["ErrorMessage"])>0)
	{
		?><div class="alert alert-danger"><?=$arResult["ErrorMessage"]?></div><?
	}?>

    <div class="jumbotron">
        <div class="container">
            <div class="col-md-4">
               <?=$arResult["User"]["PersonalPhotoImg"]?>
               <p><a href="/profile/edit.php"><?=GetMessage("SONET_C39_EDIT_PROFILE")?></a></p>
            </div>
            <div class="col-md-8">
                <div class="panel panel-success">
                  <div class="panel-heading">
                    <?=GetMessage("SONET_C39_PERSONAL_TITLE");?>
                  </div>
                  <div class="panel-body">

                        <span><?=GetMessage("USER_NAME")?>:</span>
                        <span><?=$arResult["User"]["NAME"]?> <?=$arResult["User"]["LAST_NAME"]?></span>
                        </br>
                        <span><?=GetMessage("SONET_C38_T_BIRTHDAY")?>:</span>
                        <span><?=$arResult["User"]["PERSONAL_BIRTHDAY"]?></span>
                        </br>
                        <span><?=GetMessage("NIK_NAME")?>:</span>
                        <?=$arResult["User"]["TITLE"]?>
                        </br>
                  </div>
                </div>
                <div class="panel panel-success">
                  <div class="panel-heading">
                    <?=GetMessage("SONET_C39_CONTACT_TITLE");?>
                  </div>
                  <div class="panel-body">

                        <span><?=GetMessage("EMAIL")?>:</span>
                        <span><?=$arResult["User"]["EMAIL"]?> </span>
                        </br>
                        <span><?=GetMessage("PHONE")?>:</span>
                        <span><?=$arResult["User"]["PHONE"]?></span>
                        </br>
                        <span><?=GetMessage("SITY")?>:</span>
                        <?=$arResult["User"]["PERSONAL_CITY"]?>
                        </br>
                  </div>
                </div>
            </div>
        </div>
    </div>

<?
}
?>