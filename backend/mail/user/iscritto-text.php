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
<?= Yii::t('amosplatform', 'Carissimo iscritto al portale {appName}', ['appName' => $appName]); ?>
<?= "\n"; ?>
<?= "per finalizzare l'iscrizione alle selezioni dei corsi"; ?>
<?php

if (!empty($corsi)) {
    foreach ($corsi as $corso) {
        $Corso = backend\modules\corsi\models\Corsi::findOne($corso);
        if ($Corso) {
            ?>
            <?= "\n\t- $Corso->titolo - $Corso->nome"; ?>
        <?php

        }
    }
}
?>
<?= "\n"; ?>
<?= "le inviamo in allegato i moduli da compilare, firmare e spedire."; ?>
<?= "\n"; ?>
<?= "Alleghiamo anche l'avviso che spiega nel dettaglio il processo di selezione, che le consigliamo di leggere bene."; ?>
<?= "\n"; ?>
<?= "Siamo sempre a disposizione per chiarimenti,"; ?>
<?= "\n"; ?>
<?= "Cordiali Saluti."; ?>
<?= "\n"; ?>


<?= "\n"; ?>
<?= "Congratulazioni!"; ?>
<?= "\n"; ?>
<?= Yii::t('amosplatform', 'Ora sei iscritto al portale {appName}', ['appName' => $appName]); ?>
<?= "\n"; ?>
<?= "Ecco i tuoi dati riepilogativi: "; ?>
<?=

Yii::t('amosplatform', 'Nuovo iscritto nella piattaforma {appName}', [
    'appName' => $appName
        ]
)
?>
<?= "\n"; ?>
<?=

Yii::t('amosplatform', 'Nome: {nome}', [
    'nome' => Html::encode($profile->nome)]);
?>
<?= "\n"; ?>
<?=

Yii::t('amosplatform', 'Cognome: {cognome}', [
    'cognome' => Html::encode($profile->cognome)]);
?>
<?= "\n"; ?>
<?=

Yii::t('amosplatform', 'Cofice Fiscale: {cf}', [
    'cf' => Html::encode($profile->codice_fiscale)]);
?>
<?= "\n"; ?>
<?=

Yii::t('amosplatform', 'Data di nascita: {nascita_data}', [
    'nascita_data' => Html::encode($profile->nascita_data)]);
?>
<?= "\n"; ?>
<?=

Yii::t('amosplatform', 'Sesso: {sesso}', [
    'sesso' => Html::encode($profile->sesso)]);
?>
<?= "\n"; ?>
<?=

Yii::t('amosplatform', 'Email: {email}', [
    'email' => Html::encode($user->email)]);
?>
<?= "\n"; ?>
<?=

Yii::t('amosplatform', 'Nazione di nascita: {nazionedinascita}', [
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


