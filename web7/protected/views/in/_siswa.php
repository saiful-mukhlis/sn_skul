<div class="span5 well" style="margin-left: 10px; height: 300px;">
<div class="span12">
<?php echo CHtml::link(CHtml::image(H::getAvatar($data->usr->id)), array('profile/lihat','id'=>$data->usr->id, 's'=>$this->page->m->id), array('class'=>'btn'))?>
</div>
<div class="span12">
<h5><?php echo $data->usr->nama;?></h5>
</div>
<?php 
if (Yii::app()->user->getState('status')==1) {
$soals=Soal::model()->findAllByAttributes(array('mapelid'=>$this->page->m->id));
foreach ($soals as $v) {
	$sql = 'SELECT id FROM jawab where usrid='.$data->usr->id.' and soalid='.$v->id;
	$idjawaban = Yii::app()->db->createCommand($sql)->queryScalar();
	if ($idjawaban!=null) {
		$sql2 = 'SELECT nilai FROM nilai where usrid='.$data->usr->id.' and soalid='.$v->id;
		$n = Yii::app()->db->createCommand($sql2)->queryScalar();
		if ($n==null) {
			$n=0;
		}
		echo CHtml::link($n,array('in/nilai-jawaban','id'=>$idjawaban,'s'=>$this->page->m->id),array('class'=>'btn btn-mini mt10','data-toggle'=>'tooltip','title'=>'Jawaban dari soal "'.$v->title.'"'));
		echo '   ';
		//echo CHtml::link('<span class="label label-info mt10">Jawaban >> "'.$v->title.'"</span>', array('in/lihat-jawaban','id'=>$idjawaban));
	}

}
echo CHtml::link('<i class="icon-tasks"></i>',array('in/report-siswa','id'=>$data->usr->id,'s'=>$this->page->m->id),array('class'=>'btn btn-mini btn-info mt10','data-toggle'=>'tooltip','title'=>'Report Siswa'));

}else{
	if (Yii::app()->user->getState('id')===$data->usr->id) {
		
$soals=Soal::model()->findAllByAttributes(array('mapelid'=>$this->page->m->id));
foreach ($soals as $v) {
	$sql = 'SELECT id FROM jawab where usrid='.$data->usr->id.' and soalid='.$v->id;
	$idjawaban = Yii::app()->db->createCommand($sql)->queryScalar();
	if ($idjawaban!=null) {
		$sql2 = 'SELECT nilai FROM nilai where usrid='.$data->usr->id.' and soalid='.$v->id;
		$n = Yii::app()->db->createCommand($sql2)->queryScalar();
		if ($n==null) {
			$n=0;
		}
		echo CHtml::link($n,'#',array('class'=>'btn btn-mini mt10','data-toggle'=>'tooltip','title'=>'Nilai Anda untuk soal "'.$v->title.'" adalah "'.$n.'"'));
		echo '   ';
		//echo CHtml::link('<span class="label label-info mt10">Jawaban >> "'.$v->title.'"</span>', array('in/lihat-jawaban','id'=>$idjawaban));
	}

}
echo CHtml::link('<i class="icon-tasks"></i>',array('in/report-siswa','id'=>$data->usr->id,'s'=>$this->page->m->id),array('class'=>'btn btn-mini btn-info mt10','data-toggle'=>'tooltip','title'=>'Report Nilai Anda'));


	}
}

?>
</div>



