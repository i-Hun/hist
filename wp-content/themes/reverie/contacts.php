<?php
/*
Template Name: Контактная информация
*/
get_header(); ?>

<style type="text/css">
html, body, .container, #main {
  margin:0;
  padding:0;
  width:100%;
  height:100%;
  background-color: #333;
}
.container>.row{
	margin:0; 
	padding:0;
	width:100%;
	height:72.7%;
}
	#main{
		padding:0;		
	}
	footer {
		padding:0;
	}
	.around_map {
		margin:0;
		padding:0;
		width:100%;
		height:100%;
		background-color: #268;
	}
	#myMap{
		width:100%;
		height:100%;		
	}
	ul li {
		font-size: 20px;
		list-style: none;
	}
	.icon-location{
		font-size: 25px;
		margin-right: 5px;
	}
	.icon-phone, .icon-email{
		margin-right: 10px;
	}
	div.cont_footer{
		color:#555;
	}
	div.cont_footer div{
		margin-bottom: 10px;
	}

</style>
     <script type="text/javascript" src="http://maps.api.2gis.ru/1.0"></script> 
     <script type="text/javascript"> 
        // Создаем обработчик загрузки страницы: 
        DG.autoload(function() { 
            // Создаем объект карты, связанный с контейнером: 
            var myMap = new DG.Map('myMap'); 
            // Устанавливаем центр карты, и коэффициент масштабирования: 
            myMap.setCenter(new DG.GeoPoint(73.261000,55.031000), 16); 
            // Добавляем элемент управления коэффициентом масштабирования: 
            // myMap.controls.add(new DG.Controls.Zoom()); 
 
                        // Создаем балун:
            var myBalloon = new DG.Balloons.Common({
                // Местоположение на которое указывает балун: 
                 geoPoint: new DG.GeoPoint(73.265050,55.028000),
                 // Устанавливаем текст, который будет отображатся при открытии балуна:
                 contentHtml: '<ul ><li><a href="callto:+73812229811"><i class="icon-phone"></i><span itemprop="telephone">+7 (3812) 22-98-11</span></a></li><li><a href="mailto:if_dekanat@mail.ru"><i class="icon-email"></i><span itemprop="email">if_dekanat@mail.ru</span></a></li><li><i class="icon-location"></i>Кабинет 512, 2 корпус ОмГУ,<span itemprop="streetAddress">проспект Мира, 55</span>,<span itemprop="addressLocality">Омск</span>, РФ</li></ul>',
                 // Убрать закрывающий крестик
                 isClosed: false,
                 draggable:true,
                 headerContentHtml:'<h3>Исторический факультет, 2-й корпус ОмГУ</h3>',
                 footerContentHtml:'<div class="cont_footer"><div>Декан — профессор  Алексей Валерьевич Якуб<br><i class="icon-clock"></i> Понедельник — с 13 до 15.</div><div>Заместитель декана — доцент Надежда Васильевна Кулешова<br><i class="icon-clock"></i> Среда — с 13 до 15, пятница — с 13 до 16.</div><div>Заместитель декана — доцент Ирина Васильевна Толпеко<br><i class="icon-clock"></i> Понедельник — с 13 до 15, вторник — с 14 до 17, четверг — с 14 до 17.</div><div>Работа со студентами<br><i class="icon-clock"></i> Каждый день с 13 до 16.</div><div>Заказ и выдача справок<br><i class="icon-clock"></i> Вторник, С 13 до 16.</div></div>'
            });


            // Создаем маркер:
            var myMarker = new DG.Markers.Common({
                 // Местоположение на которое указывает маркер:
                 geoPoint: new DG.GeoPoint(73.265050,55.028000),
                 // Функция, вызываемая при клике по маркеру
                 clickCallback: function() {
                    if (! myMap.balloons.getDefaultGroup().contains(myBalloon)) {
                        // Если балун еще не был добавлен на карту, добавляем его:
                         myMap.balloons.add(myBalloon);
                     } else {
                         // Показываем уже ранее добавленный на карту балун
                         myBalloon.show();
                     }
                }
            });
            // Добавить маркер на карту:
            myMap.markers.add(myMarker);
            myMap.balloons.add(myBalloon);
        }); 
    </script> 
		<!-- Row for main content area -->
		<div class="twelve columns around_map">
<!-- 			<div class="six columns centered">
				<ul>
					<li>dfsfs</li>
					<li>gsggsdgs</li>
					<Li>sgdgsdg</Li>
					<li>gsgfgsdgsd</li>
				</ul>
			</div> -->
			<div id="myMap" ></div> 
		</div><!-- End Content row -->
		

		
<?php get_footer(); ?>