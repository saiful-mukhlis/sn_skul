<!doctype html>
<?php
echo H::ie();
echo CHtml::openTag('head');
$this->renderDynamic('H::meta',$this->title, $this->description, $this->keywords);
H::css();
echo H::ico();
echo CHtml::closeTag('head');
echo CHtml::openTag('body');
$this->widget('ext.bmb.widgets.BmbUpgradeBrowser');



//nav
?>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Study Group</a>
          <div class="nav-collapse collapse pull-right">
            <ul class="nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><?php echo CHtml::link('User', array('usr/admin'));?></li>
                  <li><?php echo CHtml::link('Kelas Room', array('mapel/admin'));?></li>
                  <li><?php echo CHtml::link('Materi', array('materi/admin'));?></li>
                  <li><?php echo CHtml::link('File', array('file/admin'));?></li>
                  <li><?php echo CHtml::link('Wall Mind', array('wall/admin'));?></li>
                  <li><?php echo CHtml::link('Respone', array('respon/admin'));?></li>
                </ul>
              </li>
              <li><?php echo CHtml::link('Logout', array('site/logout'));?></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

<div class="container-fluid content mt100">
	<div class="row-fluid">
		<div class="span12">

		</div>
	</div>
</div>
<?php 

echo $content;
echo H::footer();
$this->widget('ext.bmb.widgets.BmbLoadJQuery');
//$this->widget('ext.bmb.widgets.BmbGA');
echo CHtml::closeTag('body');
?>
</html>
