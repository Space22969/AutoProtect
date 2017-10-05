<?php
namespace app\components;
 
use app\models\Order;
use app\models\OrderProduct;
use app\models\User;
use yii\base\Component;
use Yii;
 
class Cart extends Component
{
    const SESSION_KEY = 'order_id';
 
    private $_order;
 

    public function getRealIp()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
        {
            $ip=$_SERVER['HTTP_CLIENT_IP'];
        }
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
        {
            $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else
        {
            $ip=$_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    public function createOrder()
    {
        $firstname = '';
        $secondname = '';
        $phone = '';
        $email = '';
        $addrress = '';
        if (Yii::$app->user->isGuest) {
            $usr_id = 0;
        }
        else 
        {
        $usr_id = Yii::$app->user->id;
        $firstname = Yii::$app->user->firstname;;
        $secondname = Yii::$app->user->secondname;
        $phone = Yii::$app->user->phone;
        $email = Yii::$app->user->email;
        $addrress = Yii::$app->user->address;
        }

        $order = new Order();
        $order->user_id = $usr_id;
        $order->firstname = $firstname;
        $order->secondname = $secondname;
        $order->phone = $phone;
        $order->email = $email;
        $order->address = $address;
        $order->ip_address = $this->getRealIp();

        if ($order->save()) {
            $this->_order = $order;
            return true;
        }
        return false;
    }
    public function add($productId, $count, $price)
    {   
        $order = $this->getOrder();
        if(!Yii::$app->user->isGuest)
     {
        $user = User::findOne(['id' => Yii::$app->user->id]);
        
        $update = Order::findOne(['id' => $order->id]);
        if($update)
        {
            $update->user_id = $user->id;
            $update->firstname = $user->firstname;
            $update->secondname = $user->secondname;
            $update->phone = $user->phone;
            $update->email = $user->email;
            $update->save();
        }
    }
        $link = OrderProduct::findOne(['product_id' => $productId, 'order_id' => $order->id]);
        if (!$link) {
            $link = new OrderProduct();
        }
        $link->product_id = $productId;
        $link->order_id = $order->id;
        $link->count += $count;
        $link->price = $price;
        return $link->save();

       
    }
   
    public function getOrder()
    {   
        $id = $this->getOrderId();
        if ($this->_order == null) {
            $this->_order = Order::findOne(['id' => $id]);
        }
        return $this->_order;
    }
 
    private function getOrderId()
    {
        if (!Yii::$app->session->has(self::SESSION_KEY)) {
            if ($this->createOrder()) {
                Yii::$app->session->set(self::SESSION_KEY, $this->_order->id);
            }
        }
        return Yii::$app->session->get(self::SESSION_KEY);
    }
 
    public function delete($productId)
    {
        $link = OrderProduct::findOne(['product_id' => $productId, 'order_id' => $this->getOrderId()]);
        if (!$link) {
            return false;
        }
        return $link->delete();
    }
 
    public function setCount($productId, $count)
    {
        $link = OrderProduct::findOne(['product_id' => $productId, 'order_id' => $this->getOrderId()]);
        if (!$link) {
            return false;
        }
        $link->count = $count;
        return $link->save();
    }
 
    public function getStatus()
    {
        if ($this->isEmpty()) {
            return Yii::t('app', 'В корзине пусто');
        }
        return Yii::t('app', 'В корзине {productsCount, number} {productsCount, plural, one{товар} few{товара} many{товаров} other{товара}} на сумму {amount} руб.', [
            'productsCount' => $this->order->productsCount,
            'amount' => $this->order->amount
        ]);
    }
 
    public function isEmpty()
    {
        if (!Yii::$app->session->has(self::SESSION_KEY)) {
            return true;
        }
        return $this->order->productsCount ? false : true;
    }


    public function clean()
    {
        Yii::$app->session->remove(self::SESSION_KEY);
    }


}

?>