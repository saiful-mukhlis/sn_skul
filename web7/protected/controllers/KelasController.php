<?php
class KelasController extends Controller {
	public function __construct($id, $module = null) {
		parent::__construct ( $id, $module );
		$this->setPrevillage ();
	}
	public function actionIndex() {
	}

	public function actionTambah() {
		$idUsr = $this->getIdUser ();
		$model = new Mapel ();
		
		if (isset ( $_POST ['Mapel'] )) {
			$model->attributes = $_POST ['Mapel'];
			$model->usrid = $idUsr;
			$model->code = strtoupper ( $model->code );
			$model->created = date ( 'Y-m-d H:i:s' );
			$model->status = 1;
			if ($model->save ())
				$this->redirect ( array (
						'site/index' 
				) );
		}
		
		$this->render ( 'create', array (
				'model' => $model 
		) );
	}
	public function actionEdit($id) {
		$idUsr = $this->getIdUser ();
		$model = Mapel::model ()->findByPk ( ( int ) $id );
		if ($model == null) {
			$this->redirect ( array (
					'site/index' 
			) );
		}
		
		if (isset ( $_POST ['Mapel'] )) {
			$model->attributes = $_POST ['Mapel'];
			if ($model->validate ()){
				$model->code=strtoupper($model->code);
				$model->save ();
				$this->redirect ( array (
						'site/index' 
				) );
			}
		}
		
		$this->render ( 'update', array (
				'model' => $model 
		) );
	}
	public function actionEditKelasAvatar($id) {
		$idUsr = $this->getIdUser ();
		$model = Mapel::model ()->findByPk ( ( int ) $id );
		if ($model == null) {
			$this->redirect ( array (
					'site/index' 
			) );
		}
		
		$model = new AvatarForm ();
		if (isset ( $_POST ['AvatarForm'] )) {
			$model->attributes = $_POST ['AvatarForm'];
			$model->img = CUploadedFile::getInstance ( $model, 'img' );
			if ($model->validate ()) {
				$success = $model->img->saveAs ( Yii::app ()->getBasePath () . '/../foto/kavatar/' . md5 ( $id ) . '.jpg' );
				$this->redirect ( array (
						'site/index' 
				) );
			}
		}
		
		$this->render ( 'avatar', array (
				'model' => $model 
		) );
	}
}