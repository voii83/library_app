<?php

namespace app\commands;

use app\models\user\User;
use yii\console\Controller;

/**
 * This class creates admin once
 * Class AddAdminController
 * @package app\commands
 */
class AddAdminController extends Controller
{
    public function actionIndex()
    {
        $user = User::find()
            ->where([
                'username' => 'admin',
                'email' => 'admin@example.com',
            ])->one();

        if ($user) {
            $this->stdout('Admin already exists!' . PHP_EOL);
            return false;
        }

        $user = new User();
        $user->username = 'admin';
        $user->email = 'admin@example.com';
        $user->setPassword('admin');
        $user->generateAuthKey();
        $user->generateEmailVerificationToken();
        $user->status = User::STATUS_ACTIVE;

        $this->stdout('Done!' . PHP_EOL);
        return $user->save();
    }
}