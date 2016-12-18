var split;
var address;
var lat, lon;
//學校位置經緯傳換
function trans() {
    i = 0;
    var content = address;
    split = content.split("\n");
    delayedLoop();
}

function delayedLoop() {
    addressToLatLng(split[i]);

    if (++i == address.length) {
        return;
    }
    window.setTimeout(delayedLoop, 800);
}

function addressToLatLng(addr) {
    var geocoder = new google.maps.Geocoder();
    geocoder.geocode({
        "address": addr
    }, function(results, status) {
        if ($("#c").attr('checked')) {
            addr = addr + "=";
        } else {
            addr = "";
        }
        if (status == google.maps.GeocoderStatus.OK) {
            lat = results[0].geometry.location.lat();
            lon = results[0].geometry.location.lng();
            SetMap(la, ln);
        }

    });
}

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-1478416-8']);
_gaq.push(['_setDomainName', 'uhooamber.com']);
_gaq.push(['_trackPageview']);

(function() {
    var ga = document.createElement('script');
    ga.type = 'text/javascript';
    ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ga, s);
})();