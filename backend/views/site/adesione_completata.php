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

use open20\amos\core\forms\Tabs;

$this->title = 'Conferma Adesione';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="step-container">
    <div class="step-card">
        <div class="vertical-space"></div>
        <div class="tab-contentainer">
            <div class="tab-pane" id="rappresentante">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="info-text">registrazione effettuata con successo</h1>
                        <div class="info-text">Appena avremo verificato le informazioni inserite con esito
                            positivo, sarà inviata una mail di avviso all'indirizzo che è stato indicato per il legale
                            rappresentante; la mail conterrà le informazioni necessarie per accedere alla piattaforma e
                            presentare l'atto unico di adesione e la domanda di ammissione al catalogo. Dopo aver
                            eseguito queste due operazioni sarete abilitati alla presentazione dei corsi.</div>
                    </div>
                </div>
                <div class="help-message">
                    <p>Hai completato la procedura di candidatura dell’ente.</p>
                    <p>Ti abbiamo inviato una mail con le istruzioni per accedere alla piattaforma, controlla la tua
                        casella di posta elettronica.</p>
                    </p>
                    <p>Se hai bisogno di assistenza puoi inviare una mail a: &nbsp;<span class="am am-email"></span>info@example.com
                    </p>
                </div>
                <a class="pull-right" href="/site/index">
                    <div class="btn btn-navigation-primary"><span class="am am-home"></span>Torna alla home page</div>
                </a>
            </div>
        </div>
    </div>
</div>