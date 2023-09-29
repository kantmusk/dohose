
jQuery(function($) {
    $(document).ready(function(){
        
        ymaps.ready(init);

        function init() {


            var center = [55.669305, 37.627714];
            
            
            if ($('#mape').length) {

                var myMap = new ymaps.Map('mape', {
                    center: center,
                    controls: [],
                    zoom: 14,  
                    controls: []
                }, {
                    searchControlProvider: 'yandex#search'
            
                });
                myMap.behaviors.disable('scrollZoom');

                myPlacemark = new ymaps.Placemark(center, {});
                myMap.geoObjects.add( myPlacemark);
            }
            
        }

    })

});

