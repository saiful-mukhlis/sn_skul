<?php
class BmbNavSimple extends CWidget {
	public function init() {
	}
	public function run() {
		echo '<div class="navbar navbar-fixed-top navbar-inverse">';
		echo '<div class="navbar-inner">';
		echo '<div class="container-fluid">';
		echo '<a class="btn btn-navbar" data-toggle="collapse"	data-target=".nav-collapse"> <span class="icon-bar"></span><span class="icon-bar"></span> <span class="icon-bar"></span></a>';
		echo '<a class="brand" href="#">Shop from our stores</a>';
		echo '<div class="nav-collapse collapse">';
		echo '<p class="navbar-text pull-right"> <a href="#" class="navbar-link">Log in</a> </p>';
		echo '<ul class="nav">';
		echo '<li class="active"><a href="#">Scuba</a></li>';
		echo '<li><a href="#about">Camping</a></li>';
		echo '<li><a href="#contact">Snorkeling</a></li>';
		echo '</ul>';
		echo '</div></div></div></div>';
	}
}
