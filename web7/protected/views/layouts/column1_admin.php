<?php $this->beginContent('//layouts/main_admin'); ?>
<div class="container-fluid">
  <div class="row-fluid">
    <?php echo A::navSimple();?>
  	<div class="span12" style="margin: 0 auto !important;float:none;">
	<?php echo $content; ?>
  	</div>
  </div>
</div>
	
	
<?php $this->endContent(); ?>