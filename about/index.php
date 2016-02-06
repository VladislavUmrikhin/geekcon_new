<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("GeekCon - Попробуй поменять реальность.");
?>
<div class="jumbotron">
    <div class="container">
        <pre>
            <?=print_r($MESS)?>
        </pre>
        <div class="panel-group">
            <div class="panel panel-success">
                <div class="panel-heading">
                    
                </div>
                <div class="panel-bory">
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>