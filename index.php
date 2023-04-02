<?php

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Главная страница");
?><div class="container">
	<div class="pageContent">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"mainpage_top_slider",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
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
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"NAME",1=>"PREVIEW_TEXT",2=>"PREVIEW_PICTURE",3=>"DETAIL_TEXT",4=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "10",
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
		"PROPERTY_CODE" => array(0=>"link",1=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
<section class="catalogShortSection">
    <div class="contentWrapper">
        <div class="catalogShort">
            <div class="item textItem">
                <h2>Каталог<br class="mobHide">
                    товаров<br class="mobShow">
                    от Dell</h2>
                <div class="textGray">
                    Наша компания является<br>
                    зарегистрированным и официальным<br>
                    партнером Dell в России.
                </div>
                <div>
                    <a href="#"> <span class="iconBlueButton">→</span>
                        В каталог </a>
                </div>
            </div>
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
                    "NEWS_COUNT" => "5",
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
</section>
       <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"advantages",
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
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"NAME",1=>"PREVIEW_TEXT",2=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
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
		"PROPERTY_CODE" => array(0=>"LINK",1=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?> <section id="form_block" class="requestFormSection">
		<div class="requestFormSectionBgLayout">
		</div>
		<div class="bgText smallText mobHide">
			 our<br>
			 contacts
		</div>
		<div class="contentWrapper">
			<div class="requestFormWitchContacts">
                <?$APPLICATION->IncludeComponent("bitrix:news.list", "contacts", Array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                    "ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
                    "AJAX_MODE" => "N",	// Включить режим AJAX
                    "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                    "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                    "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                    "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
                    "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                    "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                    "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                    "CACHE_TYPE" => "A",	// Тип кеширования
                    "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
                    "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                    "DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
                    "DISPLAY_DATE" => "Y",	// Выводить дату элемента
                    "DISPLAY_NAME" => "Y",	// Выводить название элемента
                    "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
                    "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
                    "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                    "FIELD_CODE" => array(	// Поля
                        0 => "PREVIEW_TEXT",
                        1 => "",
                    ),
                    "FILTER_NAME" => "",	// Фильтр
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
                    "IBLOCK_ID" => "9",	// Код информационного блока
                    "IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
                    "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
                    "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
                    "NEWS_COUNT" => "20",	// Количество новостей на странице
                    "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
                    "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
                    "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                    "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
                    "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
                    "PAGER_TITLE" => "Новости",	// Название категорий
                    "PARENT_SECTION" => "",	// ID раздела
                    "PARENT_SECTION_CODE" => "",	// Код раздела
                    "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
                    "PROPERTY_CODE" => array(	// Свойства
                        0 => "LINK",
                        1 => "",
                    ),
                    "SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
                    "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
                    "SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
                    "SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
                    "SET_STATUS_404" => "N",	// Устанавливать статус 404
                    "SET_TITLE" => "Y",	// Устанавливать заголовок страницы
                    "SHOW_404" => "N",	// Показ специальной страницы
                    "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
                    "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
                    "SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
                    "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
                    "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
                ),
                    false
                );?>
				<div class="requestForm">
					<h2>Оставьте заявку</h2>
					<p>
						 Оставьте свой номер, и мы перезвоним Вам.
					</p>
                    <?$APPLICATION->IncludeComponent("altasib:feedback.form", "feedback_form", Array(
                        "ACTIVE_ELEMENT" => "Y",	// Активировать элемент после добавления
                        "ADD_HREF_LINK" => "Y",	// Добавлять ссылку на страницу, с которой были отправлены данные формы
                        "ADD_LEAD" => "N",	// Добавлять лид на корпоративном портале Битрикс24
                        "ALX_LINK_POPUP" => "N",	// Открывать во всплывающем окне
                        "BBC_MAIL" => "",	// Дополнительные E-mail получателей почтовых уведомлений (через запятую)
                        "CAPTCHA_TYPE" => "default",	// Тип CAPTCHA
                        "CATEGORY_SELECT_NAME" => "Выберите категорию",	// Название списка разделов
                        "CHANGE_CAPTCHA" => "N",	// Изменять код CAPTCHA при обновлении изображения
                        "CHECKBOX_TYPE" => "CHECKBOX",	// Выберите тип чекбоксов
                        "CHECK_ERROR" => "Y",	// Выдавать сообщения об ошибках
                        "COLOR_SCHEME" => "BRIGHT",	// Цветовая схема
                        "COLOR_THEME" => "c4",	// Цвет темы
                        "EVENT_TYPE" => "ALX_FEEDBACK_FORM",	// Тип почтового события
                        "FB_TEXT_NAME" => "",	// Название поля «Текст сообщения» [FEEDBACK_TEXT]
                        "FB_TEXT_SOURCE" => "PREVIEW_TEXT",	// Где сохранять поле «Текст сообщения»
                        "FORM_ID" => "1",	// ID Формы
                        "IBLOCK_ID" => "8",	// Инфоблок
                        "IBLOCK_TYPE" => "altasib_feedback",	// Тип инфоблока
                        "INPUT_APPEARENCE" => array(	// Внешний вид полей
                            0 => "FLOATING_LABELS",
                        ),
                        "JQUERY_EN" => "jquery",	// Подключать jQuery Битрикс
                        "LINK_SEND_MORE_TEXT" => "Отправить ещё одно сообщение",	// Текст ссылки для отправки другого сообщения
                        "LOCAL_REDIRECT_ENABLE" => "N",	// Выполнять при успешном добавлении сообщения переход на другую страницу
                        "MASKED_INPUT_PHONE" => array(	// Поля, обрабатываемые маской ввода телефона
                            0 => "PHONE",
                        ),
                        "MESSAGE_OK" => "Ваше сообщение было успешно отправлено",	// Текст, выводимый при успешном добавлении сообщения
                        "NAME_ELEMENT" => "ALX_DATE",	// Сделать именем элемента
                        "NOT_CAPTCHA_AUTH" => "Y",	// Не показывать CAPTCHA авторизованным пользователям
                        "PROPERTY_FIELDS" => array(	// Поля для заполнения
                            0 => "NAME",
                            1 => "PHONE",
                            2 => "COMMENT",
                            3 => "FILE",
                        ),
                        "PROPERTY_FIELDS_REQUIRED" => array(	// Обязательные для заполнения
                            0 => "NAME",
                            1 => "PHONE",
                        ),
                        "PROPS_AUTOCOMPLETE_EMAIL" => "",	// Поля подстановки E-mail пользователя
                        "PROPS_AUTOCOMPLETE_NAME" => array(	// Поля подстановки ФИО пользователя
                            0 => "NAME",
                        ),
                        "PROPS_AUTOCOMPLETE_PERSONAL_PHONE" => array(	// Поля подстановки телефона пользователя
                            0 => "PHONE",
                        ),
                        "PROPS_AUTOCOMPLETE_VETO" => "N",	// Запретить изменение полей автоподстановки для зарегистрированных пользователей
                        "REQUIRED_SECTION" => "N",	// Обязательный выбор категории
                        "SECTION_FIELDS_ENABLE" => "N",	// Использовать различный набор полей для разделов
                        "SECTION_MAIL_ALL" => "zuzunpavel@gmail.com",	// Для всех категорий
                        "SEND_IMMEDIATE" => "Y",	// Отправлять почтовое сообщение немедленно, без записи в таблицу b_event
                        "SEND_MAIL" => "N",	// Отправлять подтверждение о принятии обращения отправителю, если указан e-mail
                        "SHOW_LINK_TO_SEND_MORE" => "Y",	// Показывать ссылку на отправку другого сообщения
                        "SHOW_MESSAGE_LINK" => "Y",	// Добавлять ссылку просмотра сообщения в письме администратору
                        "SPEC_CHAR" => "N",	// Блокировать отправку формы, если в данных (кроме поля email) имеются спецсимволы или фразы
                        "USERMAIL_FROM" => "N",	// Подставлять обратный адрес в письме администратору из поля E-mail, заполненного пользователем
                        "USER_CONSENT" => "N",	// Запрашивать согласие
                        "USER_CONSENT_ID" => "0",	// Соглашение
                        "USER_CONSENT_INPUT_LABEL" => "",	// Текст описания чекбокса (оставьте пустым для значения по-умолчанию)
                        "USER_CONSENT_IS_CHECKED" => "Y",	// Галка по умолчанию проставлена
                        "USER_CONSENT_IS_LOADED" => "N",	// Загружать текст сразу
                        "USE_CAPTCHA" => "Y",	// Использовать CAPTCHA
                        "WIDTH_FORM" => "100%",	// Ширина формы (% или px)
                    ),
                        false
                    );?>

				</div>
			</div>
		</div>
 </section>
        <?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

    </div>
</div>
 <br>