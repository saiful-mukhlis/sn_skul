<?php
class Search extends CFormModel {
	public $search;
	public function rules() {
		return array (
				array (
						'search',
						'safe',
						'on' => 'search' 
				) 
		);
	}
	public function s() {
		$criteria = new CDbCriteria ();
		
		$criteria->join = 'LEFT OUTER JOIN group_study a ON t.id = a.mapelid ';
		
		if (! empty ( $this->search )) {
			$criteria->condition = '(code like :code OR name like :name) AND (a.usrid IS NULL OR a.usrid <> :usrid)';
			$criteria->params = array (
					':usrid' => Yii::app ()->user->getState ( 'id' ),
					':code' => '%' . $this->search . '%',
					':name' => '%' . $this->search . '%' 
			);
		} else {
			$criteria->condition = 'a.usrid IS NULL OR a.usrid <> :usrid';
			$criteria->params = array (
					':usrid' => Yii::app ()->user->getState ( 'id' ) 
			);
		}
		return new CActiveDataProvider ( 'Mapel', array (
				'criteria' => $criteria 
		) );
	}
	public function s2() {
		$criteria = new CDbCriteria ();
		$criteria->join = 'LEFT OUTER JOIN group_study a ON t.id = a.mapelid ';
		$criteria->condition = 'a.usrid IS NULL OR a.usrid = :usrid';
		$criteria->params = array (
				':usrid' => Yii::app ()->user->getState ( 'id' ) 
		);
		return new CActiveDataProvider ( 'Mapel', array (
				'criteria' => $criteria 
		) );
	}
}