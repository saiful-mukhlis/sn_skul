<?php
class ChatFunction {
	public static function updateUserChat($name, $gravatar){
		$command = Yii:: app()->db ->createCommand("INSERT INTO usrchat (name, gravatar)
			VALUES (:name, :gravatar) ON DUPLICATE KEY UPDATE last_activity = NOW()");
		$command->bindParam(":name",$name,PDO::PARAM_STR);
		$command->bindParam(":gravatar",$gravatar,PDO::PARAM_STR);
		$command->execute();
	}
	public static function delActivity(){
		// del data 30 menit
		$command = Yii:: app()->db ->createCommand("DELETE FROM chat WHERE ts < SUBTIME(NOW(),'0:30:0')");
		$command->execute();
		// del data user 30 second
		$command2 = Yii:: app()->db ->createCommand("DELETE FROM usrchat WHERE last_activity < SUBTIME(NOW(),'0:0:30')");
		$command2->execute();
	}
	public static function getUsrActiveChat(){
		$command = Yii:: app()->db ->createCommand("SELECT * FROM usrchat ORDER BY name ASC");
		$command->setFetchMode(PDO::FETCH_OBJ);
		$usrs=$command->queryAll();
		
		$users=array();
		foreach ($usrs as $v) {
			if (file_exists (Yii::app()->getBasePath().'/../foto/avatar/'.md5($v->gravatar).'.jpg')) {
				$v->gravatar=Yii::app()->baseUrl.'/foto/avatar/'.md5($v->gravatar).'.jpg';
			}else{
				$v->gravatar=Yii:: app()-> baseUrl.'/images/size/24x24/img/people48.png';
			}
			$users[]=$v;
		}
		
		$count=Yii::app()->db->createCommand('SELECT * FROM usrchat')->queryScalar();

		return array('users'=>$users, 'total'=>$count);
		
	}
	public static function getChats($lastID){
		$lastID = (int)$lastID;
		$command = Yii:: app()->db ->createCommand('SELECT * FROM chat WHERE id > :lastid ORDER BY id ASC');
		$command->setFetchMode(PDO::FETCH_OBJ);
		$command->bindParam(':lastid',$lastID,PDO::PARAM_INT);
		$chats=$command->queryAll();
		
		$a=array();
		foreach ($chats as $v) {
			$v->time = array(
					'hours'		=> gmdate('H',strtotime($v->ts)),
					'minutes'	=> gmdate('i',strtotime($v->ts))
			);
				
		if (file_exists (Yii::app()->getBasePath().'/../foto/avatar/'.md5($v->gravatar).'.jpg')) {
				$v->gravatar=Yii::app()->baseUrl.'/images/size/24x24/foto/avatar/'.md5($v->gravatar).'.jpg';
			}else{
				$v->gravatar=Yii:: app()-> baseUrl.'/images/size/24x24/img/people48.png';
			}
				
			$a[]=$v;
		}
		

		return array('chats' => $a);
	}
	
	public static function submitChat($nama, $gravatar, $text){
		
		if(!$chatText){
			throw new Exception('You haven\' entered a chat message.');
		}
		
		$command = Yii:: app()->db ->createCommand("INSERT INTO chat (author, gravatar, text)
			VALUES (:author, :gravatar, :text)");
		$command->bindParam(":author",$name,PDO::PARAM_STR);
		$command->bindParam(":gravatar",$gravatar,PDO::PARAM_STR);
		$command->bindParam(":text",$text,PDO::PARAM_STR);
		$command->execute();
		
		
		return array(
				'status'	=> 1,
				'insertID'	=> $insertID
		);
	}

}
