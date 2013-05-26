<div class="container-fluid content mt50">
	<div class="row-fluid">
		<div class="span12"></div>
	</div>
</div>

<div class="container-fluid content">
	<div class="row-fluid">
	<div class="span12 mb10">
		<h2 class="tac"><?php echo CHtml::image(H::getKAvatar($this->page->m->id))?><?php echo $this->page->m->name;?>
		<?php echo CHtml::link('<i class="iconic-chat cblack"></i>',array('chat/room','id'=>$this->page->m->id),array('class'=>'btn', 'target'=>'_blank','data-toggle'=>'tooltip','title'=>'Chat Room'))?>
		<?php echo CHtml::link('<i class="icon-user cblack fz28"></i>',array('profile/lihat','id'=>$this->page->m->usrid,'s'=>$this->page->m->id),array('class'=>'btn', 'data-toggle'=>'tooltip','title'=>'Teacher'))?>
		</h2>
		</div>
		<div class="span11">
			<div class="span5">
<?php
// kiri
?>		
<div class="span12">
<?php
// form wall utama
?>


<div class="form">
<?php
$form = $this->beginWidget ( 'bootstrap.widgets.TbActiveForm', array (
		'id' => 'wall-form',
		'type' => 'vertical',
		'htmlOptions' => array (
				'class' => 'form-vertical' 
		),
		'clientOptions' => array (
				'validateOnSubmit' => true 
		) 
) );
?>

<?php echo $form->redactorRow($wall,'isi',array('class'=>'span8','maxlength'=>255)); ?>
<?php echo CHtml::submitButton('Send',array('class'=>'btn btn-primary btn-mini mt10')); ?>
<?php $this->endWidget(); ?>


</div>
<!-- form -->

</div>


<div class="span12">
<div id="posts">
<?php foreach($ws as $post): ?>
<div class="span12 batas mt50"></div>
<div class="post span11">
<?php 
$rs=Respon::model()->findAllByAttributes(array('wallid'=>$post->id));
$out='';
foreach ($rs as $v) {
	$out.='<div class="span12 respon">';
	$out.='<div class="span1 imgrespon">'.CHtml::image(H::getAvatar($v->usrid)).'</div>';
	$out.='<div class="span8">'.$v->isi.'</div>';
	$out.='</div>';

}
$this->widget('bootstrap.widgets.TbBox', array(
		'title' => '<span class="imgwall">'.CHtml::image(H::getAvatar($post->usr->id)).'</span>'.$post->usr->nama.'  <span class="label label-info" style="padding: 2px;">'.date("j-M-Y H:m:s", strtotime($post->created)).'</span>',
		//'headerIcon' => 'icon-user',
		'htmlOptions' => array (
		'class' => 'span12'
		),
		'content' => $post->isi.$out
));
?>
<?php  echo $this->renderPartial('_respon_form', array('id'=>$post->id)); ?>
    </div>

<?php endforeach; ?>
</div><!-- end id post -->
</div>


<?php

$this->widget ( 'ext.yiinfinite-scroll.YiinfiniteScroller', array (
		'contentSelector' => '#posts',
		'itemSelector' => 'div.post',
		'loadingText' => 'Loading...',
		'donetext' => 'End',
		'pages' => $pages 
) );
?>
		
<?php
// end kiri
?>			
</div>
<div class="span1"></div>
<div class="span5">
<?php
// kanan
?>			


<div class="span12">
            <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#siswa" data-toggle="tab">Siswa</a></li>
              <li><a href="#materi" data-toggle="tab">Materi</a></li>
              <li><a href="#file" data-toggle="tab">File</a></li>
              <li><a href="#soal" data-toggle="tab">Soal</a></li>

            </ul>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade in active" id="siswa">
<div class="span12">              
<div class="span12"><h4>Data Siswa</h4></div>  
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$gs,
	'itemView'=>'_siswa',
)); ?>        
</div>       
              </div>
              <div class="tab-pane fade" id="materi">
<div class="span12">  
<div class="span12"><h4>Data Materi    
<?php 
if (Yii::app()->user->getState('status')==1) {
	echo CHtml::link('<i class="icon-plus"></i>',array('in/tambah-materi','id'=>$this->page->m->id),array('class'=>'btn btn-mini'));
}
?>
</h4></div>            
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$materis,
	'itemView'=>'_materi',
)); ?>        
</div>                
              </div>
              <div class="tab-pane fade" id="file">
<div class="span12">  
<div class="span12"><h4>Data File     
<?php 
if (Yii::app()->user->getState('status')==1) {
	echo CHtml::link('<i class="icon-plus"></i>',array('in/tambah-file','id'=>$this->page->m->id),array('class'=>'btn btn-mini'));
}
?>
</h4>
</div>            
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$files,
	'itemView'=>'_file',
)); ?>        
</div>                
              </div>  
              
              
              <div class="tab-pane fade" id="soal">
<div class="span12">  
<div class="span12"><h4>Data Soal    
<?php 
if (Yii::app()->user->getState('status')==1) {
	echo CHtml::link('<i class="icon-plus"></i>',array('in/tambah-soal','id'=>$this->page->m->id),array('class'=>'btn btn-mini'));
}
?>
</h4>
</div>            
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$soals,
	'itemView'=>'_soal',
)); ?>        
</div>                
              </div>               
              
                          

            </div>
          </div>



</div>
</div>
<div class="span12">
<?php
// footer
?>		
		</div>
	</div>
</div>



<?php
Yii::app ()->clientScript ->registerScript('tooltip',
'
$(function () {
        $("[data-toggle=\'tooltip\']").tooltip();
    });			
'
,CClientScript::POS_END);
?> 



