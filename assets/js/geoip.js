// demo.js
var fillInPage = (function () {
    var updateCityText = function (geoipResponse) {
        var cityName = geoipResponse.city.names.en || 'your city';
        document.getElementById('city').innerHTML = cityName

        var countryName = geoipResponse.country.names['pt-BR'] || 'your city';
        document.getElementById('country').innerHTML = countryName

    };

    var onSuccess = function (geoipResponse) {
        updateCityText(geoipResponse);
    };

    var onError = function (error) {
        document.getElementById('city').innerHTML = 'São Paulo'
        document.getElementById('country').innerHTML = 'Brasil'
    };

    return function () {
        if (typeof geoip2 !== 'undefined') {
            geoip2.city(onSuccess, onError);
        } else {
            document.getElementById('city').innerHTML = 'a browser that blocks GeoIP2 requests'
            document.getElementById('country').innerHTML = 'a browser that blocks GeoIP2 requests'
        }
    };
}());

fillInPage();