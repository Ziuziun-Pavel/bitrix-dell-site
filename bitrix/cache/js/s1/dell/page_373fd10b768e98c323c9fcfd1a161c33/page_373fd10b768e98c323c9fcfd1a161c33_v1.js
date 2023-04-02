
; /* Start:"a:4:{s:4:"full";s:96:"/local/templates/.default/components/bitrix/news.list/laptops_collection/script.js?1680118586293";s:6:"source";s:82:"/local/templates/.default/components/bitrix/news.list/laptops_collection/script.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
BX.ready(function(){
    BX.bind(
        BX('bitrix-sort'), 'change', function() {
            let selected = BX('bitrix-sort').value;
            let hr = location.href.split('?', 1);
            hr = hr[0];
            window.location = hr + "?SORT="+selected;
        }
    );
});
/* End */
;; /* /local/templates/.default/components/bitrix/news.list/laptops_collection/script.js?1680118586293*/
