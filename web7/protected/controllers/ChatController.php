<?php
class ChatController extends Controller {
	public function actionIndex() {
	}
	
	public function actionRoom($id) {
		$idUsr=$this->getIdUser();
		$m=Mapel::model()->findByPk($id);
		$this->layout = '//layouts/none';
		$this->render('room', array('id'=>$id, 'm'=>$m));
	}
	public function actionGetUser() {
		$id=Yii::app()->user->getState('id');
		if ($id!=null) {
			
		}

	}
	public function actionGetUsers($id) {
		$idUsr=Yii::app()->user->getState('id');
		if ($idUsr!=null) {
			$name=Yii::app()->user->getState('nama');
			ChatFunction::updateUserChat($name, $idUsr);
			ChatFunction::delActivity();
			//return ChatFunction::getUsrActiveChat();
			echo json_encode(ChatFunction::getUsrActiveChat());
		}
	}
	public function actionGetChats($id,$s) {
		$idUsr=Yii::app()->user->getState('id');
		if ($idUsr!=null) {
			//return ChatFunction::getChats($s);
			echo json_encode(ChatFunction::getChats($s));
		}
	}
	public function actionCheckLogged($id,$lastid=0) {
		$response = array('logged' => false);
		$idUsr=Yii::app()->user->getState('id');
		if ($idUsr!=null) {
			$gravatar=Yii:: app()-> baseUrl.'/images/size/24x24/img/people48.png';
			if (file_exists (Yii::app()->getBasePath().'/../foto/avatar/'.md5($idUsr).'.jpg')) {
				$gravatar=Yii::app()->baseUrl.'/foto/avatar/'.md5($idUsr).'.jpg';
			}
			$response['logged'] = true;
			$response['loggedAs'] = array(
				'name'		=> Yii::app()->user->getState('nama'),
				'gravatar'	=> $gravatar
			);
		}
			
		echo json_encode($response);
	}
	public function actionSubmitChat() {
		$idUsr=Yii::app()->user->getState('id');
		if ($idUsr!=null) {
			if(isset($_POST['chatText'])){
				$c=new Chat();
				$c->author=Yii::app()->user->getState('nama');
				$c->gravatar=Yii::app()->user->getState('id');
				$c->text=$_POST['chatText'];
				try {
					$c->save();
					$d=array('status'	=> 1,
							'insertID'	=> $c->id);
					echo json_encode($d);
				} catch (Exception $e) {
				}
			}
			//return ChatFunction::getChats($s);
			
		}
	}
}