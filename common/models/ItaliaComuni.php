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
 * This is the model class for table "italia_comuni".
 *
 * @property integer $id
 * @property string $nome
 * @property string $codice_catastale
 * @property integer $regione_id
 * @property integer $provincia_id
 * @property integer $created_by
 * @property string $created_at
 * @property integer $updated_by
 * @property string $updated_at
 * @property integer $deleted_by
 * @property string $deleted_at
 *
 * @property ItaliaProvince $provincia
 * @property ItaliaRegioni $regione
 * @property OperatoriIefp[] $operatoriIefps
 * @property OperatoriIefp[] $operatoriIefps0
 * @property OperatoriIefp[] $operatoriIefps1
 */
class ItaliaComuni extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'italia_comuni';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'regione_id', 'provincia_id'], 'required'],
            [['nome'], 'string'],
            [['regione_id', 'provincia_id', 'created_by', 'updated_by', 'deleted_by'], 'integer'],
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['codice_catastale'], 'string', 'max' => 5]
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
            'codice_catastale' => \Yii::t('amosplatform', 'Codice Catastale'),
            'regione_id' => \Yii::t('amosplatform', 'Regione ID'),
            'provincia_id' => \Yii::t('amosplatform', 'Provincia ID'),
            'created_by' => \Yii::t('amosplatform', 'Creato da'),
            'created_at' => \Yii::t('amosplatform', 'Creato il'),
            'updated_by' => \Yii::t('amosplatform', 'Aggiornato da'),
            'updated_at' => \Yii::t('amosplatform', 'Aggiornato il'),
            'deleted_by' => \Yii::t('amosplatform', 'Cancellato da'),
            'deleted_at' => \Yii::t('amosplatform', 'Cancellato il'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProvincia()
    {
        return $this->hasOne(ItaliaProvince::className(), ['id' => 'provincia_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegione()
    {
        return $this->hasOne(ItaliaRegioni::className(), ['id' => 'regione_id']);
    }
  
    /**
     * @inheritdoc
     * @return ItaliaComuniQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ItaliaComuniQuery(get_called_class());
    }
}
