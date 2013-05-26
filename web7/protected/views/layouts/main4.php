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
          <a class="brand" href="<?php echo Yii::app()->baseUrl; ?>">Study Group</a>
          <div class="nav-collapse collapse pull-right">
            <ul class="nav">
              <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li><?php echo CHtml::link('Tambah Materi', array('in/tambah-materi', 'id'=>$this->page->m->id))?></li>
                          <li><?php echo CHtml::link('Tambah File', array('in/tambah-file', 'id'=>$this->page->m->id))?></li>
                          <li><?php echo CHtml::link('Tambah Soal', array('in/tambah-soal', 'id'=>$this->page->m->id))?></li>
                          <li class="divider"></li>
                          <li class="nav-header">Nav header</li>
                          <li><a href="#">Separated link</a></li>
                          <li><a href="#">One more separated link</a></li>
                        </ul>
                      </li>
              <li><?php echo CHtml::link(Yii::app()->user->getState('nama'), array('site/index'));?></li>
              <li><?php echo CHtml::link('Logout', array('site/logout'));?></li>
            </ul>
          </div><!--/.nav-collapse -->
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
