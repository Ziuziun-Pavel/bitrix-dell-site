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
<section class="bestPrices bgGray main">
    <div class="bpContentWrapper">
        <div class="bgText">dell</div>
        <div class="left">
            <div class="owl-carousel introSlider">
                <?php foreach ($arResult['ITEMS'] as $arItem): ?>
                    <div class="item">
                        <div class="info">
                            <a href="" class="verticalButton mobHide">
                                <span>Scroll to catalog</span>
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/scroll.svg" alt="">
                            </a>
                            <div class="textGray"><?= $arItem['NAME']?></div>
                            <div class="title"><?= $arItem['PREVIEW_TEXT']?></div>
                            <div>
                                <a href="<?= $arItem['PROPERTIES']['link']['VALUE']?>">
                                    <span class="iconBlueButton">&rarr;</span>
                                    <span><?= $arItem['DETAIL_TEXT']?></span>
                                </a>
                            </div>
                        </div>
                        <div class="imgWrapper"><img src="<?= $arItem['PREVIEW_PICTURE']['SRC']?>" alt=""></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="right">
            <div class="title">Выгодное предложение<br> от Dell</div>
            <div class="mobShow"><img src="<?=SITE_TEMPLATE_PATH?>/img/transparentImg.png" alt=""></div>
            <div class="more">
                <a href="" >
                    <svg class="iconLongArrow" width="106" height="23" viewBox="0 0 106 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M94 1L104.5 11.5M104.5 11.5L94 22M104.5 11.5H0" stroke="none" stroke-width="1.5"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
