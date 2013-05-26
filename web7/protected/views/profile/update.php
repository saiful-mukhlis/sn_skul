<?php

?>

<h4>Profile #<?php echo $model->nama; ?></h4>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>