<div class="container-fluid content mt100">
	<div class="row-fluid">
		<div class="span12">
				</div>
	</div>
</div>

<div class="container-fluid content">
	<div class="row-fluid">
		<div class="span12">
			<div class="span4">
			<div class="span12"><h3><?php echo $u->nama; ?> 
			<?php echo CHtml::link('<i class="icon-pencil"></i>',array('profile/change'),array('class'=>'btn btn-mini'))?>
			<?php echo CHtml::link('<i class="icon-lock"></i>',array('profile/change-password'),array('class'=>'btn btn-mini'))?>
			<?php echo CHtml::link('<i class="icon-picture"></i>',array('profile/change-avatar'),array('class'=>'btn btn-mini'))?>
			</h3></div>
			<div class="span12"><?php echo CHtml::image($this->page->avatar); ?></div>
			<div class="span12"><?php echo $this->renderPartial('profile'); ?></div>
			</div>
			<div class="span7">
			<div class="span12"><h3>Kelas yang Anda Ajar  
			<?php echo CHtml::link('<i class="icon-plus"></i>',array('kelas/tambah'),array('class'=>'btn btn-mini'))?>
			</h3></div>
			
			<?php
			$i0=0;
			foreach ($ms as $v) {
				if ($i0==0 ||  $i0%4==0) {
					echo '<div class="span12">';
				}
				echo '<div class="span3">';
				echo '<div class="span12 imgmapel">'.CHtml::image(H::getKAvatar($v->id)).'</div>';
				echo '<div class="span12 mt10">';
				echo CHtml::link('<i class="icon-pencil"></i>',array('kelas/edit', 'id'=>$v->id),array('class'=>'btn btn-mini'));
				echo '    ';
				echo CHtml::link('<i class="icon-picture"></i>',array('kelas/edit-kelas-avatar','id'=>$v->id),array('class'=>'btn btn-mini'));
			    echo '</div>';
				echo '<div class="span12 mt10"><span class="label label-info">Kode Room : '.strtolower($v->code).'</span></div>';
				echo '<div class="span12 h70"><h4>'.ucfirst($v->name).'</h4></div>';
				echo '<div class="span12 tar">'.CHtml::link('Masuk', array('in/room','id'=>$v->id), array('class'=>'btn btn-mini btn-danger')).'</div>';
				echo '</div>';
				$i0++;
				if ( $i0%4==0) {
					echo '</div>';
				}
			}	
			if ( $i0%4!=0) {
				echo '</div>';
			}
		?>

			
			</div>
		</div>
		<div class="span12">
		
		</div>
	</div>
</div>


