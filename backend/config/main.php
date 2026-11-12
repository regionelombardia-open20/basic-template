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

$common = require(__DIR__ . '/../../common/config/main.php');

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$modules = array_merge(
    $common['modules'],
    require(__DIR__ . '/modules-others.php'),
    require(__DIR__ . '/modules-amos.php')
);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// TODO verificare che non ci siano index che non caricano bootstrap, in caso non ce ne siano, questa va eliminata
$bootstrap = array_merge(
    $common['bootstrap'],
    require(__DIR__ . '/bootstrap.php')
);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$components = array_merge(
    $common['components'],
    require(__DIR__ . '/components-others.php'),
    require(__DIR__ . '/components-amos.php')
);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$params = array_merge(
    $common['params'],
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if (isset($modules['chat'])) {
    $bootstrap[] = 'chat';
}
if ($params['template-amos'] === true) {
    $bootstrap[] = 'backend\bootstrap\AssignRolesAdmin';
}

if (isset($modules['tag'])) {

    if (isset($modules['community'])) {
        $modules['tag']['modelsEnabled'][] = 'open20\amos\community\models\Community';
    }
    if (isset($modules['discussioni'])) {
        $modules['tag']['modelsEnabled'][] = 'open20\amos\discussioni\models\DiscussioniTopic';
    }
    if (isset($modules['documenti'])) {
        $modules['tag']['modelsEnabled'][] = 'open20\amos\documenti\models\Documenti';
    }
    if (isset($modules['news'])) {
        $modules['tag']['modelsEnabled'][] = 'open20\amos\news\models\News';
    }
    if (isset($modules['organizzazioni'])) {
        $modules['tag']['modelsEnabled'][] = 'open20\amos\organizzazioni\models\Profilo';
        $modules['tag']['modelsEnabled'][] = 'open20\amos\organizzazioni\models\ProfiloSedi';
    }
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
return [
    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            '*',
            '/build/'
        ],
    ],
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'defaultRoute' => '/admin/security/login',
    'homeUrl' => '/dashboard',
    'id' => 'app-backend',
    'name' => 'Amos Basic Template',
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    'bootstrap' => $bootstrap,
    'components' => $components,
    'modules' => $modules,
    'params' => $params,
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
];
