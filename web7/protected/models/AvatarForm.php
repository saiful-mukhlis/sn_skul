<?php

class AvatarForm extends CFormModel
{
	public $img;

	public function rules()
	{
		return array(
			array('img','vimg'),
            array('img', 'file', 'types'=>'jpg,png',  'maxSize'=>100000000),
		);
	}
	public function attributeLabels()
	{
		return array(
				'img'=>'Image',
		);
	}
	
	public function vimg($attribute,$params)
	{
		$minWidth=300;
		$minHeight=300;
		$file = $this->img;
	
		if (!$file instanceof CUploadedFile) {
			$file = CUploadedFile::getInstance($this, $attribute);
			if (null === $file)
				return true;
		}
	
	
		$size = getimagesize($file->tempName);
		if (false === $size) {
			$message = Yii::t('app', 'File cannot be uploaded because it is not a valid image file');
			$this->addError( $attribute, $message);
			return;
		}
	
		if ($size[0] > $minWidth) {
			$message = Yii::t('app', 'Image is too large: image  width should be not more than {minWidth} pixels', array('{minWidth}' => $minWidth));
			$this->addError( $attribute, $message);
		}
	
		if ($size[1] > $minHeight) {
			$message = Yii::t('app', 'Image is too large: image  height should be not more than {minHeight} pixels', array('{minHeight}' => $minHeight));
			$this->addError( $attribute, $message);
		}
	}

}
