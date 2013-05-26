<?php

class SiteController extends Controller
{




    public function actions()
    {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    public function actionIndex()
    {
    	$id=Yii::app()->user->getState('id');
    	if ($id!=null) {
    		$u=Usr::model()->findByPk($id);
    		$this->page->u=$u;
    		if ($u==null) {
    			$this->actionLogout();
    		}else{
    			//Yii::app()->baseUrl.'/img/people128.png'
    			$this->page->avatar=Yii:: app()-> baseUrl.'/img/people128.png';
    			if (file_exists (Yii::app()->getBasePath().'/../foto/avatar/'.md5($id).'.jpg')) {
    				$this->page->avatar=Yii::app()->baseUrl.'/foto/avatar/'.md5($id).'.jpg';
    			}
    			$this->title='Home | '.$u->nama;
    			
    			if ($u->username=='admin') {
    				$this->layout = '//layouts/main_admin';
    				$this->render('index', array('u'=>$u));
    			}else{
    				if ($u->status==1) { //guru
    					$this->layout = '//layouts/main3';
    					$ms=Mapel::model()->findAllByAttributes(array('usrid'=>$u->id));
    					$this->render('home_guru', array('u'=>$u, 'ms'=>$ms));
    				}else{ // siswa
    					$this->layout = '//layouts/main7';
    					$gs=GroupStudy::model()->with('mapel')->findAllByAttributes(array('usrid'=>$u->id));
    					$this->render('home_siswa', array('u'=>$u, 'gs'=>$gs));
    				}
    			}
    			
    			
    			
    		}
    	}else{
    		$this->redirect(array('login'));
    	}
      

    }
    

    

    


    



    
    /**
     * This is the action to handle external exceptions.
     */
    public function actionError()
    {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact()
    {
    	$this->title='Home';
    	$this->buildNavs();
    	$this->layout = '//layouts/main';
    	
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $headers = "From: {$model->email}\r\nReply-To: {$model->email}";
                mail(Yii::app()->params['adminEmail'], $model->subject, $model->body, $headers);
                Yii::app()->user->setFlash('contact', '<strong>Message sent!   </strong>Thank you for contacting us. We will respond to you as soon as possible.');

                $this->refresh();

            }
        }
        $this->render('contact', array('model' => $model));
    }

//     public function actionMapel()
//     {
//     	$status=Yii::app()->user->getState('status');
//     	if ($status!=null && $status==2) {
//     		$s=new Search('search');
//     		if (isset($_POST['Search'])) {
//     			$s->attributes = $_POST['Search'];
//     		}
    		
//     		$this->render('mapel', array('s'=>$s));
//     	}else{
//     		$this->redirect(array('index'));
//     	}
//     }
    
//     public function actionSiswaSelectMapel($id)
//     {
//     	$idUsr=$this->getIdUser();
//     	$m=Mapel::model()->findByPk((int)$id);
//     	if ($m!=null) {
//     		$gs = new GroupStudy ();
// 			$gs->usrid=$idUsr;
// 			$gs->mapelid=$id;
// 			$gs->status=1;
// 			try {
// 				$gs->save();
// 			} catch (Exception $e) {
// 			}
//     	}
//     	$this->redirect(array('mapel'));
//     }
    
    public function actionLogin()
    {
    	$this->layout = '//layouts/main1';
        $model = new LoginForm;

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login()) {
                Yii::app()->user->setFlash('success', '<strong>Logged In!</strong>');
                $this->redirect(Yii::app()->user->returnUrl);
            }
        }
        // display the login form

        if (!empty($_POST['LoginForm'])) {
            Yii::app()->user->setFlash('error', '<strong>Not Logged In.</strong>Wrong Credentials.');
        }
        $this->render('login', array('model' => $model));

    }
    
    public function actionDaftarGuru()
    {
    	$model = new DaftarGuru();
    
    	if (isset($_POST['ajax']) && $_POST['ajax'] === 'daftar-guru') {
    		echo CActiveForm::validate($model);
    		Yii::app()->end();
    	}
    	$this->layout = '//layouts/main5';
    
    	if (isset($_POST['DaftarGuru'])) {
    		$model->attributes = $_POST['DaftarGuru'];
    		if ($model->validate()) {
    			$u=new Usr();
    			$u->nama=$model->nama;
    			$u->username=$model->email;
    			$u->password=md5($model->password);
    			$u->email=$model->email;
    			$u->status=1;
    			$u->jenis_kelamin=0;
//     			if ($u->validate()) {
//     				echo 'asfasdfddd';
//     			}
//     			echo 'asdf';print_r($u->errors);return ;
    			$transaction=Yii::app ()->db-> beginTransaction ();
    			try{
    				if ($u->save()) {
    					
    					$m=new Mapel();
    					$m->usrid=$u->id;
    					$m->code=strtoupper($model->code);
    					$m->name=$m->code;
    					$m->created=date('Y-m-d H:i:s');
    					$m->status=1;
    					//$m->validate();
    					//echo 'asdf';print_r($m->errors);return ;
    					if ($m->save()) {
    						Yii::app()->user->setState('nama',$u->nama);
    						Yii::app()->user->setState('id',$u->id);
    						Yii::app()->user->setState('status',$u->status);
    						$transaction->commit();
    						Yii::app()->user->setFlash('success', '<strong>Pendaftaran Anda Berhasil!</strong>');
    						$this->redirect(Yii::app()->user->returnUrl);
    					}
    					
    				}
    				
    			}catch(Exception $e){
    				$transaction->rollBack();
    			}
    			 
    			
    			
    			
    		}
    	}
    
    	if (!empty($_POST['DaftarGuru'])) {
    		Yii::app()->user->setFlash('error', '<strong>Pendaftaran tidak berhasil.</strong> Silahkan lakukan perbaikan inputan.');
    	}
    	$this->render('daftar_guru', array('model' => $model));
    
    }
    
    public function actionDaftarSiswa()
    {
    	$model = new DaftarSiswa();
    
    	if (isset($_POST['ajax']) && $_POST['ajax'] === 'daftar-siswa') {
    		echo CActiveForm::validate($model);
    		Yii::app()->end();
    	}
    	$this->layout = '//layouts/main6';
    	if (isset($_POST['DaftarSiswa'])) {
    		$model->attributes = $_POST['DaftarSiswa'];
    		if ($model->validate()) {
    			$u=new Usr();
    			$u->nama=$model->nama;
    			$u->username=$model->email;
    			$u->password=md5($model->password);
    			$u->email=$model->email;
    			$u->status=2;
    			$u->jenis_kelamin=0;
    				if ($u->save ()) {
    					Yii::app()->user->setState('nama',$u->nama);
    					Yii::app()->user->setState('id',$u->id);
    					Yii::app()->user->setState('status',$u->status);
					Yii::app ()->user->setFlash ( 'success', '<strong>Pendaftaran Anda Berhasil!</strong>' );
					$this->redirect ( Yii::app ()->user->returnUrl );
				}
    				
    			 
    			
    			
    			
    		}
    	}
    
    	if (!empty($_POST['DaftarSiswa'])) {
    		Yii::app()->user->setFlash('error', '<strong>Pendaftaran tidak berhasil.</strong> Silahkan lakukan perbaikan inputan.');
    	}
    	$this->render('daftar_siswa', array('model' => $model));
    
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout()
    {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

    public function actionTest()
    {
        throw new CHttpException(404, 'The specified post cannot be found.');
    }

    public function actionImg()
    {
        $this->layout = '//layouts/main';
        $this->render('img');
    }





    
}