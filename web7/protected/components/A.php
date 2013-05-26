<?php
class A {
	public static function nav(){
		return  '<div class="navbar mt-nav">
              <div class="navbar-inner">
                <div class="container">
                  <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </a>
                  <a class="brand" href="#">Administrator Area</a>
                  <div class="nav-collapse collapse navbar-responsive-collapse">
                    <ul class="nav">
                      <li>'.CHtml::link('Home', array('site/index')).'</li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Master Web <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        <li>'.CHtml::link('Menu', array('usr/admin')).'</li>
                        <li>'.CHtml::link('Item Menu', array('product/admin')).'</li>
                        <li>'.CHtml::link('Tag', array('type/admin')).'</li>
						<li>'.CHtml::link('Page', array('menu/index')).'</li>
                          
                        </ul>
                      </li>
								
					<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Master Data <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        <li>'.CHtml::link('Guru', array('guru/admin')).'</li>
                        <li>'.CHtml::link('Mapel', array('mapel/admin')).'</li>
                        <li>'.CHtml::link('Periode', array('periode/admin')).'</li>
                        		<li class="dropdown-submenu">
                        			'.CHtml::link('Hari', array('hari/admin')).'
                        				<ul class="dropdown-menu">
                        					<li>'.CHtml::link('Data Hari', array('hari/admin')).'</li>
                        					<li>'.CHtml::link('Tambah Hari', array('hari/create')).'</li>
                        													
                        				</ul>
                      			</li>
						<li>'.CHtml::link('Hari', array('hari/admin')).'</li>
						<li>'.CHtml::link('Jam(Waktu)', array('jam/admin')).'</li>
						<li>'.CHtml::link('Kelas', array('kelas/admin')).'</li>
						<li>'.CHtml::link('Ruang (Kelompok Belajar)', array('ruang/admin')).'</li>
                        <li>'.CHtml::link('Siswa', array('siswa/admin')).'</li>  
                        </ul>
                      </li>
                      
					  <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Report <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        <li>'.CHtml::link('Jadwal', array('usr/admin')).'</li>
                        <li>'.CHtml::link('Nilai Raport', array('product/admin')).'</li>

                          
                        </ul>
                      </li>								
								
                    </ul>
								
								

                    <ul class="nav pull-right">
                      <li>'.CHtml::link('Logout', array('site/logout')).'</li>
                    </ul>
                  </div><!-- /.nav-collapse -->
                </div>
              </div><!-- /navbar-inner -->
            </div><!-- /navbar -->';
	} 
	public static function hero(){
		return '<div class="container-fluid hero">
            <h1>Genreakers</h1>
            <p>Scuba diving is a form of underwater diving in which a diver uses a scuba set to breathe underwater.</p>
          </div>';
	}
	public static function sidebar(){
		return '<div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Sidebar</li>
              <li class="active"><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li class="nav-header">Sidebar</li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li class="nav-header">Sidebar</li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->';
	}
	
	
	public static function css()
	{
		$cs=Yii::app()->getClientScript();
		$cs->registerCssFile(Yii::app()->baseUrl.'/css/bootstrap/css/bootstrap.css');
		$cs->registerMetaTag('width=device-width, initial-scale=1.0', 'viewport');
		$cs->registerCssFile(Yii::app()->baseUrl.'/css/bootstrap/css/bootstrap-responsive.css');
		$cs->registerCssFile(Yii::app()->baseUrl.'/css/bootstrap/css/bootstrap-yii.css');
		$cs->registerCssFile(Yii::app()->baseUrl.'/css/bootstrap/css/bootstrap-yii.css');
		$cs->scriptMap['jquery-ui.css'] = Yii::app()->baseUrl . '/css/bootstrap/css/jquery-ui-bootstrapx.css';
		$cs->registerCssFile(Yii::app()->baseUrl.'/css/bootstrap/css/jquery-ui-bootstrap.css');
	
		$cs->scriptMap=array(
				'jquery.js'=>false,
				'jquery-ui.min.js'=>false,
				'jquery-ui.css'=>false,
		);
	
		$cs->registerCssFile(Yii::app()->baseUrl.'/css/q-responsive.css');
		$cs->registerCssFile(Yii::app()->baseUrl.'/css/style.css');
		
		//$cs->registerCssFile(Yii::app()->baseUrl.'/css/flat-ui.css');
	
		$cs->registerScriptFile(Yii::app()->baseUrl . '/css/bootstrap/js/bootstrap.bootbox.min.js', CClientScript::POS_END);
		$cs->registerScriptFile(Yii::app()->baseUrl . '/css/bootstrap/js/bootstrap.min.js', CClientScript::POS_END);
		//$cs->registerScriptFile(Yii::app()->baseUrl . '/css/bootstrap/js/jqueryui.min.js', CClientScript::POS_END);
		//$cs->registerScriptFile(Yii::app()->baseUrl . '/css/bootstrap/js/', CClientScript::POS_END);
		//$cs->registerScriptFile(Yii::app()->baseUrl . '/js/custom_checkbox_and_radio.js', CClientScript::POS_END);
		//$cs->registerScriptFile(Yii::app()->baseUrl . '/js/custom_radio.js', CClientScript::POS_END);
	
	}

}
