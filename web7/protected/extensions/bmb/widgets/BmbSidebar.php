<?php
class BmbSidebar extends CWidget {
	public function init() {
	}
	public function run() {
		$ukuran=Ukuran::model()->findAll(array('order'=>'short'));
		$warna=Warna::model()->findAll(array('order'=>'nama'));
		$bahan=Bahan::model()->findAll(array('order'=>'nama'));
		
		
		echo '<div class="span2o5"><div class="span12">';
		echo '<div class="accordion" id="accordion2">';
		echo '<div class="accordion-group"><div class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse1">';
		echo 'UKURAN';
		echo '</a></div><div id="collapse1" class="accordion-body collapse in"><div class="accordion-inner"><ul>';
		
		foreach ($ukuran as $v) {
			echo '<li><i class="icon-check"></i>  <a>'.$v->nama.'</a></li>';
		}
		echo '</ul></div></div></div>';
		
		
		echo '<div class="accordion-group"><div class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2">';
		echo 'WARNA';
		echo '</a></div><div id="collapse2" class="accordion-body collapse in"><div class="accordion-inner"><ul>';
		
		foreach ($warna as $v) {
			echo '<li><i class="icon-check"></i>  <a>'.$v->nama.'</a></li>';
		}
		echo '</ul></div></div></div>';
		
		
		echo '<div class="accordion-group"><div class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse3">';
		echo 'BAHAN';
		echo '</a></div><div id="collapse3" class="accordion-body collapse in"><div class="accordion-inner"><ul>';
		
		foreach ($bahan as $v) {
			echo '<li><i class="icon-check"></i>  <a>'.$v->nama.'</a></li>';
		}
		echo '</ul></div></div></div>';
		echo '</div></div></div>';
		        
	}
}
