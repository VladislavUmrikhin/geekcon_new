<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?$APPLICATION->ShowTitle()?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/css/bootstrap.css" />
    <script type="text/javascript" src="/bitrix/js/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="/bitrix/js/bootstrap.js"></script>
    


    <?$APPLICATION->ShowHead();?>

</head>
<body>
    <div id="page-wrapper">

        <div id="panel"><?$APPLICATION->ShowPanel();?></div>

        <div id="header">
            <nav role="navigation" class="navbar navbar-default navbar-static-top">
                <ul id="footer-links" class="nav nav-tabs ">
                <?$APPLICATION->IncludeComponent(
	                "bitrix:menu", 
	                "geekcon", 
	                array(
		                "ROOT_MENU_TYPE" => "top",
		                "MAX_LEVEL" => "1",
		                "CHILD_MENU_TYPE" => "top",
		                "USE_EXT" => "Y",
		                "DELAY" => "N",
		                "ALLOW_MULTI_SELECT" => "Y",
		                "MENU_CACHE_TYPE" => "N",
		                "MENU_CACHE_TIME" => "3600",
		                "MENU_CACHE_USE_GROUPS" => "Y",
		                "MENU_CACHE_GET_VARS" => array(
		                ),
		                "COMPONENT_TEMPLATE" => "geekcon"
	                ),
	                false
                );?>
                <?$APPLICATION->IncludeComponent("bitrix:system.auth.form","geekcon",Array(
                     "REGISTER_URL" => "/profile/register.php",
                     "FORGOT_PASSWORD_URL" => "/profile/forgot.php",
                     "PROFILE_URL" => "/profile/index.php",
                     "SHOW_ERRORS" => "Y" 
                     )
                );?>
                </ul>
            </nav>
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include", 
                "", 
                array(
                    "AREA_FILE_SHOW" => "file", 
                    "PATH" => SITE_DIR."include/logo.php"
                    ), 
                false);
            ?>
            </div>
        <div id="content-wrapper">
            <div id="content">
                <div id="workarea-wrapper">
                    <div id="workarea">
                        <div id="workarea-inner">
