<?php

class ImagesController extends Controller
{
	public function actions()
	{
		return array(
				'size' => array(
						'class'   => 'ext.resizer.ResizerAction',
						'options' => array(
								// Tmp dir to store cached resized images
								'cache_dir'   => Yii::getPathOfAlias('webroot') . '/folder/',
	
								// Web root dir to search images from
								'base_dir'    => Yii::getPathOfAlias('webroot') . '/',
						)
				),
		);
	}
}