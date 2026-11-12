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

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;


$this->title = 'Password dimenticata';
$this->params['breadcrumbs'][] = $this->title;
?>

<div id="bk-formDefaultLogin" class="bk-loginContainer">
    <h2><?= Html::encode($this->title) ?></h2>
    <hr class="bk-hrLogin">
    <p><?= Yii::t('amosplatform', 'Inserisci lo username di registrazione oppure il codice fiscale'); ?></p>

    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
            <?= $form->field($model, 'username') ?>
            <p class="text-center"><?= Yii::t('amosplatform', ' - oppure - '); ?></p>
            <?= $form->field($model, 'codice_fiscale') ?>

            <div class="form-group">
                <?= Html::submitButton('Invia le nuove credenziali', ['class' => 'btn bk-btnLogin col-xs-12 col-sm-6', 'name' => 'login-button']) ?>
            </div>
            <a class="col-xs-12 col-sm-12 text-right bk-askPassword" href="login">Accedi</a>


            <div class="clear"></div>

            <hr class="bk-hrLogin">
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
