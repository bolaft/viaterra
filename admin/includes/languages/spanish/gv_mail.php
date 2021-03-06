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
//  $Id: gv_mail.php,v 1.1 2005/12/22 22:31:18 gorkau Exp $
//

define('HEADING_TITLE', 'Enviar ' . TEXT_GV_NAME . ' a los Clientes');

define('TEXT_CUSTOMER', 'Cliente:');
define('TEXT_SUBJECT', 'Asunto:');
define('TEXT_FROM', 'De:');
define('TEXT_TO', 'Email a:');
define('TEXT_AMOUNT', 'Cantidad');
define('TEXT_MESSAGE', 'Mensaje:');
define('TEXT_RICH_TEXT_MESSAGE', 'Mensaje de<br />text enriquecido:');
define('TEXT_SINGLE_EMAIL', '<span class="smallText">Use esto para enviar emails individuales, de otra forma, use el desplegable de arriba</span>');
define('TEXT_SELECT_CUSTOMER', 'Seleccione Cliente');
define('TEXT_ALL_CUSTOMERS', 'Todos los Clientes');
define('TEXT_NEWSLETTER_CUSTOMERS', 'A Todos los Susciptores del Bolet�n');

define('NOTICE_EMAIL_SENT_TO', 'Aviso: Email enviado a: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Error: No seleccion� un cliente.');
define('ERROR_NO_AMOUNT_SELECTED', 'Error: No seleccion� una cantidad.');

define('ERROR_GV_AMOUNT', 'Por favor, defina la cantidad como un valor sin s�mbolo. Ejemplo: 25.00');

define('TEXT_GV_ANNOUNCE','<font color="#0000ff">Nos complace ofrecerle un ' . TEXT_GV_NAME . '</font>');
define('TEXT_GV_WORTH', 'El ' . TEXT_GV_NAME . ' vale ');
define('TEXT_TO_REDEEM', 'Para canjear este ' . TEXT_GV_NAME . ' pulse el link aqu� debajo. Por favor, escriba tambi�n el ' . TEXT_GV_REDEEM);
define('TEXT_WHICH_IS', ' que es el');
define('TEXT_IN_CASE', ' en caso que tenga alg�n problema.');
define('TEXT_OR_VISIT', 'o visite ');
define('TEXT_ENTER_CODE', ' e ingrese el c�digo durante el pago');

define ('TEXT_REDEEM_COUPON_MESSAGE_HEADER', 'Uste compr� recientemente un ' . TEXT_GV_NAME . ' de nuestro sitio, por razones de seguridad, la cantidad del ' . TEXT_GV_NAME . ' no le fue inmediatamente acreditada. El due�o de la tienda ahora ha emitido esta suma.');
define ('TEXT_REDEEM_COUPON_MESSAGE_AMOUNT', "\n\n" . 'El valor del ' . TEXT_GV_NAME . ' era %s');
define ('TEXT_REDEEM_COUPON_MESSAGE_BODY', "\n\n" . 'Ahora puede visitar nuestro sitio, ingresar y enviar la suma del ' . TEXT_GV_NAME . ' a quien desee.');
define ('TEXT_REDEEM_COUPON_MESSAGE_FOOTER', "\n\n");

?>
