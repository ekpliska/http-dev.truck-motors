<?php

    namespace app\modules\admin;
    use yii\base\Module as CoreModule;
    use yii\filters\AccessControl;
    use yii\web\ErrorHandler;

class Module extends CoreModule
{

    public $controllerNamespace = 'app\modules\admin\controllers';

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }    
    
    public function init()
    {
        parent::init();
        \Yii::configure($this, [
            'components' => [
                'errorHandler' => [
                    'class' => ErrorHandler::className(),
                ]
            ],
        ]);

        $handler = $this->get('errorHandler');
        \Yii::$app->set('errorHandler', $handler);
        $handler->register();
    }
}
