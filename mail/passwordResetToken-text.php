<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $user app\models\User */

$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['site/reset-password', 'token' => $user->password_reset_token]);
?>
Здравствуйте <?= Html::encode($user->firstname) ?> <?= Html::encode($user->secondname) ?>,

Для сброса пароля перейдите по ссылке:

<?= $resetLink ?>
