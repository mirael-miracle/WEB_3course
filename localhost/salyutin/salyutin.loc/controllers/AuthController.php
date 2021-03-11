<?php 
namespace app\controllers;
use app\models\Users;
use app\models\UsersSearch;
use app\models\LoginForm;
use app\models\User;
use Yii;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFiLter;
use yii\filters\AccessControL;
use app\models\ImageUpLoad;
use yii\web\UpLoadedFiLe;
use yii\web\ControLLer;
use app\models\SignupForm;
class AuthController extends ControLLer
{

public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    } 

    public function actionSignup(){
    	$model = new SignupForm();

    	if(Yii::$app->request->isPost){
    		$model->load(Yii::$app->request->post());
    		if($model->signup()){
    			return $this->redirect(['auth/login']);
    		}
    	}
    	return $this->render('signup',['model'=>$model]);
    }
    public function actionView($id){
        if($id==Yii::$app->user->identity->id){
            return $this->render('view',[
            'model'=>$this->findModel($id),
        ]);
        }else{
            throw new \yii\web\NotFoundHttpException();
        }
        
    }
    public function actionUpdate($id){
        $model = $this->findModel($id);

        if($model->load(Yii::$app->request->post()) && $model->change()){
            return $this->redirect(['view','id'=>$model->id]);
        }
        return $this->render('update',[
            'model'=>$model,
        ]);
    }
    protected function findModel($id){
        if(($model = Users::findOne($id))!==null){
            return $model;
        }
        throw new NotFoundHttpException('The requested page doesn`t exist.');
        
    }
    public function actionSetImage($id){
        $model = new ImageUpload;

        if(Yii::$app->request->isPost){
            $user=$this->findModel($id);
            $file=UploadedFile::getInstance($model,'image');
            if($user->saveImage($model->uploadFile($file,$user->photo))){
                return $this->redirect(['view','id'=>$user->id]);
            }
        }
        return $this->render('image',[model=>$model]);
    }
}
?>