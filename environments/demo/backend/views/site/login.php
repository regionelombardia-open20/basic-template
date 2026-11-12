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

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<div id="bk-formDefaultLogin" class="bk-loginContainer">
    <h2><?= \Yii::$app->name ?></h2>
    <h3>Accedi alla piattaforma</h3>
    <hr class="bk-hrLogin">
    <p><?= Yii::t('amosplatform', 'Inserisci le credenziali per accedere'); ?></p>
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
            <?php if (\Yii::$app->params['template-amos']): ?>
                <?= $form->field($model,
                    'ruolo')->dropDownList(yii\helpers\ArrayHelper::map(Yii::$app->authManager->getRoles(), 'name',
                    'description')) ?>
            <?php endif; ?>
            <?= $form->field($model, 'username',
                ['inputOptions' => ['value' => 'demo']])->textInput(['readonly' => true]) ?>
            <?= $form->field($model, 'password',
                ['inputOptions' => ['value' => 'Demo1234']])->passwordInput(['readonly' => true]) ?>

            <div class="form-group">
                <a class="col-xs-12 col-sm-6 bk-askPassword" href="<?= Yii::$app->urlManager->createUrl("site/forgot-password"); ?>">Password dimenticata?</a>
                <?= Html::submitButton('Login', ['class' => 'btn btn-navigation-primary col-xs-12 col-sm-6 pull-right', 'name' => 'login-button']) ?>
            </div>

        </div>
    </div>
    <!--
<p class="bk-loginOr">oppure</p>

<div class="row">
<div class="col-xs-12 col-sm-6 col-md-6 bk-loginFb">
<span class="ti-facebook"></span><a href="#" class="">< ?= Yii::t('amosplatform', 'Connettiti con Facebook'); ?></a>
</div>
<div class="col-xs-12 col-sm-6 col-md-6 bk-loginGoogle">
<span class="ti-google"></span><a href="#" class="">< ?= Yii::t('amosplatform', 'Connettiti con Google'); ?></a>
</div>
</div>

-->
    <?php ActiveForm::end(); ?>

</div>
</div>
