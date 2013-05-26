<div class="container-fluid content">
	<div class="row-fluid">
		<div class="span12"><h4>Jawab Soal</h4></div>
	</div>
</div>

<div class="container-fluid content">
	<div class="row-fluid">
		<div class="span12"><h5><?php echo $soal->title;?></h5></div>
		<div class="span12"><?php echo $soal->isi;?></div>
	</div>
</div>

<div class="container-fluid content">
	<div class="row-fluid">
		<div class="span12">
		<?php echo $this->renderPartial('form_jawab_soal', array('model'=>$model, 'id'=>$soal->mapelid)); ?>
		</div>
	</div>
</div>









