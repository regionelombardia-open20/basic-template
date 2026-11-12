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

class m160101_010101_alter_rbac extends Migration
{
    public function safeUp()
    {
        $this->execute('SET FOREIGN_KEY_CHECKS = 0;

        ALTER TABLE auth_assignment MODIFY item_name VARCHAR(255);
        ALTER TABLE auth_assignment MODIFY user_id VARCHAR(255);

        ALTER TABLE auth_item MODIFY name VARCHAR(255);
        ALTER TABLE auth_item MODIFY rule_name VARCHAR(255);

        ALTER TABLE auth_item_child MODIFY parent VARCHAR(255);
        ALTER TABLE auth_item_child MODIFY child VARCHAR(255);

        ALTER TABLE auth_rule MODIFY name VARCHAR(255);

        SET FOREIGN_KEY_CHECKS = 1;
        ');
        
        return true;
    }

    public function safeDown() 
    {
        return true;
    }
}
