<?php

return [
    'class' => 'yii\swiftmailer\Mailer',
    'viewPath' => '@app/mail/',  // Шаблоны писем
    'htmlLayout' => 'layouts/template-record',    // Макеты писем (layouts), HTML версия
    'messageConfig' => [
        'charset' => 'UTF-8',   // Кодировка писем UTF-8
        'from' => ['info@truck-motors.su' => 'TuckMotors'],  // Задаем e-mail адрес и имя отправителя по умолчанию
    ],
    'transport' => [
        'class' => 'Swift_SmtpTransport',
        'host' => 'mail.truck-motors.su',
        'username' => 'info@truck-motors.su',
        'password' => 'Aa123456',
        'port' => '465',
        'encryption' => 'ssl',
        'streamOptions' => [ 
            'ssl' => [ 
                'allow_self_signed' => true,
                'verify_peer' => false,
                'verify_peer_name' => false,
            ],
        ],
    ],
    'useFileTransport' => false, // Флаг указывающий на то, что бы письма не отправлялись а сохранялись в папку runtime/mail
];

?>