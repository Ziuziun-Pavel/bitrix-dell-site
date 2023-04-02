<?

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Корзина");

global $APPLICATION;
CModule::IncludeModule('sale');

// получение списка товаров в корзине
$basketItems = array();
$dbBasketItems = CSaleBasket::GetList(
    array(),
    array(
        "FUSER_ID" => CSaleBasket::GetBasketUserID(),
        "LID" => SITE_ID,
        "ORDER_ID" => "NULL"
    ),
    false,
    false,
    array()
);
while ($arItems = $dbBasketItems->Fetch()) {
    $basketItems[] = $arItems;
}

?>

<div class="container">
<div class="pageContent">
    <section class="favoritePage cartPage">
        <div class="contentWrapper">
            <div class="contentTitle2 withSelect">
                <span>Моя корзина</span>
            </div>
            <div class="sc2cols">
                <div class="csCol">
                    <div class="favoriteList">
                        <div class=itemWrap>
                            <?php foreach ($basketItems as $item): ?>
                                    <div class="item" price="33000">
                                        <div class="imgWrap">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/pc1.png" alt="">
                                        </div>
                                        <div class="about">
                                            <div class="itemName"><a href="">Ноутбук Dell Latitude</a></div>
                                            <p class="light mobHide">Гарантия производителя — 1 год</p>
                                            <p>1920x1080 (Full HD), 14 ", SSD, 256 ГБ, Intel UHD Graphics 620, Linux</p>
                                            <ul class="fiActions">
                                                <li>
                                                    <a href="">
                                                    <span class="icon">
                                                    <svg class="iconFav" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17.5 0.916992C16.3739 0.934507 15.2724 1.24885 14.3067 1.82826C13.341 2.40768 12.5453 3.23166 12 4.21699C11.4546 3.23166 10.6589 2.40768 9.6932 1.82826C8.7275 1.24885 7.62601 0.934507 6.49996 0.916992C4.7049 0.994983 3.01366 1.78025 1.79574 3.10122C0.577818 4.4222 -0.0677922 6.17152 -4.17093e-05 7.96699C-4.17093e-05 12.514 4.78596 17.48 8.79996 20.847C9.69618 21.6001 10.8293 22.013 12 22.013C13.1706 22.013 14.3037 21.6001 15.2 20.847C19.214 17.48 24 12.514 24 7.96699C24.0677 6.17152 23.4221 4.4222 22.2042 3.10122C20.9863 1.78025 19.295 0.994983 17.5 0.916992ZM13.915 19.317C13.3789 19.7684 12.7007 20.0159 12 20.0159C11.2992 20.0159 10.621 19.7684 10.085 19.317C4.94696 15.006 1.99996 10.87 1.99996 7.96699C1.9316 6.70171 2.36632 5.46072 3.20932 4.51469C4.05232 3.56866 5.23519 2.99434 6.49996 2.91699C7.76472 2.99434 8.9476 3.56866 9.7906 4.51469C10.6336 5.46072 11.0683 6.70171 11 7.96699C11 8.23221 11.1053 8.48656 11.2929 8.6741C11.4804 8.86164 11.7347 8.96699 12 8.96699C12.2652 8.96699 12.5195 8.86164 12.7071 8.6741C12.8946 8.48656 13 8.23221 13 7.96699C12.9316 6.70171 13.3663 5.46072 14.2093 4.51469C15.0523 3.56866 16.2352 2.99434 17.5 2.91699C18.7647 2.99434 19.9476 3.56866 20.7906 4.51469C21.6336 5.46072 22.0683 6.70171 22 7.96699C22 10.87 19.053 15.006 13.915 19.313V19.317Z" fill="none" stroke="none" stroke-width="0.6"></path>
                                                    </svg>
                                                    </span>
                                                        <span>В избранное</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="js-deleteFromFavorite">
                                                    <span class="icon">
                                                        <svg class="iconTrash" width="19" height="24" viewBox="0 0 19 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M0 2.41935H7.30769M19 2.41935H10.9615M7.30769 2.41935H9.5H10.9615M7.30769 2.41935V1H10.9615M10.9615 1H12.4231M10.9615 1V2.41935M3.65385 23H15.3462L17.5385 5.25806H9.5H1.46154L3.65385 23Z" stroke="none" stroke-width="1.5"/>
                                                        </svg>
                                                    </span>
                                                        <span>Удалить</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="right">
                                            <div class="price"><span><?= $item["PRICE"]?></span> ₽</div>
                                            <input type="number" class="spinner" value="<?= $item["QUANTITY"]?>">
                                        </div>
                                    </div>
                            <?php endforeach; ?>
                        </div>
                        <?php if (count($basketItems) === 0): ?>
                        <div class="empty">Ваша корзина пуста!</div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="csColHalf">
                    <div class="cartStat">
                        <div class="countMess"><span>В корзине <span class="count"><?=count($basketItems)?> товара</span></span></div>
                        <div class="price"><span>
                                <?php foreach ($basketItems as $item): ?>
                                    <?php
                                    $sum += $item["PRICE"];
                                    ?>
                                <?php endforeach; ?>
                                <?= $sum ?> 000
                            </span> ₽</div>
                        <div class="row mobHide">
                            <a href="">Посмотреть примененные скидки <span class="acArrow">→</span></a>
                        </div>
                        <button id="submit-order" class="buttonBlue">Перейти к оформлению</button>
                        <div class="textCenter mobShow">
                            <a href="">Вернуться к покупкам</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>

<script>

    $('#submit-order').on('click', function() {

        var data = <?=$basketItems?>;
        $.ajax({
            type: 'POST',
            url: '/cart/order.php', // адрес обработчика на сервере
            data: data, // передаем данные заказа
            success: function(response) {
                alert('Заказ отправлен на обработку ');
            },
            error: function(error) {
                alert('Ошибка отправки заказа');
                console.error(error);
            }
        });

    });
</script>
    <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
