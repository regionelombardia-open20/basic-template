<?php

/**
 * Aria S.p.A.
 * OPEN 2.0
 *
 * @package   open20\amos-basic-template
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

return [
    'redactor' => [
        'class' => 'yii\redactor\RedactorModule',
        'uploadDir' => '@webroot/uploadfiles/redactor',
        'uploadUrl' => '@web/uploadfiles/redactor',
        'imageAllowExtensions' => ['jpg', 'png', 'gif']
    ],
    'translatemanager' => [
        'class' => 'lajax\translatemanager\Module',
        'root' => [
	    '@frontend',
            '@app', // The root directory of the project scan.
            '@vendor/open20/',
        ],
            'scanRootParentDirectory' => true, // Whether scan the defined `root` parent directory, or the folder itself.
        // IMPORTANT: for detailed instructions read the chapter about root configuration.
            'layout' => 'language',             // Name of the used layout. If using own layout use 'null'.
            'allowedIPs' => ['*'],      // IP addresses from which the translation interface is accessible.
            'roles' => ['ADMIN'],               // For setting access levels to the translating interface.
            'tmpDir' => '@runtime',             // Writable directory for the client-side temporary language files.
        // IMPORTANT: must be identical for all applications (the AssetsManager serves the JavaScript files containing language elements from this directory).
        'phpTranslators' => [               // list of the php function for translating messages.
            '::t',
            '::tText',
            '::tHtml',
        ],
            'jsTranslators' => ['lajax.t'],     // list of the js function for translating messages.
            'patterns' => ['*.js', '*.php'],    // list of file extensions that contain language elements.
            'ignoredCategories' => ['yii'],     // these categories won't be included in the language database.
            'ignoredItems' => ['config'],       // these files will not be processed.
            'scanTimeLimit' => null,            // increase to prevent "Maximum execution time" errors, if null the default max_execution_time will be used
            'searchEmptyCommand' => '!',        // the search string to enter in the 'Translation' search field to find not yet translated items, set to null to disable this feature
            'defaultExportStatus' => 1,         // the default selection of languages to export, set to 0 to select all languages by default
            'defaultExportFormat' => 'json',    // the default format for export, can be 'json' or 'xml'
        'tables' => [                       // Properties of individual tables
            [
                'connection' => 'db',       // connection identifier
                'table' => '{{%language}}',         // table name
                'columns' => ['name', 'name_ascii'],// names of multilingual fields
                'category' => 'database-table-name',// the category is the database table name
            ]
        ],
    ],
];
