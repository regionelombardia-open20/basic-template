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

namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\helpers\FileHelper;
use yii\web\NotFoundHttpException;

class FilesController extends \yii\web\Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => [
                            'index'
                        ],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    /**
     * Return the file or exception
     * @param $file
     * @return $this
     * @throws NotFoundHttpException
     */
    public function actionIndex($file)
    {
        $filePath = __DIR__ . '/../web/' . $file;

        //If file exists
        if (file_exists($filePath) && !strstr($file, '../')) {
            /**
             * @var $fileInfo array
             */
            $fileInfo = pathinfo($filePath);

            /**
             * Extensions locked
             */
            $notExpectedFormats = [
                'cgi-script',
                'php',
                'php2',
                'php3',
                'php4',
                'php5',
                'php6',
                'php7',
                'php8',
                'pl',
                'py',
                'js',
                'jsp',
                'asp',
                'htm',
                'html',
                'shtml',
                'sh',
                'cgi',
                'git',
                'htaccess',
                'htpasswd'
            ];

            /**
             * If the extension is not alowed
             */
            if (in_array($fileInfo['extension'], $notExpectedFormats)) {
                throw new NotFoundHttpException('File Not Found');
            }

            return Yii::$app->response->sendFile($filePath);
        }

        throw new NotFoundHttpException('File Not Found');
    }
}
