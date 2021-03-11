<?php

namespace app\controllers;

use Yii;
use app\models\Category;
use app\models\Article;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\EntryForm;
use app\models\CommentForm;
use app\models\Tag;


class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }


    public function actionIndex()
    {
        
    	$data = Article::getAll(1);

        $popular = Article::getPopular();

        $recent = Article::getRecent();

        $categories = Category::getAll();

        return $this->render('index',[
            'articles'=>$data['articles'],
            'pagination'=>$data['pagination'],
            'popular'=>$popular,
            'recent'=>$recent,
            'categories'=>$categories
        ]);
    }

   
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

   
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    
       public function actionSay($message = 'Hello, world!')
    {
        return $this->render('say', ['message' => $message]);
    }
        public function actionEntry()
    {
        $model = new EntryForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // дані в $model успішно перевірені

            // тут робимо щось корисне з $model ...
 
            return $this->render('entry-confirm', ['model' => $model]);
        } else {
            // або сторінка відображається вперше, або ж є помилка в даних
            return $this->render('entry', ['model' => $model]);
        }
    }
 public function actionView($id){
        $article=Article::findOne($id);
        $popular = Article::getPopular();
        $recent = Article::getRecent();
        $categories = Category::getAll();
        $comments = $article->getArticleComments();
        $commentForm = new CommentForm();
        $tags=$article->getArticleTags();

        return $this->render('single',[
            'article'=>$article,
            'popular'=>$popular,
            'recent'=>$recent,
            'categories'=>$categories,
            'comments'=>$comments,
            'commentForm'=>$commentForm,
            'tags'=>$tags
        ]);
    	
    }
    public function actionCategory($id){
        $data = Category::getArticlesByCategory($id);
        $popular = Article::getPopular();
        $recent= Article::getRecent();
        $categories = Category::getAll();

        return $this->render('category',[
            'articles'=>$data['articles'],
            'pagination'=>$data['pagination'],
            'popular' => $popular,
            'recent' => $recent,
            'categories'=>$categories
        ]);
        
    }
    public function actionComment($id){
        $model = new CommentForm();

        if(Yii::$app->request->isPost){
            $model->load(Yii::$app->request->post());
            if($model->saveComment($id)){
                Yii::$app->getSession()->setFlash('comment','Your comment will be added soon!');
                return $this->redirect(['site/view','id'=>$id]);
            }
        }
    }
   public function actionTag($id){
    $data = Tag::getArticlesByTag($id);
    $popular = Article::getPopular();
    $recent = Article::getRecent();
    $categories = Category::getAll();
    return $this->render('tag',[
        'articles'=>$data['articles'],
        'pagination'=>$data['pagination'],
        'popular'=>$popular,
        'recent'=>$recent,
        'categories'=>$categories
    ]);
   }
   public function actionSearch(){
    if(Yii::$app->request->isPost){
        $arr = Yii::$app->request->post();
        $data = Article::findAll($arr["search_value"]);
        $popular = Article::getPopular();
        $recent = Article::getRecent();
        $categories = Category::getAll();
        return $this->render('search',[
            'articles'=>$data['articles'],
            'pagination'=>$data['pagination'],
            'popular'=>$popular,
            'recent'=>$recent,
            'categories'=>$categories
        ]);
    }
    return $this->actionIndex();
   }
}