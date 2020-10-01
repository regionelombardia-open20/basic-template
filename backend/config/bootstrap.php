<?php

/**
 * Aria S.p.A.
 * OPEN 2.0
 *
 *
 * @package    open20\amos\basic\template
 * @category   CategoryName
 */

$bootstrap = [];

$bootstrap[] = 'translatemanager';

$bootstrap[] = [
    'class' => 'open20\amos\core\components\LanguageSelector',
    'supportedLanguages' => ['en-GB', 'it-IT'],
    'allowedIPs' => ['*']
];

$bootstrap[] = 'open20\amos\core\bootstrap\Breadcrumb';
$bootstrap[] = 'workflow';
$bootstrap[] = 'notify';
$bootstrap[] = 'comments';
$bootstrap[] = 'layout';
$bootstrap[] = 'socialauth';

return $bootstrap;
