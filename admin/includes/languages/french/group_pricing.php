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
//  $Id: group_pricing.php 1329 2006-05-18 14:30:10J Mazouz Alaa $
// +----------------------------------------------------------------------+
// | Traduction française de Zen Cart 1.3.8a par Damien.                  |
// | Auteur : Zen Cart France : http://www.zencart-france.com             |
// | Package : zen-cart-v1.3.8a-FR                                        |
// +----------------------------------------------------------------------+
//

define('HEADING_TITLE', 'Prix par Groupe');

define('TABLE_HEADING_GROUP_ID', 'ID');
define('TABLE_HEADING_GROUP_NAME', 'Nom du Groupe');
define('TABLE_HEADING_GROUP_AMOUNT', '% de R&eacute;duction');
define('TABLE_HEADING_ACTION', 'Action');

define('TEXT_HEADING_NEW_PRICING_GROUP', 'Nouveau Groupe par Prix');
define('TEXT_HEADING_EDIT_PRICING_GROUP', 'Edition du Groupe par Prix');
define('TEXT_HEADING_DELETE_PRICING_GROUP', 'Effacer le Groupe par prix');

define('TEXT_NEW_INTRO', 'Veuillez entrer les informations pour ce Nouveau Groupe');
define('TEXT_EDIT_INTRO', 'Veuillez effectuer les changements requis.');
define('TEXT_DELETE_INTRO', 'Etes-vous certain de vouloir effacer ce Groupe ?');
define('TEXT_DELETE_PRICING_GROUP', 'Effacer le Group de prix');
define('TEXT_DELETE_WARNING_GROUP_MEMBERS','<b>Attention:</b> Il y a %s toujours li&eacute;s &agrave; cette cat&eacute;gorie !');

define('TEXT_GROUP_PRICING_NAME', 'Nom du Groupe: ');
define('TEXT_GROUP_PRICING_AMOUNT', 'Pourcentage de R&eacute;duction: ');
define('TEXT_DATE_ADDED', 'date ajout&eacute;e :');
define('TEXT_LAST_MODIFIED', 'Date Modifi&eacute;e:');
define('TEXT_CUSTOMERS', 'Clients dans le groupe :');

define('ERROR_GROUP_PRICING_CUSTOMERS_EXIST','Erreur: Les clients existent dans ce groupe. Veuillez confirmer que vous souhaitez enlever tous les membres du groupe et les supprimer.');
define('ERROR_MODULE_NOT_CONFIGURED','NOTE: Vous avez des d&eacute;finitions de prix de groupe,mais vous n\'avez pas permis tout le module de groupe de prix.<br />SVP Allez &agrave; Admin->Modules->Order Total->Membership Discount (ot_group_pricing) and install/configure the module.');

?>