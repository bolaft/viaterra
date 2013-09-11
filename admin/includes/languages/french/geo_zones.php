<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: geo_zones.php 1329 2006-05-18 14:30:10J Mazouz Alaa $
// +----------------------------------------------------------------------+
// | Traduction française de Zen Cart 1.3.8a par Damien.                  |
// | Auteur : Zen Cart France : http://www.zencart-france.com             |
// | Package : zen-cart-v1.3.8a-FR                                        |
// +----------------------------------------------------------------------+
//

define('HEADING_TITLE', 'D&eacute;finition des Z&ocirc;nes - Taxes, Paiements et Livraisons');
define('TABLE_HEADING_TAX_ZONES_DESCRIPTION', 'Description de zone ');
define('TABLE_HEADING_COUNTRY', 'Pays');
define('TABLE_HEADING_COUNTRY_ZONE', 'Z&ocirc;ne');
define('TABLE_HEADING_TAX_ZONES', 'Z&ocirc;nes de Taxes');
define('TABLE_HEADING_STATUS', 'Statut');
define('TABLE_HEADING_ACTION', 'Action');
define('TEXT_LEGEND_TAX_AND_ZONES', ':Les imp&ocirc;ts et les zones sont d&eacute;fini');
define('TEXT_LEGEND_ONLY_ZONES', ':Zones d&eacute;finies mais pas d\'imp&ocirc;ts ');
define('TEXT_LEGEND_NOT_CONF', ': Non configur&eacute; ');
define('TEXT_INFO_HEADING_NEW_ZONE', 'Nouvelle Z&ocirc;ne');
define('TEXT_INFO_NEW_ZONE_INTRO', 'Veuillez entrer les informations pour cette nouvelle Z&ocirc;ne');

define('TEXT_INFO_HEADING_EDIT_ZONE', 'Edition de la Z&ocirc;ne');
define('TEXT_INFO_EDIT_ZONE_INTRO', 'Veuillez effectuer les changements requis');

define('TEXT_INFO_HEADING_DELETE_ZONE', 'Suppression de la Z&ocirc;ne');
define('TEXT_INFO_DELETE_ZONE_INTRO', 'Etes-vous certain de vouloir effacer cette Z&ocirc;ne ?');

define('TEXT_INFO_HEADING_NEW_SUB_ZONE', 'Nouvelle Sous-Z&ocirc;ne');
define('TEXT_INFO_NEW_SUB_ZONE_INTRO', 'Veuillez entrer les informations pour cette nouvelle sous-Z&ocirc;ne');

define('TEXT_INFO_HEADING_EDIT_SUB_ZONE', 'Edition de la Sous-Z&ocirc;ne');
define('TEXT_INFO_EDIT_SUB_ZONE_INTRO', 'Veuillez effectuer les changements requis');

define('TEXT_INFO_HEADING_DELETE_SUB_ZONE', 'Effacement de la Sous-Z&ocirc;ne');
define('TEXT_INFO_DELETE_SUB_ZONE_INTRO', 'Etes-vous certain de vouloir effacer cette sous-Z&ocirc;ne ?');

define('TEXT_INFO_DATE_ADDED', 'Date d\'Ajout:');
define('TEXT_INFO_LAST_MODIFIED', 'Derni&egrave;re Modification:');
define('TEXT_INFO_ZONE_NAME', 'Nom de la Z&ocirc;ne:');
define('TEXT_INFO_NUMBER_ZONES', 'Nombre de Z&ocirc;nes:');
define('TEXT_INFO_ZONE_DESCRIPTION', 'Description:');
define('TEXT_INFO_COUNTRY', 'Pays:');
define('TEXT_INFO_COUNTRY_ZONE', 'Z&ocirc;ne:');
define('TYPE_BELOW', 'Toutes les Z&ocirc;nes');
define('PLEASE_SELECT', 'Toutes Z&ocirc;nes');
define('TEXT_ALL_COUNTRIES', 'Tous les Pays');

define('TEXT_INFO_NUMBER_TAX_RATES','Nombre de Taux de Taxes:');
define('ERROR_TAX_RATE_EXISTS','ATTENTION: des Taux de Taxes sont d&eacute;finis pour cette (ou ces) Z&ocirc;ne(s). Veuillez supprimer le(s) Taux de Taxes avant d\'effacer cette Z&ocirc;ne');
?>