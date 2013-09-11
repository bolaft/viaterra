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
//  $Id: orders.php 1329 2006-05-18 14:30:10J Mazouz Alaa $
// +----------------------------------------------------------------------+
// | Traduction française de Zen Cart 1.3.8a par Damien.                  |
// | Auteur : Zen Cart France : http://www.zencart-france.com             |
// | Package : zen-cart-v1.3.8a-FR                                        |
// +----------------------------------------------------------------------+
//
  define('HEADING_TITLE', 'Commandes');
  define('HEADING_TITLE_SEARCH', 'Commande ID:');
  define('HEADING_TITLE_STATUS', 'Statut:');
define('HEADING_TITLE_SEARCH_DETAIL_ORDERS_PRODUCTS', 'Recherche par nom de produit ou <strong>ID:XX</strong> ou Mod&egrave;le ');
define('TEXT_INFO_SEARCH_DETAIL_FILTER_ORDERS_PRODUCTS', 'Filtre de recherche: ');

define('TABLE_HEADING_PAYMENT_METHOD', 'Paiement<br />Livraison');
define('TABLE_HEADING_ORDERS_ID','ID');

define('TEXT_BILLING_SHIPPING_MISMATCH',' ... indiquera une erreur possible de livraison/facturation');

define('TABLE_HEADING_COMMENTS', 'Commentaires');
define('TABLE_HEADING_CUSTOMERS', 'Clients');
define('TABLE_HEADING_ORDER_TOTAL', 'Total Commande');
define('TABLE_HEADING_DATE_PURCHASED', 'Date de Commande:');
define('TABLE_HEADING_STATUS', 'Statut');
define('TABLE_HEADING_TYPE', 'Type de Commande');
define('TABLE_HEADING_ACTION', 'Action');
define('TABLE_HEADING_QUANTITY', 'Qt&eacute;.');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Mod&egrave;le');
define('TABLE_HEADING_PRODUCTS', 'Produits');
define('TABLE_HEADING_TAX', 'Taxe');
define('TABLE_HEADING_TOTAL', 'Total');
define('TABLE_HEADING_PRICE_EXCLUDING_TAX', 'Prix (HT)');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', 'Prix (TTC)');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', 'Total (HT)');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', 'Total (TTC)');

define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Client Notifi&eacute;');
define('TABLE_HEADING_DATE_ADDED', 'Date d\'Ajout');

define('ENTRY_CUSTOMER', 'Client:');
define('ENTRY_SOLD_TO', 'VENDU A:');
define('ENTRY_DELIVERY_TO', 'Livr&eacute; &agrave;:');
define('ENTRY_SHIP_TO', 'LIVRE A:');
define('ENTRY_SHIPPING_ADDRESS', 'Adresse de Livraison:');
define('ENTRY_BILLING_ADDRESS', 'Adresse de Facturation:');
define('ENTRY_PAYMENT_METHOD', 'Mode de Paiement:');
define('ENTRY_CREDIT_CARD_TYPE', 'Type de Carte de Cr&eacute;dit:');
define('ENTRY_CREDIT_CARD_OWNER', 'Propri&eacute;taire de la Carte de Cr&eacute;dit:');
define('ENTRY_CREDIT_CARD_NUMBER', 'Num&eacute;ro de la Carte de Cr&eacute;dit:');
define('ENTRY_CREDIT_CARD_CVV', 'Num&eacute;ro CVV de la Carte de Cr&eacute;dit:');
define('ENTRY_CREDIT_CARD_EXPIRES', 'La Carte de Cr&eacute;dit expire:');
define('ENTRY_SUB_TOTAL', 'Sous-Total:');
define('ENTRY_TAX', 'Taxes:');
define('ENTRY_SHIPPING', 'Livraison:');
define('ENTRY_TOTAL', 'Total:');
define('ENTRY_DATE_PURCHASED', 'Date de Commande:');
define('ENTRY_STATUS', 'Statut:');
define('ENTRY_DATE_LAST_UPDATED', 'Derni&egrave;re Actualisation:');
define('ENTRY_NOTIFY_CUSTOMER', 'Notification Client:');
define('ENTRY_NOTIFY_COMMENTS', 'Commentaires Annot&eacute;s:');
define('ENTRY_PRINTABLE', 'Imprimer la Facture');

define('TEXT_INFO_HEADING_DELETE_ORDER', 'Effacement de Commande');
define('TEXT_INFO_DELETE_INTRO', 'Etes-vous certain de vouloir effacer cette Commande?');
define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', 'Remettre la Quantit&eacute; en Stock');
define('TEXT_DATE_ORDER_CREATED', 'Date de Cr&eacute;ation:');
define('TEXT_DATE_ORDER_LAST_MODIFIED', 'Derni&egrave;re Modification:');
define('TEXT_INFO_PAYMENT_METHOD', 'Mode de Paiement:');
define('TEXT_PAID', 'Pay&eacute;');
define('TEXT_UNPAID', 'Non Pay&eacute;');

define('TEXT_ALL_ORDERS', 'Toutes Les Commandes');
define('TEXT_NO_ORDER_HISTORY', 'Aucun Historique Disponible');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Actualisation de la Commande');
define('EMAIL_TEXT_ORDER_NUMBER', 'Num&eacute;ro de Commande:');
define('EMAIL_TEXT_INVOICE_URL', 'D&eacute;tails de la Facture:');
define('EMAIL_TEXT_DATE_ORDERED', 'Date de Commande:');
define('EMAIL_TEXT_COMMENTS_UPDATE', '<em>Les commentaires: </em>');
define('EMAIL_TEXT_STATUS_UPDATED', 'Votre Commande a &eacute;t&eacute; actualis&eacute;e avec le statut suivant:' . "\n");
define('EMAIL_TEXT_STATUS_LABEL', '<strong>Nouveau Statut:</strong> %s' . "\n\n");
define('EMAIL_TEXT_STATUS_PLEASE_REPLY', 'Pour toute question, merci de nous contacter par retour de mail.' . "\n");

define('ERROR_ORDER_DOES_NOT_EXIST', 'Erreur: commande inexistante.');
define('SUCCESS_ORDER_UPDATED', 'Succ&egrave;s: la commande a &eacute;t&eacute; actualis&eacute;e avec succ&egrave;s.');
define('WARNING_ORDER_NOT_UPDATED', 'Attention: statut inchang&eacute;. Commande non actualis&eacute;e.');

define('ENTRY_ORDER_ID','Facture No. ');
define('TEXT_INFO_ATTRIBUTE_FREE', '&nbsp;-&nbsp;<span class="alert">GRATUIT</span>');

define('TEXT_DOWNLOAD_TITLE', 'Statut Commmande en T&eacute;l&eacute;chargement');
define('TEXT_DOWNLOAD_STATUS', 'Statut');
define('TEXT_DOWNLOAD_FILENAME', 'Fichier');
define('TEXT_DOWNLOAD_MAX_DAYS', 'Jours');
define('TEXT_DOWNLOAD_MAX_COUNT', 'Compteur');

define('TEXT_DOWNLOAD_AVAILABLE', 'Disponible');
define('TEXT_DOWNLOAD_EXPIRED', 'Expir&eacute;');
define('TEXT_DOWNLOAD_MISSING', 'Absent du Serveur');

define('IMAGE_ICON_STATUS_CURRENT', 'Statut - Disponible');
define('IMAGE_ICON_STATUS_EXPIRED', 'Statut - Expir&eacute;');
define('IMAGE_ICON_STATUS_MISSING', 'Statut - Manquant');

define('SUCCESS_ORDER_UPDATED_DOWNLOAD_ON', 'Download Activ&eacute; avec succ&egrave;s');
define('SUCCESS_ORDER_UPDATED_DOWNLOAD_OFF', 'Download D&eacute;sactiv&eacute; avec succ&egrave;s');
define('TEXT_MORE', '... plus');

define('TEXT_INFO_IP_ADDRESS', 'Adresse IP: ');
define('TEXT_DELETE_CVV_FROM_DATABASE','Effacement de CVV de base de donn&eacute;es');
define('TEXT_DELETE_CVV_REPLACEMENT','Effac&eacute;');
define('TEXT_MASK_CC_NUMBER','Masquer ce num&egrave;ro');

define('TEXT_INFO_EXPIRED_DATE', 'Date d\'expiration:<br />');
define('TEXT_INFO_EXPIRED_COUNT', 'Nombre expir&eacute;s:<br />');

define('TABLE_HEADING_CUSTOMER_COMMENTS', 'Client<br />Commentaires');
define('TEXT_COMMENTS_YES', 'Commentaires clients - OUI');
define('TEXT_COMMENTS_NO', 'Commentaires clients - NON');
?>