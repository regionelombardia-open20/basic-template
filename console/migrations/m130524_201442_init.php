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

class m130524_201442_init extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        } 

        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->defaultValue(null)->unique(),
            'auth_key' => $this->string(32)->notNull()->defaultValue(''),
            'password_hash' => $this->string()->notNull()->defaultValue(''),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull()->defaultValue(0),
            'updated_at' => $this->integer()->notNull()->defaultValue(0),
            'deleted_at' => $this->dateTime()->defaultValue(null)->comment('Cancellato il'),
            'created_by' => $this->integer(11)->defaultValue(null)->comment('Creato da'),
            'updated_by' => $this->integer(11)->defaultValue(null)->comment('Aggiornato da'),
            'deleted_by' => $this->integer(11)->defaultValue(null)->comment('Cancellato da')
        ], $tableOptions);        
        
        // Aggiungo l'amministratore
        $this->batchInsert('{{%user}}',['id', 'username', 'auth_key', 'password_hash', 'password_reset_token', 'email', 'status'], [
            [1, 'admin', '8uSwKw27mKv-SprmqWzK8K5gvlpGnr8v', '$2y$13$ab216g/Nd6qwBowDuYDnNOTsYvrEwzcXsiSxc1zQGYaG5H2wnTNY.', 'bqDiF8NgsMNjHtGnSSxX4qg1ezrrJ7xm_1469790400', 'nome.cognome@example.com', 10]
        ]);
        return true;
    }

    public function safeDown()
    {
        $this->dropTable('{{%user}}');
        return true;
    }
}
