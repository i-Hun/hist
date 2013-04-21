<?php
/*
Template Name: Кафедра социологии
*/
get_header(); ?>
	<style type="text/css">
@charset "utf-8";

@media only screen and (max-width: 767px) {
  dd i{
    font-size: 30px;
  }
}
#content{
	margin-top: 30px;
}
			.boxcaption a {
				color: #0af;
			}
			.boxcaption a:hover {
				color: #08c;
			}
			.boxgrid{ 
				width: 210px; 
				height: 280px; 
				border: solid 1px #e6e6db; 
				overflow: hidden; 
				position: relative; 
				margin:0 auto;
			}
				.boxgrid img{ 
					position: absolute; 
					top: 0; 
					left: 0; 
					border: 0; 
				}			
				
				
				.boxgrid img:hover{ 
					position: absolute; 
					top: 0; 
					left: 0; 
					border: 0; 
					
				}
				
				.boxgrid h4{ 
					text-shadow:0 0 0 #000;
					line-height:23px;
					opacity: 1;
					text-align:center;
					font-size:17px;
					margin:10px;
					color:#ddd;
					font-size:16px;
					font-family: 'Droid Sans', Arial, sans-serif;
					font-weight: bold;  

				}
				
				.boxgrid h5{
					text-align:center;					
					color:#eee; 
					font-weight:bold; 
					font-size:13px; font-family:Arial, Helvetica, sans-serif;
					margin-top:-10px;
					margin-left:15px;
					text-shadow:none;
				}
				.boxgrid p{ 
					text-align:center;	
					font-weight:bold; 					
					font-size:16px; font-family:Arial, Helvetica, sans-serif;
					line-height:25px;
				}
				.boxgrid a{ 
					text-align:center;	
					margin:10px 10px;
					font-weight:bold; 					
					font-size:16px; font-family:Arial, Helvetica, sans-serif;
					line-height:15px; //высота кнопок
				}
				
			.boxcaption{ 
				float: left; 
				position: absolute; 
				background:rgba(0,0,0,0.65);
				border-top:0px solid #fff;
				box-shadow: 0 0 2px 0px #000;
				height: 280px; 
				width: 100%; 
				/* For IE 5-7 */
				filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=90);
				/* For IE 8 */
				-MS-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=90)";
 			}
 				.captionfull .boxcaption {
 					top: 260px;
 					left: 0;
 				}
 				.caption .boxcaption {
 					top: 225px;
 					left: 0;					
 				}
 			table {
 				border:none;
 				width: 100%;
 				margin: 0 auto;
 			}

		</style>



		<script type="text/javascript">
			$(document).ready(function(){
				
				
				$('.boxgrid.caption').hover(function(){
					$(".cover", this).stop().animate({top:'0px'},{queue:false,duration:160});
				}, function() {
					$(".cover", this).stop().animate({top:'225px'},{queue:false,duration:160});
				});
			});
		</script>
        
        
		<!-- Row for main content area -->
		<div class="two columns hide-for-small">
			<div style="margin:0 auto; width:150px">
			<img style="width:150px" src="/wp-content/img/soc_logo.png" alt="Логотип кафедры социологии">
			</div>
			<?php echo $cfs->get('rich_text'); ?>
				<?php $values = $cfs->get('related'); ?>
				<?php if ($values): ?>
				<div class="sh_block">
					<h3 >Связанные записи</h3>
					<ul>
						<?php foreach ($values as $post_id): ?>

						    <?php $the_post = get_post($post_id); ?>
<!-- 						//    <?php if ( has_post_thumbnail($post_id)) : ?>
							//	<?php echo get_the_post_thumbnail($post_id, 'thumbnail');?>
						//	<?php endif; ?> -->
						 	<?php $title = $the_post->post_title; ?>
						    <?php $permalink = get_permalink( $post_id); ?>
						 	<?php get_permalink( $post_id); ?>
						   <li><a href="<?=$permalink?>"><i class="icon-link"></i><?=$title?></a></li>
						<?php endforeach; ?>
					</ul>
				</div>
				<?php else: ?> 				 
				<?php endif; ?>
			<?php dynamic_sidebar( 'left_widget' ); ?>
		</div>
		<div id="content" class="seven columns">
			
			<div class="row">
				<div class="twelve columns">





<dl class="tabs four-up">
  <dd class="active"><a href="#soc1"><i class="icon-users show-for-small"></i><span class="hide-for-small"><i class="icon-users"></i> Состав кафедры</span></a></dd>
  <dd><a href="#soc2"><i class="icon-user show-for-small"></i><span class="hide-for-small"><i class="icon-user"></i> Бакалавриат</span></a></dd>
  <dd><a href="#soc3"><i class="icon-graduation-cap show-for-small"></i><span class="hide-for-small"><i class="icon-graduation-cap"></i> Магистратура</span></a></dd>
  <dd><a href="#soc4"><i class="icon-vcard show-for-small"></i><span class="hide-for-small"><i class="icon-vcard"></i> Контактная информация</span></a></dd>
</dl>
<ul class="tabs-content">
  <li class="active" id="soc1Tab">

<dl class="tabs pill two-up">
  <dd class="active"><a href="#soc_teachers1">Штатные</a></dd>
  <dd><a href="#soc_teachers2">Совместители</a></dd>
</dl>

<ul class="tabs-content">
  <li class="active" id="soc_teachers1Tab">
				<div class="row" style="margin-bottom:40px;">
					<div class="four columns">
						<div class="boxgrid caption">						
							<img src="http://socio.omsu.ru/wp-content/img/teachers/ia.jpg"/>
							<div class="cover boxcaption">
								<h4>Огородникова Ирина Анатольевна</h4>
								<h5>Заведующая кафедрой</h5>
								<p>	
									<a class="nice small radius secondary button" href="http://socio.omsu.ru/?page_id=109#nice1">Дисциплины »</a>
									<a href="mailto:ogorodnikova.irina@gmail.com" >ogorodnikova.irina<br>@gmail.com</a>
								</p>
							</div>
						</div>
					</div>

					
					
					<div class="four columns" style=" margin:0 auto;">
						<div class="boxgrid caption">
							<img src="http://socio.omsu.ru/wp-content/img/teachers_old/user-woman.png" width="210" align="left">
							<div class="cover boxcaption">
								<h4>Багно Ирина Геннадьевна</h4>
								<h5>Доцент, кандидат философских наук.</h5>
								<p>
									<a class="nice small radius secondary button"  href="http://socio.omsu.ru/?page_id=189#nice1">Дисциплины »</a>
									<a class="nice small radius secondary button"  href="http://socio.omsu.ru/?page_id=189#nice2" >Публикации »</a>
								</p>
							</div>
						</div>
					</div>

					<div class="four columns" style=" margin:0 auto;">
						<div class="boxgrid caption">
							<img src="http://socio.omsu.ru/wp-content/img/teachers_old/varova.png" height="280" width="210" align="left">
							<div class="cover boxcaption">
								<h4>Варова Наталья Леонидовна</h4>
								<h5>Доцент, кандидат философских наук.</h5>
								<p>
									<a class="nice small radius secondary button"  href="http://socio.omsu.ru/?page_id=200#nice1">Дисциплины »</a>
								</p>
							</div>
						</div>
					</div>
					

				</div>

				<div class="row" style="margin-bottom:40px;">



					<div class="four columns" style=" margin:0 auto;">
						<div class="boxgrid caption">
							<img src="http://socio.omsu.ru/wp-content/img/teachers_old/user-man.png" height="280" width="210" align="left">
							<div class="cover boxcaption">
								<h4>Деревянченко Юрий Иванович</h4>
								<h5>Доцент, кандидат философских наук.</h5>
							</div>
						</div>
					</div>

					<div class="four columns" style=" margin:0 auto;">
						<div class="boxgrid caption">
							<img src="http://socio.omsu.ru/wp-content/img/teachers/kv.jpg" width="210" alt="Павленко Ксения Викторовна" align="left">
							<div class="cover boxcaption">
								<h4>Павленко Ксения Викторовна</h4>
								<h5>Доцент, кандидат социологических наук.</h5>
								<p>
									<a class="nice small radius secondary button"  href="http://socio.omsu.ru/?page_id=212#nice1">Дисциплины »</a>
									<a class="nice small radius secondary button"  href="http://socio.omsu.ru/?page_id=212#nice2" >Публикации »</a>
									<a href="mailto:pavlenko.ks@gmail.com" >pavlenko.ks@gmail.com</a>
								</p>
							</div>
						</div>
					</div>

					<div class="four columns" style=" margin:0 auto;">
						<div class="boxgrid caption">
							<img src="http://socio.omsu.ru/wp-content/img/teachers_old/pautova.jpg" width="210" align="left">
							<div class="cover boxcaption">
								<h4>Паутова Лариса Александровна</h4>
								<h5>Доцент, Доктор социологических наук.</h5>
								<p>
									<a class="nice small radius secondary button"  href="http://socio.omsu.ru/?page_id=193#nice1">Дисциплины »</a>
									<a class="nice small radius secondary button"  href="http://socio.omsu.ru/?page_id=193#nice2" >Публикации »</a>
									<a href="mailto:pautova@fom.ru">pautova@fom.ru</a>
								</p>
							</div>
						</div>
					</div>

				</div>
								
				<div class="row" style="margin-bottom:40px;">

					
					<div class="four columns" style=" margin:0 auto;">
						<div class="boxgrid caption">
							<img src="http://socio.omsu.ru/wp-content/img/teachers/mv.jpg" height="280" width="210" align="left">
							<div class="cover boxcaption">
								<h4>Озерова Мария Викторовна</h4>
								<h5>Старший преподаватель</h5>
								<p>
									<a class="nice small radius secondary button"  href="http://socio.omsu.ru/?page_id=215#nice1">Дисциплины »</a>
									<a  class="nice small radius secondary button" href="http://socio.omsu.ru/?page_id=215#nice2">Публикации »</a>
									<a href="mailto:mary_erof@mail.ru" >mary_erof@mail.ru</a>
								</p>
							</div>
						</div>
					</div>
					<div class="four columns" style=" margin:0 auto;">
						<div class="boxgrid caption">
							<img src="http://socio.omsu.ru/wp-content/img/teachers/sk.jpg" height="280" width="210" align="left">
							<div class="cover boxcaption">
								<h4>Бекова Сауле Каэржановна</h4>
								<h5>Преподаватель</h5>
								<p>
									<a class="nice small radius secondary button"  href="http://socio.omsu.ru/?page_id=218#nice1">Дисциплины »</a>
									<a class="nice small radius secondary button"  href="http://socio.omsu.ru/?page_id=218#nice2">Публикации »</a>
									<a href="mailto:bekova.sk@gmail.com" >bekova.sk@gmail.com</a>
								</p>
							</div>
						</div>
					</div>
					
				</div>
				
				
				<div style="clear: both;"></div>	
  </li>
  <li id="soc_teachers2Tab">
				<div class="six columns" >
					<h4>Агарков Анатолий Александрович</h4>
					<img style="margin-right: 20px; border: solid 1px #e6e6db;" src="http://socio.omsu.ru/wp-content/img/teachers_old/user-admin.png" width="100" alt="" align="left">
					<p>Дисциплины:</p>
					<ul>
						<li>Политическая социология</li>
					</ul>
				</div>
				<div class="six columns"  >
					<h4>Бондаренко Игорь Александрович</h4>
					<img style="margin-right: 20px; border: solid 1px #e6e6db;" src="http://socio.omsu.ru/wp-content/img/teachers_old/user-admin.png" width="100" alt="" align="left">
					<h5>Доктор философских наук, профессор кафедры философии ОмГУ</h5>
					<p>Дисциплины:</p>
					<ul>
						<li>Спецеминар: Методология социологии</li>
						<li>История и методология социология</li>
						<li>Современные социологические теории</li>
					</ul>
				</div>
				<div style="clear: both;"> </div>
				
				
				<div class="six columns" >
					<h4>Волкова Ирина Витальевна</h4>
					<img style="margin-right: 20px; border: solid 1px #e6e6db;" src="http://socio.omsu.ru/wp-content/img/teachers/volkova.jpg" width="100" alt="" align="left">
					<h5>Информационно-консалтинговая компания «Универсал-Информ»</h5>
					<p>Дисциплины:</p>
					<ul>
						<li>Демография</li>
					</ul>
				</div>
				<div class="six columns" >
					<h4>Вольвач Владимир Григорьевич</h4>
					<img style="margin-right: 20px; border: solid 1px #e6e6db;" src="http://socio.omsu.ru/wp-content/img/teachers_old/user-admin.png" width="100" alt="" align="left">
					<h5>Кандидат социологических наук, доцент кафедры управления ОмЭИ</h5>
					<p>Дисциплины:</p>
					<ul>
						<li>Социология журналистики</li>
					</ul>
				</div>
<div style="clear: both;"> </div>
				
				<div class="six columns" >
					<h4>Городецкая Ольга Александровна</h4>
					<img style="margin-right: 20px; border: solid 1px #e6e6db;" src="http://socio.omsu.ru/wp-content/img/teachers_old/user-woman.png" width="100" alt="" align="left">
					<h5>ООО «УК «Сладуница», бренд-менеджер</h5>
					<p>Дисциплины:</p>
					<ul>
						<li>Социология</li>
					</ul>
				</div>
				<div class="six columns" >
					<h4>Данилов Вячеслав Леонидович</h4>
					<img style="margin-right: 20px; border: solid 1px #e6e6db;" src="http://socio.omsu.ru/wp-content/img/teachers_old/user-admin.png" width="100" alt="" align="left">
					<h5>Доктор философских наук, доцент кафедры истории и теории религии ОмГУ</h5>
					<p>Дисциплины:</p>
					<ul>
						<li>Социология религии</li>
					</ul>
				</div>
				
				<div style="clear: both;"> </div>
				
				<div class="six columns" >
					<h4>Дьяченко Дмитрий Григорьевич</h4>
					<img style="margin-right: 20px; border: solid 1px #e6e6db;" src="http://socio.omsu.ru/wp-content/img/teachers_old/user-admin.png" width="100" alt="" align="left">
					<h5>БУ ОО "Региональный центр по связям с общественностью", социолог</h5>
					<p>Дисциплины:</p>
					<ul>
						<li>Социология массовой коммуникации</li>
					</ul>
				</div>
				<div class="six columns" >
					<h4>Ефименко Евгений Николаевич</h4>
					<img style="margin-right: 20px; border: solid 1px #e6e6db;" src="http://socio.omsu.ru/wp-content/img/teachers_old/user-admin.png" width="100" alt="" align="left">
					<h5>Кандидат исторических наук, доцент кафедры всеобщей истории ОмГУ</h5>
					<p>Дисциплины:</p>
					<ul>
						<li>История зарубежной социологии</li>
					</ul>
				</div>
				
				<div style="clear: both;"> </div>
				
				<div class="six columns" >
					<h4>Корусенко Светлана Николаевна</h4>
					<img style="margin-right: 20px; border: solid 1px #e6e6db;" src="http://socio.omsu.ru/wp-content/img/teachers_old/user-woman.png" width="100" alt="" align="left">
					<h5>Кандидат исторических наук, доцент кафедры этнографии и музееведения ОмГУ</h5>
					<p>Дисциплины:</p>
					<ul>
						<li>Социальная антропология</li>
					</ul>
				</div>
				<div class="six columns" >
					<h4>Лореш Максим Андреевич</h4>
					<img style="margin-right: 20px; border: solid 1px #e6e6db;" src="http://socio.omsu.ru/wp-content/img/teachers_old/loresh.jpg" width="100" alt="" align="left">
					<h5>ОмГТУ, доцент</h5>
					<p>Дисциплины:</p>
					<ul>
						<li>Количественные методы анализа и обработки данных</li>
					</ul>
				</div>
				
				<div style="clear: both;"> </div>
				
				<div class="six columns" >
					<h4>Малеева Галина Михайловна</h4>
					<img style="margin-right: 20px; border: solid 1px #e6e6db;" src="http://socio.omsu.ru/wp-content/img/teachers_old/user-woman.png" width="100" alt="" align="left">
					<h5> ОмГТУ, старший преподаватель</h5>
					<p>Дисциплины:</p>
					<ul>
						<li>Социология</li>
					</ul>
				</div>
				<div class="six columns" >
					<h4>Назаренко Юрий Александрович</h4>
					<img style="margin-right: 20px; border: solid 1px #e6e6db;" src="http://socio.omsu.ru/wp-content/img/teachers_old/ua.png" width="100" alt="" align="left">
					<h5>БУ ООО «Региональный центр по связям с общественностью», первый зам. директора</h5>
					<p>Дисциплины:</p>
					<ul>
						<li>Методология и методика социологического исследования</li>
					</ul>
				</div>
				
				<div style="clear: both;"> </div>
				
				<div class="six columns" >
					<h4>Ромашова Инна Петровна</h4>
					<img style="margin-right: 20px; border: solid 1px #e6e6db;" src="http://socio.omsu.ru/wp-content/img/teachers_old/user-woman.png" width="100" alt="" align="left">
					<h5>Кандидат филологических наук, доцент кафедры теоретической и прикладной лингвистики ОмГУ</h5>
					<p>Дисциплины:</p>
					<ul>
						<li>Практикум обучения</li>
					</ul>
				</div>
				<div class="six columns" >
					<h4>Миронов Виктор Владимирович</h4>
					<img style="margin-right: 20px; border: solid 1px #e6e6db;" src="http://socio.omsu.ru/wp-content/img/teachers_old/user-admin.png" width="100" alt="" align="left">
					<h5>Кандидат исторических наук, доцент кафедры ИиТМО ОмГУ</h5>
					<p>Дисциплины:</p>
					<ul>
						<li>Социология международных отношений</li>
					</ul>
				</div>
				
				<div style="clear: both;"> </div>
				
				<div class="six columns" >
					<h4>Стрелкова Алена Александровна</h4>
					<img style="margin-right: 20px; border: solid 1px #e6e6db;" src="http://socio.omsu.ru/wp-content/img/teachers_old/user-woman.png" width="100" alt="" align="left">
					<h5>Главный специалист отдела по работе с персоналом филиала ОАО «МТС в Омской области»</h5>
					<p>Дисциплины:</p>
					<ul>
						<li>Социальная психология</li>
					</ul>
				</div>
				<div class="six columns" >
					<h4>Федосеева Дарья Николаевна</h4>
					<img style="margin-right: 20px; border: solid 1px #e6e6db;" src="http://socio.omsu.ru/wp-content/img/teachers_old/user-woman.png" width="100" alt="" align="left">
					<h5> Маркетинговое агентство «Делфи», руководитель клиентского отдела</h5>
					<p>Дисциплины:</p>
					<ul>
						<li>Спецсеминар: основы маркетинга</li>
					</ul>
				</div>
	<div style="clear: both;"></div>
  </li>
</ul>
  </li>
  <li id="soc2Tab">
		<dl class="tabs pill four-up">
			<dd class="active"><a href="#soc_bachelor1">Общая информация</a></dd>
			<dd><a href="#soc_bachelor2">Компетенции</a></dd>
			<dd><a href="#soc_bachelor3">Поступление</a></dd>
			<dd><a href="#soc_bachelor4">Обучение</a></dd>
		</dl>

		<ul class="tabs-content">
			<li class="active" id="soc_bachelor1Tab">
				Основная образовательная программа (ООП) по направлению подготовки 040100 Социология.

				<ul class="disc">
					<li>Квалификация (степень) -- «<strong>бакалавр социологии</strong>».</li>
					<li>Форма обучения – очная.</li>
					<li>Срок обучения – 4 года.</li>
				</ul>

				Область профессиональной деятельности бакалавров включает: изучение социального, экономического, политического и духовного состояния общества, закономерностей и тенденций его развития социологическими методами.

				Бакалавр по направлению подготовки 040100 Социология готовится к следующим видам профессиональной деятельности:
				<table class="responsive" style="width:100%">
				<tbody>
				<tr>
				<td style="width:30%"><strong>научно-исследовательская деятельность</strong></td>
				<td style="width:70%" valign="top">
				<ul class="disc">
					<li>участие в подготовке и проведении   фундаментальных и прикладных социологических исследований;</li>
					<li>обработка и интерпретация социальной,   демографической, экономической и другой информации с использованием   современных информационных технологий, средств коммуникации и связи;</li>
					<li>участие в подготовке отчетов,   аналитических записок, профессиональных публикаций, презентация  результатов исследовательских работ;</li>
				</ul>
				</td>
				</tr>
				<tr>
				<td width="225"><strong>производственно-прикладная деятельность</strong></td>
				<td width="416" valign="top">
				<ul class="disc">
					<li>оценка результативности и последствий   социальной и экономической политики, социальная экспертиза;</li>
					<li>просветительская, информационная и   консультационная работа в органах власти и управления, учреждениях   образования, культуры, здравоохранения, а также в области социальных   коммуникаций и других областях профессиональной деятельности;</li>
					<li>разработка рекомендаций по   совершенствованию форм организации труда на предприятиях и в учреждениях,   анализ изменений кадрового состава;</li>
				</ul>
				</td>
				</tr>
				<tr>
				<td width="225"><strong>проектная деятельность</strong></td>
				<td width="416" valign="top">
				<ul class="disc">
					<li>участие в разработке и проведении   исследований по диагностике, оценке, оптимизации социальных показателей,   процессов и отношений;</li>
					<li>участие в разработке, реализации и   распространении результатов проектов по изучению общественного мнения;</li>
					<li>научно-методическое и информационное обеспечение   маркетинговых исследований, участие в разработке рекомендаций для   маркетинговых служб;</li>
				</ul>
				</td>
				</tr>
				<tr>
				<td width="225"><strong>организационно-управленческая</strong>
				</td>
				<td width="416" valign="top">
				<ul class="disc">
					<li>участие в организации управленческих   процессов в органах власти и управления, органах местного самоуправления, административно-управленческих   подразделениях организаций и учреждений;</li>
					<li>участие в организации и поддержании   коммуникаций с научно-исследовательскими учреждениями и   информационно-аналитическими службами по вопросам обмена информацией,   научного консультирования и экспертизы;</li>
				</ul>
				</td>
				</tr>
				<tr>
				<td width="225"><strong>педагогическая деятельность</strong>
				</td>
				<td width="416" valign="top">
				<ul class="disc">
					<li>подготовка и проведение занятий по   социологии, обществознанию и другим социально-гуманитарным дисциплинам в   общеобразовательных учреждениях, образовательных учреждениях начального и   среднего профессионального образования;</li>
					<li>подготовка учебно-методической   документации по обществоведческим курсам.</li>
				</ul>
				</td>
				</tr>
				</tbody>
				</table>
			</li>
			<li id="soc_bachelor2Tab">
				<h5>Наиболее значимые компетенции, формируемые в ходе освоения ООП:</h5>
				<ul class="disc">
					<li>Способность и готовность использовать знание методов и теорий социальных и гуманитарных наук при осуществлении экспертной, консалтинговой и аналитической деятельности.</li>
					<li>Владение основными методами, способами и средствами получения, хранения, переработки информации, в том числе находящейся в глобальных компьютерных сетях, владение навыками работы с компьютером как средством управления информацией.</li>
					<li>Способность составлять и представлять проекты аналитических разработок в соответствии с нормативными документами.</li>
					<li>Способность использовать методы сбора, обработки и интерпретации комплексной социальной информации для решения организационно-управленческих задач.</li>
					<li>Умение обрабатывать и анализировать данные для подготовки аналитических решений, экспертных заключений и рекомендаций.</li>
					<li>Способность участвовать в разработке основанных на профессиональных социологических знаниях предложений и рекомендаций по решению социальных проблем, в разработке механизмов согласования интересов социальных групп и общностей.</li>
					<li>Способность и готовность к планированию и осуществлению проектных работ в области изучения общественного мнения, организации работы маркетинговых служб.</li>
				</ul>
			</li>
			<li id="soc_bachelor3Tab">
				<h5>Перечень вступительных экзаменов:</h5>
				<ul class="disc">
					<li>Обществознание</li>
					<li>Русский язык</li>
					<li>Математика</li>
				</ul>
				<h5>Более полную информацию вы можете получить в приёмной комиссии:</h5>
				<ul class="disc" style="list-style-position: outside; margin-left:30px">
					<li class="world"><p><a target="_blank" href="http://abit.univer.omsk.su/">abit.univer.omsk.su</a></p></li>
					<li class="phone"><p> <a href="callto:+73812229772">+7 (3812) 22-97-72</a></p></li>
					<li class="place"><p> <a href="http://maps.yandex.ru/-/CNUMqH2c">644077 г. Омск, Пр. Мира 55а, учебный корпус №2</a></p></li>
				</ul>
			</li>
			<li id="soc_bachelor4Tab">
				<h5>Изучаемые дисциплины</h5>

				<ul class="disc">
					<li>Дисциплины гуманитарного, социального и экономического цикла:
						<ul class="circle">
							<li>Иностранный язык</li>
							<li>Логика</li>
							<li>Экономическая теория</li>
							<li>Психология</li>
							<li>Основы права</li>
							<li>Философия</li>
							<li>История</li>
							<li>Практикум обучения</li>
						</ul>
					</li>

					<li>Дисциплины математического и естественнонаучного цикла:
						<ul class="circle">
							<li>Высшая математика</li>
							<li>Теория вероятности и математическая статистика</li>
							<li>Современные информационные технологии в социальных науках</li>
							<li>Методы прикладной статистики для социологов</li>
							<li>Техника презентации</li>
						</ul>
					</li>

					<li>Дисциплины профессионального цикла:
						<ul class="circle">
							<li>Основы социологии</li>
							<li>История социологии</li>
							<li>Практикум составления обзора публикаций</li>
							<li>Методика и методология социологического исследования</li>
							<li>Практикум проектирования программы социологического исследования</li>
							<li>Социально-экономическая статистика</li>
							<li>Социальные проблемы</li>
							<li>Социальная психология</li>
							<li>Основы маркетинга</li>
							<li>Количественный анализ данных в социологии</li>
							<li>Практикум вторичного анализа социологической информации</li>
							<li>Социология культуры</li>
							<li>Современные социологические теории</li>
							<li>Демография</li>
							<li>Социология публичной сферы и социальных коммуникаций</li>
							<li>Социология управления</li>
							<li>Экономическая социология</li>
							<li>Теория измерений</li>
							<li>Качественные методы в социологии</li>
							<li>Организация социологического исследования</li>
							<li>Социология организаций</li>
							<li>Политическая социология</li>
							<li>Безопасность жизнедеятельности</li>
							<li>Методика преподавания социологии</li>
							<li>Спецсеминар преддипломного проектирования</li>
						</ul>
					</li>
				</ul>
				<strong>Практики:</strong>  производственная без отрыва от занятий  (4 семестр), производственная (8 семестр)
				<strong> Итоговая аттестация</strong>  – защита дипломного проекта
				<h5>Основные базы практик:</h5>
					<ul class="disc">
						<li>БУ ОО «Региональный центр по связям с общественностью»</li>
						<li>ОАО «Мобильные системы связи»</li>
						<li>ООО «Маркетинговое агентство «Делфи»</li>
						<li>Научно-производственное объединение «Ориентир»</li>
						<li>БУ ОО «МинСпортМедиа»</li>
						<li>Омская региональная маркетинговая ассоциация</li>
					</ul>
			</li>
		</ul>
		</li>

		<li id="soc3Tab">
			<dl class="tabs pill four-up">
				<dd class="active"><a href="#soc_magistracy1">Общая информация</a></dd>
				<dd><a href="#soc_magistracy2">Компетенции</a></dd>
				<dd><a href="#soc_magistracy3">Поступление</a></dd>
				<dd><a href="#soc_magistracy4">Обучение</a></dd>
			</dl>

			<ul class="tabs-content">
				<li class="active" id="soc_magistracy1Tab">
					<h4>Основная образовательная программа по направлению подготовки 040100 Социология.</h4>
					<ul class="disc">
						<li>Квалификация (степень) – «магистр социологии».</li>
						<li>Программа – «Социология управления».</li>
						<li>Руководитель программы – доктор социологических наук, профессор, заведующий кафедрой региональной экономики и управления территориями О. М. Рой.</li>
						<li>Форма обучения – очная.</li>
						<li>Срок обучения – 2 года.</li>
					</ul>

					Область профессиональной деятельности магистров включает: экономику, науку, культуру, политику, образование.
					Магистр по направлению подготовки 040100 Социология готовится к следующим видам профессиональной деятельности:

					<table border="1" cellspacing="0" cellpadding="0">
					<tbody>
					<tr>
					<td width="243"><strong>Научно-исследовательская деятельность</strong></td>
					<td width="617" valign="top">
					<ul class="disc">
						<li>самостоятельная разработка и проведение   фундаментальных и прикладных социологических исследований;</li>
						<li>критический анализ результатов   исследований;</li>
						<li>обработка и интерпретация социальной,   демографической,  экономической и   другой информации с использованием современных информационных технологий,   средств коммуникации и связи;</li>
						<li>самостоятельная подготовка отчетов,   аналитических записок, профессиональных публикаций, презентация  результатов исследовательских работ;</li>
					</ul>
					</td>
					</tr>
					<tr>
					<td width="243"><strong>Производственно-прикладная деятельность</strong></td>
					<td width="424" valign="top">
					<ul class="disc">
						<li>социологическая экспертиза разработанных и   принимаемых к реализации социальных программ, проектов, планов мероприятий,   проектов нормативных правовых актов, методических материалов;</li>
						<li>создание и поддержание   нормативно-методической и информационной базы исследований с целью разработки   и успешной реализации программ социального развития предприятий, учреждений,   территорий и иных общностей;</li>
						<li>идентификация потребностей и интересов   социальных групп, предложение механизмов их согласования между собой и с   социально-экономическими приоритетами развития социальных общностей (трудовых   коллективов, территориальных общностей);</li>
						<li>участие в формировании кадрового состава   предприятий и учреждений, составление прогнозов потребности в кадрах; участие   в формировании индивидуальных карьерных планов, профессиональной ориентации и   производственной адаптации занятых; разработка систем оценки профессиональных   компетенций работников и результатов их труда;</li>
					</ul>
					</td>
					</tr>
					<tr>
					<td width="243"><strong>Проектная деятельность</strong></td>
					<td width="424" valign="top">
					<ul class="disc">
						<li>самостоятельная разработка и проведение   исследований по диагностике, оценке, оптимизации социальных показателей,   процессов и отношений;</li>
						<li>самостоятельная разработка методического   инструментария, нормативных документов, информационных материалов для   осуществления исследовательской, аналитической и консалтинговой проектной   деятельности;</li>
						<li>разработка, реализация и распространение   результатов проектов по изучению общественного мнения;</li>
						<li>научно-методическое и информационное   обеспечение маркетинговых исследований, участие в разработке рекомендаций для   маркетинговых служб;</li>
					</ul>
					</td>
					</tr>
					<tr>
					<td width="243"><strong>Организационно-управленческая деятельность</strong>
					</td>
					<td width="424" valign="top">
					<ul class="disc">
						<li>разработка мониторинга социальной сферы;</li>
						<li>разработка программ, методик и организация   социологических исследований, направленных на оценку результативности,   эффективности и последствий программной и проектной деятельности органов   управления;</li>
						<li>формирование и анализ информационных   массивов, обеспечивающих разработку управленческого воздействия на социальную   сферу;</li>
						<li>организация управленческих процессов в   органах власти и управления, органах местного самоуправления,   административно-управленческих подразделениях организаций и учреждений;</li>
					</ul>
					</td>
					</tr>
					<tr>
					<td width="243"><strong>Педагогическая деятельность</strong>
					</td>
					<td width="424" valign="top">
					<ul class="disc">
						<li>подготовка и проведение занятий по   социологическим и социально-гуманитарным дисциплинам в средней школе и в   высших учебных заведениях;</li>
						<li>организация учебного процесса,   самостоятельная подготовка учебных программ, учебно-методической документации   по курсам.</li>
					</ul>
					</td>
					</tr>
					</tbody>
					</table>
				</li>
				<li id="soc_magistracy2Tab">
					<h5>Наиболее значимые компетенции, формируемые в ходе освоения ООП:</h5>
					<ul class="disc">
						<li>Способность осваивать новые теории, модели, методы исследования, навыки разработки новых методических подходов с учетом целей и задач исследования.</li>
						<li>Способность и умение самостоятельно использовать знание новейших тенденций в области методов и теорий современной социологической теории, методологии и методов социальных наук применительно к задачам фундаментального или прикладного исследования социальных общностей, институтов и процессов, общественного мнения.</li>
						<li>Способность профессионально составлять проекты аналитических разработок в соответствии с нормативными документами и представлять результаты исследовательской работы с учетом особенностей потенциальной аудитории.</li>
						<li>Способность свободно пользоваться современными методами сбора, обработки и интерпретации комплексной социальной информации для постановки и решения организационно-управленческих задач.</li>
						<li>Способность и готовность к планированию и осуществлению проектных работ в области изучения общественного мнения, организации работы маркетинговых служб, проведения социальной экспертизы политических и научно-технических решений.</li>
						<li>Способность участвовать в разработке основанных на профессиональных социологических знаниях предложений и рекомендаций по решению социальных проблем, в разработке механизмов согласования интересов социальных групп и общностей.</li>
						<li>Способность самостоятельно разрабатывать основанные на профессиональных социологических знаниях предложения и рекомендации по решению социальных проблем, а также разрабатывать механизмы согласования интересов социальных групп и общностей.</li>
						<li>Умение обрабатывать и анализировать данные для подготовки аналитических решений, экспертных заключений и рекомендаций.</li>
					</ul>
				</li>
				<li id="soc_magistracy3Tab">
Вступительный экзамен в магистратуру по направлению «Социология» проводится в форме собеседования. Каждый абитуриент отвечает по экзаменационному билету, состоящему из четырех вопросов. Два вопроса из - раздела Программы «Теория и история социологии», два вопроса из раздела  «Методология и методы социологического исследования».
Каждый вопрос оценивается по 25-бальной шкале. Критерий оценки за каждый вопрос:
<ul class="disc">

	<li>ответ правильный и полный – 25 баллов;</li>

	<li>ответ правильный, неполный – 15 баллов;</li>

	<li>ответ неправильный – 0 баллов.</li>
</ul>

Итоговая оценка выводится посредством суммирования оценок комиссии по всем вопросам экзаменационного билета. Максимальная оценка за четыре правильных ответа составляет 100 баллов. Успешно прошедшими испытания признаются те лица, которые при сдачи экзамена получили 30 и более баллов.
<a class="button grey_blue" href="/download/2012/Программа%20экзамена%20магистров.doc">Скачать программу экзамена</a>
				</li>
				<li id="soc_magistracy4Tab">
					<h5>Изучаемые дисциплины</h5>
					<ul class="disc">
						<li>Обязательные дисциплины:</li>
						<ul class="circle">
							<li>Иностранный язык: профессиональная терминология и основы перевода научных текстов</li>
							<li>Методология научных исследований</li>
							<li>История и методология социологии</li>
							<li>Правоведение</li>
							<li>Современные социологические теории</li>
							<li>Современные методы социологических исследований</li>
							<li>Научно-исследовательский семинар</li>
							<li>Социальная стратификация  современного российского общества</li>
							<li>Современные проблемы государственного управления</li>
							<li>Современные методы исследования организаций</li>
							<li>Социальные коммуникации в управлении</li>
							<li>Дисциплины по выбору.</li>
						</ul>
					</ul>
					<ul class="disc">
						<li>Дисциплины по выбору.</li>
					<em>На их основе студент формирует индивидуальную программу подготовки. Предоставляется возможность выбрать также дисциплины из других магистерских программ:</em>
						<ul class="circle">
							<li>Личное (исследовательское)интервью: теория и практика</li>
							<li>Фокус-группы: теория и практика</li>
							<li>Контент-анализ: теория и практика</li>
							<li>Экспертный опрос: теория и практика</li>
							<li>Логика социологического исследования</li>
							<li>Методы анализа социологических данных</li>
							<li>Территориальное общественное самоуправление</li>
							<li>Управление в социальной сфере</li>
							<li>Кадровая политика и кадровый аудит</li>
							<li>Маркетинг территорий</li>
							<li>Методика преподавания в высшей школе</li>
						</ul>
					</ul>

					<strong>Научно-исследовательская работа студентов</strong>: 1,2,3 семестры. Организационная форма - научно-исследовательский семинар.
					<strong>Практики</strong>: научно-исследовательская, производственная (4 семестр).
					<strong>Итоговая аттестация</strong> – защита магистерской диссертации.

					<h5>Основные базы практик:</h5>
					<ul class="disc">
						<li>БУ ОО «Региональный центр по связям с общественностью»</li>
						<li>ОАО «Мобильные системы связи»</li>
						<li>ООО «Маркетинговое агентство «Делфи»</li>
						<li>Научно-производственное объединение «Ориентир»</li>
						<li>БУ ОО «МинСпортМедиа»</li>
						<li>Омская региональная маркетинговая ассоциация</li>
					</ul>
			</li>
		</ul>
				</li>

	<li id="soc4Tab">
	<table>
		<tbody>
			<tr>
				<td><i class="icon-user"></i> Заведующая кафедрой</td>
				<td>Огородникова Ирина Анатольевна</td>

			</tr>
			<tr>
				<td><i class="icon-phone-1"></i> Телефон:</td>
				<td><a href="callto:+73812670506"><span itemprop="telephone">+7 (3812) 67-05-06</span></a></td>

			</tr>
			<tr>
				<td><i class="icon-map"></i> Адрес</td>
				<td><a href="http://go.2gis.ru/ma3c" target="_blank">Аудитория 204, 2 корпус ОмГУ, <span itemprop="streetAddress">проспект Мира, 55</span>, <span itemprop="addressLocality">Омск</span>, РФ, <span itemprop="postalCode">644077</span></a></td>
			</tr>
			<tr>
				<td><i class="icon-mail-1"></i> Электронная почта</td>
				<td><a href="mailto:omsocio@gmail.com"></i><span itemprop="email">omsocio@gmail.com</span></a></td>

			</tr>
			<tr>
				<td><i class="icon-link"></i> Сайт</td>
				<td><a href="http://socio.omsu.ru/">socio.omsu.ru</a></td>
			</tr>
		</tbody>
	</table>
	</li>
</ul>



				</div>
			</div>
		</div>
		<div class="three columns">
			<div class="show-for-small left_widget">
				<?php dynamic_sidebar( 'left_widget' ); ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
		

<?php get_footer(); ?>