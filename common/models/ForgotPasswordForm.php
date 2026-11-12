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

use Yii;
use yii\base\Model;
use common\models\User;
use open20\amos\admin\models\UserProfile;

/**
 * Reset password form
 */
class ForgotPasswordForm extends Model 
{
    /**
     * @var string Username
     */
    public $username;

    /**
     * @var string Social Security Number
     */
    public $codice_fiscale;
   
    private $_user = false;

    /**
     * Define Properties rules
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['codice_fiscale'], 'string'],
            [['username'], 'safe'],
    ];
    }

    /**
     * Check Username and Social Security Number existence and pairment
     * @param string $attribute_name the attribute currently being validated
     * @param array $params Reserved for future use
     * @return bool
     */
    public function verifica($attribute_name, $params) // TODO translate
{
    if (empty($this->username) && empty($this->codice_fiscale)) 
        {
        $this->addError($attribute_name, Yii::t('amosplatform', 'Almeno uno tra USERNAME e CODICE FISCALE deve essere specificato.')); // TODO translate

        return false;
    }

    return true;
}
    /**
     * Labels for attributes
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'email' => Yii::t('amosplatform', 'Email di registrazione'),
        ];
    }

    /**
     * Returns Logged-in User
     * @return User|null
     */
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findByUsername($this->username);
        }

        return $this->_user;
    }

    /**
     * Check Username existence
     * @param string $username
     * @return User|null
     */
    public function verifyUsername($username)
    {
        $user = new User();
        $verifyUsername = false;
        $verifyUsername = $user->findOne(['username' => $username]);
        return $verifyUsername;
    }

    /**
     * Check Social Security Number existence 
     * @param string $cf Social Security Number
     * @return User|null
     */
    public function verifySocialSecurityNumber($cf)
    {
        $user = new UserProfile();
        $verificacf = false;
        $verificacf = $user->findOne(['codice_fiscale' => $cf]); // TODO Translate
        return $verificacf;
    }
    
}
