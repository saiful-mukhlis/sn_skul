<?php
class InController extends Controller {
	public function actionIndex() {
		
	}
	public function actionIkut() {
		$this->setPrevillage(2);
		$idUsr = $this->getIdUser ();
		$model = new IkutForm ();
	
		if (isset ( $_POST ['IkutForm'] )) {
			$model->attributes = $_POST ['IkutForm'];
			if ($model->validate ()) {
				$m = Mapel::model ()->findByAttributes ( array (
						'code' => strtoupper($model->code)
				) );
				if ($m != null) {
					$g = new GroupStudy ();
					$g->usrid = $idUsr;
					$g->mapelid = $m->id;
					$g->status = 1;
					if ($g->save ()) {
						$this->redirect ( Yii::app ()->homeUrl );
					}
				}
			}
		}
	
		$this->render ( 'ikut', array (
				'model' => $model
		) );
	}
	public function actionTambahFile($id=0) {
		if (Yii::app()->user->getState('status')!=1) {
			$this->redirect(Yii::app()->homeUrl);
		}
		$model = new FileForm();
	
		if ($id!=0) {
			if (isset($_POST['ajax']) && $_POST['ajax'] === 'file') {
				echo CActiveForm::validate($model);
				Yii::app()->end();
			}
	
			if (isset($_POST['FileForm'])) {
				$model->attributes = $_POST['FileForm'];
				$model->file=CUploadedFile::getInstance($model,'file');
				if ($model->validate()) {
					try {
						$f=new File();
						$f->mapelid=$id;
						$f->title=$model->title;
						try {
							$f->save();
							$tersimpan=$model->file->saveAs(Yii::app() -> getBasePath() . '/../folder/materi/'.md5($f->id).'.'.$model->file->getExtensionName());
							$f->path='/folder/materi/'.md5($f->id).'.'.$model->file->getExtensionName();
							$f->save();
							$this->redirect ( array('room','id'=>$id));
						} catch (Exception $e) {
						}
						
					} catch (Exception $e) {
					}
				}
			}
		}
	
		$this->render('tambah_file', array('model' => $model, 'id'=>$id));
	
	}
	
	public function actionDeleteFile($id) {
		if(Yii::app()->request->isPostRequest)
		{
			$idUsr=$this->getIdUser();
			$m=File::model()->findByPk($id);
			$status=Yii::app()->user->getState('status');
			if ($status==1) {
				$cmapel=Mapel::model()->countByAttributes(array('id'=>$m->mapelid));
				if ($cmapel==0) {
					$this->redirect(Yii::app()->homeUrl);
				}else{
					$m->delete();
					unlink(Yii::app() -> getBasePath() . '/..'.$m->path);
					$this->redirect ( array('room','id'=>$m->mapelid));
				}
			}
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
		 
		 
	
	}
	
	public function actionTambahMateri($id=0) {
		if (Yii::app()->user->getState('status')!=1) {
			$this->redirect(Yii::app()->homeUrl);
		}
    	$model = new TextForm();
    
    	if ($id!=0) {
    		if (isset($_POST['ajax']) && $_POST['ajax'] === 'materi') {
    			echo CActiveForm::validate($model);
    			Yii::app()->end();
    		}
    		
    		if (isset($_POST['TextForm'])) {
    			$model->attributes = $_POST['TextForm'];
    			if ($model->validate()) {
    				$m=new Materi();
    				$m->mapelid=$id;
    				$m->title=$model->title;
    				$m->isi=$model->isi;
    				try {
    					$m->save();
    					//Yii::app ()->user->setFlash ( 'success', '<strong>Pendaftaran Anda Berhasil!</strong>' );
    					$this->redirect ( array('room','id'=>$id));
    				} catch (Exception $e) {
    				}
    			}
    		}
    	}
    
    	$this->render('tambah_materi', array('model' => $model, 'id'=>$id));
    
    }
    public function actionEditMateri($id) {
    	$idUsr=$this->getIdUser();
    	$m=Materi::model()->findByPk($id);
    	$status=Yii::app()->user->getState('status');
    	if ($status==1) {
    		$cmapel=Mapel::model()->countByAttributes(array('id'=>$m->mapelid));
    		if ($cmapel==0) {
    			$this->redirect(Yii::app()->homeUrl);
    		}
    	}else{
    		$this->redirect(Yii::app()->homeUrl);
    	}
    	$model=new TextForm();
    	$model->title=$m->title;
    	$model->isi=$m->isi;
    	if (isset($_POST['TextForm'])) {
    		$model->attributes = $_POST['TextForm'];
    		if ($model->validate()) {
    			$m->title=$model->title;
    			$m->isi=$model->isi;
    			try {
    				$m->save();
    				//Yii::app ()->user->setFlash ( 'success', '<strong>Pendaftaran Anda Berhasil!</strong>' );
    				$this->redirect ( array('room','id'=>$m->mapelid));
    			} catch (Exception $e) {
    				//echo $e->getMessage();return ;
    			}
    		}
    	}
    
    	$this->render('edit_materi', array('model' => $model, 'id'=>$id));
    
    }
    public function actionDeleteMateri($id) {
    	if(Yii::app()->request->isPostRequest)
    	{
    	$idUsr=$this->getIdUser();
    	$m=Materi::model()->findByPk($id);
    	$status=Yii::app()->user->getState('status');
    	if ($status==1) {
    		$cmapel=Mapel::model()->countByAttributes(array('id'=>$m->mapelid));
    		if ($cmapel==0) {
    			$this->redirect(Yii::app()->homeUrl);
    		}else{
    			$m->delete();
    			$this->redirect ( array('room','id'=>$m->mapelid));
    		}
    	}
    	}
    	else
    		throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
    	
    	
    
    }
    public function actionTambahSoal($id=0) {
    	if (Yii::app()->user->getState('status')!=1) {
    		$this->redirect(Yii::app()->homeUrl);
    	}
    	$model = new TextForm();
    
    	if ($id!=0) {
    		if (isset($_POST['ajax']) && $_POST['ajax'] === 'soal') {
    			echo CActiveForm::validate($model);
    			Yii::app()->end();
    		}
    
    		if (isset($_POST['TextForm'])) {
    			$model->attributes = $_POST['TextForm'];
    			if ($model->validate()) {
    				$m=new Soal();
    				$m->mapelid=$id;
    				$m->title=$model->title;
    				$m->isi=$model->isi;
    				$m->status=1;
    				try {
    					$m->save();
    					//Yii::app ()->user->setFlash ( 'success', '<strong>Pendaftaran Anda Berhasil!</strong>' );
    					$this->redirect ( array('room','id'=>$id));
    				} catch (Exception $e) {
    				}
    			}
    		}
    	}
    
    	$this->render('tambah_soal', array('model' => $model, 'id'=>$id));
    
    }
    public function actionEditSoal($id) {
    	$idUsr=$this->getIdUser();
    	$m=Soal::model()->findByPk($id);
    	$status=Yii::app()->user->getState('status');
    	if ($status==1) {
    		$cmapel=Mapel::model()->countByAttributes(array('id'=>$m->mapelid));
    		if ($cmapel==0) {
    			$this->redirect(Yii::app()->homeUrl);
    		}
    	}else{
    		$this->redirect(Yii::app()->homeUrl);
    	}
    	$model=new TextForm();
    	$model->title=$m->title;
    	$model->isi=$m->isi;
    	if (isset($_POST['TextForm'])) {
    		$model->attributes = $_POST['TextForm'];
    		if ($model->validate()) {
    			$m->title=$model->title;
    			$m->isi=$model->isi;
    			try {
    				$m->save();
    				//Yii::app ()->user->setFlash ( 'success', '<strong>Pendaftaran Anda Berhasil!</strong>' );
    				$this->redirect ( array('room','id'=>$m->mapelid));
    			} catch (Exception $e) {
    				//echo $e->getMessage();return ;
    			}
    		}
    	}
    
    	$this->render('edit_soal', array('model' => $model, 'id'=>$id));
    
    }
    public function actionJawabSoal($id=0) {
    	$this->setPrevillage(2);
    	$model = new TextForm();
    	$idUsr=$this->getIdUser();
    	$soal=Soal::model()->findByPk($id);
    	if ($soal!=null) {
    		
    		if (isset($_POST['ajax']) && $_POST['ajax'] === 'jawab') {
    			echo CActiveForm::validate($model);
    			Yii::app()->end();
    		}
    		$jawaban=Jawab::model()->findByAttributes(array('soalid'=>$soal->id, 'usrid'=>$idUsr));
    		if ($jawaban!=null) {
    			$model->isi=$jawaban->isi;
    		}
    		if (isset($_POST['TextForm'])) {
    			$model->attributes = $_POST['TextForm'];
    			if ($model->validate()) {
    				$m=null;
    				if ($jawaban==null) {
    					$m=new Jawab();
    					$m->soalid=$id;
    					$m->usrid=$idUsr;
    					$m->isi=$model->isi;
    					$m->status=1;
    				}else{
    					$m=$jawaban;
    					$m->isi=$model->isi;
    				}
    				
    				try {
    					$m->save();
    					//Yii::app ()->user->setFlash ( 'success', '<strong>Pendaftaran Anda Berhasil!</strong>' );
    					$this->redirect ( array('room','id'=>$soal->mapelid));
    				} catch (Exception $e) {
    				}
    			}
    		}
    		$this->render('jawab_soal', array('model' => $model, 'soal'=>$soal));
    	}else{
    		$this->redirect ( Yii::app()->homeUrl);
    	}
    
    	
    
    }
    public function actionNilaiJawaban($id,$s) {
    	$this->setPrevillage(1);
    	$idUsr=$this->getIdUser();
    	$j=Jawab::model()->with('soal','usr')->findByPk((int)$id);
    	if ($j==null) {
    		$this->redirect(Yii::app()->homeUrl);
    	}
    	$n=Nilai::model()->findByAttributes(array('usrid'=>$j->usrid, 'soalid'=>$j->soalid));
    	$model=new NilaiForm();
    	if ($n!=null) {
    		$model->nilai=$n->nilai;
    	}
    		
    	if (isset($_POST['NilaiForm'])) {
    		$model->attributes = $_POST['NilaiForm'];
    		if ($model->validate()) {
    			if ($n==null) {
    				$n=new Nilai();
    			}
    			$n->nilai=$model->nilai;
    			$n->soalid=$j->soalid;
    			$n->usrid=$j->usrid;
    			$n->status=1;
    			if ($n->save()) {
    				$this->redirect ( array('in/room','id'=>$s));
    			}
    		}
    	}
    	
    	$this->render('nilai_jawaban', array('model' => $model, 'j'=>$j,'id'=>$s));
    }
    public function actionReportSiswa($id,$s) {
    	if (Yii::app()->user->getState('status')==2&& Yii::app()->user->getState('id')!=$id) {
    		$this->redirect ( array('in/room','id'=>$s));
    	}
    	$idUsr=$this->getIdUser();
    	$layout = '//layouts/main_chart';
		$u=Usr::model()->findByPk($id);
    	$ns=Nilai::model()->with(array('soal'=>array('condition'=>'mapelid=:s','params'=>array(':s'=>(int)$s))))->findAllByAttributes(array('usrid'=>$id));
    	$this->render('report_siswa', array('ns' => $ns, 'u'=>$u, 'id'=>$s));
    }
	public function actionRoom($id) {
		$this->layout = '//layouts/main4';
		if ($id==0) {
			$this->redirect(Yii::app()->homeUrl);
		}
		
		
		
		
		$m=Mapel::model()->findByPk($id);
		if ($m==null) {
			$this->redirect(Yii::app()->homeUrl);
		}
		$this->page->m=$m;
		$idUsr=$this->getIdUser();
		$u=Usr::model()->findByPk($idUsr);
		if ($u==null) {
			$this->redirect(Yii::app()->homeUrl);
		}
		$this->page->u=$u;
		
		
		$wall=new WallForm();
		if (isset($_POST['WallForm'])) {
			$wall->attributes = $_POST['WallForm'];
			if ($wall->validate()) {
				$walldb=new Wall();
				$walldb->usrid=$idUsr;
				$walldb->mapelid=$id;
				$walldb->isi=$wall->isi;
				$walldb->created=date('Y-m-d H:i:s');;
				$walldb->status=1;
				try {
					$walldb->save();
					$wall=new WallForm();
				} catch (Exception $e) {
				}
			}
		}else{
			$respone=new ResponForm();
			if (isset($_POST['ResponForm'])) {
				$respone->attributes = $_POST['ResponForm'];
				if ($respone->validate()) {
					$r=new Respon();
					$r->wallid=$respone->wallid;
					$r->isi=$respone->isi;
					$r->created=date('Y-m-d H:i:s');;
					$r->status=1;
					$r->usrid=$idUsr;
					try {
						$r->save();
					} catch (Exception $e) {
					}
				}
			}
		}
		
		$criteriaGs=new CDbCriteria;
		$criteriaGs->compare('mapelid',$id);
		
		$gs= new CActiveDataProvider(GroupStudy::model()->with('usr'), array('criteria'=>$criteriaGs,));
		//$gs=GroupStudy::model()->with('usr')->findAllByAttributes(array('mapelid'=>$id));
		
		$criteria = new CDbCriteria;
		$criteria->order='t.created DESC';
		$criteria->compare('mapelid',$id);
		$total = Wall::model()->countByAttributes(array('mapelid'=>$id));
		
		$pages = new CPagination($total);
		$pages->pageSize = 20;
		$pages->applyLimit($criteria);
		
		$ws = Wall::model()->with(array('usr'))->findAll($criteria);
		
		$criteriaMatari=new CDbCriteria;
		$criteriaMatari->select='t.id, t.title';
		$criteriaMatari->compare('mapelid',$id);
		
		$materis= new CActiveDataProvider('Materi', array('criteria'=>$criteriaMatari,));
		//$materis=Materi::model()->findAllByAttributes(array('mapelid'=>$id));
		
		$criteriaFile=new CDbCriteria;
		$criteriaFile->select='t.id, t.title, t.path';
		$criteriaFile->compare('mapelid',$id);
		
		$files= new CActiveDataProvider('File', array('criteria'=>$criteriaFile,));
		//$files=File::model()->findAllByAttributes(array('mapelid'=>$id));
		
		$criteriaSoal=new CDbCriteria;
		$criteriaSoal->select='t.id, t.title, t.status';
		$criteriaSoal->compare('mapelid',$id);
		
		$soals= new CActiveDataProvider('Soal', array('criteria'=>$criteriaSoal,));
		//$soals=Soal::model()->findAllByAttributes(array('mapelid'=>$id));
		
		
		
		$this->render('room', array('m' => $m, 'u' => $u, 'gs' => $gs, 'pages' => $pages, 
				'ws' => $ws, 'materis' => $materis, 'soals' => $soals, 'files' => $files, 'wall' => $wall));
		
	}
}