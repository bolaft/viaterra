<?php
/**
 * @package linkpoint_api_payment_module
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.at/license/2_0.txt GNU Public License V2.0
 * @translator: cyaneo/hugo13/wflohr    http://www.zen-cart.at    2007-01-03
 * @version $Id: currencies.php 302 2008-05-30 19:49:12Z maleborg $
 */

//  $Id: currencies.php 302 2008-05-30 19:49:12Z maleborg $
//

define('HEADING_TITLE','Währungen');

define('TABLE_HEADING_CURRENCY_NAME','Währung');
define('TABLE_HEADING_CURRENCY_CODES','Code');
define('TABLE_HEADING_CURRENCY_VALUE','Wechselkurs');
define('TABLE_HEADING_ACTION','Aktion');

define('TEXT_INFO_EDIT_INTRO','Führen Sie hier bitte die notwendigen Änderungen durch');
define('TEXT_INFO_CURRENCY_TITLE','Name:');
define('TEXT_INFO_CURRENCY_CODE','Code:');
define('TEXT_INFO_CURRENCY_SYMBOL_LEFT','Währungssymbol links:');
define('TEXT_INFO_CURRENCY_SYMBOL_RIGHT','Währungssymbol rechts:');
define('TEXT_INFO_CURRENCY_DECIMAL_POINT','Dezimalstellen Trennzeichen:');
define('TEXT_INFO_CURRENCY_THOUSANDS_POINT','1000er Trennzeichen');
define('TEXT_INFO_CURRENCY_DECIMAL_PLACES','Dezimalstellen:');
define('TEXT_INFO_CURRENCY_LAST_UPDATED','Letzte Aktualisierung:');
define('TEXT_INFO_CURRENCY_VALUE','Wechselkurs:<br /><br/ ><strong>Achtung, wenn hier ein anderer Wert als 1 eingetragen ist, dann wird der jeweilige Artikelpreis mit diesem Wert multipliziert (siehe auch unter Beispielausgabe)!</strong><br /><br />');
define('TEXT_INFO_CURRENCY_EXAMPLE','Beispielausgabe:');
define('TEXT_INFO_INSERT_INTRO','Bitte tragen Sie die neue Währung mit den relevanten Daten ein');
define('TEXT_INFO_DELETE_INTRO','Wollen Sie diese Währung wirklich löschen?');
define('TEXT_INFO_HEADING_NEW_CURRENCY','Neue Währung');
define('TEXT_INFO_HEADING_EDIT_CURRENCY','Währung bearbeiten');
define('TEXT_INFO_HEADING_DELETE_CURRENCY','Währung löschen');
define('TEXT_INFO_SET_AS_DEFAULT',TEXT_SET_DEFAULT . '(Ein manuelles Update der Währungskurse ist notwendig)');
define('TEXT_INFO_CURRENCY_UPDATED','Der Umrechnungskurs für %s (%s) wurde mit %s aktualisiert.');

define('ERROR_REMOVE_DEFAULT_CURRENCY','Fehler: Die Standardwährung kann nicht gelöscht werden. Legen Sie eine andere Währung als Standard fest und versuchen Sie es noch einmal.');
define('ERROR_CURRENCY_INVALID','Fehler: Der Umrechnungskurs für %s (%s) konnte mit %s nicht aktualisiert werden. Haben Sie den richtigen Währungs-Code eingeben?');
define('WARNING_PRIMARY_SERVER_FAILED','Warnung: Der primäre Aktualisierungs-Server (%s) konnte nach %s (%s) Versuchen nicht erreicht werden - Es wird versucht, die Aktualisierung über den sekundären Server durchzuführen.');
