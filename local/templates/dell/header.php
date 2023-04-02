<?php
if (!defined ('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
    die();
}

use Bitrix\Main\Page\Asset;

?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <?php
    $APPLICATION->ShowHead();
    ?>
    <title><?php $APPLICATION->ShowTitle(); ?></title>
    <?php

    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/css/style.css");
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/css/icons.css");
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/css/animate-slider.css");
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/css/animate.min.css");
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/js/jq-ui-1.13.0/jquery-ui.css");
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/js/plugins/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css");
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/js/plugins/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css");
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/js/plugins/swiper/swiper.min.css");
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/js/plugins/tingle-master/src/tingle.css");

    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/jq/jquery.js");
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/jq-ui-1.13.0/jquery-ui.min.js");
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/plugins/OwlCarousel2-2.3.4/dist/owl.carousel.min.js");
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/plugins/swiper/swiper.min.js");
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/plugins/tingle-master/src/tingle.js");
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/index.js");

    Asset::getInstance()->addString('   
    <meta name="viewport" content="width=device-width, initial-scale=1">
');

    Asset::getInstance()->addString('   
    <meta name="description" content="">
');
    Asset::getInstance()->addString('   
    <meta property="og:title" content="">
');
    Asset::getInstance()->addString('   
    <meta property="og:type" content="">
');
    Asset::getInstance()->addString('   
    <meta property="og:url" content="">
');
    Asset::getInstance()->addString('   
    <meta property="og:type" content="">
');

    $script = <<<JS
    <script type="text/javascript">
        $(document).ready(function() {
            var authModal = new tingle.modal({
                footer: false,
                stickyFooter: false,
                closeMethods: ['overlay', 'escape'],
                closeLabel: "Close",
                cssClass: ['custom1', 'w110'],
            });
            var regModal = new tingle.modal({
                footer: false,
                stickyFooter: false,
                closeMethods: ['overlay', 'escape'],
                closeLabel: "Close",
                cssClass: ['custom1', 'w110'],
            });

            authModal.setContent($("#authModal").html());
            $("#authModal").remove();
            regModal.setContent($("#regModal").html());
            $("#regModal").remove();


            $(".js-openAuthModal").click(function (e) {
                e.preventDefault();
                authModal.open();
                regModal.close();
            });
            $(".reg-link").click(function (e) {
                e.preventDefault();
                regModal.open();
                authModal.close();
            });

            $(".authModalWrap .closeModal").click(function () {  authModal.close(); regModal.close(); });

            $(".authTabs span").click(function() {
                var el = $(this).parent();
                if (!el.hasClass('active')) {
                    el.addClass('active');
                    el.siblings().removeClass('active');
                    if (el.parent().hasClass('toggleForm')) {
                        $(".js-toggleForm .row").toggleClass('iHide');
                    }
                }
            });

            $(".togglePassView").click(function() {
                var el = $(this);
                el.toggleClass('active');
                el.hasClass('active') ? el.prev().attr('type', 'text') : el.prev().attr('type', 'password');
            });

            $(".js-submitForm").click(function(e) {
                e.preventDefault();
                var formId = $(this).attr('form_id');
                if (formId) $("#" + formId).submit();
            });

            $(".js-autorize span").click(function() {
                $(".forgotPassWrap").toggleClass('iHide').prev().toggleClass('iHide');
            });

            $(".js-forgotPass").click(function() {
                $(".authFormWrap").toggleClass('iHide').next().toggleClass('iHide');
            });
        });
    </script>
JS;

    Asset::getInstance()->addString($script);
    ?>

</head>
<body>
<?php $APPLICATION->ShowPanel(); ?>
<?php $APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"header_menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "main",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "header_menu",
		"MENU_THEME" => "site"
	),
	false
);?>
