<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

CJSCore::Init();
?>


<div class="bx-system-auth-form">

<?
if ($arResult['SHOW_ERRORS'] == 'Y' && $arResult['ERROR'])
	ShowMessage($arResult['ERROR_MESSAGE']);
?>

<?if($arResult["FORM_TYPE"] == "login"):?>

    <div class="authModalWrap">
        <div class="closeModal">
            <img src="/local/templates/dell/img/icons/crossMobile.svg" alt="">
        </div>
        <div class="cols2">
            <div class="col authFormWrap">
                <div class="title">
                    Войдите в свой аккаунт
                </div>

                <form id="authForm" name="system_auth_form<?=$arResult["RND"]?>" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
                    <?if($arResult["BACKURL"] <> ''):?>
                        <input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
                    <?endif?>
                    <?foreach ($arResult["POST"] as $key => $value):?>
                        <input type="hidden" name="<?=$key?>" value="<?=$value?>" />
                    <?endforeach?>
                    <input type="hidden" name="AUTH_FORM" value="Y" />
                    <input type="hidden" name="TYPE" value="AUTH" />

                    <div class="labelOnTop">
                        <div class="row">
                            <label>Ваше имя</label>
                            <input type="text" name="USER_LOGIN" maxlength="50" placeholder="<?=GetMessage("AUTH_LOGIN")?>" value="" size="17" />
                            <script>
                                BX.ready(function() {
                                    var loginCookie = BX.getCookie("<?=CUtil::JSEscape($arResult["~LOGIN_COOKIE_NAME"])?>");
                                    if (loginCookie)
                                    {
                                        var form = document.forms["system_auth_form<?=$arResult["RND"]?>"];
                                        var loginInput = form.elements["USER_LOGIN"];
                                        loginInput.value = loginCookie;
                                    }
                                });
                            </script>
                        </div>
                        <div class="row">
                            <label>Пароль</label>
                            <input type="password" name="USER_PASSWORD" maxlength="255" placeholder="<?=GetMessage("AUTH_PASSWORD")?>" size="17" autocomplete="off" />
                            <?if($arResult["SECURE_AUTH"]):?>
                                <span class="bx-auth-secure" id="bx_auth_secure<?=$arResult["RND"]?>" title="<?echo GetMessage("AUTH_SECURE_NOTE")?>" style="display:none">
					<div class="bx-auth-secure-icon"></div>
				</span>
                                <noscript>
				<span class="bx-auth-secure" title="<?echo GetMessage("AUTH_NONSECURE_NOTE")?>">
					<div class="bx-auth-secure-icon bx-auth-secure-unlock"></div>
				</span>
                                </noscript>
                                <script type="text/javascript">
                                    document.getElementById('bx_auth_secure<?=$arResult["RND"]?>').style.display = 'inline-block';
                                </script>
                            <?endif?>
                            <span class="togglePassView"> <img src="/local/templates/dell/img/icons/eye.svg" class="passVisible" alt="">
                                <img src="/local/templates/dell/img/icons/eyeClosed.svg" class="passHidden" alt=""> </span>
                        </div>
                    </div>

                    <button type="submit" name="Login" class="js-submitForm sForm" form_id="authForm"> <span class="iconBlueButton">→</span>
                        Войти </button>

                    <div class="textCenter">
                        <a href="<?=$arResult["AUTH_REGISTER_URL"]?>" class="lightGrayLink reg-link" rel="nofollow">Ещё не зарегистрированы?</a>
                    </div>

                </form>
            </div>


            <div class="col imgWrap">
                <img src="/local/templates/dell/img/bgAuth.png" class="mobHide" alt=""> <img src="/local/templates/dell/img/bgAuthMob.png" class="mobShow" alt="">
            </div>
        </div>

    </div>

<?if($arResult["AUTH_SERVICES"]):?>
<?
$APPLICATION->IncludeComponent("bitrix:socserv.auth.form", "", 
	array(
		"AUTH_SERVICES"=>$arResult["AUTH_SERVICES"],
		"AUTH_URL"=>$arResult["AUTH_URL"],
		"POST"=>$arResult["POST"],
		"POPUP"=>"Y",
		"SUFFIX"=>"form",
	), 
	$component, 
	array("HIDE_ICONS"=>"Y")
);
?>
<?endif?>

<?
elseif($arResult["FORM_TYPE"] == "otp"):
?>

<form name="system_auth_form<?=$arResult["RND"]?>" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
<?if($arResult["BACKURL"] <> ''):?>
	<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
<?endif?>
	<input type="hidden" name="AUTH_FORM" value="Y" />
	<input type="hidden" name="TYPE" value="OTP" />
	<table width="95%">
		<tr>
			<td colspan="2">
			<?echo GetMessage("auth_form_comp_otp")?><br />
			<input type="text" name="USER_OTP" maxlength="50" value="" size="17" autocomplete="off" /></td>
		</tr>
<?if ($arResult["CAPTCHA_CODE"]):?>
		<tr>
			<td colspan="2">
			<?echo GetMessage("AUTH_CAPTCHA_PROMT")?>:<br />
			<input type="hidden" name="captcha_sid" value="<?echo $arResult["CAPTCHA_CODE"]?>" />
			<img src="/bitrix/tools/captcha.php?captcha_sid=<?echo $arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" /><br /><br />
			<input type="text" name="captcha_word" maxlength="50" value="" /></td>
		</tr>
<?endif?>
<?if ($arResult["REMEMBER_OTP"] == "Y"):?>
		<tr>
			<td valign="top"><input type="checkbox" id="OTP_REMEMBER_frm" name="OTP_REMEMBER" value="Y" /></td>
			<td width="100%"><label for="OTP_REMEMBER_frm" title="<?echo GetMessage("auth_form_comp_otp_remember_title")?>"><?echo GetMessage("auth_form_comp_otp_remember")?></label></td>
		</tr>
<?endif?>
		<tr>
			<td colspan="2"><input type="submit" name="Login" value="<?=GetMessage("AUTH_LOGIN_BUTTON")?>" /></td>
		</tr>
		<tr>
			<td colspan="2"><noindex><a href="<?=$arResult["AUTH_LOGIN_URL"]?>" rel="nofollow"><?echo GetMessage("auth_form_comp_auth")?></a></noindex><br /></td>
		</tr>
	</table>
</form>

<?
else:
?>

<form action="<?=$arResult["AUTH_URL"]?>">

    <div class="pageContent">
        <div class="contentWrapper">
            <section class="personalArea">
                <div class="contentTitle2">Личный кабинет</div>
                <div class="pa2cols">
                    <div class="col">
                        <div class="paItem">
                            <div class="title">
                                <div class="icon"><img src="img/icons/bag.svg" alt=""></div>
                                <div class="itemName">Заказы</div>
                                <div class="buttonBlue right">История заказов</div>
                            </div>
                            <div class="itemField">
                                <ul class="orderStatusList">
                                    <li>
                                        <div class="orderIcon"><img src="img/icons/complete.svg" alt=""></div>
                                        <div class="orderAbout">
                                            <div><a href="">№ 189265521</a> от 12.10.2021</div>
                                            <div class="status">Заказ выполнен</div>
                                        </div>
                                        <div class="orderPrice right">43 000 ₽</div>
                                    </li>
                                    <li>
                                        <div class="orderIcon"><img src="img/icons/complete.svg" alt=""></div>
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
        </div>
    </div>
			<?=bitrix_sessid_post()?>
			<input type="hidden" name="logout" value="yes" />
			<input class="buttonBlue right" type="submit" name="logout_butt" value="<?=GetMessage("AUTH_LOGOUT_BUTTON")?>" />

</form>
<?endif?>
</div>
