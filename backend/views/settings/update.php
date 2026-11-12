<?php

/**
 * Aria S.p.A.
 * OPEN 2.0
 *
 * @package   open20\amos\admin\views\user-profile
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

use open20\amos\admin\AmosAdmin;
use yii\bootstrap\Button;
use open20\amos\core\helpers\Html;
use open20\amos\core\icons\AmosIcons;
use backend\models\Settings;
use kartik\form\ActiveForm;

/**
 * @var yii\web\View $this
 * @var Settings $model
 */

$this->title = ucfirst($model->name);
$this->params['breadcrumbs'][] = ['label' => AmosAdmin::t('amosplatform', 'Platform Configurator'), 'url' => ['/admin/settings']];
$this->params['breadcrumbs'][] = AmosAdmin::t('amosplatform', 'Update');
/**
 * @param $model
 * @param ActiveForm $form
 * @return string
 */
function actionsBar($model, $form)
{
    return '
    <div class="details_card">
        <div class="profile row nom">
            <div class="col-xs-12">
                ' . \open20\amos\core\helpers\Html::a(\open20\amos\core\icons\AmosIcons::show('check') .
            ' ' .
            AmosAdmin::t('amosplatform', 'Add Value'),
            Yii::$app->urlManager->createUrl(['/settings/add-value', 'id' => $model->id]),
            ['class' => 'btn btn-primary pull-right']
        ) .
        $form->field($model, "[{$model->id}]enabled")->widget(\kartik\widgets\SwitchInput::classname())->label(false) .
        '
            </div>
        </div>
    </div>';
}

/**
 * @param $model
 * @param ActiveForm $form
 * @return string
 */
function getSubs($model, $form, $enabled = true)
{
    $result = "";

    if ($model->type == 'array') {
        $subs = Settings::findAll([
            'route' => $model->route . $model->name . '/'
        ]);
        $result .= '<h4>' . ucfirst($model->name) . '</h4>';
        $result .= actionsBar($model, $form);
        $result .= '<hr>';

        foreach ($subs as $sub) {
            $result .= Html::tag('div', getSubs($sub, $form, $enabled), ['class' => 'col-sm-offset-1']);
        }
    } else {
        $result .= '<h5><b>' . ucfirst($model->name) . '</b></h5>';

        $result .= '<div class="col-sm-4">';
        $result .= $form->field($model, "[{$model->id}]value")->textInput();
        $result .= '</div>';

        $result .= '<div class="col-sm-4">';
        $result .= $form->field($model, "[{$model->id}]type")->dropDownList([
            'boolean' => 'Boolean',
            'integer' => 'Integer',
            'double' => 'Double',
            'float' => 'Float',
            'string' => 'String',
            'array' => 'Array',
            'NULL' => 'NULL',
        ]);
        $result .= '</div>';

        $result .= '<div class="col-sm-4">';
        $result .= $form->field($model, "[{$model->id}]enabled")->widget(\kartik\widgets\SwitchInput::classname());
        $result .= '</div>';

        $result = Html::tag('div', $result, ['class' => 'col-sm-12']);
    }

    return $result;
}

?>
    <hr>
    <h3><?= AmosAdmin::t('amosplatform', ucfirst($model->name) . ' Node Update'); ?></h3>
    <hr>
<?php
$form = ActiveForm::begin([
    'options' => [
        'class' => 'default-form col-xs-12 nop',
    ]
]);

echo getSubs($model, $form, $model->enabled);

echo \open20\amos\core\forms\CloseSaveButtonWidget::widget();

ActiveForm::end(); ?>