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
//  $Id: record_artits.php 1329 2006-05-18 14:30:10J Mazouz Alaa $
// +----------------------------------------------------------------------+
// | Traduction française de Zen Cart 1.3.8a par Damien.                  |
// | Auteur : Zen Cart France : http://www.zencart-france.com             |
// | Package : zen-cart-v1.3.8a-FR                                        |
// +----------------------------------------------------------------------+
//

define('HEADING_TITLE', 'Promotions');

define('TABLE_HEADING_PRODUCTS', 'Produits');
define('TABLE_HEADING_PRODUCTS_MODEL','Mod&egrave;le');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Produits Prix/promotion/Vente');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','Pourcentage');
define('TABLE_HEADING_AVAILABLE_DATE', 'Disponible');
define('TABLE_HEADING_EXPIRES_DATE','Expire');
define('TABLE_HEADING_STATUS', 'Statut');
define('TABLE_HEADING_ACTION', 'Action');

define('TEXT_SPECIALS_PRODUCT', 'Produit:');
define('TEXT_SPECIALS_SPECIAL_PRICE', 'Prix Promotionnel Sp&eacute;cial:');
define('TEXT_SPECIALS_EXPIRES_DATE', 'Date d\'Expiration:');
define('TEXT_SPECIALS_AVAILABLE_DATE', 'Date de Disponibilit&eacute;:');
define('TEXT_SPECIALS_PRICE_TIP', '<b>Notes Sp&eacute;ciales:</b><ul><li>Vous pouvez entrer un pourcentage &agrave; d&eacute;duire dans le champ du Prix des Promotions, par exemple: <b>20%</b></li><li>Si vous entrez un nouveau prix, le s&eacute;parateur de d&eacute;cimale doit &ecirc;tre un point \'.\' (point-d&eacute;cimale), exemple: <b>49.99</b></li><li>Laissez le champ de la date d\'expiration vide si aucune date de fin n\'est n&eacute;cessaire.</li></ul>');

define('TEXT_INFO_DATE_ADDED', 'Date d\'Ajout:');
define('TEXT_INFO_LAST_MODIFIED', 'Derni&egrave;re Modification:');
define('TEXT_INFO_NEW_PRICE', 'Nouveau prix:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Prix Original:');
define('TEXT_INFO_DISPLAY_PRICE', 'Afficher le Prix:<br />');
define('TEXT_INFO_AVAILABLE_DATE', 'Disponible le:');
define('TEXT_INFO_EXPIRES_DATE', 'Expire le:');
define('TEXT_INFO_STATUS_CHANGE', 'Changement de Statut:');
define('TEXT_IMAGE_NONEXISTENT', 'Aucune Image Existante');

define('TEXT_INFO_HEADING_DELETE_SPECIALS', 'Effacement des Promotions');
define('TEXT_INFO_DELETE_INTRO', 'Etes-vous certain de vouloir effacer le Prix des Produits en Promotion ?');

define('SUCCESS_SPECIALS_PRE_ADD', 'R&eacute;ussi : Pr&eacute;-Ajouter de sp&eacute;cial… mettent &aacute; jour svp le prix et les dates…');
define('WARNING_SPECIALS_PRE_ADD_EMPTY', 'Avertissement : Aucune identit&eacute; de produit indiqu&eacute;e… rien n\'a &eacute;t&eacute; ajout&eacute;e…');
define('WARNING_SPECIALS_PRE_ADD_DUPLICATE', 'Avertissement : L\'identit&eacute; de produit d&eacute;j&aacute; sur sp&eacute;cial… rien a &eacute;t&eacute; ajout&eacute;e…');
define('WARNING_SPECIALS_PRE_ADD_BAD_PRODUCTS_ID', 'Avertissement : L\'identit&eacute; de produit est inadmissible… rien a &eacute;t&eacute; ajout&eacute;e…');
define('TEXT_INFO_HEADING_PRE_ADD_SPECIALS', 'Ajouter manuellement la nouvelle identification sp&eacute;ciale de sous-produit');
define('TEXT_INFO_PRE_ADD_INTRO', 'Sur de grandes bases de donn&eacute;es, vous pouvez manuellement ajouter un sp&eacute;cial par l\'identit&eacute; de produit<br /><br />Ceci est le meilleur emploi quand la page devienne trop longue pour rendre et l\'essai de choisir un produit &aacute; partir de la liste d&eacute;roulente devient  difficile &aacute; cause du grand nombre de choix.');
define('TEXT_PRE_ADD_PRODUCTS_ID', 'Veuillez &eacute;crire l\'identit&eacute; de produit Pr&eacute;-ajouter : ');
define('TEXT_INFO_MANUAL', 'Identit&eacute; de produit &aacute; ajouter manuellement en tant que sp&eacute;cial ');
?>