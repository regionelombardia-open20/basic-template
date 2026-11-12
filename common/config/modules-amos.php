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

$modules['admin'] = [
    'class' => 'open20\amos\admin\AmosAdmin',
    'fieldsConfigurations' => [
        'boxes' => [
            'box_account_data' => ['form' => true, 'view' => true],
            'box_dati_accesso' => ['form' => true, 'view' => true],
            'box_dati_contatto' => ['form' => true, 'view' => true],
            'box_dati_fiscali_amministrativi' => ['form' => false, 'view' => false],
            'box_dati_nascita' => ['form' => true, 'view' => true],
            'box_email_frequency' => ['form' => true, 'view' => true],
            'box_facilitatori' => ['form' => false, 'view' => false],
            'box_foto' => ['form' => true, 'view' => true],
            'box_informazioni_base' => ['form' => true, 'view' => true],
            'box_presentazione_personale' => ['form' => true, 'view' => true],
            'box_prevalent_partnership' => ['form' => true, 'view' => true],
            'box_privacy' => ['form' => false, 'view' => false],
            'box_questio' => ['form' => false, 'view' => false],
            'box_role_and_area' => ['form' => true, 'view' => true],
            'box_social_account' => ['form' => true, 'view' => true],
        ],
        'fields' => [
            'attivo' => ['form' => true, 'view' => true, 'referToBox' => 'box_account_data'],
            'codice_fiscale' => ['form' => false, 'view' => false, 'referToBox' => 'box_dati_fiscali_amministrativi'],
            'cognome' => ['form' => true, 'view' => true, 'referToBox' => 'box_informazioni_base'],
            'default_facilitatore' => ['form' => true, 'view' => true],
            'email' => ['form' => true, 'view' => false, 'referToBox' => 'box_dati_contatto'],
            'email_pec' => ['form' => false, 'view' => false, 'referToBox' => 'box_dati_contatto'],
            'facebook' => ['form' => true, 'view' => true, 'referToBox' => 'box_social_account'],
            'facilitatore_id' => ['form' => false, 'view' => false, 'referToBox' => 'box_facilitatori'],
            'googleplus' => ['form' => true, 'view' => true, 'referToBox' => 'box_social_account'],
            'linkedin' => ['form' => true, 'view' => true, 'referToBox' => 'box_social_account'],
            'nascita_comuni_id' => ['form' => false, 'view' => false, 'referToBox' => 'box_dati_nascita'],
            'nascita_data' => ['form' => false, 'view' => false, 'referToBox' => 'box_dati_nascita'],
            'nascita_nazioni_id' => ['form' => false, 'view' => false, 'referToBox' => 'box_dati_nascita'],
            'nascita_province_id' => ['form' => false, 'view' => false, 'referToBox' => 'box_dati_nascita'],
            'nome' => ['form' => true, 'view' => true, 'referToBox' => 'box_informazioni_base'],
            'note' => ['form' => true, 'view' => false, 'referToBox' => 'box_informazioni_base'],
            'presentazione_breve' => ['form' => true, 'view' => true, 'referToBox' => 'box_informazioni_base'],
            'presentazione_personale' => [
                'form' => true,
                'view' => true,
                'referToBox' => 'box_presentazione_personale'
            ],
            'prevalent_partnership_id' => ['form' => true, 'view' => true, 'referToBox' => 'box_prevalent_partnership'],
            'privacy' => ['form' => false, 'view' => false, 'referToBox' => 'box_privacy'],
            'sesso' => ['form' => true, 'view' => false, 'referToBox' => 'box_informazioni_base'],
            'telefono' => ['form' => true, 'view' => false, 'referToBox' => 'box_dati_contatto'],
            'twitter' => ['form' => true, 'view' => true, 'referToBox' => 'box_social_account'],
            'ultimo_accesso' => ['form' => true, 'view' => true, 'referToBox' => 'box_account_data'],
            'ultimo_logout' => ['form' => true, 'view' => true, 'referToBox' => 'box_account_data'],
            'username' => ['form' => true, 'view' => false, 'referToBox' => 'box_dati_accesso'],
            'user_profile_age_group_id' => ['form' => true, 'view' => true, 'referToBox' => 'box_informazioni_base'],
            'user_profile_area_id' => ['form' => true, 'view' => false, 'referToBox' => 'box_role_and_area'],
            'userProfileImage' => ['form' => true, 'view' => true, 'referToBox' => 'box_foto'],
            'user_profile_role_id' => ['form' => true, 'view' => false, 'referToBox' => 'box_role_and_area'],
        ]
    ]
];

$modules['attachments'] = [
    'class' => 'open20\amos\attachments\FileModule',
    'webDir' => 'files',
    'tempPath' => '@common/uploads/temp',
    'storePath' => '@common/uploads/store',
    'cache_age' => '2592000',
];

$modules['community'] = [
    'class' => 'open20\amos\community\AmosCommunity',
];

$modules['documenti'] = [
    'class' => 'open20\amos\documenti\AmosDocumenti',
    'whiteListFilesExtensions' => 'txt, csv, pdf, txt, doc, docx, xls, xlsx, rtf, jpeg, jpg, png, gif, zip, rar',
    'params' => [
        'site_publish_enabled' => true,
        'site_featured_enabled' => true
    ]
];

$modules['email'] = [
    'class' => 'open20\amos\emailmanager\AmosEmail',
    'templatePath' => '@common/mail/emails',
];

$modules['notify'] = [
    'class' => 'open20\amos\notificationmanager\AmosNotify',
];

$modules['organizzazioni'] = [
    'class' => 'open20\amos\organizzazioni\Module',
];

$modules['socialauth'] = [
    'class' => 'open20\amos\socialauth\Module',
    'enableLogin' => false,
    'enableLink' => true,
    'enableRegister' => false,
    'providers' => [
        "Facebook" => [
            "enabled" => true,
            "keys" => [
                "id" => "YOUR_ID",
                "secret" => "YOUR_SECRET"
            ],
            "scope" => "email"
        ],

        /*        "Google" => [
                    "enabled" => true,
                    "keys" => [
                        "id" => "YOUR_ID",
                        "secret" => "YOUR_SECRET"
                    ],
                    "scope"   =>
                        "https://www.googleapis.com/auth/userinfo.profile ".
                        "https://www.googleapis.com/auth/userinfo.email",
                ],*/
    ],
];

return $modules;
