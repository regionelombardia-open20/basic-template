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
$bootstrap[] = 'comments';
/*---------- end: BOOTSTRAP --------*/

/*---------- begin: COMPONENTS AMOS --------*/
/*---------- end: COMPONENTS AMOS --------*/

/*---------- begin: COMPONENTS OTHERS --------*/
$components = [
    'request' => [
        // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
        'cookieValidationKey' => '',
    ],
];
/*---------- end: COMPONENTS OTHERS --------*/

/*---------- begin: MODULES AMOS --------*/
$modules['chat'] = [
    'class' => 'open20\amos\chat\AmosChat',
];
$modules['comments'] = [
    'class' => 'open20\amos\comments\AmosComments',
    'enableMailsNotification' => false,
    'modelsEnabled' => [
        'open20\amos\discussioni\models\DiscussioniTopic',
        'open20\amos\documenti\models\Documenti',
        'open20\amos\news\models\News',
    ],
];
$modules['cwh'] = [
    'cached' => false,
];
$modules['dashboard'] = [
        'useWidgetGraphicDashboardVisible' => true,
        'useWidgetGraphicOrder' => true,
];
$modules['discussioni'] = [
    'class' => 'open20\amos\discussioni\AmosDiscussioni',
];
$modules['documenti'] = [
    'class' => 'open20\amos\documenti\AmosDocumenti',
    'params' => [
        'site_publish_enabled' => true,
        'site_featured_enabled' => true
    ],
];
$modules['favorites'] = [
    'class' => 'open20\amos\favorites\AmosFavorites',
    'modelsEnabled' => [
        'open20\amos\discussioni\models\DiscussioniTopic',
        'open20\amos\documenti\models\Documenti',
        'open20\amos\news\models\News',
    ]
];
$modules['news'] = [
    'class' => 'open20\amos\news\AmosNews',
    'params' => [
        'site_publish_enabled' => true,
        'site_featured_enabled' => true
    ]
];
$modules['privileges'] = [
    'class' => 'open20\amos\privileges\AmosPrivileges',
];
$modules['report'] = [
    'class' => 'open20\amos\report\AmosReport',
    'modelsEnabled' => [
        'open20\amos\discussioni\models\DiscussioniTopic',
        'open20\amos\documenti\models\Documenti',
        'open20\amos\news\models\News',
    ],
];
if (isset($modules['tag'])) {
    if (isset($modules['community'])) {
        $modules['tag']['modelsEnabled'][] = 'common\models\Community';
    }
}
/*---------- end: MODULES AMOS --------*/

/*---------- begin: MODULES OTHERS --------*/
/*---------- end: MODULES OTHERS --------*/

$config = [
    'name' => 'Amos Basic Template DEMO',
    'bootstrap' => $bootstrap,
    'components' => $components,
    'modules' => $modules,
];

return $config;
