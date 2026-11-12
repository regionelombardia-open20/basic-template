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

class m170612_000001_bypass_cwhconfiguration extends \yii\db\Migration
{
    public function up()
    {
        $sql = '
		INSERT INTO `cwh_config_contents` (`id`, `classname`, `label`, `status_attribute`, `status_value`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
		(3,	\'open20\\\amos\\\news\\\models\\\News\',	\'News\',	\'status\',	\'NewsWorkflow/BOZZA\',	\'2017-06-12 09:58:40\',	\'2017-06-12 09:58:40\',	NULL,	1,	1,	NULL),
		(4,	\'open20\\\amos\\\discussioni\\\models\\\DiscussioniTopic\',	\'DiscussioniTopic\',	\'status\',	\'DiscussioniTopicWorkflow/BOZZA\',	\'2017-06-12 09:58:53\',	\'2017-06-12 09:58:53\',	NULL,	1,	1,	NULL),
		(5,	\'open20\\\amos\\\documenti\\\models\\\Documenti\',	\'Documenti\',	\'status\',	\'DocumentiWorkflow/BOZZA\',	\'2017-06-12 09:59:09\',	\'2017-06-12 09:59:09\',	NULL,	1,	1,	NULL);
        ';
        $this->execute($sql);

    }

    public function down()
    {


    }
}

