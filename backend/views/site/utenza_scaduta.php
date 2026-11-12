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

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 */
$this->title = Yii::t('amosplatform', 'Utenza non attiva');
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- logo -->
<div id="bk-formDefaultLogin" class="bk-loginContainer">
    <h2><?= Html::encode($this->title) ?></h2>
    <hr class="bk-hrLogin">
    <p><?= $message ?></p>
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <div class="form-group">
            </div>
            <div class="clear"></div>
            <hr class="bk-hrLogin">
        </div>
    </div>
</div>
