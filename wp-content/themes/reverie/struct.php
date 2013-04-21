<?php
/*
Template Name: Структура
*/
get_header(); ?>
<script type="text/javascript" src="/wp-content/orgchart/"></script>
<style type="text/css">
	table{
		border:none;
		width: 100%;
	}
table tbody tr:nth-child(2n) {
	background-color: #fff;

}

.google-visualization-orgchart-node-medium {
font-size: 0.8em;
}
.google-visualization-orgchart-node {
text-align: center;
vertical-align: middle;
font-family: "Open Sans", arial,helvetica;
cursor: default;
border: 1px solid #B5D9EA;
border-radius: 2px;
box-shadow: none;
background: #EDF7FF;
}
</style>
		<!-- Row for main content area -->
				<div class="two columns hide-for-small">
			<?php dynamic_sidebar( 'left_widget' ); ?>

		</div>
		<div id="content" class="seven columns">
	
			<div class="post-box">

				<?php get_template_part('loop', 'page'); ?>

 <script type="text/javascript" src="http://www.google.com/jsapi"></script>

    <script type="text/javascript">
      google.load('visualization', '1', {packages: ['orgchart']});

         google.load('visualization', '1', {packages:['orgchart']});
          google.setOnLoadCallback(drawChart);
          function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Name');
            data.addColumn('string', 'Manager');
            data.addColumn('string', 'ToolTip');
            data.addRows([
              [{v:'Dean', f:'<div class="org-name">Якуб Алексей Валерьевич</div><div class="org-pro">Декан</div>'}, '', 'Декан Исторического факультета'],
              [{v:'deputy1', f:'<div class="org-name">Кулешова Надежда Васильевна</div><div class="org-pro">Зам. декана по внеучебной работе</div>'}, 'Dean', 'Заместитель декана по внеучебной работе'],
              [{v:'deputy2', f:'<div class="org-name">Толпеко Ирина Васильевна</div><div class="org-pro">Зам. декана</div>'}, 'Dean', 'Заместитель декана'],
              [{v:'secret', f:'<div class="org-name">Секретариат</div>'}, 'Dean', 'Секретариат'],
            ]);
            var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));
            chart.draw(data, {allowHtml:true});
          }
    </script>

    <div id="chart_div" style="width: 100%;"></div>
			</div>

		</div><!-- End Content row -->
		<div class="three columns">
			<div class="show-for-small left_widget">
				<?php dynamic_sidebar( 'left_widget' ); ?>
			</div>
			<?php get_sidebar(); ?>
	
		</div>
		
<?php get_footer(); ?>
