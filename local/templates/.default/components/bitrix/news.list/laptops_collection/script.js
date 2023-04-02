BX.ready(function(){
    BX.bind(
        BX('bitrix-sort'), 'click', function() {
            let selected = "PROPERTY_PRICE:ASC";
            let hr = location.href.split('?', 1);
            hr = hr[0];
            window.location = hr + "?SORT="+selected;
        }
    );
});