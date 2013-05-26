<style type="text/css">

ul.columns {
	width: 960px;
	list-style: none;
	margin: 0 auto; padding: 0;
}
ul.columns li {
	width: 220px;
	float: left; display: inline;
	margin: 10px; padding: 0;
	position: relative;
}
ul.columns li:hover {z-index: 99;}

ul.columns li img {
	position: relative;
	filter: alpha(opacity=98);
	opacity: 0.9;
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=30)";
}
ul.columns li:hover img{
	z-index: 999;
	filter: alpha(opacity=100);
	opacity: 1;
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
}

ul.columns li .info {
	position: absolute;
	left: -10px; top: -10px;
	padding: 210px 10px 20px;
	width: 220px;
	display: none;
	background: #fff;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
ul.columns li:hover .info {display: block; background-color: #fff;
    border: 1px solid #ccc;
    border: 1px solid rgba(0, 0, 0, 0.2);
    -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);}

ul.columns li h2 {
	font-size: 1.2em;
	font-weight: normal;
	text-transform: uppercase;
	margin: 0; padding: 10px 0;
}
ul.columns li p {padding: 0; margin: 0;}
</style>
<?php
$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'About',
);
?>
	<div class="navbar  navbar-fixed-top   navbar-inverse">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse"
					data-target=".nav-collapse"> <span class="icon-bar"></span> <span
					class="icon-bar"></span> <span class="icon-bar"></span>
				</a> <a class="brand" href="#">Shop from our stores</a>
				<div class="nav-collapse collapse">
					<p class="navbar-text pull-right">
						<a href="#" class="navbar-link">Log in</a>
					</p>
					<ul class="nav">
						<li class="active"><a href="#">Scuba</a></li>
						<li><a href="#about">Camping</a></li>
						<li><a href="#contact">Snorkeling</a></li>
					</ul>
				</div>
				<!--/.nav-collapse -->
			</div>
		</div>
	</div>

	<div class="container">

		<!-- Main hero unit for a primary marketing message or call to action -->
		<div class="row-fluid lead">
  			<div class="span12">
			<?php echo CHtml::link(CHtml::image(Yii::app()->baseUrl.'/img/benner/gmb.jpg','Alt', array('width'=>'1170', 'height'=>'200')),array('site/page', 'view'=>'d1')); ?>
			</div>
		</div>

		
		
		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a class="btn btn-navbar" data-toggle="collapse"
					data-target=".nav-collapse"> <span class="icon-bar"></span> <span
					class="icon-bar"></span> <span class="icon-bar"></span>
					</a>
				<div class="nav-collapse collapse">
<?php 
$this->widget ( 'bootstrap.widgets.TbMenu', array (
		'type' => 'dropdown',
		'items' => $this->genItem () 
) );
?>
				</div>
				<!--/.nav-collapse -->
				</div>
			</div>
		</div>
		
		
		
		
		
	<div class="row">
		<div class="span12">
			<div class="row">
		<div class="span3">
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
        </div><!--/span-->
        
        <div class="span9">
        
        				<h4><?php echo CHtml::link('Aqua Marine Products')?></h4>
<p>Aqua Marine Products provides a range of water removal products perfect for comfort after swimming, scuba diving and snorkelling. 
The Aqua Marine Products range includes Swimeze to remove trapped water from the ear, Equaleze to aid equalisation when swimming under water for a length of time and Talceze to dry skin for easy donning and doffing of a wetsuit or competition swimwear.</p>
        
        
        <ul class="columns">
	<li>
		<?php echo CHtml::link(CHtml::image(Yii::app()->baseUrl.'/img/product/p1.jpg'),array('site/page', 'view'=>'d1')); ?>
		<h2><?php echo CHtml::link('Mares Cruise Free Dive',array('site/page', 'view'=>'d1')); ?></h2>
        <div class="info">
			<h2><?php echo CHtml::link('Mares Cruise Free Dive',array('site/page', 'view'=>'d1')); ?></h2>
            <p>$ 50.00</p>
				<p>
					<a class="btn" href="#">View details &raquo;</a></p>
        </div>

	</li>
	<li>
		<?php echo CHtml::link(CHtml::image(Yii::app()->baseUrl.'/img/product/p1.jpg'),array('site/page', 'view'=>'d1')); ?>
		<h2><?php echo CHtml::link('Mares Cruise Free Dive',array('site/page', 'view'=>'d1')); ?></h2>
        <div class="info">
			<h2><?php echo CHtml::link('Mares Cruise Free Dive',array('site/page', 'view'=>'d1')); ?></h2>
            <p>$ 50.00</p>
				<p>
					<a class="btn" href="#">View details &raquo;</a></p>
        </div>

	</li>
	
	<li>
		<?php echo CHtml::link(CHtml::image(Yii::app()->baseUrl.'/img/product/p1.jpg'),array('site/page', 'view'=>'d1')); ?>
		<h2><?php echo CHtml::link('Mares Cruise Free Dive',array('site/page', 'view'=>'d1')); ?></h2>
        <div class="info">
			<h2><?php echo CHtml::link('Mares Cruise Free Dive',array('site/page', 'view'=>'d1')); ?></h2>
            <p>$ 50.00</p>
				<p>
					<a class="btn" href="#">View details &raquo;</a></p>
        </div>

	</li>
	<li>
		<?php echo CHtml::link(CHtml::image(Yii::app()->baseUrl.'/img/product/p1.jpg'),array('site/page', 'view'=>'d1')); ?>
		<h2><?php echo CHtml::link('Mares Cruise Free Dive',array('site/page', 'view'=>'d1')); ?></h2>
        <div class="info">
			<h2><?php echo CHtml::link('Mares Cruise Free Dive',array('site/page', 'view'=>'d1')); ?></h2>
            <p>$ 50.00</p>
				<p>
					<a class="btn" href="#">View details &raquo;</a></p>
        </div>

	</li>
	
	<li>
		<?php echo CHtml::link(CHtml::image(Yii::app()->baseUrl.'/img/product/p1.jpg'),array('site/page', 'view'=>'d1')); ?>
		<h2><?php echo CHtml::link('Mares Cruise Free Dive',array('site/page', 'view'=>'d1')); ?></h2>
        <div class="info">
			<h2><?php echo CHtml::link('Mares Cruise Free Dive',array('site/page', 'view'=>'d1')); ?></h2>
            <p>$ 50.00</p>
				<p>
					<a class="btn" href="#">View details &raquo;</a></p>
        </div>

	</li>
	<li>
		<?php echo CHtml::link(CHtml::image(Yii::app()->baseUrl.'/img/product/p1.jpg'),array('site/page', 'view'=>'d1')); ?>
		<h2><?php echo CHtml::link('Mares Cruise Free Dive',array('site/page', 'view'=>'d1')); ?></h2>
        <div class="info">
			<h2><?php echo CHtml::link('Mares Cruise Free Dive',array('site/page', 'view'=>'d1')); ?></h2>
            <p>$ 50.00</p>
				<p>
					<a class="btn" href="#">View details &raquo;</a></p>
        </div>

	</li>
	
	<li>
		<?php echo CHtml::link(CHtml::image(Yii::app()->baseUrl.'/img/product/p1.jpg'),array('site/page', 'view'=>'d1')); ?>
		<h2><?php echo CHtml::link('Mares Cruise Free Dive',array('site/page', 'view'=>'d1')); ?></h2>
        <div class="info">
			<h2><?php echo CHtml::link('Mares Cruise Free Dive',array('site/page', 'view'=>'d1')); ?></h2>
            <p>$ 50.00</p>
				<p>
					<a class="btn" href="#">View details &raquo;</a></p>
        </div>

	</li>
	<li>
		<?php echo CHtml::link(CHtml::image(Yii::app()->baseUrl.'/img/product/p1.jpg'),array('site/page', 'view'=>'d1')); ?>
		<h2><?php echo CHtml::link('Mares Cruise Free Dive',array('site/page', 'view'=>'d1')); ?></h2>
        <div class="info">
			<h2><?php echo CHtml::link('Mares Cruise Free Dive',array('site/page', 'view'=>'d1')); ?></h2>
            <p>$ 50.00</p>
				<p>
					<a class="btn" href="#">View details &raquo;</a></p>
        </div>

	</li>
	
	<li>
		<?php echo CHtml::link(CHtml::image(Yii::app()->baseUrl.'/img/product/p1.jpg'),array('site/page', 'view'=>'d1')); ?>
		<h2><?php echo CHtml::link('Mares Cruise Free Dive',array('site/page', 'view'=>'d1')); ?></h2>
        <div class="info">
			<h2><?php echo CHtml::link('Mares Cruise Free Dive',array('site/page', 'view'=>'d1')); ?></h2>
            <p>$ 50.00</p>
				<p>
					<a class="btn" href="#">View details &raquo;</a></p>
        </div>

	</li>
	<li>
		<?php echo CHtml::link(CHtml::image(Yii::app()->baseUrl.'/img/product/p1.jpg'),array('site/page', 'view'=>'d1')); ?>
		<h2><?php echo CHtml::link('Mares Cruise Free Dive',array('site/page', 'view'=>'d1')); ?></h2>
        <div class="info">
			<h2><?php echo CHtml::link('Mares Cruise Free Dive',array('site/page', 'view'=>'d1')); ?></h2>
            <p>$ 50.00</p>
				<p>
					<a class="btn" href="#">View details &raquo;</a></p>
        </div>

	</li>
</ul>
        
        </div>
				
			</div>
		</div>
	</div>
		
		
		

		<!-- Example row of columns -->
		<div class="row">
			<div class="span4">
				<h2>Heading</h2>
				<p>Donec id elit non mi porta gravida at eget metus. Fusce
					dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
					ut fermentum massa justo sit amet risus. Etiam porta sem malesuada
					magna mollis euismod. Donec sed odio dui.</p>
				<p>
					<a class="btn" href="#">View details &raquo;</a>
				</p>
			</div>
			<div class="span4">
				<h2>Heading</h2>
				<p>Donec id elit non mi porta gravida at eget metus. Fusce
					dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
					ut fermentum massa justo sit amet risus. Etiam porta sem malesuada
					magna mollis euismod. Donec sed odio dui.</p>
				<p>
					<a class="btn" href="#">View details &raquo;</a>
				</p>
			</div>
			<div class="span4">
				<h2>Heading</h2>
				<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in,
					egestas eget quam. Vestibulum id ligula porta felis euismod semper.
					Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum
					nibh, ut fermentum massa justo sit amet risus.</p>
				<p>
					<a class="btn" href="#">View details &raquo;</a>
				</p>
			</div>
		</div>
		
		
		
		
		
		
		
		
<ul class="columns">
	<li>
		<?php echo CHtml::link(CHtml::image(Yii::app()->baseUrl.'/img/product/p1.jpg'),array('site/page', 'view'=>'d1')); ?>
        <div class="info">
			<h2><?php echo CHtml::link('Mares Cruise Free Dive',array('site/page', 'view'=>'d1')); ?></h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce
					dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
					ut fermentum massa justo sit amet risus. Etiam porta sem malesuada
					magna mollis euismod. Donec sed odio dui.</p>
				<p>
					<a class="btn" href="#">View details &raquo;</a></p>
        </div>

	</li>
	<li>
		<?php echo CHtml::link(CHtml::image(Yii::app()->baseUrl.'/img/product/p1.jpg'),array('site/page', 'view'=>'d1')); ?>
        <div class="info">
			<h2><?php echo CHtml::link('Mares Cruise Free Dive',array('site/page', 'view'=>'d1')); ?></h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce
					dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
					ut fermentum massa justo sit amet risus. Etiam porta sem malesuada
					magna mollis euismod. Donec sed odio dui.</p>
				<p>
					<a class="btn" href="#">View details &raquo;</a></p>
        </div>

	</li>
	<li>
		<?php echo CHtml::link(CHtml::image(Yii::app()->baseUrl.'/img/product/p1.jpg'),array('site/page', 'view'=>'d1')); ?>
        <div class="info">
			<h2><?php echo CHtml::link('Mares Cruise Free Dive',array('site/page', 'view'=>'d1')); ?></h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce
					dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
					ut fermentum massa justo sit amet risus. Etiam porta sem malesuada
					magna mollis euismod. Donec sed odio dui.</p>
				<p>
					<a class="btn" href="#">View details &raquo;</a></p>
        </div>

	</li>
	<li>
		<?php echo CHtml::link(CHtml::image(Yii::app()->baseUrl.'/img/product/p1.jpg'),array('site/page', 'view'=>'d1')); ?>
        <div class="info">
			<h2><?php echo CHtml::link('Mares Cruise Free Dive',array('site/page', 'view'=>'d1')); ?></h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce
					dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
					ut fermentum massa justo sit amet risus. Etiam porta sem malesuada
					magna mollis euismod. Donec sed odio dui.</p>
				<p>
					<a class="btn" href="#">View details &raquo;</a></p>
        </div>

	</li>
</ul>












		<hr>

		<footer>
		<p class="muted credit">
			&copy; 2012 <span title="genmoodbreakers.com">GenMoodBreakers</span>
			Inc. All rights reserved.
		</p>
		</footer>

	</div>
	<!-- /container -->




