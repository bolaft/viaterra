<?php
/**
 * @package admin
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: french.php 4804 2006-10-21 16:19:59Z ajeh $
 * 
 * Traduction française de Zen Cart 1.3.8a par Damien. 
 * Auteur : Zen Cart France : http://www.zencart-france.com 
 * Package : zen-cart-v1.3.8a-FR
 */

// added defines for header alt and text
define('HEADER_ALT_TEXT', 'Admin Powered by Zen Cart :: The Art of E-Commerce');
define('HEADER_LOGO_WIDTH', '200px');
define('HEADER_LOGO_HEIGHT', '70px');
define('HEADER_LOGO_IMAGE', 'logo.gif');

//
// regardez dans votre r&eacute;pertoire local $PATH_LOCALE/locale pour les variables disponibles.
// sur RedHat6.0  utilisez 'fr_FR'
// sur FreeBSD 4.0 utilisez 'fr_FR.ISO_8859-1'
// ces fonctions peuvent ne pas fonctionner sous win32 OpenBSD.
setlocale(LC_TIME, 'fr_FR.ISO_8859-1');
  define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
  define('DATE_FORMAT_LONG', '%A %d %B %Y'); // this is used for strftime()
  define('DATE_FORMAT', 'd/m/Y'); // this is used for date()
  define('PHP_DATE_TIME_FORMAT', 'd/m/Y H:i:s'); // this is used for date()
  define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
  define('DATE_FORMAT_SPIFFYCAL', 'dd/MM/yyyy');  //Use only 'dd', 'MM' and 'yyyy' here in any order

////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function zen_date_raw($date, $reverse = false) {
	  if ($reverse) {
		return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
	  } else {
		return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
  }
}

// removed for meta tags
// page title
//define('TITLE', 'Zen Cart');

// include template specific meta tags defines
  if (file_exists(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/meta_tags.php')) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . 'meta_tags.php');
//die(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . 'meta_tags.php');

// meta tags
define('ICON_METATAGS_ON', 'Meta Tags d&eacute;finis');
define('ICON_METATAGS_OFF', 'Meta Tags non d&eacute;finis');
define('TEXT_LEGEND_META_TAGS', 'Meta Tags d&eacute;finis:');
define('TEXT_INFO_META_TAGS_USAGE', '<strong>NOTE:</strong> Le Site/Tagline est utilis&eacute; pour la description de votre site dans le fichier meta_tags.php.');

// Global entries for the <html> tag
define('HTML_PARAMS','dir="ltr" lang="fr"');

// charset for web pages and emails
define('CHARSET', 'iso-8859-1');

// header text in includes/header.php
define('HEADER_TITLE_TOP', 'Accueil admin');
define('HEADER_TITLE_SUPPORT_SITE', 'Site de support');
define('HEADER_TITLE_ONLINE_CATALOG', 'Catalogue en ligne');
define('HEADER_TITLE_VERSION', 'Version');
define('HEADER_TITLE_LOGOFF', 'D&eacute;connexion');
//define('HEADER_TITLE_ADMINISTRATION', 'Administration');

// Define the name of your Gift Certificate as Gift Voucher, Gift Certificate, Zen Cart Dollars, etc. here for use through out the shop
  define('TEXT_GV_NAME','Ch&egrave;que cadeau');
  define('TEXT_GV_NAMES','Ch&egrave;ques cadeaux');
  define('TEXT_DISCOUNT_COUPON', 'Bon de r&eacute;duction');

// used for redeem code, redemption code, or redemption id
  define('TEXT_GV_REDEEM','Rachat Code');

// text for gender
define('MALE', 'Monsieur');
define('FEMALE', 'Madame');

// text for date of birth example
define('DOB_FORMAT_STRING', 'dd/mm/yyyy');

// configuration box text in includes/boxes/configuration.php
define('BOX_HEADING_CONFIGURATION', 'Configuration');
define('BOX_CONFIGURATION_MYSTORE', 'Ma Boutique');
define('BOX_CONFIGURATION_LOGGING', 'Connexion');
define('BOX_CONFIGURATION_CACHE', 'Cache');

// modules box text in includes/boxes/modules.php
define('BOX_HEADING_MODULES', 'Modules');
define('BOX_MODULES_PAYMENT', 'Paiements');
define('BOX_MODULES_SHIPPING', 'Livraison');
define('BOX_MODULES_ORDER_TOTAL', 'Total Commande');
define('BOX_MODULES_PRODUCT_TYPES', 'Types de Produits');

// categories box text in includes/boxes/catalog.php
define('BOX_HEADING_CATALOG', 'Catalogue');
define('BOX_CATALOG_CATEGORIES_PRODUCTS', 'Cat&eacute;gories/Produits');
define('BOX_CATALOG_PRODUCT_TYPES', 'Types de Produits');
define('BOX_CATALOG_CATEGORIES_OPTIONS_NAME_MANAGER', 'Noms des options');
define('BOX_CATALOG_CATEGORIES_OPTIONS_VALUES_MANAGER', 'Valeur des options');
define('BOX_CATALOG_MANUFACTURERS', 'Fabricants');
define('BOX_CATALOG_REVIEWS', 'Avis');
define('BOX_CATALOG_SPECIALS', 'Promotions');
define('BOX_CATALOG_PRODUCTS_EXPECTED', 'Produits &agrave; venir');
define('BOX_CATALOG_SALEMAKER', 'SaleMaker');
define('BOX_CATALOG_PRODUCTS_PRICE_MANAGER', 'Gestion des produits');

// customers box text in includes/boxes/customers.php
define('BOX_HEADING_CUSTOMERS', 'Clients');
define('BOX_CUSTOMERS_CUSTOMERS', 'Clients');
define('BOX_CUSTOMERS_ORDERS', 'Commandes');
define('BOX_CUSTOMERS_GROUP_PRICING', 'Prix par Groupe');
define('BOX_CUSTOMERS_PAYPAL', 'PayPal IPN');

// taxes box text in includes/boxes/taxes.php
define('BOX_HEADING_LOCATION_AND_TAXES', 'Lieux / Taxes');
define('BOX_TAXES_COUNTRIES', 'Pays');
define('BOX_TAXES_ZONES', 'Z&ocirc;nes');
define('BOX_TAXES_GEO_ZONES', 'D&eacute;finitions des Z&ocirc;nes');
define('BOX_TAXES_TAX_CLASSES', 'Classes de Taxes');
define('BOX_TAXES_TAX_RATES', 'Taux de Taxes');

// reports box text in includes/boxes/reports.php
define('BOX_HEADING_REPORTS', 'Rapports');
define('BOX_REPORTS_PRODUCTS_VIEWED', 'Consultations');
define('BOX_REPORTS_PRODUCTS_PURCHASED', 'Produits achet&eacute;s');
define('BOX_REPORTS_ORDERS_TOTAL', 'Meilleurs clients');
define('BOX_REPORTS_PRODUCTS_LOWSTOCK', 'Produits en stock bas');
define('BOX_REPORTS_CUSTOMERS_REFERRALS', 'Utilisation des coupons');

// tools text in includes/boxes/tools.php
define('BOX_HEADING_TOOLS', 'Outils');
define('BOX_TOOLS_ADMIN', 'R&eacute;glages admin');
define('BOX_TOOLS_TEMPLATE_SELECT', 'Choix du template');
define('BOX_TOOLS_BACKUP', 'Sauvegarde de la Base');
define('BOX_TOOLS_BANNER_MANAGER', 'Gestionnaire de banni&egrave;res');
define('BOX_TOOLS_CACHE', 'Contr&ocirc;le du cache');
define('BOX_TOOLS_DEFINE_LANGUAGE', 'D&eacute;finir les langues');
define('BOX_TOOLS_FILE_MANAGER', 'Gestionnaire de fichiers');
define('BOX_TOOLS_MAIL', 'Envoyer email');
define('BOX_TOOLS_NEWSLETTER_MANAGER', 'Gestionnaire des newsletter et notifications');
define('BOX_TOOLS_SERVER_INFO', 'Infos du serveur');
define('BOX_TOOLS_WHOS_ONLINE', 'Qui est en Ligne ?');
define('BOX_TOOLS_STORE_MANAGER', 'Gestionnaire de Boutique');
define('BOX_TOOLS_DEVELOPERS_TOOL_KIT', 'Outils du d&eacute;veloppeur');
define('BOX_TOOLS_SQLPATCH','Installer des Patches SQL');
define('BOX_TOOLS_EZPAGES','EZ-Pages');

define('BOX_HEADING_EXTRAS', 'Extras');

// define pages editor files
define('BOX_TOOLS_DEFINE_PAGES_EDITOR','Editer les pages &agrave; d&eacute;finir');
define('BOX_TOOLS_DEFINE_MAIN_PAGE', 'Page Principale');
define('BOX_TOOLS_DEFINE_CONTACT_US','Nous Contacter');
define('BOX_TOOLS_DEFINE_PRIVACY','Vie priv&eacute;e');
define('BOX_TOOLS_DEFINE_SHIPPINGINFO','Livraisons & Retours');
define('BOX_TOOLS_DEFINE_CONDITIONS','Conditions G&eacute;n&eacute;rales');
define('BOX_TOOLS_DEFINE_CHECKOUT_SUCCESS','Commande r&eacute;ussie');
define('BOX_TOOLS_DEFINE_PAGE_2','Page 2');
define('BOX_TOOLS_DEFINE_PAGE_3','Page 3');
define('BOX_TOOLS_DEFINE_PAGE_4','Page 4');


// localizaion box text in includes/boxes/localization.php
define('BOX_HEADING_LOCALIZATION', 'Lieu');
define('BOX_LOCALIZATION_CURRENCIES', 'Devises');
define('BOX_LOCALIZATION_LANGUAGES', 'Langues');
define('BOX_LOCALIZATION_ORDERS_STATUS', 'Statuts des Commandes');

// gift vouchers box text in includes/boxes/gv_admin.php
define('BOX_HEADING_GV_ADMIN', TEXT_GV_NAME . '/Coupons');
define('BOX_GV_ADMIN_QUEUE',  TEXT_GV_NAMES . ' Queue');
define('BOX_GV_ADMIN_MAIL', 'Mail ' . TEXT_GV_NAME);
define('BOX_GV_ADMIN_SENT', TEXT_GV_NAMES . ' envoy&eacute;s');
define('BOX_COUPON_ADMIN','Administration des Coupons');

define('IMAGE_RELEASE', 'Rachetez ' . TEXT_GV_NAME);

// javascript messages
define('JS_ERROR', 'Des erreurs sont apparues lors du traitement de votre formulaire !\n Merci de bien vouloir apporter les corrections suivantes :\n\n');

define('JS_OPTIONS_VALUE_PRICE', '* Ce nouvel attribut de produit requiert une valeur de prix\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* Ce nouvel attribut de produit requiert un pr&eacute;fixe de prix\n');

define('JS_PRODUCTS_NAME', '* Ce nouveau produit requiert un nom\n');
define('JS_PRODUCTS_DESCRIPTION', '* Ce nouveau produit requiert une description\n');
define('JS_PRODUCTS_PRICE', '* Ce nouveau produit requiert une valeur de prix\n');
define('JS_PRODUCTS_WEIGHT', '* Ce nouveau produit requiert une valeur de poids\n');
define('JS_PRODUCTS_QUANTITY', '* Ce nouveau produit requiert une valeur de quantit&eacute;\n');
define('JS_PRODUCTS_MODEL', '* Ce nouveau produit requiert une valeur de mod&egrave;le\n');
define('JS_PRODUCTS_IMAGE', '* Ce nouveau produit rquiert une image\n');

define('JS_SPECIALS_PRODUCTS_PRICE', '* Vous devez &eacute;tablir un nouveau prix pour ce produit\n');

define('JS_GENDER', '* Vous devez indiquer la valeur de \'Civilit&eacute;\'.\n');
define('JS_FIRST_NAME', '* Le champ \'Pr&eacute;nom\' doit comporter un minimum de ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caract&egrave;res.\n');
define('JS_LAST_NAME', '* Le champ \'Nom\' doit comporter un minimum de ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caract&egrave;res.\n');
define('JS_DOB', '* Le champ \'Date de Naissance\' doit &ecirc;tre au format : xx/xx/xxxx (jour/mois/ann&eacute;e).\n');
define('JS_EMAIL_ADDRESS', '* Le champ \'Adresse E-Mail\' doit comporter un minimum de ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caract&egrave;res.\n');
define('JS_ADDRESS', '* Le champ \'Adresse\' doit comporter un minimum de ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caract&egrave;res.\n');
define('JS_POST_CODE', '* Le champ \'Code Postal\' doit comporter un minimum de ' . ENTRY_POSTCODE_MIN_LENGTH . ' caract&egrave;res.\n');
define('JS_CITY', '* Le champ \'Ville\' doit comporter un minimum de ' . ENTRY_CITY_MIN_LENGTH . ' caract&egrave;res.\n');
define('JS_STATE', '** Le champ \'Etat\' doit &ecirc;tre s&eacute;lectionn&eacute;.\n');
define('JS_STATE_SELECT', '-- S&eacute;lectionnez --');
define('JS_ZONE', '* Le champ \'Etat\', selon la localisation, doit &ecirc;tre renseign&eacute; via la liste disponible pour ce Pays.');
define('JS_COUNTRY', '* Le champ \'Pays\' doit &ecirc;tre renseign&eacute;.\n');
define('JS_TELEPHONE', '* Le champ \'Num&eacute;ro de T&eacute;l&eacute;phone\' doit comporter un minimum de ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caract&egrave;res.\n');
define('JS_PASSWORD', '* Les champs \'Mot de Passe\' et \'Confirmation\' doivent comporter au moins ' . ENTRY_PASSWORD_MIN_LENGTH . ' caract&egrave;res.\n');

define('JS_ORDER_DOES_NOT_EXIST', 'La Commande num&eacute;ro %s est inexistante !');

define('CATEGORY_PERSONAL', 'Personnel');
define('CATEGORY_ADDRESS', 'Adresse');
define('CATEGORY_CONTACT', 'Contact');
define('CATEGORY_COMPANY', 'Soci&eacute;t&eacute;');
define('CATEGORY_OPTIONS', 'Options');

define('ENTRY_GENDER', 'Civilit&eacute;:');
define('ENTRY_GENDER_ERROR', '&nbsp;<span class="errorText">requis</span>');
define('ENTRY_FIRST_NAME', 'Pr&eacute;nom :');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caract&egrave;res</span>');
define('ENTRY_LAST_NAME', 'Nom:');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caract&egrave;res</span>');
define('ENTRY_DATE_OF_BIRTH', 'Date de Naissance :');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(ex. 24/10/1984)</span>');
define('ENTRY_EMAIL_ADDRESS', 'Adresse E-Mail:');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caract&egrave;res</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<span class="errorText">Cette adresse E-Mail ne semble pas valide !</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<span class="errorText">Cette adresse E-Mail figure d&eacute;j&agrave; dans nos registres !</span>');
define('ENTRY_COMPANY', 'Soci&eacute;t&eacute;');
define('ENTRY_COMPANY_ERROR', 'si soci&eacute;t&eacute;');
define('ENTRY_PRICING_GROUP', 'Prix remis&eacute;s de groupe');
define('ENTRY_STREET_ADDRESS', 'Adresse:');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caract&egrave;res</span>');
define('ENTRY_SUBURB', 'Compl&eacute;ment:');
define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_POST_CODE', 'Code Postal :');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_POSTCODE_MIN_LENGTH . ' caract&egrave;res</span>');
define('ENTRY_CITY', 'Ville:');
define('ENTRY_CITY_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_CITY_MIN_LENGTH . ' caract&egrave;res</span>');
define('ENTRY_STATE', 'Etat:');
define('ENTRY_STATE_ERROR', '&nbsp;<span class="errorText">requis</span>');
define('ENTRY_COUNTRY', 'Pays:');
define('ENTRY_COUNTRY_ERROR', '');
define('ENTRY_TELEPHONE_NUMBER', 'Num&eacute;ro de T&eacute;l&eacute;phone :');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caract&egrave;res</span>');
define('ENTRY_FAX_NUMBER', 'Num&eacute;ro de Fax:');
define('ENTRY_FAX_NUMBER_ERROR', '');
define('ENTRY_NEWSLETTER', 'Newsletter:');
define('ENTRY_NEWSLETTER_YES', 'Souscrite');
define('ENTRY_NEWSLETTER_NO', 'Non Souscrite');
define('ENTRY_NEWSLETTER_ERROR', '');

// images
define('IMAGE_BACK', 'Retour');
define('IMAGE_BACKUP', 'Sauvegarder');
define('IMAGE_CANCEL', 'Annuler');
define('IMAGE_CONFIRM', 'Confirmer');
define('IMAGE_COPY', 'Copier');
define('IMAGE_COPY_TO', 'Copier vers');
define('IMAGE_DETAILS', 'D&eacute;tails');
define('IMAGE_DELETE', 'Effacer');
define('IMAGE_EDIT', '&eacute;diter');
define('IMAGE_EMAIL', 'E-mail');
define('IMAGE_FILE_MANAGER', 'Gestionnaire de fichiers');
define('IMAGE_ICON_STATUS_GREEN', 'Actif');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', 'Activer');
define('IMAGE_ICON_STATUS_RED', 'inactif');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'D&eacute;sactiver');
define('IMAGE_ICON_STATUS_RED_EZPAGES', 'Erreur -- trop d\'URL/ de type de contenu &eacute;crits');
define('IMAGE_ICON_STATUS_RED_ERROR', 'Erreur');
define('IMAGE_ICON_INFO', 'Info');
define('IMAGE_INSERT', 'Ins&eacute;rer');
define('IMAGE_LOCK', 'Verrouiller');
define('IMAGE_MODULE_INSTALL', 'Installer le module');
define('IMAGE_MODULE_REMOVE', 'D&eacute;sinstaller le module');
define('IMAGE_MOVE', 'D&eacute;placer');
define('IMAGE_NEW_BANNER', 'nouvelle banni&egrave;re');
define('IMAGE_NEW_CATEGORY', 'nouvelle cat&eacute;gorie');
define('IMAGE_NEW_COUNTRY', 'Nouveau pays');
define('IMAGE_NEW_CURRENCY', 'Nouvelle devise');
define('IMAGE_NEW_FILE', 'Nouveau fichier');
define('IMAGE_NEW_FOLDER', 'Nouveau r&eacute;pertoire');
define('IMAGE_NEW_LANGUAGE', 'Nouvelle langue');
define('IMAGE_NEW_NEWSLETTER', 'nouvelle newsletter');
define('IMAGE_NEW_PRODUCT', 'Nouveau produit');
define('IMAGE_NEW_SALE', 'Nouvelle vente');
define('IMAGE_NEW_TAX_CLASS', 'Nouvelle classe de taxes');
define('IMAGE_NEW_TAX_RATE', 'Nouveau taux de taxes');
define('IMAGE_NEW_TAX_ZONE', 'Nouvelle z&ocirc;ne de taxes');
define('IMAGE_NEW_ZONE', 'Nouvelle z&ocirc;ne');
define('IMAGE_OPTION_NAMES', 'Classer les options');
define('IMAGE_OPTION_VALUES', 'Valeurs des options');
define('IMAGE_ORDERS', 'Commandes');
define('IMAGE_ORDERS_INVOICE', 'Factures');
define('IMAGE_ORDERS_PACKINGSLIP', '&eacute;tiquettage');
define('IMAGE_PREVIEW', 'Pr&eacute;visualiser');
define('IMAGE_RESTORE', 'Restaurer');
define('IMAGE_RESET', 'Remettre &agrave; z&eacute;ro');
define('IMAGE_SAVE', 'Sauvegarder');
define('IMAGE_SEARCH', 'Chercher');
define('IMAGE_SELECT', 'S&eacute;lectionner');
define('IMAGE_SEND', 'Envoyer');
define('IMAGE_SEND_EMAIL', 'Envoyer E-mail');
define('IMAGE_UNLOCK', 'D&eacute;verrouiller');
define('IMAGE_UPDATE', 'Actualiser');
define('IMAGE_UPDATE_CURRENCIES', 'Actualiser le taux de change');
define('IMAGE_UPLOAD', 'T&eacute;l&eacute;charger');
define('IMAGE_TAX_RATES','Taux de taxe');
define('IMAGE_DEFINE_ZONES','D&eacute;finir les z&ocirc;nes');
define('IMAGE_PRODUCTS_PRICE_MANAGER', 'Gestionnaire des Prix des produits');
define('IMAGE_UPDATE_PRICE_CHANGES', 'Actualiser le prix des produits');
define('IMAGE_ADD_BLANK_DISCOUNTS','Ajouter une qt&eacute; de ' . DISCOUNT_QTY_ADD . ' coupons de r&eacute;duction');
define('IMAGE_CHECK_VERSION', 'V&eacute;rifier la version de Zen Cart');
define('IMAGE_PRODUCTS_TO_CATEGORIES', 'Gestionnaire de liens de Cat&eacute;gories Multiple');

define('IMAGE_ICON_STATUS_ON', 'Statut - activ&eacute;');
define('IMAGE_ICON_STATUS_OFF', 'Statut - d&eacute;sactiv&eacute;');
define('IMAGE_ICON_LINKED', 'le produit est li&eacute;');

define('IMAGE_REMOVE_SPECIAL','Effacer info Promotion');
define('IMAGE_REMOVE_FEATURED','Effacer info Coup de Coeur');
define('IMAGE_INSTALL_SPECIAL', 'Ajouter info Promotion');
define('IMAGE_INSTALL_FEATURED', 'Ajouter info Coup de Coeur');

define('ICON_PRODUCTS_PRICE_MANAGER','G&eacute;rer les prix de produits');
define('ICON_COPY_TO', 'Copier vers');
define('ICON_CROSS', 'Faux');
define('ICON_CURRENT_FOLDER', 'R&eacute;pertoire Courant');
define('ICON_DELETE', 'Effacer');
define('ICON_EDIT', '&eacute;diter');
define('ICON_ERROR', 'Erreur');
define('ICON_FILE', 'Fichier');
define('ICON_FILE_DOWNLOAD', 'T&eacute;l&eacute;charger');
define('ICON_FOLDER', 'R&eacute;pertoire');
//define('ICON_LOCKED', 'Verrouiller');
define('ICON_MOVE', 'D&eacute;placer');
define('ICON_PREVIOUS_LEVEL', 'Niveau pr&eacute;c&eacute;dent');
define('ICON_PREVIEW', 'Pr&eacute;visualiser');
define('ICON_RESET', 'Remettre &agrave; z&eacute;ro');
define('ICON_STATISTICS', 'Statistiques');
define('ICON_SUCCESS', 'Succ&egrave;s');
define('ICON_TICK', 'Vrai');
//define('ICON_UNLOCKED', 'D&eacute;verrouiller');
define('ICON_WARNING', 'Attention');

// constants for use in zen_prev_next_display function
define('TEXT_RESULT_PAGE', 'Page %s &agrave; %d');
define('TEXT_DISPLAY_NUMBER_OF_ADMINS', 'Afficher <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> admins)');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Afficher <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> banni&egrave;res)');
define('TEXT_DISPLAY_NUMBER_OF_CATEGORIES', 'Afficher <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> cat&eacute;gories)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Afficher <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> pays)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Afficher <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> clients)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Afficher <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> devises)');
define('TEXT_DISPLAY_NUMBER_OF_FEATURED', 'Montrer <b>%d</b> &aacute; <b>%d</b> (de <b>%d</b> produits coup de coeur)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Afficher <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> langues)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Afficher <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> fabricants)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Afficher <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> newsletters)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Afficher <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> commandes)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Afficher <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> &eacute;tats des commandes)');
define('TEXT_DISPLAY_NUMBER_OF_PRICING_GROUPS', 'Afficher <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> groupes de prix)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Afficher <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> produits)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCT_TYPES', 'Afficher <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> types de produits)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Afficher <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> articles attendus)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Afficher <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> avis)');
define('TEXT_DISPLAY_NUMBER_OF_SALES', 'Afficher <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> ventes)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Afficher <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> promotions)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Afficher <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> classes de taxes)');
define('TEXT_DISPLAY_NUMBER_OF_TEMPLATES', 'Afficher <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> associations de template)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Afficher <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> z&ocirc;nes de taxes)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Afficher <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> taux de taxes)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Afficher <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> z&ocirc;nes)');

define('PREVNEXT_BUTTON_PREV', '&lt;&lt;');
define('PREVNEXT_BUTTON_NEXT', '&gt;&gt;');


define('TEXT_DEFAULT', 'd&eacute;faut');
define('TEXT_SET_DEFAULT', 'D&eacute;finir par d&eacute;faut');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* Requis</span>');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'Erreur : aucune devise par d&eacute;faut sp&eacute;cifi&eacute;e. Veuillez en configuer une dans votre panneau Admin Outils->Localisation->Devises');

define('TEXT_CACHE_CATEGORIES', 'Bloc des Cat&eacute;gories');
define('TEXT_CACHE_MANUFACTURERS', 'Bloc des Fabricants');
define('TEXT_CACHE_ALSO_PURCHASED', 'Module Achats Connexes');

define('TEXT_NONE', '--aucun--');
define('TEXT_TOP', 'Top');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Erreur : destination inconnue %s');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Erreur : destination non inscriptible %s');
define('ERROR_FILE_NOT_SAVED', 'Erreur : fichier non sauvegard&eacute;.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Erreur : %s est un type de fichiers interdit');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Succ&egrave;s : fichier %s sauvegard&eacute;');
define('WARNING_NO_FILE_UPLOADED', 'Attention : fichier non sauvegard&eacute;.');
define('WARNING_FILE_UPLOADS_DISABLED', 'Attention : la fonction de t&eacute;l&eacute;chargement de fichiers est inactive dans le fichier php.ini.');
define('ERROR_ADMIN_SECURITY_WARNING', 'Attention : Votre identifiants ou mot de passe Admin est non s&eacute;curis&eacute;... Soit vous avez conserver le r&eacute;glage initial: Admin admin, soit vous n\'avez pas supprim&eacute; le mode : demo demoonly<br />Le(s) login(s) doivent &ecirc;tre chang&eacute; pour des raisons de s&eacute;curit&eacute;<br />Pour de plus amples informations concernant la s&eacute;curit&eacute;, veuillez consulter le r&eacute;pertoire /docs');
define('WARNING_DATABASE_VERSION_OUT_OF_DATE','Il semble que votre base de donn&eacute;es a besoin d\'&ecirc;tre mise &agrave; jour. Voir Outils->Infos serveur pour voir les versions courantes.');
define('WARN_DATABASE_VERSION_PROBLEM','Vrai'); //set to false to turn off warnings about database version mismatches
define('WARNING_ADMIN_DOWN_FOR_MAINTENANCE', '<strong>Attention:</strong>  Le site est en cours de maintenance...<br />NOTE: Vous ne pouvez pas tester la plupart des modules de paiement et livraison en mode maintenance');
define('WARNING_BACKUP_CFG_FILES_TO_DELETE', 'AVERTISSEMENT : Ces fichiers devraient &ecirc;tre supprim&eacute;s pour emp&ecirc;cher des failles de s&eacute;curit&eacute; : ');
define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Avertissement : Le r&eacute;pertoire d\'installation existe &aacute; : '. DIR_FS_CATALOG. 'zc_install. Veuillez enlever ce r&eacute;pertoire pour des raisons de s&eacute;curit&eacute;.');
define('WARNING_CONFIG_FILE_WRITEABLE', 'Avertissement : Votre fichier de configuration : %sincludes/configure.php. C\'est un risque potentiel de s&eacute;curit&eacute; - placez svp les bonnes permissions d\'utilisateur sur ce fichier (inalt&eacute;rable, CHMOD 644 ou 444 sont courants).');
define('WARNING_COULD_NOT_LOCATE_LANG_FILE', 'AVERTISSEMENT: le fichier langue ne peut &ecirc;tre trouv&eacute;: ');
define('ERROR_MODULE_REMOVAL_PROHIBITED', 'ERREUR: supression de module interdite: ');

define('_JANUARY', 'Janvier');
define('_FEBRUARY', 'F&eacute;vrier');
define('_MARCH', 'Mars');
define('_APRIL', 'Avril');
define('_MAY', 'Mai');
define('_JUNE', 'Juin');
define('_JULY', 'Juillet');
define('_AUGUST', 'Ao&ucirc;t');
define('_SEPTEMBER', 'Septembre');
define('_OCTOBER', 'Octobre');
define('_NOVEMBER', 'Novembre');
define('_DECEMBER', 'D&eacute;cembre');

define('TEXT_DISPLAY_NUMBER_OF_GIFT_VOUCHERS', 'Afficher <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> Ch&egrave;ques Cadeaux)');
define('TEXT_DISPLAY_NUMBER_OF_COUPONS', 'Afficher <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> Coupons de r&eacute;ductions)');

define('TEXT_VALID_PRODUCTS_LIST', 'Listes des produits');
define('TEXT_VALID_PRODUCTS_ID', 'ID des produits');
define('TEXT_VALID_PRODUCTS_NAME', 'Noms des produits');
define('TEXT_VALID_PRODUCTS_MODEL', 'Mod&egrave;les des produits');

define('TEXT_VALID_CATEGORIES_LIST', 'Listes des cat&eacute;gories');
define('TEXT_VALID_CATEGORIES_ID', 'ID de la cat&eacute;gorie');
define('TEXT_VALID_CATEGORIES_NAME', 'Nom de la cat&eacute;gorie');

define('DEFINE_LANGUAGE','D&eacute;finir la Langue :');

define('BOX_ENTRY_COUNTER_DATE','Le compteur des hits a d&eacute;but&eacute; le:');
define('BOX_ENTRY_COUNTER','Compteur:');

// not installed
  define('NOT_INSTALLED_TEXT','Non Install&eacute;');

// Product Options Values Sort Order - option_values.php
  define('BOX_CATALOG_PRODUCT_OPTIONS_VALUES','Valeurs des Options');

  define('TEXT_UPDATE_SORT_ORDERS_OPTIONS','<strong>Actualiser le Classement des Attributs sur la base des Valeurs par D&eacute;faut des Options</strong> ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_UPDATES','<strong>Actualiser tous les classements des attributs de produits</strong><br />sur la base du classement par d&eacute;faut des valeurs des options :<br />');

// Product Options Name Sort Order - option_values.php
  define('BOX_CATALOG_PRODUCT_OPTIONS_NAME','Classer les options');
  
  define('TEXT_UPDATE_SORT_ORDERS_OPTIONS','<strong>Actualiser l\'ordre des attributs a partir des valeurs par d&eacute;faut des options</strong> ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_UPDATES','<strong>Actualiser tous les classements des attributs de produits</strong><br />pour correspondre aux classements par d&eacute;faut des options:<br />');

// Product Options Name Sort Order - option_values.php
  define('BOX_CATALOG_PRODUCT_OPTIONS_NAME','Classer par nom d\'option');

// Attributes only
  define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_CONTROLLER','Contr&ocirc;le des attributs');

// generic model
  define('TEXT_MODEL','Mod&egrave;le :');

// column controller
  define('BOX_TOOLS_LAYOUT_CONTROLLER','Contr&ocirc;le des Blocs');

// check GV release queue and alert store owner
  define('SHOW_GV_QUEUE',true);
  define('TEXT_SHOW_GV_QUEUE','%s en attente de validation ');
  define('IMAGE_GIFT_QUEUE', TEXT_GV_NAME . ' Queue');
  define('IMAGE_ORDER','Commande');

  define('BOX_TOOLS_EMAIL_WELCOME','E-mail de Bienvenue');

  define('IMAGE_DISPLAY','Afficher');
  define('IMAGE_UPDATE_SORT','Actualiser le classement');
  define('IMAGE_EDIT_PRODUCT','Editer un Produit');
  define('IMAGE_EDIT_ATTRIBUTES','Editer des attributs');
  define('TEXT_NEW_PRODUCT', 'Produit dans la cat&eacute;gorie : &quot;%s&quot;');
  define('IMAGE_OPTIONS_VALUES','Noms et valeurs des Options');
  define('TEXT_PRODUCTS_PRICE_MANAGER','GESTIONNAIRE DU PRIX DES PRODUITS');
  define('TEXT_PRODUCT_EDIT','EDITER PRODUIT');
  define('TEXT_ATTRIBUTE_EDIT','EDITER ATTRIBUTS');
  define('TEXT_PRODUCT_DETAILS','VOIR DETAILS');

// sale maker
  define('DEDUCTION_TYPE_DROPDOWN_0', 'D&eacute;duire montant');
  define('DEDUCTION_TYPE_DROPDOWN_1', 'Pourcentage');
  define('DEDUCTION_TYPE_DROPDOWN_2', 'Nouveau Prix');

// Min and Units
  define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','Min :');
  define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING','Unit&eacute;s :');
  define('PRODUCTS_QUANTITY_IN_CART_LISTING','Dans le Panier :');
  define('PRODUCTS_QUANTITY_ADD_ADDITIONAL_LISTING','Ajouter :');

  define('TEXT_PRODUCTS_MIX_OFF','*Aucune Option Mix');
  define('TEXT_PRODUCTS_MIX_ON','*Options Mix');

// search filters
  define('TEXT_INFO_SEARCH_DETAIL_FILTER','Filtre de Recherche : ');
  define('HEADING_TITLE_SEARCH_DETAIL','Recherche : ');
  define('HEADING_TITLE_SEARCH_DETAIL_REPORTS', 'Recherche des produits - d&eacute;limit&eacute;s par des virgules');
  define('HEADING_TITLE_SEARCH_DETAIL_REPORTS_NAME_MODEL', 'Recherche du nom/du mod&egrave;le de produits');

  define('PREV_NEXT_PRODUCT', 'Produits : ');
  define('TEXT_CATEGORIES_STATUS_INFO_OFF', '<span class="alert">*La categorie est d&eacute;sactiv&eacute;e</span>');
  define('TEXT_PRODUCTS_STATUS_INFO_OFF', '<span class="alert">*Le Produit est d&eacute;sactiv&eacute;</span>');

// admin demo
  define('ADMIN_DEMO_ACTIVE','Admininistration en mode d&eacute;mo actuellement. Certains r&eacute;glages seront d&eacute;sactiv&eacute;s');
  define('ADMIN_DEMO_ACTIVE_EXCLUSION','Admininistration en mode d&eacute;mo actuellement. Certains r&eacute;glages seront d&eacute;sactiv&eacute;s - <strong>NOTE : outrepassement Admin activ&eacute;e</strong>');
  define('ERROR_ADMIN_DEMO','Admininistration en mode D&eacute;mo... La fonction que vous demandez est donc inactive');

// Version Check notices
  define('TEXT_VERSION_CHECK_NEW_VER','Nouvelle Version Disponible V');
  define('TEXT_VERSION_CHECK_NEW_PATCH','Nouveau PATCH Disponible : V');
  define('TEXT_VERSION_CHECK_PATCH','patch');
  define('TEXT_VERSION_CHECK_DOWNLOAD','T&eacute;l&eacute;charger Ici');
  define('TEXT_VERSION_CHECK_CURRENT','Votre Version de Zen Cart est &agrave; jour.');

// downloads manager
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_DOWNLOADS_MANAGER', 'Afficher <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> t&eacute;l&eacute;chargements)');
define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_DOWNLOADS_MANAGER', 'Gestionnaire de t&eacute;l&eacute;chargements');

define('BOX_CATALOG_FEATURED','Coups de Coeur');

define('ERROR_NOTHING_SELECTED', 'Rien n\'&eacute;tait s&eacute;lectionn&eacute;... donc aucun changement n\'a &eacute;t&eacute; r&eacute;alis&eacute;');
define('TEXT_STATUS_WARNING','<strong>NOTE :</strong> le statut est activ&eacute;/d&eacute;sactiv&eacute; automatiquement lorsque les dates sont r&eacute;gl&eacute;es');

define('TEXT_LEGEND_LINKED', 'Produit Li&eacute;');
define('TEXT_MASTER_CATEGORIES_ID','Cat&eacute;gorie principale de produit :');
define('TEXT_LEGEND', 'LEGENDE : ');
define('TEXT_LEGEND_STATUS_OFF', 'Statut OFF ');
define('TEXT_LEGEND_STATUS_ON', 'Statut ON ');

define('TEXT_INFO_MASTER_CATEGORIES_ID', '<strong>NOTE : la Cat&eacute;gorie de produit principal est utilis&eacute;e pour fixer des prix lorsque<br />la Cat&eacute;gorie de Produits affecte le prix des Produits Li&eacute;s, exemple : Ventes</strong>');
define('TEXT_YES', 'Oui');
define('TEXT_NO', 'Non');

// shipping error messages
define('ERROR_SHIPPING_CONFIGURATION', '<strong>Erreurs dans la configuration de la livraison !</strong>');
define('ERROR_SHIPPING_ORIGIN_ZIP', '<strong>Attention :</strong> le Code Postal de la Boutique n\'est pas configur&eacute;. Veuillez consulter les rubriques Configuration | Livraisons/Conditionnement.');
define('ERROR_ORDER_WEIGHT_ZERO_STATUS', '<strong>Attention :</strong> le poids 0 est configur&eacute; pour les Livraisons Gratuites, et le module des livraisons gratuites est d&eacute;sactiv&eacute;.');
define('ERROR_USPS_STATUS', '<strong>Attention :</strong> USPS ne peut identifier cet utilisateur et/ou le mot de passe, ou la configuration du module est en mode TEST au lieu de PRODUCTION.<br />Si les estimations ne fonctionnent toujours pas, veuillez contacter USPS pour activer votre compte sur le sevreur de production : icustomercare@usps.com.');

define('ERROR_SHIPPING_MODULES_NOT_DEFINED', 'NOTE : Vous n\'avez aucun module d\'exp&eacute;dition activ&eacute;. Veuillez aller &aacute;  Modules->Livraisons pour les configurer.');
define('ERROR_PAYMENT_MODULES_NOT_DEFINED', 'NOTE : Vous n\'avez activ&eacute; aucun module de paiement. Veuillez aller dans Modules->Paiement pour les configurer.');

// text pricing
define('TEXT_CHARGES_WORD','Montant Calcul&eacute; : ');
define('TEXT_PER_WORD','<br />Prix par mot : ');
define('TEXT_WORDS_FREE',' Mot(s) gratuit(s) ');
define('TEXT_CHARGES_LETTERS','Montant Calcul&eacute; : ');
define('TEXT_PER_LETTER','<br />Prix par Lettre : ');
define('TEXT_LETTERS_FREE',' Lettre(s) gratuite(s) ');
define('TEXT_ONETIME_CHARGES','*paiement unique = ');
define('TEXT_ONETIME_CHARGES_EMAIL',"\t" . '*paiement unique = ');
define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', 'Remises avec Options de Quantit&eacute;s');
define('TABLE_ATTRIBUTES_QTY_PRICE_QTY','QTE');
define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE','PRIX');
define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', 'Remises sur Quantit&eacute;s d\'Options avec Paiement Unique');
define('TEXT_CATEGORIES_PRODUCTS', 'S&eacute;lectionnez une Cat&eacute;gorie de Produits... ou naviguez parmi les Produits');
define('TEXT_PRODUCT_TO_VIEW', 'S&eacute;lectionnez un Produit pour le visualiser et appuyez sur afficher...');

define('TEXT_INFO_SET_MASTER_CATEGORIES_ID', 'ID de Cat&eacute;gorie Master Invalide');
define('TEXT_INFO_ID', ' ID# ');
define('TEXT_INFO_SET_MASTER_CATEGORIES_ID_WARNING', '<strong>ATTENTION :</strong> Ce Produit est li&eacute; &agrave; des Cat&eacute;gories multiples mais aucune Cat&eacute;gorie Master n\'est d&eacute;finie !');

define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT', 'Produit n&eacute;cessitant un devis');
define('PRODUCTS_PRICE_IS_FREE_TEXT','Le produit est gratuit');

define('TEXT_PRODUCT_WEIGHT_UNIT','kgs');

// min, max, units
define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING', 'Max:');

// Discount Savings
define('PRODUCT_PRICE_DISCOUNT_PREFIX','Economie :&nbsp;');
define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE','% d\'&eacute;conomie');
define('PRODUCT_PRICE_DISCOUNT_AMOUNT','&nbsp;d\'&eacute;conomie');
// Sale Maker Sale Price
define('PRODUCT_PRICE_SALE','Prix :&nbsp;');

// Rich Text / HTML resources
define('TEXT_HTML_EDITOR_NOT_DEFINED','Si aucun &eacute;diteur HTML n\'est d&eacute;fini ou que la fonction JavaScript est d&eacute;sactiv&eacute;e, vous pouvez saisir du code HTML manuellement.');
define('TEXT_WARNING_HTML_DISABLED','<span class = "main">Note : vous utilisez le format TEXTE seul pour vos emails. Si vous souhaitez envoyer vos emails en mode HTML, vous devez activer la fonction "utiliser MIME HTML" dans les Options d\'Emails</span>');
define('TEXT_WARNING_CANT_DISPLAY_HTML','<span class = "main">Note : vous utilisez le format TEXTE seul pour vos emails. Si vous souhaitez envoyer vos emails en mode HTML, vous devez activer la fonction "utiliser MIME HTML" dans les Options d\'Emails</span>');
define('TEXT_EMAIL_CLIENT_CANT_DISPLAY_HTML',"Vous visualisez ce texte car nous vous avons adress&eacute; un mail au format HTML que votre client mail ne peut afficher au format requis.");
define('ENTRY_EMAIL_PREFERENCE','Pr&eacute;f&eacute;rence de Format Email :');
define('ENTRY_EMAIL_FORMAT_COMMENTS','Choisir "aucun" ou "d&eacute;sinscrire" d&eacute;sactive TOUS les mails, y compris les d&eacute;tails des commandes');
define('ENTRY_EMAIL_HTML_DISPLAY','HTML');
define('ENTRY_EMAIL_TEXT_DISPLAY','Texte-Seul');
define('ENTRY_EMAIL_NONE_DISPLAY','Jamais');
define('ENTRY_EMAIL_OPTOUT_DISPLAY','D&eacute;sinscription des Newsletters');
define('ENTRY_NOTHING_TO_SEND','Vous n\'avez saisi aucun texte pour votre message');
define('EMAIL_SEND_FAILED','ERREUR : Echec de l\'envoi Email &agrave; : "%s" <%s> avec le sujet : "%s"');

// toggle on/off
  define('EDITOR_NONE', 'Texte plat');
  define('TEXT_EDITOR_INFO', 'Editeur de Texte');
  define('ERROR_EDITORS_FOLDER_NOT_FOUND', 'Vous avez un &eacute;diteur de HTML s&eacute;lectionn&eacute; dans \'Ma Boutique\' mais le dossier  \'/editors/\'  ne peut pas &ecirc;tre localis&eacute;e. Veuillez d&eacute;sactiver votre choix ou installer le r&eacute;pertoire de l\'&eacute;editeur dans le dossier \''.DIR_WS_CATALOG.'editors/\'');
  define('TEXT_CATEGORIES_PRODUCTS_SORT_ORDER_INFO', 'Categories/Classement des Produits ');
  define('TEXT_SORT_PRODUCTS_SORT_ORDER_PRODUCTS_NAME', 'Classement Produits, Noms Produits');
  define('TEXT_SORT_PRODUCTS_NAME', 'Noms Produits');
  define('TEXT_SORT_PRODUCTS_MODEL', 'Mod&egrave;le produit');
  define('TEXT_SORT_PRODUCTS_QUANTITY', 'Produits Qt&eacute;+, Noms Produits');
  define('TEXT_SORT_PRODUCTS_QUANTITY_DESC', 'Produits Qt&eacute;-, Noms Prodtuits');
  define('TEXT_SORT_PRODUCTS_PRICE', 'Produits prix+, Noms Produits');
  define('TEXT_SORT_PRODUCTS_PRICE_DESC', 'Produits prix-, Noms Prodtuits');
  define('TEXT_SORT_CATEGORIES_SORT_ORDER_PRODUCTS_NAME', 'Classement  par cat&eacute;gories;, noms cat&eacute;gories');
  define('TEXT_SORT_CATEGORIES_NAME', 'Noms cat&eacute;gories');



  define('TABLE_HEADING_YES','Oui');
  define('TABLE_HEADING_NO','Non');
  define('TEXT_PRODUCTS_IMAGE_MANUAL', '<br /><strong>Ou, choisir un fichier image existant &aacute; partir du serveur, nom de fichier :</strong>');
  define('TEXT_IMAGES_OVERWRITE', '<br /><strong>Ecraser la photo Actuelle sur le serveur ?</strong>');
  define('TEXT_IMAGE_OVERWRITE_WARNING','ATTENTION : LE FICHIER a &eacute;t&eacute; actualis&eacute; mais pas &eacute;cras&eacute; ');
  define('TEXT_IMAGES_DELETE', '<strong>Effacer l\'image?</strong>NOTE : Enl&eacute;ver l\'image du produit n\'enleve pas l\'image du serveur :');
  define('TEXT_IMAGE_CURRENT', 'Nom de l\'image: ');

  define('ERROR_DEFINE_OPTION_NAMES', 'Attention : aucun nom d\'Option d&eacute;fini');
  define('ERROR_DEFINE_OPTION_VALUES', 'Attention : aucune Valeur d\'Option d&eacute;finie');
  define('ERROR_DEFINE_PRODUCTS', 'Attention : aucun Produit d&eacute;fini');
  define('ERROR_DEFINE_PRODUCTS_MASTER_CATEGORIES_ID', 'Attention: Aucune identification principale de cat&eacute;gories n\'a &eacute;t&eacute; &eacute;tablie pour ce produit');

  define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_ON','Ajouter en incluant les Sous-Cat&eacute;gories');
  define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_OFF','Ajouter en excluant les Sous-Cat&eacute;gories');

  define('BUTTON_PREVIOUS_ALT','Produit Pr&eacute;c&eacute;dent');
  define('BUTTON_NEXT_ALT','Produit Suivant');

  define('BUTTON_PRODUCTS_TO_CATEGORIES', 'Gestionnaire de Liens Cat&eacute;gories multiples');
  define('BUTTON_PRODUCTS_TO_CATEGORIES_ALT', 'Copier un Produit vers des Cat&eacute;gories multiples');

  define('TEXT_INFO_OPTION_NAMES_VALUES_COPIER_STATUS', 'Copier toutes les Caract&eacute;ristiques Globales, ajouter et effacer le Statut des Caract&eacute;ristiques est actuellement sur INACTIF');
  define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_ON', 'Afficher les Caract&eacute;ristiques Globales - ON');
  define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_OFF', 'Afficher les Caract&eacute;ristiques Globales - OFF');

// moved from categories and all product type language files
  define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', 'Erreur: Impossible de lier les produits avec la m&ecirc;me cat&eacute;gorie.');
  define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Erreur: Impossible d\'ecrire dans le R&eacute;pertoire des images: ' . DIR_FS_CATALOG_IMAGES);
  define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Erreur: le R&eacute;pertoire des images est inexistant : ' . DIR_FS_CATALOG_IMAGES);
  define('ERROR_CANNOT_MOVE_CATEGORY_TO_PARENT', 'Erreur: Impossible de d&eacute;placer la cat&eacute;gorie en sous-cat&eacute;gorie ');
  define('ERROR_CANNOT_MOVE_PRODUCT_TO_CATEGORY_SELF', 'Erreur: Impossible de d&eacute;placer le produit dans la m&ecirc;me cat&eacute;gorie ou dans une cat&eacute;gorie ou il existe d&eacute;j&agrave;');
  define('ERROR_CATEGORY_HAS_PRODUCTS', 'Erreur: la cat&eacute;gorie a des produits!<br /><br />Lorsque cela peut etre fait pour construire votre cat&eacute;gories ... les cat&eacute;gories ne peuvent contenir que des produits ou cat&eacute;gories mais jamais les deux!');
  define('SUCCESS_CATEGORY_MOVED', 'Succ&egrave;s ! La cat&eacute;gorie a &eacute;t&eacute; d&eacute;plac&eacute;e avec succ&egrave;s ...');
  define('ERROR_CANNOT_MOVE_CATEGORY_TO_CATEGORY_SELF', 'Erreur: Impossible de d&eacute;placer la cat&eacute;gorie vers la m&ecirc;me cat&eacute;gorie ! ID#');

// EZ-PAGES Alerts
  define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', 'Attention: EZ-PAGES HEADER - Actif pour l\'IP Admin seulement');
  define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', 'Attention: EZ-PAGES FOOTER - Actif pour l\'IP Admin seulement');
  define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', 'Attention: EZ-PAGES SIDEBOX - Actif pour l\'IP Admin seulement');

// moved from product types
// warnings on Virtual and Always Free Shipping
  define('TEXT_VIRTUAL_PREVIEW','Attention: Ce produit est marqu&eacute; - Livraison Gratuite et pas d\'adresse de livraison requise<br />Aucune adresse de livraison ne sera demand&eacute;e quand tous les produits command&eacute;s sont des produits virtuels');
  define('TEXT_VIRTUAL_EDIT','Attention: Ce produit est marqu&eacute; - Livraison Gratuite et pas d\'adresse de livraison requise<br />Aucune adresse de livraison ne sera demand&eacute;e quand tous les produits command&eacute;s sont des produits virtuels');
  define('TEXT_FREE_SHIPPING_PREVIEW','Attention : ce produit est marqu&eacute; - Livraison Gratuite, Adresse de livraison Requise<br />Le module Livraison Gratuite est conseill&eacute; quand tous les produits de la commande sont des produits livrables gratuitement');
  define('TEXT_FREE_SHIPPING_EDIT','Attention: passer le produit en Livraison Gratuite, Adresse de livraison Requise<br />Le module Livraison Gratuite est conseill&eacute; quand tous les produits de la commande sont des produits livrables gratuitement');

// admin activity log warnings
  define('WARNING_ADMIN_ACTIVITY_LOG_DATE', 'Attention: La table de fichier de log d\'activit&amp;eacute; a plus de 2 mois d\'enregistrement et devrait &amp;ecirc;tre nettoy&amp;eacute;e... ');
  define('WARNING_ADMIN_ACTIVITY_LOG_RECORDS', 'Attention: La table de fichier de log d\'activit&amp;eacute; a plus de 50,000 enregistrements et devrait &amp;ecirc;tre nettoy&amp;eacute;e... ');
  define('RESET_ADMIN_ACTIVITY_LOG', 'Remettre &agrave; z&eacute;ro le fichier de log d\'activit&eacute; &agrave; partir de la configuration');

  define('CATEGORY_HAS_SUBCATEGORIES', 'NOTE: la Cat&eacute;gorie a une sous-cat&eacute;gorie<br />Impossible d\'ajouter des articles');
  
  define('WARNING_WELCOME_DISCOUNT_COUPON_EXPIRES_IN', 'AVERTISSEMENT! Le coupon de r&eacute;duction du mail de bienvenue expire dans %s jours');

///////////////////////////////////////////////////////////
// include additional files:
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . FILENAME_EMAIL_EXTRAS);
  include(zen_get_file_directory(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/', FILENAME_OTHER_IMAGES_NAMES, 'false'));


?>