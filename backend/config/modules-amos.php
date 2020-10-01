<?php

/**
 * Aria S.p.A.
 * OPEN 2.0
 *
 *
 * @package    open20\amos\basic\template
 * @category   CategoryName
 */

$modules = [
    'amministra-utenti' => [
        'class' => 'open20\amos\admin\RoleManager',
        'layout' => "@vendor/open20/amos-core/views/layouts/admin",
        //'left-menu', // it can be '@path/to/your/layout'.
        'controllerMap' => [
            'assignment' => [
                'class' => 'mdm\admin\controllers\AssignmentController',
                'userClassName' => 'common\models\User',
                'idField' => 'id'
            ],
        ],
        'menus' => [
            'assignment' => [
                'label' => 'Gestisci Assegnazioni' // TODO translate
            ],
        ]
    ],
    'comuni' => [
        'class' => 'open20\amos\comuni\AmosComuni',
    ],
    'dashboard' => [
        'class' => 'open20\amos\dashboard\AmosDashboard',
    ],
    'layout' => [
        'class' => 'open20\amos\layout\Module',
    ],
    'myactivities' => [
         'class' => 'open20\amos\myactivities\AmosMyActivities',
    ],
    'privileges' => [
	    'class' => 'open20\amos\privileges\AmosPrivileges',
    ],
    'upload' => [
        'class' => 'open20\amos\upload\AmosUpload',
    ],
    'workflow' => [
       'class' => 'open20\amos\workflow\AmosWorkflow',
   ],
];

return $modules;
