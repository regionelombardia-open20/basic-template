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

use yii\db\Migration;

class m170609_170548_set_demo_user extends Migration
{
    const USER_TABLE = "user";
    const USER_PROFILE_TABLE = "user_profile";

    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
        $this->update(self::USER_TABLE, [
            'username' => 'demo',
            'auth_key' => '8uSwKw27mKv-SprmqWzK8K5gvlpGnr8v',
            'password_hash' => '$2y$13$DWkzsaBL0tvJFn0jLH3cKeX903BtkDtjqI8tF/HrdYts00btbRsqa'
        ], 'username = "admin"');
    }

    public function safeDown()
    {
        $this->update(self::USER_TABLE, [
            'username' => 'admin',
            'auth_key' => '1cd87f5976c0893cb50d0758f528963f',
            'password_hash' => '$2y$13$76oNWmUm7XRTXGUPSJNcI.UZ1Ni5Pg475ZiDcpr0/6T4FVwh9cRQe'
        ], 'username = "demo"');
    }
}
