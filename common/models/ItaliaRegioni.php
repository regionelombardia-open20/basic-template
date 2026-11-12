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

namespace common\models;


/**
 * This is the model class for table "italia_regioni".
 *
 * @property integer $id
 * @property string $nome
 *
 * @property ItaliaComuni[] $italiaComunis
 * @property ItaliaProvince[] $italiaProvinces
 */
class ItaliaRegioni extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'italia_regioni';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => \Yii::t('amosplatform', 'ID'),
            'nome' => \Yii::t('amosplatform', 'Nome'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItaliaComunis()
    {
        return $this->hasMany(ItaliaComuni::className(), ['regione_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItaliaProvinces()
    {
        return $this->hasMany(ItaliaProvince::className(), ['regione_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return ItaliaRegioniQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ItaliaRegioniQuery(get_called_class());
    }
}
