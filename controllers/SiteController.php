<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\SignupForm;
use app\models\PasswordResetRequestForm;
use app\models\ResetPasswordForm;
use app\models\User;
use app\models\OrderProduct;

class SiteController extends Controller
{


    /**
     * @inheritdoc
     */
 public $enableCsrfValidation = false;
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
                    'addcart' => ['post'],
                    'setcount' => ['post'],
                    'deletefromcart' => ['post'],
                    'ckeckcart' => ['post']
                ],
            ],
        ];
    }
    
    public function actionAddcart()
    { 
        $postData = Yii::$app->request->post();
        return json_encode([
            'success' => Yii::$app->cart->add($postData['product_id'], $postData['count'], $postData['price']),
            'cartStatus' => Yii::$app->cart->status
        ]);
    }

    public function actionCheckcart()
    { 
      $order = Yii::$app->cart->getOrder();
      $id_order = $order->id;
      $products = OrderProduct::findAll([order_id => $id_order]);

        $count = 0;
        $price = 0;

        foreach($products as $item){

            $count+= $item->count;
            $price+= $item->count * $item->price;

        }

      return json_encode([
        'amount' => $price,
        'count' => $count
    ]);
       
    }

 
    public function actionSetCount()
    {
        $postData = Yii::$app->request->post();
        return json_encode([
            'success' => Yii::$app->cart->setCount($postData['product_id'], $postData['count']),
            'cartStatus' => Yii::$app->cart->status
        ]);
    }
 
    public function actionDeleteFromCart()
    {
        $postData = Yii::$app->request->post();
        return json_encode([
            'success' => Yii::$app->cart->delete($postData['product_id']),
            'cartStatus' => Yii::$app->cart->status
        ]);
    }

    /**
     * @inheritdoc
     */
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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $this->layout = 'index';
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
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

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
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


  /**
     * Displays catalog page.
     *
     * @return string
     */
    public function actionCatalog($brand = '', $subbrand = '')
    {
    	 $connection = Yii::$app->db;

    	if($brand=='')
    		{
    	$command = $connection->createCommand('SELECT * FROM category');
 		$categories = $command->queryAll();
        return $this->render('catalog',['categories' => $categories]);
    		}
    	else 
    		{
    			$toQuery = '1';
    			if($subbrand != '') {

    				$command = $connection->createCommand('SELECT * FROM sub_category where s_name="'.$subbrand.'"');
 					$subCategory = $command->queryAll();

    				$toQuery = 'sub_category="'.$subCategory[0][id].'"';
    			}
    			$command = $connection->createCommand('SELECT * FROM category where logo="'.$brand.'"');
 				$category = $command->queryAll();

    			$command = $connection->createCommand('SELECT * FROM goods where category_id="'.$category[0]["id"].'" AND '.$toQuery);
 				$brand = $command->queryAll();

 				$command = $connection->createCommand('SELECT * FROM sub_category where category_id="'.$category[0]["id"].'"');
 				$subcategory = $command->queryAll();

				 return $this->render('brand',['brand' => $brand, 'nameBrand' => $category[0]["logo"], 'subcategory'=> $subcategory, 'nameSubBrand' => $subbrand]);
    		}
    }


      /**
     * Displays price page.
     *
     * @return string
     */
    public function actionPrice()
    {
        return $this->render('price');
    }

      /**
     * Displays reviews page.
     *
     * @return string
     */
    public function actionReviews()
    {
        return $this->render('reviews');
    }

      /**
     * Displays contacts page.
     *
     * @return string
     */
    public function actionContacts()
    {
        return $this->render('contacts');
    }

      /**
     * Displays send page.
     *
     * @return string
     */
    public function actionSend()
    {
        return $this->render('send');
    }


      /**
     * Displays delivery page.
     *
     * @return string
     */
    public function actionDelivery()
    {
        return $this->render('delivery');
    }


      /**
     * Displays mail page.
     *
     * @return string
     */
    public function actionMail()
    {
        
        $request = Yii::$app->request;
        $back = "<p><a href=\"javascript: history.back()\">Назад</a></p>";
        $answer = "";
     if(!empty($request->post('name')) 
       and !empty($request->post('phone')) 
       and !empty($request->post('message'))){
      $name = trim(strip_tags($request->post('name')));
      $phone = trim(strip_tags($request->post('phone')));
      $message = trim(strip_tags($request->post('message')));
      
 //forbegm@gmail.com
 //car_protection@mail.ru
      mail('car_protection@mail.ru', 'Письмо с сайта защитаавто22.рф', 
      'Письмо от: '.$name.'<br />
      Номер телефона: '.$phone.'<br />
      Сообщение: '.$message,"Content-type:text/html;charset=UTF-8");
 
 $answer = "Ваше сообщение успешно отправлено!<Br> Вы получите ответ в 
      ближайшее время<Br> $back";
 
   
   } else $answer = "Заполните все поля!<Br> $back";;
        
        return $this->render('mail', ['answer' => $answer]);
    }

         /**
     * Displays news page.
     *
     * @return string
     */
    public function actionNews()
    {
        return $this->render('news');
    }


            /**
     * Displays order page.
     *
     * @return string
     */
    public function actionOrder()
    {
        return $this->render('order');
    }


               /**
     * Displays pay page.
     *
     * @return string
     */
    public function actionPay()
    {
        return $this->render('pay');
    }
    
                   /**
     * Displays product page.
     *
     * @return string
     */
    public function actionProduct($id)
    {
        
        $connection = Yii::$app->db;
        $command = $connection->createCommand("SELECT * FROM goods where id='".$id."'");
 		$product = $command->queryAll();
 		
 		$command = $connection->createCommand('SELECT * FROM category where id="'.$product[0]["category_id"].'"');
 	    $brand = $command->queryAll();
       
        return $this->render('product', ['prod' => $product[0], 'brand' => $brand[0]]);
    }



    public function actionAdminadd() {
        $model = User::find()->where(['username' => 'admin2'])->one();
        if (empty($model)) {
            $user = new User();
            $user->username = 'aleksej-feb3@yandex.ru';
            $user->email = 'aleksej-feb3@yandex.ru';
            $user->firstname = 'Алексей';
            $user->secondname = 'Пупкин';
            $user->setPassword('admin2');
            $user->generateAuthKey();
            if ($user->save()) {
                echo 'good';
            }
        }
    }


    public function actionSignup()
    {
        $model = new SignupForm();
 
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }
 
        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
     public function actionRequestPasswordReset()
     {
         
         $model = new PasswordResetRequestForm();
  
         if ($model->load(Yii::$app->request->post()) && $model->validate()) {
             if ($model->sendEmail()) {
                 Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                 return $this->goHome();
                
             } else {
                 Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
             }
         }
  
         return $this->render('requestPasswordReset', [
             'model' => $model,
         ]);
     }
  
     /**
      * Resets password.
      *
      * @param string $token
      * @return mixed
      * @throws BadRequestHttpException
      */
     public function actionResetPassword($token)
     {
         try {
             $model = new ResetPasswordForm($token);
         } catch (InvalidParamException $e) {
             throw new BadRequestHttpException($e->getMessage());
         }
  
         if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
             Yii::$app->session->setFlash('success', 'New password was saved.');
             return $this->goHome();
         }
  
         return $this->render('resetPassword', [
             'model' => $model]);
         }

}
