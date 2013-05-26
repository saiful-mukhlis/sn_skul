<?php
class DatamateriController extends Controller {
	public function actionIndex() {
	}
	public function actionLihat($id) {
		$idUsr=$this->getIdUser();
		$m=Materi::model()->findByPk($id);
		$status=Yii::app()->user->getState('status');
		if ($status==1) {
			$cmapel=Mapel::model()->countByAttributes(array('id'=>$m->mapelid));
			if ($cmapel==0) {
				$this->redirect(Yii::app()->homeUrl);
			}
		}else{
			$cgs=GroupStudy::model()->countByAttributes(array('mapelid'=>$m->mapelid, 'usrid'=>$idUsr));
			if ($cgs==0) {
				$this->redirect(Yii::app()->homeUrl);
			}
		}
		
		$this->render('lihat', array('model' => $m));
		
	}

}