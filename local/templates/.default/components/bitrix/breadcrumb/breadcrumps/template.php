<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';

//we can't use $APPLICATION->SetAdditionalCSS() here because we are inside the buffered function GetNavChain()
$css = $APPLICATION->GetCSSArray();


		$strReturn .= '
            <div class="breadScrum">
                    <a href="/">Главная</a>
                    <svg class="iconBCArrow" viewBox="0 0 106 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M94 1L104.5 11.5M104.5 11.5L94 22M104.5 11.5H0" stroke="none" stroke-width="1.5"/>
                    </svg>
                    <a href="/katalog">Каталог</a>
                    <svg class="iconBCArrow" viewBox="0 0 106 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M94 1L104.5 11.5M104.5 11.5L94 22M104.5 11.5H0" stroke="none" stroke-width="1.5"/>
                    </svg>
                    <a href="/katalog/laptops">Ноутбуки</a>
                </div>
	';

return $strReturn;
