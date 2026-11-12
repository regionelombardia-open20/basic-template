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

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user common\models\User */

$appLink = Yii::$app->urlManager->createAbsoluteUrl(['/']);
$appLinkPrivacy = Yii::$app->urlManager->createAbsoluteUrl(['/admin/user-profile/privacy']);
$appName = Yii::$app->name;

$this->title = Yii::t('amosplatform', 'Registrazione {appName}', ['appName' => $appName]);
$this->registerCssFile('http://fonts.googleapis.com/css?family=Roboto');
$sessoBenvenuto = 'Benvenuto';
if ($profile->sesso == 'Femmina') {
    $sessoBenvenuto = 'Benvenuta';
}
?>

<table width="600" border="0" cellpadding="0" cellspacing="0" align="center">
    <tr>
        <td>
            <div id="header" style="height:70px;padding:15px 35px;border-bottom: 3px solid #46793e; background-color: #ffffff; padding: 20px 0;">
                <?= Html::img(Yii::$app->urlManager->createAbsoluteUrl(['/img/logo.png'])) ?>                
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="corpo" style="background-color:#fff;padding:50px;">                

                <div class="sezione titolo" style="overflow:hidden;color:#000000;">
                    <h2 style="padding:5px 0;	margin:0;"><?= $sessoBenvenuto ?></h2>
                </div>
                <div class="sezione" style="overflow:hidden;color:#000000;">
                    <div class="testo">
                        <p><?=
                            Yii::t('amosplatform', '{nome} {cognome}', [
                                'nome' => Html::encode($profile->nome),
                                'cognome' => Html::encode($profile->cognome)]);
                            ?>
                        </p>
                        <p>
                            <?=
                            Yii::t('amosplatform', 'Benvenuto nella piattaforma {appName}', [
                                'appName' => $appName
                                    ]
                            )
                            ?>
                        </p>

                        <p>
                            <?= Html::beginTag('a', ['href' => $appLink . 'site/inserisci-dati-autenticazione?token=' . $profile->user->password_reset_token, 'style' => 'color:#00742e; font-weight:bold;']) ?>
                            <?= Yii::t('amosplatform', 'Accedi alla piattaforma'); ?>
                            <?= Html::endTag('a'); ?>
                        </p>
                        <p>
                            <?= Yii::t('amosplatform', 'Se il link non funziona copia e incolla il seguente in una finestra del tuo browser di navigazione') ?>
                            <span style="color:#00742e"><?= $appLink . 'site/inserisci-dati-autenticazione?token=' . $profile->user->password_reset_token ?></span>
                        </p>
                    </div>

                </div>

            </div>

        </td>
    </tr>

    <tr>
        <td>
            <div id="footer"
                 style="padding:20px 50px;background-color:#eee;">
                     <?=
                     Yii::t('amosplatform', '{appName} - {appLink}', [
                         'appName' => $appName,
                         'appLink' => Html::a(Html::encode($appLink), $appLink, [
                             'style' => "text-decoration:underline; color:#00742e;"
                         ]),
                     ])
                     ?>
            </div>
        </td>
    </tr>

    <tr>
        <td>
            <div class="sezione bottom" style="padding:15px 50px;color:#233C32;font-size:11px;">
                <?=
                Yii::t('amosplatform', '{nome} {cognome}, questo messaggio ti è stato inviato automaticamente dalla piattaforma {appName}, a cui sei registrato con l\'indirizzo email {email}.', [
                    'appName' => $appName,
                    'nome' => $profile->nome,
                    'cognome' => $profile->cognome,
                    'email' => $profile->user->email,
                ])
                ?>
            </div>
        </td>
    </tr>
</table>
