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
$sessoBenvenuto = 'Benvenuto';
if ($profile->sesso == 'Femmina') {
    $sessoBenvenuto = 'Benvenuta';
}
?>
<?= Yii::t('amosplatform', '{nome} {cognome}', [
    'nome' => Html::encode($profile->nome),
    'cognome' => Html::encode($profile->cognome)]);
?>
<?= "\n"; ?>
<?= "\n"; ?>
<?= Html::beginTag('a', ['href' => $appLink . 'site/inserisci-dati-autenticazione?token=' . $profile->user->password_reset_token]) ?>
                            <?= Yii::t('amosplatform', 'Accedi alla piattaforma {appName}',
							 [
								'appName' => $appName
							]
							
							); ?>
                            <?= Html::endTag('a'); ?>
<?= "\n"; ?>
<?= Yii::t('amosplatform', 'Se il link non funziona copia e incolla il seguente in una finestra del tuo browser di navigazione') ?>
                            <?= $appLink . 'site/inserisci-dati-autenticazione?token=' . $profile->user->password_reset_token ?>
		<?= "\n"; ?>
		<?= "\n"; ?>	
		
<?=
                Yii::t('amosplatform', '{nome} {cognome}, questo messaggio ti è stato inviato automaticamente dalla piattaforma {appName}, a cui sei registrato con l\'indirizzo email {email}.', [
					'appName' => $appName,
                    'nome' => $profile->nome,
                    'cognome' => $profile->cognome,
                    'email' => $profile->user->email,
                ])
                ?>
<?= "\n"; ?>
<?= "\n"; ?>
<?= $appLink; ?>


