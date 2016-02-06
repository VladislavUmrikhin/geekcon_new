<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("GeekCon - Попробуй поменять реальность.");
?>
<?$APPLICATION->IncludeComponent("bitrix:socialnetwork.user_profile","geekcon",Array(
        "SET_NAVCHAIN" => "Y", 
        "SHORT_FORM" => "N", 
        "PATH_TO_USER" => "index.php?page=user&user_id=#user_id#", 
        "PATH_TO_USER_FRIENDS_ADD" => "user_friends_add.php?page=user_friends_add&user_id=#user_id#", 
        "PATH_TO_MESSAGE_FORM" => "message_form.php?page=message_form&user_id=#user_id#", 
        "PATH_TO_MESSAGES_CHAT" => "messages_chat.php?page=messages_chat&user_id=#user_id#", 
        "PATH_TO_MESSAGES_USERS_MESSAGES" => "messages_users_messages.php?page=messages_users_messages&user_id=#user_id#", 
        "PATH_TO_USER_FRIENDS_DELETE" => "user_friends_delete.php?page=user_friends_delete&user_id=#user_id#", 
        "PATH_TO_USER_FRIENDS" => "user_friends.php?page=user_friends&user_id=#user_id#", 
        "PATH_TO_SEARCH" => "/company/index.php", 
        "PATH_TO_GROUP_SEARCH" => "/community/workgroups/index.php", 
        "PATH_TO_LOG" => "user_log.php?page=log&user_id=#user_id#", 
        "PATH_TO_SEARCH_INNER" => "user_search.php", 
        "PATH_TO_GROUP" => "/community/workgroups/group_view.php?page=group&group_id=#group_id#", 
        "PATH_TO_GROUP_EDIT" => "/community/workgroups/group_edit.php?page=group_edit&group_id=#group_id#", 
        "PATH_TO_GROUP_CREATE" => "group_add.php?page=create&user_id=#user_id#", 
        "PATH_TO_USER_GROUPS" => "user_groups.php?page=user_groups&user_id=#user_id#", 
        "PATH_TO_USER_EDIT" => "user_edit.php?page=user_edit&user_id=#user_id#", 
        "PATH_TO_USER_FEATURES" => "user_features.php?page=user_features&user=#user_id#", 
        "PATH_TO_USER_SUBSCRIBE" => "user_subscribe.php?page=subscribe&user_id=#user_id#", 
        "PATH_TO_USER_SETTINGS_EDIT" => "user_settings.php?page=user_settings&user_id=#user_id#", 
        "PAGE_VAR" => "page", 
        "USER_VAR" => "user_id", 
        "ID" => $user_id, 
        "SET_TITLE" => "Y", 
        "USER_FIELDS_MAIN" => Array("LAST_LOGIN", "PERSONAL_PROFESSION", "WORK_POSITION"), 
        "USER_PROPERTY_MAIN" => Array("UF_DEPARTMENT"), 
        "USER_FIELDS_CONTACT" => Array("EMAIL", "PERSONAL_WWW", "PERSONAL_ICQ", "PERSONAL_PHONE", "PERSONAL_FAX", "PERSONAL_MOBILE", "PERSONAL_PAGER"), 
        "USER_PROPERTY_CONTACT" => Array(), 
        "USER_FIELDS_PERSONAL" => Array("PERSONAL_BIRTHDAY", "PERSONAL_GENDER"), 
        "USER_PROPERTY_PERSONAL" => Array(), 
        "DATE_TIME_FORMAT" => "d.m.Y H:i:s", 
        "ITEMS_COUNT" => "6", 
        "SHOW_YEAR" => "Y", 
        "SONET_USER_FIELDS_SEARCHABLE" => Array("NAME", "LAST_NAME", "PERSONAL_PROFESSION"), 
        "SONET_USER_PROPERTY_SEARCHABLE" => Array("UF_DEPARTMENT")  
    )
);?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>