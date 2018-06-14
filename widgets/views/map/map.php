<?php
    use yii\web\View;
/*
 * 
 */
?>
<?php
$js = <<<JS
        ymaps.ready(init);
        var myMap, 
            myPlacemark;

        function init(){ 
            myMap = new ymaps.Map("map", {
                center: [$latitude, $longitude],
                zoom: 14
            }); 
            
            var myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
                balloonContentBody: [
                    '<address>',
                    '<strong>RuMotors</strong>',
                    '<br/>',
                    'Адрес: Ярославль, Промзона, Декабристов 5',
                    '<br/>',
                    'Подробнее: <a href="#">RuMotors</a>',
                    '</address>'
                ].join('')
            }, {
                preset: 'islands#redDotIcon'
            });
            myMap.behaviors.disable('scrollZoom');
            myMap.geoObjects.add(myPlacemark);
        }        
JS;
$this->registerJs($js, View::POS_READY);
?>

<div class="map" id="map" style="width: 100%; height: 400px;"></div>