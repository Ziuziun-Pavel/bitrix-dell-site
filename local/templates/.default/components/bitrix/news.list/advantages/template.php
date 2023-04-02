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

<section class="ourAdvantages bgGray">
    <div class="bgText smallText">
        best<br>
        quality
    </div>
    <div class="contentWrapper">
        <div class="ourAdvantagesIntro">
            <div class="left">
                <div class="imgWrapper">
                    <img src="/local/templates/dell/img/preview1.png" alt="">
                </div>
            </div>
            <div class="right">
                <h2>Наши преимущества</h2>
                <div class="textGray">
                    Оптимизация мощностей (расходов, социальных выплат&nbsp;и&nbsp;т.п.) позволили компании на&nbsp;4,7% понизить цены по&nbsp;сравнению с&nbsp;конкурентами
                </div>
                <div>
                    <a href="#form_block"> <span class="iconBlueButton">→</span>
                        Оставить заявку </a>
                </div>
            </div>
        </div>
        <div class="ourAdvantagesList">
            <?php foreach ($arResult["ITEMS"] as $arItem): ?>
                <div class="item">
                    <div class="bgLine">
                        <img src="/local/templates/dell/img/bgLine.png" alt="">
                    </div>
                    <div class="icon">
                        <img src="/local/templates/dell/img/icons<?= $arItem["PROPERTIES"]["LINK"]["VALUE"] ?>" alt="">
                    </div>
                    <h3><?= $arItem["NAME"] ?></h3>
                    <div class="textGray">
                        <?= $arItem["PREVIEW_TEXT"] ?>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>
