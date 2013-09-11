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
// |                                                                      |
// |   DevosC, Developing open source Code                                |
// |   Copyright (c) 2004 DevosC.com                                      |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: paypal.php 3016 2006-02-12 05:26:46Z ajeh $
//

  // sort orders
  define('TEXT_PAYPAL_IPN_SORT_ORDER_INFO', 'Orden de muestreo: ');
  define('TEXT_SORT_PAYPAL_ID_DESC', 'Pedidos de PayPal Recibidos (nuevos - antiguos)');
  define('TEXT_SORT_PAYPAL_ID', 'Pedidos de PayPal Recibidos (antiguos - nuevos)');
  define('TEXT_SORT_ZEN_ORDER_ID_DESC', 'ID de Pedido (alto - bajo), Pedido de PayPal recibido');
  define('TEXT_SORT_ZEN_ORDER_ID', 'ID de Pedido (bajo - alto), Pedido de PayPal recibido');
  define('TEXT_PAYMENT_AMOUNT_DESC', 'Cantidad de Pedido (alto - bajo)');
  define('TEXT_PAYMENT_AMOUNT', 'Cantidad de Pedido (bajo - alto)');

  //begin ADMIN text
  define('HEADING_ADMIN_TITLE', 'Notificaciones Instant&aacute;neas de PayPal');
  define('HEADING_PAYMENT_STATUS', 'Estado de Pagos');
  define('TEXT_ALL_IPNS', 'Todos');

  define('TABLE_HEADING_ORDER_NUMBER', 'Pedido #');
  define('TABLE_HEADING_PAYPAL_ID', 'PayPal #');
  define('TABLE_HEADING_TXN_TYPE', 'Tipo de Transacci&oacute;n');
  define('TABLE_HEADING_PAYMENT_STATUS', 'Estado del Pago');
  define('TABLE_HEADING_PAYMENT_AMOUNT', 'Cantidad');
  define('TABLE_HEADING_ACTION', 'Acci&oacute;n');
  define('TABLE_HEADING_DATE_ADDED', 'A&ntilde;adido la Fecha');
  define('TABLE_HEADING_NUM_HISTORY_ENTRIES', 'N&uacute;mero de entradas en la historia de Estado');
  define('TABLE_HEADING_ENTRY_NUM', 'N&uacute;mero de Entrada');
  define('TABLE_HEADING_TRANS_ID', 'ID de Transacci&oacute;n ');



  define('TEXT_INFO_PAYPAL_IPN_HEADING', 'PayPal IPN');
  define('TEXT_DISPLAY_NUMBER_OF_TRANSACTIONS', 'Mostrando <strong>%d</strong> a <strong>%d</strong> (de <strong>%d</strong> IPN\'s)');

  //Details section
  define('HEADING_DEATILS_CUSTOMER_REGISTRATION_TITLE', 'Detalles de registro del cliente PayPal');
  define('HEADING_DETAILS_REGISTRATION_TITLE', 'Notificaciones de pago instant&aacute;neo de PayPal');
  define('TEXT_INFO_ENTRY_ADDRESS', 'Direcci&oacute;n');
  define('TEXT_INFO_ORDER_NUMBER', 'N&uacute;mero de pedido');
  define('TEXT_INFO_TXN_TYPE', 'Tipo de Transacci&oacute;n');
  define('TEXT_INFO_PAYMENT_STATUS', 'Estado del pago');
  define('TEXT_INFO_PAYMENT_AMOUNT', 'Cantidad');
  define('ENTRY_FIRST_NAME', 'Nombre');
  define('ENTRY_LAST_NAME', 'Apellidos');
  define('ENTRY_BUSINESS_NAME', 'Nombre de la Empresa');
  define('ENTRY_ADDRESS', 'Direcci&oacute;n');
  //EMAIL ALREADY DEFINED IN ORDERS
  define('ENTRY_PAYER_ID', 'ID del Deudor');
  define('ENTRY_PAYER_STATUS', 'Estado del deudor');
  define('ENTRY_ADDRESS_STATUS', 'Estado de la direcci&oacute;n');
  define('ENTRY_PAYMENT_TYPE', 'Tipo de Pago');
  define('TABLE_HEADING_ENTRY_PAYMENT_STATUS', 'Estado del Pago');
  define('TABLE_HEADING_PENDING_REASON', 'Motivo del pendiente');
  define('TABLE_HEADING_IPN_DATE', 'Fecha IPN');
  define('ENTRY_INVOICE', 'Factura');
  define('ENTRY_PAYPAL_IPN_TXN', 'ID de la Transacci&oacute;n');
  define('ENTRY_PAYMENT_DATE', 'Fecha del pago');
  define('ENTRY_PAYMENT_LAST_MODIFIED', '&Uacute;ltima modificaci&oacute;n');
  define('ENTRY_MC_CURRENCY', 'MC Currency');
  define('ENTRY_MC_GROSS', 'MC Gross');
  define('ENTRY_MC_FEE', 'MC Fee');
  define('ENTRY_PAYMENT_GROSS', 'Pago en bruto');
  define('ENTRY_PAYMENT_FEE', 'Tarifa de Pago');
  define('ENTRY_SETTLE_AMOUNT', 'Establecer cantidad');
  define('ENTRY_SETTLE_CURRENCY', 'Establecer moneda');
  define('ENTRY_EXCHANGE_RATE', 'Cambiar');
  define('ENTRY_CART_ITEMS', 'No hay art&iacute;culos en el carrito');
  define('ENTRY_CUSTOMER_COMMENTS', 'Comentarios del cliente');
  define('TEXT_NO_IPN_HISTORY', 'No hay historia IPN disponible');
  define('TEXT_TXN_SIGNATURE', 'Firma de la transacci&oacute;n');
  //end ADMIN text
?>
