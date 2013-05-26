<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main_admin'); ?>
<div class="container-fluid content">
<div class="row-fluid">

<div class="span12">

<div class="span10">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>

<div class="span2 last">

<div class="accordion" id="accordion2">
				<div class="accordion-group">
					<div class="accordion-heading">
						<a class="accordion-toggle collapsed" data-toggle="collapse"
							data-parent="#accordion2" href="#collapse1">Menu</a>
					</div>
					<div id="collapse1" class="accordion-body collapse in">
						<div class="accordion-inner">
						
							<?php
		//$this->beginWidget('zii.widgets.CPortlet', array(
		//	'title'=>'Operations',
		//));
		
	
	
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		//$this->endWidget();
	?>

						</div>
					</div>
				</div>


			</div>

	
	
	
	
	
	
	
	
	
	
	<?php
		//$this->beginWidget('zii.widgets.CPortlet', array(
		//	'title'=>'Operations',
		//));
		
	
	
// 		$this->widget('zii.widgets.CMenu', array(
// 			'items'=>$this->menu,
// 			'htmlOptions'=>array('class'=>'operations'),
// 		));
		//$this->endWidget();
	?>
	

	
	

</div>

</div>

</div>
</div>



<?php $this->endContent(); ?>