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

use yii\db\Schema;

class m150728_000003_create_italia_comuni extends \yii\db\Migration
{/*
    const TABLE = '{{%italia_comuni}}';

    public function up()
    {
        if ($this->db->schema->getTableSchema(self::TABLE, true) === null) {
   
        $this->createTable(self::TABLE, [
            'id' => Schema::TYPE_PK,
            'nome' => Schema::TYPE_TEXT . " NOT NULL",
            'codice_catastale' => Schema::TYPE_STRING . '(5) NOT NULL',
            'regione_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'provincia_id' => Schema::TYPE_INTEGER . ' NOT NULL'
        ], $this->db->driverName === 'mysql' ? 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB AUTO_INCREMENT=1' : null);               
        }
        else{
            echo "Nessuna creazione eseguita in quanto la tabella esiste già";
            return true;
        }
 
    }

    public function down()
    {
        if ($this->db->schema->getTableSchema(self::TABLE, true) !== null) {            
            $this->dropTable(self::TABLE);
        }
        else{
            echo "Nessuna cancellazione eseguita in quanto la tabella non esiste";
            return true;
        }
    }
*/
}