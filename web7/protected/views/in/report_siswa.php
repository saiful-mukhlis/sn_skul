<h4>Report Siswa</h4>
<h5>Nama : <?php echo $u->nama?></h5>

<canvas id="canvas" height="500" width="600"></canvas>

<div class="form-actions">
		<?php echo '   '.CHtml::link('Back', array('in/room','id'=>$id), array('class'=>'btn btn-info'))?>
		</div>

<?php 
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile(
Yii::app()->baseUrl . '/js/Chart.min.js',
CClientScript::POS_END
);
$a='';
$b='';
$i1=0;
foreach ($ns as $v) {
	if ($i1!=0) {
		$a.=',';
		$b.=',';
	}
	$a.='"'.$v->soal->title.'"';
	$b.=$v->nilai;
	$i1++;
}

$cs->registerScript('chart',
		'
var lineChartData = {
			labels : ['.$a.'],
			datasets : [
				{
					fillColor : "rgba(151,187,205,0.5)",
					strokeColor : "rgba(151,187,205,1)",
					pointColor : "rgba(151,187,205,1)",
					pointStrokeColor : "#fff",
					data : ['.$b.']
				}
			]
			
		}

	var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);
	

',
		CClientScript::POS_END);


?>



