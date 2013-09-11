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
//  $Id: store_manager.php 1329 2006-05-18 14:30:10J Mazouz Alaa $
// +----------------------------------------------------------------------+
// | Traduction française de Zen Cart 1.3.8a par Damien.                  |
// | Auteur : Zen Cart France : http://www.zencart-france.com             |
// | Package : zen-cart-v1.3.8a-FR                                        |
// +----------------------------------------------------------------------+
//

  define('HEADING_TITLE', 'Gestion Boutique');
  define('TABLE_CONFIGURATION_TABLE', 'Recherche de D&eacute;finitions de CONSTANTES');

  define('SUCCESS_PRODUCT_UPDATE_SORT_ALL','L\'Actualisation du Classement par D&eacute;faut des Attributs a &eacute;t&eacute; effectu&eacute; avec succ&egrave;s pour TOUS les Produits');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER', '<strong>Succ&egrave;s</strong> de l\'Actualisation des Valeurs de Classement du Prix des Produits');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_VIEWED', '<strong>Succ&egrave;s</strong> de la remise &agrave; z&eacute;ros des Produits Vus');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_ORDERED', '<strong>Succ&egrave;s</strong> de la remise &agrave; z&eacute;ros des Produits Command&eacute;s');
  define('SUCCESS_UPDATE_ALL_MASTER_CATEGORIES_ID', '<strong>Succ&egrave;s</strong> de la remise &agrave; z&eacute;ros des Cat&eacute;gories Principales pour les Produits Li&eacute;s');
  define('SUCCESS_UPDATE_COUNTER', '<strong>Succ&egrave;s</strong> Compteur Actualis&eacute; sur: ');
  define('SUCCESS_CLEAN_ADMIN_ACTIVITY_LOG', '<strong>Succ&egrave;s</strong> Mise &agrave; jour de log d\'activit&eacute; d\'Admin');

  define('ERROR_CONFIGURATION_KEY_NOT_FOUND', '<strong>Erreur:</strong> aucune clef de configuration correspondante n\'a &eacute;t&eacute; trouv&eacute;e.');
  define('ERROR_CONFIGURATION_KEY_NOT_ENTERED', '<strong>Erreur:</strong> aucune clef de configuration ou textes correspondants n\'ont &eacute;t&eacute; trouv&eacute;s... Recherche termin&eacute;e');

  define('TEXT_INFO_COUNTER_UPDATE', '<strong>Actualisation du Compteur</strong><br />sur une Nouvelle Valeur: ');
  define('TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE', '<strong>Actualiser TOUS les classments de Produits</strong><br />pour afficher le classement par Prix: ');
  define('TEXT_INFO_PRODUCTS_VIEWED_UPDATE', '<strong>Remettre &agrave; z&eacute;ro TOUS les Produits Vus</strong><br />Remettre &agrave; z&eacute;ro TOUS les Produits Vus: ');
  define('TEXT_INFO_PRODUCTS_ORDERED_UPDATE', '<strong>Remettre &agrave; z&eacute;ro TOUS les Produits Command&eacute;s</strong><br />Remettre &agrave; z&eacute;ro TOUS les Produits Command&eacute;s: ');
  define('TEXT_INFO_MASTER_CATEGORIES_ID_UPDATE', '<strong>Remettre &agrave; z&eacute;ro TOUS LES ID de Cat&eacute;gories Principales</strong><br />pour utilisation avec des Produits li&eacute;s et des prix: ');
  define('TEXT_INFO_ADMIN_ACTIVITY_LOG', '<strong>Table vide de fichier de journalisation d\'activit&eacute; d\'Admin de la base de donn&eacute;es <br />Erreur: &Ecirc;tre s&ucirc;r de la protection de votre base de donn&eacute;es avant de courir cette mise &aacute; jour !</strong><br />Le fichier de journalisation d\'activit&eacute; d\'Admin est une m&eacute;thode de cheminement qui enregistre l\'activit&eacute; dans l\'Admin.  En raison de sa nature il peut devenir tr&eacute;s grand, tr&eacute;s rapide et doit &ecirc;tre nettoy&eacute; de temps en temps. <br />Des avertissements sont donn&eacute;s &aacute; 50.000 disques ou &aacute; 60 jours, qui se produit jamais d\'abord. ');

  define('TEXT_ORDERS_ID_UPDATE', '<strong>Remettre &agrave; z&eacute;ro l\'ID de Commande Actuelle</strong>');
  define('TEXT_INFO_ORDERS_ID_UPDATE', '<strong>NOTE: Avant d\'Actualiser l\'ID de votre Commande Actuellele...</strong><br /><br />Cr&eacute;ez Une Commande de Test. Utilisez ensuite cette Commande de Test pour effectuer votre essai.<br />Le Nouvel ID de pour la Commande R&eacute;&egrave;lle Suivante DEVRAIT indiquer une valeur inf&eacute;rieure de 1, soit 1 de moins que l\'ID que vous souhaitez utiliser.<br /><strong>Exemple:</strong> Si vous voulez que l\'ID de Commande R&eacute;&egrave;lle Suivante soit ID 1225, entrez le chiffre 1224<br /><br /><strong>ATTENTION:</strong> Vous pouvez seulement remettre &agrave; z&eacute;ro l\'ID de Commande Suivant, et NON pr&eacute;c&eacute;dent.<br />Donc si vous r&eacute;glez vos ID de Commandes &agrave; 25, puis que vous les changez &agrave; nouveau sur 20, les prochains ID de Commandes afficheront 26.');
  define('TEXT_OLD_ORDERS_ID', 'Ancienne Commande ID');
  define('TEXT_NEW_ORDERS_ID', 'Nouvelle Commande ID');

  define('TEXT_CONFIGURATION_CONSTANT', '<strong>Le dossier de CONSTANTE ou de langue de consultation d&eacute;finit </strong>');
  define('TEXT_CONFIGURATION_KEY', 'Cl&eacute; ou nom :');
  define('TEXT_INFO_CONFIGURATION_UPDATE', '<strong>NOTE:</strong> Des CONSTANTES sont &eacute;crites en majuscule .<br />Les consultations de dossier de langue peuvent &ecirc;tre une recherche alternative quand rien n\'a &eacute;t&eacute; trouv&eacute; dans les tables de base de donn&eacute;es.');


  define('TEXT_CONFIGURATION_CONSTANT_FILES', '<strong>Consultation dans les defines des fichiers de langues</strong>');
  define('TEXT_CONFIGURATION_KEY_FILES', 'Consultation  du texte:');
  define('TEXT_INFO_CONFIGURATION_UPDATE_FILES', '<strong>NOTE:</strong> les Consultations des fichiers de langues peuvent &ecirc;tre r&eacute;alis&eacute;s en majuscules ou en minuscules');

  define('TABLE_TITLE_KEY', '<strong>Clef:</strong>');
  define('TABLE_TITLE_TITLE', '<strong>Titre:</strong>');
  define('TABLE_TITLE_DESCRIPTION', '<strong>Description:</strong>');
  define('TABLE_TITLE_GROUP', '<strong>Groupe:</strong>');
  define('TABLE_TITLE_VALUE', '<strong>Valeur:</strong>');

  define('TEXT_LANGUAGE_LOOKUPS', 'consultations des Fichiers de Langues:');
  define('TEXT_LANGUAGE_LOOKUP_NONE', 'Aucun');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_LANGUAGE', 'Tous les Fichiers de Langues pour ' . strtoupper($_SESSION['language']) . ' - Catalogue/Admin');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG', 'Tous les Fichiers de Langues Principales - Catalogue (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . 'english.php /french.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG_TEMPLATE', 'Tous les Fichiers de Langues Principales - ' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN', 'Tous les Fichiers de Langues Principales - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . 'english.php /french.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN_LANGUAGE', 'Tous les Fichiers de Langues s&eacute;lectionn&eacute;s - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ALL', 'Tous les Fichiers de Langues s&eacute;lectionn&eacute;s - Catalogue/Admin');

  define('TEXT_INFO_NO_EDIT_AVAILABLE','Aucune Edition disponible');
  define('TEXT_INFO_CONFIGURATION_HIDDEN', ' ou, CACHE');
      define('TEXT_INFO_DATABASE_OPTIMIZE', '<strong>Optimiser la base de donn&eacute;es </strong> enlever l\'espace gaspill&eacute; des disques supprim&eacute;s. <br />Peut &ecirc;tre la revue mensuelle sur option courrier ou par semaine sur une base de donn&eacute;es occupeacute;e.<br />(Courir mieux pendant des p&eacute;riodes non-occup&eacute;es .)');
  define('SUCCESS_DB_OPTIMIZE', 'Optimisation de base de donn&eacute;es - Tableaux trait&eacute;s : ');

?>