<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Каталог");
?><div class="container">
	<div class="pageContent">
 <section class="bestPrices bgGray bgCircle">
		<div class="bgText">
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
 </section> <section class="catalogShortWithStock">
		<div class="contentWrapper">
			<div class="content2col">
				<div class="contentTitle2 less">
					 Каталог <span class="mobShowText">товаров <br>
					 от </span>Dell
				</div>
				<div class="textGray mobHide">
					 Наша компания является зарегистрированным и официальным партнером Dell в России.
				</div>
				<div class="catalogShort col2">
					 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"catalog_menu",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "catalog_menu",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"NAME",1=>"PREVIEW_TEXT",2=>"DETAIL_TEXT",3=>"DETAIL_PICTURE",4=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "catalog",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"NUMBER",1=>"LINK",2=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
				</div>
			</div>
		</div>
 </section> <section class="deliveryInfo">
		<div class="bgText smallText">
			 delivery
		</div>
		<div class="contentWrapper iFlex">
			<div>
				<div class="contentTitle2">
					 Доставка в любую точку
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