<?php

class LoginController extends Controller
{
	public $defaultAction = 'login';

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
          
                
		if (Yii::app()->user->isGuest) {
			$model=new UserLogin;
			// collect user input data
			if(isset($_POST['UserLogin']))
			{
				$model->attributes=$_POST['UserLogin'];
				// validate user input and redirect to previous page if valid
				if($model->validate()) {
                                    
					$this->lastViset();
                                        $roles = Rights::getAssignedRoles(Yii::app()->user->Id);
                                        foreach($roles as $role)
                                            {
                                                if(sizeof($roles)==1 and $role->name=='ministry_role')
                                                    $this->redirect(array('/ministry'));
                                                if(sizeof($roles)==1 and $role->name=='cultural_attache_role')
                                                    $this->redirect(array('/culturalAttache'));
                                            }
                                         if (Yii::app()->user->checkAccess('admin'))
                                              if (Yii::app()->getBaseUrl()."/index.php" === Yii::app()->user->returnUrl)
						$this->redirect(Yii::app()->controller->module->returnUrl);
					else
						$this->redirect(Yii::app()->user->returnUrl);
				}
			}
			// display the login form
			$this->render('/user/login',array('model'=>$model));
		} 
                
                    else
			$this->redirect(Yii::app()->controller->module->returnUrl);
	}
	
	private function lastViset() {
		$lastVisit = User::model()->notsafe()->findByPk(Yii::app()->user->id);
		$lastVisit->lastvisit_at = date('Y-m-d H:i:s');
		$lastVisit->save();
	}

}