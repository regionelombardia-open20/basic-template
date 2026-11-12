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

Yii::setAlias('@common', dirname(__DIR__));
Yii::setAlias('@frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('@backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('@console', dirname(dirname(__DIR__)) . '/console');

function pr($var, $info = '') {
    if(!defined('PR')) {
      define('PR', true);
    }
    if ($info) {
        $info = "<strong>$info: </strong>";
    }
    $debug = debug_backtrace(0);
    $result = "<pre style='font-size:11px;text-align:left;background:#fff;color:#000;'><strong>".$debug[0]['file'] ." ".$debug[0]['line']."</strong><br /> $info";
    $dump = print_r($var, true);
    $dump = highlight_string("<?php\n" . $dump, true);
    $dump = preg_replace('/&lt;\\?php<br \\/>/', '', $dump, 1);
    $result .= "$dump</pre>";

    echo $result;
}
