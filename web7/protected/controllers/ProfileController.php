<?php
class ProfileController extends Controller {
	public function actionIndex() {
	}
	public function actionLihat($id,$s) {
		$idUsr=$this->getIdUser();
		$c=GroupStudy::model()->countByAttributes(array('usrid'=>$idUsr, 'mapelid'=>$s));
		$m=Mapel::model()->findByPk((int)$s);
		$mgid=0;
		if ($m!=null) {
		$mgid=$m->usrid	;
		}
		//echo $mgid.'sdfg';return ;
		if ($idUsr==$id || $c>0 || $idUsr==$mgid) {
			$u=Usr::model()->findByPk($id);
			if ($u!=null) {
				$this->render ( 'view', array (
						'model' => $u, 'id' => $s
				) );
			}
			
		}else{
			$this->redirect ( array (
					'site/index'
			) );
		}
		
		
	}
	public function actionChange() {
		$idUsr = $this->getIdUser ();
		$model = Usr::model ()->findByPk ( $idUsr );
		
		if (isset ( $_POST ['Usr'] )) {
			$model->attributes = $_POST ['Usr'];
			if ($model->save ())
				$this->redirect ( array (
						'site/index' 
				) );
		}
		
		$this->render ( 'update', array (
				'model' => $model 
		) );
	}
	public function actionChangePassword() {
		$idUsr = $this->getIdUser ();
		$model = new PasswordForm ();
		
		if (isset ( $_POST ['PasswordForm'] )) {
			$model->attributes = $_POST ['PasswordForm'];
			if ($model->validate ()) {
				$u = Usr::model ()->findByPk ( Yii::app ()->user->getState ( 'id' ) );
				if ($u != null || $u->password === md5 ( $this->passwordLama )) {
					$u->password = md5 ( $this->passwordBaru );
					$u->save ();
				}
				$this->redirect ( array (
						'site/index' 
				) );
			}
		}
		
		$this->render ( 'password', array (
				'model' => $model 
		) );
	}
	public function actionChangeAvatar() {
		$idUsr = $this->getIdUser ();
		$model = new AvatarForm ();
		if (isset ( $_POST ['AvatarForm'] )) {
			$model->attributes = $_POST ['AvatarForm'];
			$model->img=CUploadedFile::getInstance($model,'img');
			if ($model->validate ()) {
				
				if ($model->img==null) {
					echo 'asdf';return ;
				}
				
				$success=$model->img->saveAs(Yii::app() -> getBasePath() . '/../foto/avatar/'.md5($idUsr).'.jpg');
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