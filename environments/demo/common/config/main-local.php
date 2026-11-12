<?php

/**
 * Aria S.p.A.
 * OPEN 2.0
 *
 * @package   open20\amos\basic\template
 * @author    Aria S.p.A. <protocollo@pec.ariaspa.it>
 * @license   GNU General Public License v3.0 <https://www.gnu.org/licenses/gpl-3.0.html>
 * @link      https://www.ariaspa.it/
 *
 * This file is part of OPEN 2.0.
 *
 * OPEN 2.0 is free software: you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OPEN 2.0 is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OPEN 2.0. If not, see <https://www.gnu.org/licenses/>.
 */

/*---------- begin: BOOTSTRAP --------*/
/*---------- end: BOOTSTRAP --------*/

/*---------- begin: COMPONENTS AMOS --------*/
/*---------- end: COMPONENTS AMOS --------*/

/*---------- begin: COMPONENTS OTHERS --------*/
$components['db'] = [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=dbname',
            'username' => 'dbuser',
            'password' => 'dbpasswd',
            'charset' => 'utf8',
            'enableSchemaCache' => true,
            'schemaCacheDuration' => 88000,
            'schemaCache' => 'schemaCache',
            'attributes'=>[
                PDO::ATTR_PERSISTENT => true
            ]
        ];
$components['mailer'] = [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'email_host',
                'username' => 'email_user',
                'password' => 'email_passwd',
                'port' => 'email_port',
                //'encryption' => 'tls',
            ],
        ];
        
$components['i18n'] = [
            'translations' => [
				'extraCategoryPaths' => [
                    'amosadmin' => '@common/translation/amosadmin/i18n',
                    'amoscommunity' => '@common/translation/amoscommunity/i18n',
                    'amosinvitations' => '@common/translation/amosinvitations/i18n',
                    'amosmyactivities' => '@common/translation/amosmyactivities/i18n',
                    'amosorganizzazioni' => '@common/translation/amosorganizzazioni/i18n',
				],
            ],
        ];
/*---------- end: COMPONENTS OTHERS --------*/

/*---------- begin: MODULES AMOS --------*/
$modules['admin'] = [
    'fieldsConfigurations' => [
        'boxes' => [
            'box_facilitatori' => ['form' => true, 'view' => true],
            'box_privacy' => ['form' => true, 'view' => true],
        ],
        'fields' => [
            'facilitatore_id' => ['form' => true, 'view' => true, 'referToBox' => 'box_facilitatori'],
            'privacy' => ['form' => true, 'view' => true, 'referToBox' => 'box_privacy'],
        ]
    ]
];
$modules['community'] = [
    'class' => 'open20\amos\community\AmosCommunity',
];
$modules['cwh'] = [
    'class' => 'open20\amos\cwh\AmosCwh',
    'rbacEnabled' => false
];
$modules['tag'] = [
    'class' => 'open20\amos\tag\AmosTag',
];
/*---------- end: MODULES AMOS --------*/

/*---------- begin: MODULES OTHERS --------*/
/*---------- end: MODULES OTHERS --------*/

$config = [
    'bootstrap' => $bootstrap,
    'components' => $components,
    'modules' => $modules,
];

return $config;
