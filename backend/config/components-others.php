<?php
/**
 * Aria S.p.A.
 * OPEN 2.0
 *
 *
 * @package    open20\amos\basic\template
 * @category   CategoryName
 */
return [
    'errorHandler' => [
        'errorAction' => 'site/error',
    ],
    'eventSequence' => [
        'class' => '\raoul2000\workflow\events\BasicEventSequence',
    ],
    'log' => [
        'traceLevel' => YII_DEBUG ? 3 : 0,
        'targets' => [
            [
                'class' => 'yii\log\FileTarget',
                'levels' => ['error', 'warning'],
                'logVars' => ['_SERVER'],
            ],
        ],
    ],
    'request' => [
        'csrfParam' => '_csrf-backend',
        'enableCookieValidation' => false,
    ],
    'session' => [
        // this is the name of the session cookie used for login on the backend
        'name' => 'advanced-backend',
    ],
    'user' => [
        'class' => 'open20\amos\core\user\AmosUser',
        'identityClass' => 'open20\amos\core\user\User',
        'loginUrl' => '/admin/security/login',
        'enableAutoLogin' => true,
        'identityCookie' => [
            'name' => '_identity-backend',
            'httpOnly' => true,
            'secure' => true
        ],
    ],
    'socialShare' => [
        'class' => \open20\amos\core\components\ConfiguratorSocialShare::class,
    ],
];
