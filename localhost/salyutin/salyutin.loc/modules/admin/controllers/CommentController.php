<?php 
namespace app\modules\admin\controllers;

use app\models\Comment;
use yii\web\ControLLer;

class CommentController extends ControLLer
{
	public function actionIndex(){
		$comments = Comment::find()->orderBy('id desc')->all();
		return $this->render('index',['comments'=>$comments]);
	}
	public function actionDelete($id){
		$comment = Comment::findOne($id);
		if($comment->delete()){
			return $this->redirect(['comment/index']);
		}
	}
	public function actionAllow($id){
		$comment = Comment::findOne($id);
		if($comment->allow()){
			return $this->redirect(['index']);
		}
	}
	public function actionDisallow($id){
		$comment = Comment::findOne($id);
		if($comment->disallow()){
			return $this->redirect(['index']);
		}
	}
}
 ?>
