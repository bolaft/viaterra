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
//  $Id: coupon_admin.php 4677 2006-10-04 19:33:39Z drbyte $
// +----------------------------------------------------------------------+
// | Traduction française de Zen Cart 1.3.8a par Damien.                  |
// | Auteur : Zen Cart France : http://www.zencart-france.com             |
// | Package : zen-cart-v1.3.8a-FR                                        |
// +----------------------------------------------------------------------+
//

define('TOP_BAR_TITLE', 'Statistiques');
define('HEADING_TITLE', 'Coupons de R&eacute;ductions');
define('HEADING_TITLE_STATUS', 'Statut: ');
define('TEXT_CUSTOMER', 'Client:');
define('TEXT_COUPON', 'Nom du Coupon:');
define('TEXT_COUPON_ALL', 'Tous les Coupons');
define('TEXT_COUPON_ACTIVE', 'Coupons Actifs');
define('TEXT_COUPON_INACTIVE', 'Coupons Inactifs');
define('TEXT_SUBJECT', 'Sujet:');
define('TEXT_UNLIMITED', 'Illimit&eacute;');
define('TEXT_FROM', 'De:');
define('TEXT_FREE_SHIPPING', 'Livraison Gratuite');
define('TEXT_MESSAGE', 'Message:');
define('TEXT_RICH_TEXT_MESSAGE','Message au format Rich-Text:');
define('TEXT_SELECT_CUSTOMER', 'S&eacute;lectionnez un Client');
define('TEXT_ALL_CUSTOMERS', 'Tous les Clients');
define('TEXT_NEWSLETTER_CUSTOMERS', 'Tous les Abonn&eacute;s &agrave; la Newsletter');
define('TEXT_CONFIRM_DELETE', 'Etes-vous certain de vouloir effacer ce Coupon ?');
define('TEXT_SEE_RESTRICT', 'Actif');

define('TEXT_COUPON_ANNOUNCE','Nous sommes heureux de vous offrir un Coupon de R&eacute;duction sur notre Boutique');

define('TEXT_TO_REDEEM', 'Vous pouvez utiliser ce Coupon au moment de votre paiement sur le site. Il vous suffira de saisir le Code indiqu&eacute; dans le champ pr&eacute;vu &agrave; cet effet.');
define('TEXT_IN_CASE', ' pour toute question. ');
define('TEXT_VOUCHER_IS', 'Le Code du Coupon est ');
define('TEXT_REMEMBER', 'Ne le perdez pas, et utilisez-le lors de votre prochaine visite !');
define('TEXT_VISIT', 'A bient&ocirc;t sur %s');
define('TEXT_ENTER_CODE', ' et entrez le Code ');
define('TEXT_COUPON_HELP_DATE', '<p><p>Le coupon est valide entre %s et %s</p></p>');
define('HTML_COUPON_HELP_DATE', '<p><p>Le coupon est valide entre %s et %s</p></p>');

define('TABLE_HEADING_ACTION', 'Action');

define('CUSTOMER_ID', 'ID du client');
define('CUSTOMER_NAME', 'Nom du Client');
define('REDEEM_DATE', 'Date d\'Emission');
define('IP_ADDRESS', 'Adresse IP');

define('TEXT_REDEMPTIONS', 'Rachats');
define('TEXT_REDEMPTIONS_TOTAL', 'Au Total');
define('TEXT_REDEMPTIONS_CUSTOMER', 'Pour ce Client');
define('TEXT_NO_FREE_SHIPPING', 'Pas de Livraison Gratuite');

define('NOTICE_EMAIL_SENT_TO', 'Note: E-mail adress&eacute; &agrave: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Erreur: aucun client s&eacute;lectionn&eacute;.');
define('ERROR_NO_SUBJECT', 'Erreur: aucun sujet s&eacute;lectionn&eacute;.');

define('COUPON_NAME', 'Nom du Coupon');
//  define('COUPON_VALUE', 'Valeur du Coupon');
define('COUPON_AMOUNT', 'Montant du Coupon');
define('COUPON_CODE', 'Code du Coupon');
define('COUPON_STARTDATE', 'Date de D&eacute;but');
define('COUPON_FINISHDATE', 'Date de Fin');
define('COUPON_FREE_SHIP', 'Livraison Gratuite');
define('COUPON_DESC', 'Description du Coupon <br />(Visible par le Client)');
define('COUPON_MIN_ORDER', 'Commande Minimum pour utiliser le Coupon');
define('COUPON_USES_COUPON', 'Utilisation(s) par Coupon');
define('COUPON_USES_USER', 'Utilisation(s) par Client');
define('COUPON_PRODUCTS', 'Restrictions Produits');
define('COUPON_CATEGORIES', 'Restrictions Cat&eacute;gories');
define('VOUCHER_NUMBER_USED', 'Utilisations');
define('DATE_CREATED', 'Date de Cr&eacute;ation');
define('DATE_MODIFIED', 'Date de Modification');
define('TEXT_HEADING_NEW_COUPON', 'Cr&eacute;er un Nouveau Coupon');
define('TEXT_NEW_INTRO', 'Veuillez renseigner les informations requises pour ce Coupon.<br />');
define('COUPON_ZONE_RESTRICTION', 'Restriction de zone de bon : ');
define('TEXT_COUPON_ZONE_RESTRICTION', 'La restriction de zone de bon sont facultative.');

define('ERROR_NO_COUPON_AMOUNT', 'Veuillez indiquer un Montant');
define('ERROR_NO_COUPON_NAME', 'Veuillez indiquer un Nom ');
define('ERROR_COUPON_EXISTS', 'Il existe d&eacute;j&agrave; un coupon contenant ce code');


define('COUPON_NAME_HELP', 'Un nom court pour ce Coupon');
define('COUPON_AMOUNT_HELP', 'La Valeur de Remise de Ce Coupon, soit fixe, soit suivie du caract&egrave;re \'%\' pour indiquer un pourcentage.');
define('COUPON_CODE_HELP', 'Vous pouvez indiquer ici votre propre Code, ou laisser le champ vide pour que le code soit g&eacute;n&eacute;r&eacute; automatiquement.');
define('COUPON_STARTDATE_HELP', 'La Date de d&eacute;but de Validit&eacute; du Coupon');
define('COUPON_FINISHDATE_HELP', 'La Date &agrave; laquelle le Coupon expire');
define('COUPON_FREE_SHIP_HELP', 'Le Coupon attribue par d&eacute;faut une LIVRAISON GRATUITE &agrave; une Commande. Note. Ce Mode d&eacute;passe le chiffre du Coupon, mais respecte le dispositif de Montant Minimum pour la Valeur d\'une Commande');
define('COUPON_DESC_HELP', 'Une description du Coupon pour le Client');
define('COUPON_MIN_ORDER_HELP', 'Montant Minimum de la Commande pour validation du Coupon');
define('COUPON_USES_COUPON_HELP', 'Nombre maximum d\'utilisations par Coupon, laisser vide si aucune limite.');
define('COUPON_USES_USER_HELP', 'Nombre Maximum d\'utilisations du Coupon par client, laisser vide si aucune limite.');
define('COUPON_PRODUCTS_HELP', 'Liste des Produits (les product_ids) [s&eacute;par&eacute;s par une virgule] pour lesquels ce Coupon peut &ecirc;tre utilis&eacute;: laisser vide si aucune restriction.');
define('COUPON_CATEGORIES_HELP', 'Liste des Cat&eacute;gories [s&eacute;par&eacute;s par une virgule] pour lesquelles ce Coupon peut &ecirc;tre utilis&eacute;: laisser vide si aucune restriction.');
define('COUPON_BUTTON_PREVIEW', 'Pr&eacute;visualiser');
define('COUPON_BUTTON_CONFIRM', 'Confirmer');
define('COUPON_BUTTON_BACK', 'Retour');

define('COUPON_ACTIVE', 'Statut');
define('COUPON_START_DATE', 'D&eacute;buts');
define('COUPON_EXPIRE_DATE', 'Expiration');

define('ERROR_DISCOUNT_COUPON_WELCOME', 'Le bon de r&eacute;duction NE PEUT PAS &ecirc;tre d&eacute;sactiv&eacute;. Ce bon de r&eacute;duction est le bon de bienvenue<br /><br />Changez le bon de bienvenue avant d\'essayer de le supprimer. Voir Admin->Configuration->GV Coupons');
define('SUCCESS_COUPON_DISABLED', 'Succ&eacute;s ! Le bon de r&eacute;duction a &eacute;t&eacute; plac&eacute; sur inactif…');
define('TEXT_COUPON_NEW', 'Utiliser le NOUVEAU code de bon de r&eacute;duction :');
define('ERROR_DISCOUNT_COUPON_DUPLICATE', 'AVERTISSEMENT ! un double du bon existe… copie annul&eacute; pour le code : ');
define('TEXT_CONFIRM_COPY', '&Ecirc;tes-vous s&ucirc;r de vouloir copier ce bon de r&eacute;duction &acirc; un autre bon de r&eacute;duction ?');
define('SUCCESS_COUPON_DUPLICATE', 'Succ&eacute;s ! Le bon de r&eacute;duction a &eacute;t&eacute; reproduit<br /><br />v&eacute;rifier le nom et la date du bon…');
?>