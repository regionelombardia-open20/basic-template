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


use kartik\password\PasswordInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Reset password';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- logo -->
<div id="bk-formDefaultLogin" class="bk-loginContainer body">
    <h2 class="title-login nom"><?= Html::encode($this->title) ?></h2>
    <p class="subtitle-login"><?= Yii::t('amosplatform', 'Scegli la tua nuova password'); ?></p>
    <div class="clearfix"></div>

        <?php
        $form = ActiveForm::begin([
            'id' => 'login-form',
            'options' => ['class' => 'form-horizontal', 'autocomplete' => 'off'],
        ])
        ?>
            <div class="row">
                <div class="col-xs-12">
                    <?= Html::beginTag('div', ['class' => 'form-group field-firstaccessform-password']) ?>
                    <?= Html::tag('label', $model->getAttributeLabel('username')) ?>
                    <?= Html::tag('strong', $model->username) ?>
                    <?= Html::endTag('div') ?>
                    <div class="form-group pull-right">
                        <span class="pull-right"><?= Yii::t('amosplatform', 'Livello sicurezza') ?></span>
                    </div>
                    <?=
                    $form->field($model, 'password')->widget(PasswordInput::classname(), [
                        'language' => 'it',
                        'pluginOptions' => [
                            'showMeter' => true,
                            'toggleMask' => true,
                            'language' => 'it'
                        ]]);
                    ?>
                    <div class="form-group">
                        <span><?= Yii::t("amosplatform", "(Almeno 8 Caratteri di cui 1 lettera Minuscola, 1 Maiuscola e 1 Numero)") ?></span>
                    </div>
                    <?= $form->field($model, 'ripetiPassword')->passwordInput() ?>
                    <?= $form->field($model, 'token')->hiddenInput()->label(false) ?>
                    <div class="form-group">
                        <?= Html::submitButton(Yii::t('amosplatform', 'Salva'), ['class' => 'btn btn-primary bk-btnLogin col-xs-12', 'name' => 'first-access-button']) ?>
                    </div>
                </div>
            </div>
        <?php ActiveForm::end(); ?>
</div>
