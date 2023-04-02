<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?php foreach ($arResult["ITEMS"] as $arItem): ?>
    <div class="item imgTopOverflow">
        <div class="itemNum">
            <?= $arItem["PROPERTIES"]["NUMBER"]["VALUE"] ?>
        </div>
        <div class="imgWrapper">
            <img src="<?= $arItem["DETAIL_PICTURE"]["SRC"] ?>" alt="">
        </div>
        <div class="textGray">
            <?= $arItem["DETAIL_TEXT"] ?>
        </div>
        <div class="category">
            <a href="/katalog<?= $arItem["PROPERTIES"]["LINK"]["VALUE"] ?>/"><?= $arItem["NAME"] ?></a>
        </div>
    </div>
<?php endforeach; ?>

