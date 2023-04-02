<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Кабинет пользователя");
?>
<div class="container"
    <div class="pageContent">
        <div class="contentWrapper">
            <section class="personalArea">
                <div class="contentTitle2">Личный кабинет</div>
                <div class="pa2cols">
                    <div class="col">
                        <div class="paItem">
                            <div class="title">
                                <div class="icon"><img src="<?=SITE_TEMPLATE_PATH?>/img/icons/bag.svg" alt=""></div>
                                <div class="itemName">Заказы</div>
                                <div class="buttonBlue right">История заказов</div>
                            </div>
                            <div class="itemField">
                                <ul class="orderStatusList">
                                    <li>
                                        <div class="orderIcon"><img src="<?=SITE_TEMPLATE_PATH?>/img/icons/complete.svg" alt=""></div>
                                        <div class="orderAbout">
                                            <div><a href="">№ 189265521</a> от 12.10.2021</div>
                                            <div class="status">Заказ выполнен</div>
                                        </div>
                                        <div class="orderPrice right">43 000 ₽</div>
                                    </li>
                                    <li>
                                        <div class="orderIcon"><img src="<?=SITE_TEMPLATE_PATH?>/img/icons/complete.svg" alt=""></div>
                                        <div class="orderAbout">
                                            <div><a href="">№ 189265521</a> от 12.10.2021</div>
                                            <div class="status">Заказ выполнен</div>
                                        </div>
                                        <div class="orderPrice right">24 000 ₽</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
        </div>
    </div>
