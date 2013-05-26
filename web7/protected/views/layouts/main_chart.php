<!doctype html>
<?php
echo H::ie();
echo CHtml::openTag('head');
$this->renderDynamic('H::meta',$this->title, $this->description, $this->keywords);
//H::css();
echo H::ico();
echo CHtml::closeTag('head');
echo CHtml::openTag('body');
$this->widget('ext.bmb.widgets.BmbUpgradeBrowser');


echo $content;




echo H::footer();
//$this->widget('ext.bmb.widgets.BmbLoadJQuery');
//$this->widget('ext.bmb.widgets.BmbGA');
echo CHtml::closeTag('body');
?>
</html>
