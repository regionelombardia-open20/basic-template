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
