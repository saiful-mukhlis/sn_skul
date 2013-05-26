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
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Registration <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><?php echo CHtml::link('Sebagai Siswa', array('site/daftar-siswa'));?></li>
                  <li><?php echo CHtml::link('Sebagai Guru', array('site/daftar-guru'));?></li>
                </ul>
              </li>
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
