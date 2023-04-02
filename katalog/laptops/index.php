<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Ноутбуки");

$sort = array('SORT', 'ASC');
if (!empty($_GET['SORT'])){
    $sort = explode(':', $_GET['SORT']);
}

global $arFilter;
$arFilter = array(
    "CATEGORY_SHOPS"=>array(16)
);
?>

<div class="container">
	<div class="pageContent">
 <section class="bestPrices bgGray bgCategory">
		<div class="bgText mobShow">
			 dell
		</div>
		<div class="contentWrapper rowSlider">
			<div class="owl-carousel introCatalogSlider">
				<div class="item">
					<div class="info">
 <a href="" class="verticalButton mobHide">
						Scroll to catalog <img src="/local/templates/dell/img/icons/scroll.svg" alt=""> </a>
						<div class="title">
							 Лучший выбор<br class="mobShow">
							 для себя - это Dell
						</div>
						<div class="textGray">
							 Акции на лучшие товары, успейте<br class="mobShow">
							 преобрести прямо сейчас!
						</div>
					</div>
					<div class="imgWrapper">
 <img src="/local/templates/dell/img/sliderItem2.png" class="mobHide" alt=""> <img src="/local/templates/dell/img/sliderItem2mob.png" class="mobShow" alt="">
					</div>
				</div>
				<div class="item">
					<div class="info">
 <a href="" class="verticalButton mobHide">
						Scroll to catalog <img src="/local/templates/dell/img/icons/scroll.svg" alt=""> </a>
						<div class="title">
							 Лучший выбор<br class="mobShow">
							 для себя - это Dell
						</div>
						<div class="textGray">
							 Акции на лучшие товары, успейте<br class="mobShow">
							 преобрести прямо сейчас!
						</div>
					</div>
					<div class="imgWrapper">
 <img src="/local/templates/dell/img/cs1.png" alt="">
					</div>
				</div>
				<div class="item">
					<div class="info">
 <a href="" class="verticalButton mobHide">
						Scroll to catalog <img src="/local/templates/dell/img/icons/scroll.svg" alt=""> </a>
						<div class="title">
							 Лучший выбор<br class="mobShow">
							 для себя - это Dell
						</div>
						<div class="textGray">
							 Акции на лучшие товары, успейте<br class="mobShow">
							 преобрести прямо сейчас!
						</div>
					</div>
					<div class="imgWrapper">
 <img src="/local/templates/dell/img/cs5.png" alt="">
					</div>
				</div>
				<div class="item">
					<div class="info">
 <a href="" class="verticalButton mobHide">
						Scroll to catalog <img src="/local/templates/dell/img/icons/scroll.svg" alt=""> </a>
						<div class="title">
							 Лучший выбор<br class="mobShow">
							 для себя - это Dell
						</div>
						<div class="textGray">
							 Акции на лучшие товары, успейте<br class="mobShow">
							 преобрести прямо сейчас!
						</div>
					</div>
					<div class="imgWrapper">
 <img src="/local/templates/dell/img/cs2.png" alt="">
					</div>
				</div>
				<div class="item">
					<div class="info">
 <a href="" class="verticalButton mobHide">
						Scroll to catalog <img src="/local/templates/dell/img/icons/scroll.svg" alt=""> </a>
						<div class="title">
							 Лучший выбор<br class="mobShow">
							 для себя - это Dell
						</div>
						<div class="textGray">
							 Акции на лучшие товары, успейте<br class="mobShow">
							 преобрести прямо сейчас!
						</div>
					</div>
					<div class="imgWrapper">
 <img src="/local/templates/dell/img/cs3.png" alt="">
					</div>
				</div>
			</div>
			<div class="more">
				<div class="custom-owl-prev1">
				</div>
				<div class="custom-owl-next1">
				</div>
			</div>
		</div>
 </section> <section class="categorySection">
		<div class="contentWrapper">
			<div class="categoryHeader">
				<div class="contentTitle2">
					 Ноутбуки
				</div>
				 <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"breadcrumps",
	Array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0"
	)
);?><br>
                <div class="mobShow actions">
                    <div class="cSelect">
                        <span>По цене (возрастание)</span>
                        <span class="acArrow">&rarr;</span>
                    </div>
                    <div class="callFilterMob">
                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.6248 0.375H0.958171C0.748208 0.375 0.546844 0.458407 0.398378 0.606874C0.249912 0.75534 0.166504 0.956704 0.166504 1.16667V3.21708C0.166504 3.63113 0.335129 4.03804 0.628046 4.33096L4.9165 8.61942V14.625C4.91666 14.7599 4.95124 14.8925 5.01697 15.0103C5.08269 15.128 5.1774 15.2271 5.2921 15.298C5.40681 15.369 5.53773 15.4095 5.67247 15.4157C5.80721 15.4219 5.9413 15.3936 6.06205 15.3335L9.22871 13.7502C9.49709 13.6156 9.6665 13.3417 9.6665 13.0417V8.61942L13.955 4.33096C14.2479 4.03804 14.4165 3.63113 14.4165 3.21708V1.16667C14.4165 0.956704 14.3331 0.75534 14.1846 0.606874C14.0362 0.458407 13.8348 0.375 13.6248 0.375ZM8.31513 7.73196C8.24147 7.80535 8.18306 7.89259 8.14325 7.98864C8.10344 8.0847 8.08302 8.18769 8.08317 8.29167V12.5524L6.49984 13.3441V8.29167C6.49999 8.18769 6.47957 8.0847 6.43976 7.98864C6.39995 7.89259 6.34154 7.80535 6.26788 7.73196L1.74984 3.21708V1.95833H12.834L12.8355 3.21154L8.31513 7.73196Z" fill="none"/>
                        </svg>
                        <span>Фильтр</span>
                    </div>
                </div>
			</div>
			<div class="categoryBox">
				<div class="categoryFilterWrap mobFilter">
					<div class="categoryFHeader">
 <img src="/local/templates/dell/img/icons/filter.svg" class="iconFilter" alt="">
						Фильтр <img src="/local/templates/dell/img/icons/crossMobile.svg" class="iconFCross mobShow" alt=""><br>
					</div>
                    <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.smart.filter",
	"main_filter",
	array(
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CONVERT_CURRENCY" => "N",
		"DISPLAY_ELEMENT_COUNT" => "Y",
		"FILTER_NAME" => "arrFilter",
		"FILTER_VIEW_MODE" => "vertical",
		"HIDE_NOT_AVAILABLE" => "N",
		"IBLOCK_ID" => "10",
		"IBLOCK_TYPE" => "catalog",
		"PAGER_PARAMS_NAME" => "arrPager",
		"POPUP_POSITION" => "left",
		"PREFILTER_NAME" => "smartPreFilter",
		"SAVE_IN_SESSION" => "N",
		"SECTION_CODE" => "",
		"SECTION_DESCRIPTION" => "-",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_TITLE" => "-",
		"SEF_MODE" => "N",
		"TEMPLATE_THEME" => "blue",
		"XML_EXPORT" => "N",
		"COMPONENT_TEMPLATE" => "main_filter"
	),
	false
);?>
<!--					<div class="categoryFilter">-->
<!--                        <div class="item isOpen">-->
<!--                            <div class="title">-->
<!--                                <span>Цена</span>-->
<!--                                <span class="acArrow">&rarr;</span>-->
<!--                            </div>-->
<!--                            <ul class="itemList">-->
<!--                                <li>-->
<!--                                    <div class="rangeSlider">-->
<!--                                        <div class="inpSliderUI">-->
<!--                                            <input class="sc-input1" type="text" disabled>-->
<!--                                            <input class="sc-input2" type="text" disabled>-->
<!--                                        </div>-->
<!--                                        <div class="slider-range"></div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <div class="title">-->
<!--                                <span>Диагональ экрана</span>-->
<!--                                <span class="acArrow">&rarr;</span>-->
<!--                            </div>-->
<!--                            <ul class="itemList">-->
<!--                                <li><label><input type="checkbox" name="">Все производители</label></li>-->
<!--                                <li><label><input type="checkbox" name="">13” <span class="count">(580)</span></label></li>-->
<!--                                <li><label><input type="checkbox" name="">14” <span class="count">(1296)</span></label></li>-->
<!--                                <li><label><input type="checkbox" name="">15”-15.6” <span class="count">(2340)</span></label></li>-->
<!--                                <li><label><input type="checkbox" name="">16”-17” <span class="count">(656)</span></label></li>-->
<!--                                <li><label><input type="checkbox" name="">18”-20” <span class="count">(1)</span></label></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--					</div>-->
				</div>
                <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"laptops_collection", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "detail.php?ID=#ID#",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "",
		),
		"FILTER_NAME" => "arrFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "10",
		"IBLOCK_TYPE" => "catalog",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "4",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "PRICE",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => $sort[0],
		"SORT_ORDER1" => $sort[1],
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "laptops_collection"
	),
	false
);?>

            </div>
		</div>
 </section> <section class="deliveryInfo categoryBG">
		<div class="bgText smallText">
			 delivery
		</div>
		<div class="contentWrapper iFlex">
			<div>
				<div class="contentTitle2">
					 Доставка в любую точку<br>
				</div>
				<p>
					 Мы своевременно осуществляем доставку клиентам оборудования и комплектующих DELL. Условия и стоимость доставки товаров зависят от удаленности пункта назначения, срочности и транспортной компании.
				</p>
				<div>
 <a href="#"> <span class="iconBlueButton">→</span>
					Заказать </a>
				</div>
			</div>
			<div class="imgWrapper">
 <img src="/local/templates/dell/img/delivery.png" alt="">
			</div>
		</div>
 </section>
	</div>
	 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
</div>
 <br>