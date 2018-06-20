<?php
    namespace app\controllers;
    use Yii;
    use yii\filters\AccessControl;
    use yii\web\Controller;
    use yii\web\Response;
    use yii\filters\VerbFilter;
    use app\models\RecordsInd;
    use app\models\RecordsLeg;
    use app\models\LoginForm;
    use app\models\Sliders;
    use app\models\TextBlocks;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
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
                    'logout' => ['post', 'get'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
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
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /*
     * Главная страница
     */
    public function actionIndex()
    {
        $sliders = Sliders::find()->andWhere(['sliders_show' => true, 'sliders_adverts' => false])->all();
        return $this->render('index', ['sliders' => $sliders]);
    }

    /*
     * Страница "Запись на СТО"
     */
    public function actionService()
    {
        return $this->render('service');
    }

    /*
     * Страница "О компании"
     */
    public function actionAbout()
    {
        $text_about = TextBlocks::find()->andWhere(['text_block_alias' => 'about_block'])->select('text_blocks_text')->one();
        return $this->render('about', ['text_about' => $text_about]);
    }
    
    /*
     * Страница "Запись на СТО - Физическое лицо"
     * Добавление новой записи
     */
    public function actionRecordInd() {
        $model = new RecordsInd();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                $messageEmailInd = Yii::$app->request->post();
                Yii::$app->session->setFlash('success', 'Спасибо! Ваша заявка была успешно создана');
                // $model->save();
                $model->sendMail('template-record-ind', 'Запись на СТО - новая заявка', ['messageEmailInd' => $messageEmailInd]);
                return $this->refresh();
            } else {
                Yii::$app->session->setFlash('error', 'При создании заявки возникла ошибка, попробуйте еще раз');
            }
        }
        return $this->render('record-ind', ['model' => $model]);
    }

    /*
     * Страница "Запись на СТО - Юридическое лицо"
     * Добавление новой записи
     */
    public function actionRecordLeg() {
        $model = new RecordsLeg();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                $messageEmailLeg = Yii::$app->request->post();
                Yii::$app->session->setFlash('success', 'Спасибо! Ваша заявка была успешно создана');
                // $model->save();
                $model->sendMail('template-record-leg', 'Запись на СТО - новая заявка', ['messageEmailLeg' => $messageEmailLeg]);
                return $this->refresh();
            } else {
                Yii::$app->session->setFlash('error', 'При создании заявки возникла ошибка, попробуйте еще раз');
            }
        }
        return $this->render('record-leg', ['model' => $model]);
    }
    
    /*
     * Страница "Новостей" 
     */
    public function actionNews() {
        return $this->render('news');
        
    }
    
    /*
     * Страница "Контакты"
     */
    public function actionContact() {
        $text_contact = TextBlocks::find()->andWhere(['text_block_alias' => 'contact_block'])->select('text_blocks_text')->one();
        return $this->render('contact', ['text_contact' => $text_contact]);
    }
    
    
    /*
     * Страница "Основные услуги"
     */
    public function actionMainServices() {
        return $this->render('main-services');
    }
    
    /*
     * Страница "Авторизации"
     */    
    public function actionLogin() {
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
    
    public function actionLogout() {
        Yii::$app->user->logout();
        return $this->goHome();

    }
    
    public function actionPrivacyPolicy() {
        $text_policy = TextBlocks::find()->andWhere(['text_block_alias' => 'privacy_policy'])->select('text_blocks_text')->one();
        return $this->render('privacy-policy', ['text_policy' => $text_policy]);
    }
}
