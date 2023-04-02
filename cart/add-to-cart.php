<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

// подключение модуля корзины
if (!CModule::IncludeModule("sale")) {
   die("Модуль корзины не установлен");
}

   // добавление товара в корзину
   $productId = $_POST["product_id"]; // здесь указываете идентификатор товара, который нужно добавить в корзину
   $price = $_POST["product_price"]; // здесь указываете цену товара
   $currency = "RUB"; // здесь указываете валюту товара
   $quantity = $_POST["product_qty"]; // здесь указываете количество товара

// получение объекта корзины текущего пользователя
   $fUserId = CSaleBasket::GetBasketUserID(true);
   $basket = \Bitrix\Sale\Basket::loadItemsForFUser($fUserId, SITE_ID);

// добавление товара в корзину
   $item = $basket->createItem('catalog', $productId);
   $item->setFields(array(
       'QUANTITY' => $quantity,
       'CURRENCY' => $currency,
       'PRICE' => $price,
   ));

// сохранение изменений в корзине
   $basket->save();

?>
