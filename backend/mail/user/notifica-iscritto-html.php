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

$this->title = Yii::t('amosplatform', 'Nuovo iscritto nella piattaforma {appName}', ['appName' => $appName]);
?>

<table width="600" border="0" cellpadding="0" cellspacing="0" align="center">
    <tr>
        <td>
            <div class="corpo" style="background-color:#fff;padding:50px;">               
                <div class="sezione titolo" style="overflow:hidden;color:#000000;">
                    <h2 style="padding:5px 0;	margin:0;">Nuovo iscritto</h2>
                </div>
                <div class="sezione" style="overflow:hidden;color:#000000;">
                    <div class="testo">
						<?= Yii::t('amosplatform', 'Un nuovo utente si &eacute; iscritto alla piattaforma {appName}!', ['appName' => $appName]); ?>
                    <br />                    
                    Ecco i dati riepilogativi del nuovo utente: 
                    <br />
                        <p><?=
                            Yii::t('amosplatform', '<b>Nome:</b>: {nome}', [
                                'nome' => Html::encode($profile->nome)]);
                            ?>
                         </p>
                         <p>
                            <?=
                            Yii::t('amosplatform', '<b>Cognome:</b> {cognome}', [
                                'cognome' => Html::encode($profile->cognome)]);
                            ?>
                         </p>
                         <p>
                            <?=
                            Yii::t('amosplatform', '<b>Cofice Fiscale:</b> {cf}', [
                                'cf' => Html::encode($profile->codice_fiscale)]);
                            ?>
                         </p>
                         <p>
                            <?=
                            Yii::t('amosplatform', '<b>Data di Nascita:</b> {nascita_data}', [
                                'nascita_data' => Html::encode($profile->nascita_data)]);
                            ?>
                         </p>
                         <p>
                            <?=
                            Yii::t('amosplatform', '<b>Sesso:</b> {sesso}', [
                                'sesso' => Html::encode($profile->sesso)]);
                            ?>
                         </p>
                         <p>                          
                            <?=
                            Yii::t('amosplatform', '<b>Email:</b> {email}', [
                                'email' => Html::encode($user->email)]);
                            ?>
                         </p>
                         <p>                                                                                   
                            <?=
                            Yii::t('amosplatform', '<b>Nazione di nascita:</b> {nazionedinascita}', [
                                'nazionedinascita' => Html::encode($profile->nascitaNazioni->nome)]);
                            ?>                                                   
                        </p>                                                
                    </div>
                </div>
            </div>
        </td>
    </tr>

    <tr>
        <td>
            <div id="footer"
                 style="padding:20px 50px;background-color:#ffffff;">
                     <?=
                     Yii::t('amosplatform', '{appName} - {appLink}', [
                         'appName' => $appName,
                         'appLink' => Html::a(Html::encode($appLink), $appLink, [
                             'style' => "text-decoration:underline;"
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
                Yii::t('amosplatform', 'Questo messaggio è stato inviato automaticamente dalla piattaforma {appName}.', [
                    'appName' => $appName,
                ])
                ?>
            </div>
        </td>
    </tr>
</table>
