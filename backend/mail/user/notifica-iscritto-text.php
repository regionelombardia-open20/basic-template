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
?>
<?= "\n"; ?>
<?=

Yii::t('amosplatform', 'Nuovo iscritto nella piattaforma {appName}', [
    'appName' => $appName
        ]
)
?>
<?= "\n"; ?>
<?= Yii::t('amosplatform', 'Un nuovo utente si &eacute; iscritto alla piattaforma {appName}!', ['appName' => $appName]); ?>
<?= "\n"; ?>       
<?= "Ecco i dati riepilogativi del nuovo utente: "; ?>
<?= "\n"; ?>
<?=

Yii::t('amosplatform', '<b>Nome:</b>: {nome}', [
    'nome' => Html::encode($profile->nome)]);
?>
<?= "\n"; ?>
<?=

Yii::t('amosplatform', '<b>Cognome:</b> {cognome}', [
    'cognome' => Html::encode($profile->cognome)]);
?>
<?= "\n"; ?>
<?=

Yii::t('amosplatform', '<b>Cofice Fiscale:</b> {cf}', [
    'cf' => Html::encode($profile->codice_fiscale)]);
?>
<?= "\n"; ?>
<?=

Yii::t('amosplatform', '<b>Data di nascita:</b> {nascita_data}', [
    'nascita_data' => Html::encode($profile->nascita_data)]);
?>
<?= "\n"; ?>
<?=

Yii::t('amosplatform', '<b>Sesso:</b> {sesso}', [
    'sesso' => Html::encode($profile->sesso)]);
?>
<?= "\n"; ?>
<?=

Yii::t('amosplatform', '<b>Telefono:</b> {telefono}', [
    'telefono' => Html::encode($profile->telefono)]);
?>
<?= "\n"; ?>
<?=

Yii::t('amosplatform', '<b>Email:</b> {email}', [
    'email' => Html::encode($user->email)]);
?>
<?= "\n"; ?>
<?=
Yii::t('amosplatform', '<b>Nazione di nascita:</b> {nazionedinascita}', [
    'nazionedinascita' => Html::encode($profile->nascitaNazioni->nome)]);
?>

<?= "\n"; ?>
<?= "\n"; ?>
<?=

Yii::t('amosplatform', 'Questo messaggio è stato inviato automaticamente dalla piattaforma {appName}.', [
    'appName' => $appName,
])
?>
<?= "\n"; ?>
<?= "\n"; ?>
<?= $appLink; ?>


