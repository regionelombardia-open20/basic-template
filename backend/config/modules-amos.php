<?php

/**
 * Lombardia Informatica S.p.A.
 * OPEN 2.0
 *
 *
 * @package    lispa\amos\basic\template
 * @category   CategoryName
 */

$modules = [
    'amministra-utenti' => [
        'class' => 'mdm\admin\Module',
        'layout' => "@vendor/lispa/amos-core/views/layouts/admin",
        //'left-menu', // it can be '@path/to/your/layout'.
        'controllerMap' => [
            'assignment' => [
                'class' => 'mdm\admin\controllers\AssignmentController',
                'userClassName' => 'common\models\User',
                'idField' => 'id'
            ],
            /*
              'other' => [
              'class' => 'path\to\OtherController', // add another controller
              ],
             */
        ],
        'menus' => [
            'assignment' => [
                'label' => 'Gestisci Assegnazioni' // TODO translate
            ],
        ]
    ],
    'chat' => [
        'class' => 'lispa\amos\chat\AmosChat',
    ],
    'comments' => [
       'class' => 'lispa\amos\comments\AmosComments',
       'modelsEnabled' => [
	   'lispa\amos\discussioni\models\DiscussioniTopic',
           'lispa\amos\documenti\models\Documenti',
           'lispa\amos\events\models\Event',
           'lispa\amos\news\models\News',
       ],
	],
    'comuni' => [
        'class' => 'lispa\amos\comuni\AmosComuni',
    ],
    'cwh' => [
        'class' => 'lispa\amos\cwh\AmosCwh',
    ],
    'dashboard' => [
        'class' => 'lispa\amos\dashboard\AmosDashboard',
    ],
    'discussioni' => [
        'class' => 'lispa\amos\discussioni\AmosDiscussioni',
    ],
    'documenti' => [
        'class' => 'lispa\amos\documenti\AmosDocumenti',
    ],
    'layout' => [
        'class' => 'lispa\amos\layout\Module',
    ],
    'myactivities' => [
         'class' => 'lispa\amos\myactivities\AmosMyActivities',
    ],
    'news' => [
        'class' => 'lispa\amos\news\AmosNews',
    ],
    'organizzazioni' => [
        'class' => 'lispa\amos\organizzazioni\Module'
    ],
    'partnershipprofiles' => [
        'class' => 'lispa\amos\partnershipprofiles\Module'
    ],
    'privileges' => [
	    'class' => 'lispa\amos\privileges\AmosPrivileges',
    ],
    'slideshow' => [
        'class' => 'lispa\amos\slideshow\AmosSlideshow'
    ],
    'tag' => [
        'class' => 'lispa\amos\tag\AmosTag',
    ],
    'upload' => [
        'class' => 'lispa\amos\upload\AmosUpload',
    ],
    'utility' => [
        'class' => 'lispa\amos\utility\Module'
    ],
    'report' => [
        'class' => 'lispa\amos\report\AmosReport',
        'modelsEnabled' => [
 	    'lispa\amos\discussioni\models\DiscussioniTopic',
	    'lispa\amos\documenti\models\Documenti',
	    'lispa\amos\events\models\Event',
            'lispa\amos\news\models\News',
        ]
    ],
    'workflow' => [
       'class' => 'lispa\amos\workflow\AmosWorkflow',
   ],

];


return $modules;
