
; /* Start:"a:4:{s:4:"full";s:89:"/local/templates/dell/components/bitrix/main.profile/personal/script.min.js?1680175505634";s:6:"source";s:71:"/local/templates/dell/components/bitrix/main.profile/personal/script.js";s:3:"min";s:75:"/local/templates/dell/components/bitrix/main.profile/personal/script.min.js";s:3:"map";s:75:"/local/templates/dell/components/bitrix/main.profile/personal/script.map.js";}"*/
function removeElement(e,n){var o=new Array;for(var i=0;i<e.length;i++)if(e[i]!=n)o[o.length]=e[i];e=null;e=new Array;for(var i=0;i<o.length;i++)e[i]=o[i];o=null;return e}function SectionClick(e){var n=document.getElementById("user_div_"+e);if(n.className=="profile-block-hidden"){opened_sections[opened_sections.length]=e}else{opened_sections=removeElement(opened_sections,e)}document.cookie=cookie_prefix+"_user_profile_open="+opened_sections.join(",")+"; expires=Thu, 31 Dec 2020 23:59:59 GMT; path=/;";n.className=n.className=="profile-block-hidden"?"profile-block-shown":"profile-block-hidden"}
/* End */
;; /* /local/templates/dell/components/bitrix/main.profile/personal/script.min.js?1680175505634*/

//# sourceMappingURL=page_7dbd133217260783c937ac26a18d1df6.map.js