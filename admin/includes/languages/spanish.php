<?php
/**
 * @package admin
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: english.php 7440 2007-11-17 21:51:35Z drbyte $
 */

// added defines for header alt and text
define('HEADER_ALT_TEXT', 'Administraci&oacute;n de Zen Cart :: El Arte del Comercio Electr&oacute;nico');
define('HEADER_LOGO_WIDTH', '200px');
define('HEADER_LOGO_HEIGHT', '70px');
define('HEADER_LOGO_IMAGE', 'logo.gif');

// look in your $PATH_LOCALE/locale directory for available locales..
// on RedHat6.0 I used 'en_US'
// on FreeBSD 4.0 I use 'en_US.ISO_8859-1'
// this may not work under win32 environments..
setlocale(LC_TIME, 'en_US.ISO_8859-1');
define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd/n/Y'); // this is used for date()
define('PHP_DATE_TIME_FORMAT', 'd/m/Y H:i:s'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('DATE_FORMAT_SPIFFYCAL', 'dd/mm/yyyy');  //Use only 'dd', 'MM' and 'yyyy' here in any order

////
// Return date in raw format
// $date should be in format dd/mm/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function zen_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 3, 2) . substr($date, 0, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 0, 2) . substr($date, 3, 2);
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
define('ICON_METATAGS_ON', 'Metaetiquetas definidas');
define('ICON_METATAGS_OFF', 'Metaetiqueta no definida');
define('TEXT_LEGEND_META_TAGS', 'Metaetiqueta definida:');
define('TEXT_INFO_META_TAGS_USAGE', '<strong>AVISO:</strong> La Web/Etiqueta de l&iacute;nea son sus definiciones para su web en el fichero meta_tags.php.');

// Global entries for the <html> tag
define('HTML_PARAMS','dir="ltr" lang="es"');

// charset for web pages and emails
define('CHARSET', 'iso-8859-1');

// header text in includes/header.php
define('HEADER_TITLE_TOP', 'Inicio de Administraci&oacute;n');
define('HEADER_TITLE_SUPPORT_SITE', 'Web se Soporte');
define('HEADER_TITLE_ONLINE_CATALOG', 'Cat&aacute;logo en l&iacute;nea');
define('HEADER_TITLE_VERSION', 'Versi&oacute;n');
define('HEADER_TITLE_LOGOFF', 'Cerrar sesi&oacute;n');
//define('HEADER_TITLE_ADMINISTRATION', 'Administraci&oacute;n');

// Define the name of your Gift Certificate as Gift Voucher, Gift Certificate, Zen Cart Dollars, etc. here for use through out the shop
  define('TEXT_GV_NAME','Vales de regalo');
  define('TEXT_GV_NAMES','Vales de regalo');
  define('TEXT_DISCOUNT_COUPON', 'Vale de descuento');

// used for redeem code, redemption code, or redemption id
  define('TEXT_GV_REDEEM','C&oacute;digo de canjeo');

// text for gender
define('MALE', 'Hombre');
define('FEMALE', 'Mujer');

// text for date of birth example
define('DOB_FORMAT_STRING', 'dd/mm/aaaa');

// configuration box text in includes/boxes/configuration.php
define('BOX_HEADING_CONFIGURATION', 'Configuraci&oacute;n');
define('BOX_CONFIGURATION_MYSTORE', 'Mi Tienda');
define('BOX_CONFIGURATION_LOGGING', 'Logging');
define('BOX_CONFIGURATION_CACHE', 'Cache');

// modules box text in includes/boxes/modules.php
define('BOX_HEADING_MODULES', 'M&oacute;dulos');
define('BOX_MODULES_PAYMENT', 'Pagos');
define('BOX_MODULES_SHIPPING', 'Env&iacute;os');
define('BOX_MODULES_ORDER_TOTAL', 'Total del pedido');
define('BOX_MODULES_PRODUCT_TYPES', 'Tipo de productos');

// categories box text in includes/boxes/catalog.php
define('BOX_HEADING_CATALOG', 'Cat&aacute;logo');
define('BOX_CATALOG_CATEGORIES_PRODUCTS', 'Categor&iacute;as/Productos');
define('BOX_CATALOG_PRODUCT_TYPES', 'Tipo de productos');
define('BOX_CATALOG_CATEGORIES_OPTIONS_NAME_MANAGER', 'Administrador de nombres de opciones');
define('BOX_CATALOG_CATEGORIES_OPTIONS_VALUES_MANAGER', 'Administrador de valores de opciones');
define('BOX_CATALOG_MANUFACTURERS', 'Fabricantes');
define('BOX_CATALOG_REVIEWS', 'Comentarios');
define('BOX_CATALOG_SPECIALS', 'Especiales');
define('BOX_CATALOG_PRODUCTS_EXPECTED', 'Productos esperados');
define('BOX_CATALOG_SALEMAKER', 'Vendedor');
define('BOX_CATALOG_PRODUCTS_PRICE_MANAGER', 'Administrador de precios de productos');

// customers box text in includes/boxes/customers.php
define('BOX_HEADING_CUSTOMERS', 'Clientes');
define('BOX_CUSTOMERS_CUSTOMERS', 'Clientes');
define('BOX_CUSTOMERS_ORDERS', 'Pedidos');
define('BOX_CUSTOMERS_GROUP_PRICING', 'Grupos de precio');
define('BOX_CUSTOMERS_PAYPAL', 'PayPal IPN');

// taxes box text in includes/boxes/taxes.php
define('BOX_HEADING_LOCATION_AND_TAXES', 'Lugares / Impuestos');
define('BOX_TAXES_COUNTRIES', 'Paises');
define('BOX_TAXES_ZONES', 'Zonas');
define('BOX_TAXES_GEO_ZONES', 'Definici&oacute;n de zonas');
define('BOX_TAXES_TAX_CLASSES', 'Tipos de impuestos');
define('BOX_TAXES_TAX_RATES', 'Porcentajes de impuestos');

// reports box text in includes/boxes/reports.php
define('BOX_HEADING_REPORTS', 'Informes');
define('BOX_REPORTS_PRODUCTS_VIEWED', 'Productos vistos');
define('BOX_REPORTS_PRODUCTS_PURCHASED', 'Productos comprados');
define('BOX_REPORTS_ORDERS_TOTAL', 'Customer Orders-Total');
define('BOX_REPORTS_PRODUCTS_LOWSTOCK', 'Productos con Stock Bajo');
define('BOX_REPORTS_CUSTOMERS_REFERRALS', 'Referencias de clientes');

// tools text in includes/boxes/tools.php
define('BOX_HEADING_TOOLS', 'Utilidades');
define('BOX_TOOLS_ADMIN', 'Configuraci&oacute;n del administrador');
define('BOX_TOOLS_TEMPLATE_SELECT', 'Selecci&oacute;n de plantillas');
define('BOX_TOOLS_BACKUP', 'Copia de Seguridad de la Base de Datos');
define('BOX_TOOLS_BANNER_MANAGER', 'Administrador de Publicidad');
define('BOX_TOOLS_CACHE', 'Control de Cach&eacute;');
define('BOX_TOOLS_DEFINE_LANGUAGE', 'Definir idiomas');
define('BOX_TOOLS_FILE_MANAGER', 'Administrador de archivos');
define('BOX_TOOLS_MAIL', 'Enviar correo electr&oacute;nico');
define('BOX_TOOLS_NEWSLETTER_MANAGER', 'Administrador de Noticias y notificaciones de productos');
define('BOX_TOOLS_SERVER_INFO', 'Informaci&oacute;n Servidor/Versi&oacute;n');
define('BOX_TOOLS_WHOS_ONLINE', 'Qui&eacute;n est&aacute; en l&iacute;nea');
define('BOX_TOOLS_STORE_MANAGER', 'Administrador de tienda');
define('BOX_TOOLS_DEVELOPERS_TOOL_KIT', 'Kit de utilidades para desarrolladores');
define('BOX_TOOLS_SQLPATCH','Instalar parches SQL');
define('BOX_TOOLS_EZPAGES','EZ-Pages');

define('BOX_HEADING_EXTRAS', 'Extras');

// define pages editor files
define('BOX_TOOLS_DEFINE_PAGES_EDITOR','Editor de p&aacute;ginas definidas');
define('BOX_TOOLS_DEFINE_MAIN_PAGE', 'P&aacute;gina principal');
define('BOX_TOOLS_DEFINE_CONTACT_US','Contactar con nosotros');
define('BOX_TOOLS_DEFINE_PRIVACY','Privacidad');
define('BOX_TOOLS_DEFINE_SHIPPINGINFO','Env&iacute;os y devoluciones');
define('BOX_TOOLS_DEFINE_CONDITIONS','Condiciones de Uso');
define('BOX_TOOLS_DEFINE_CHECKOUT_SUCCESS','Compra satisfactoria');
define('BOX_TOOLS_DEFINE_PAGE_2','P&aacute;gina 2');
define('BOX_TOOLS_DEFINE_PAGE_3','P&aacute;gina 3');
define('BOX_TOOLS_DEFINE_PAGE_4','P&aacute;gina 4');


// localizaion box text in includes/boxes/localization.php
define('BOX_HEADING_LOCALIZATION', 'Lugares');
define('BOX_LOCALIZATION_CURRENCIES', 'Monedas');
define('BOX_LOCALIZATION_LANGUAGES', 'Idiomas');
define('BOX_LOCALIZATION_ORDERS_STATUS', 'Estado de pedidoss');

// gift vouchers box text in includes/boxes/gv_admin.php
define('BOX_HEADING_GV_ADMIN', TEXT_GV_NAME . '/Vales');
define('BOX_GV_ADMIN_QUEUE',  TEXT_GV_NAMES . ' Cola');
define('BOX_GV_ADMIN_MAIL', 'Mail ' . TEXT_GV_NAME);
define('BOX_GV_ADMIN_SENT', TEXT_GV_NAMES . ' enviado');
define('BOX_COUPON_ADMIN','Vale administrativo');

define('IMAGE_RELEASE', 'Canjear ' . TEXT_GV_NAME);

// javascript messages
define('JS_ERROR', '&iexcl;Han ocurrido errores durante el procesado de su formulario!\nPor favor, haga las siguientes correcciones:\n\n');

define('JS_OPTIONS_VALUE_PRICE', '* El nuevo atributo del producto necesita un valor de precio\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* El nuevo atributo del producto necesita un prefijo de precio\n');

define('JS_PRODUCTS_NAME', '* El nuevo producto necesita un nombre\n');
define('JS_PRODUCTS_DESCRIPTION', '* El nuevo producto necesita una descripci&oacute;n\n');
define('JS_PRODUCTS_PRICE', '* El nuevo producto necesita un valor de precio\n');
define('JS_PRODUCTS_WEIGHT', '* El nuevo producto necesita un valor de peso\n');
define('JS_PRODUCTS_QUANTITY', '* El nuevo producto necesita un valor de cantidad\n');
define('JS_PRODUCTS_MODEL', '* El nuevo producto necesita un valor de modelo\n');
define('JS_PRODUCTS_IMAGE', '* El nuevo producto necesita un valor de imagen\n');

define('JS_SPECIALS_PRODUCTS_PRICE', '* Se necesita un nuevo precio para este producto \n');

define('JS_GENDER', '* El valor \'G&eacute;nero\' debe ser elegido.\n');
define('JS_FIRST_NAME', '* La entrada \'Nombre\' debe tener al menos ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caracteres.\n');
define('JS_LAST_NAME', '* Los  \'Apellidos\' deben tener al menos ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caracteres.\n');
define('JS_DOB', '* La  \'Fecha de nacimiento\' debe tener el formato: xx/xx/xxxx (d&iacute;a/mes/a&ntilde;o).\n');
define('JS_EMAIL_ADDRESS', '* La \'Direcci&oacute;n de correo electr&oacute;nico\' debe tener al menos ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caaracteres.\n');
define('JS_ADDRESS', '* La \'Direcci&oacute;n\' debe tener al menos ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caracteres.\n');
define('JS_POST_CODE', '* El \'C&oacute;digo Postal\' debe tener al menos ' . ENTRY_POSTCODE_MIN_LENGTH . ' caracteres.\n');
define('JS_CITY', '* La \'Ciudad\' debe tener al menos ' . ENTRY_CITY_MIN_LENGTH . ' caracteres.\n');
define('JS_STATE', '* El \'Estado\' debe ser seleccionado.\n');
define('JS_STATE_SELECT', '-- Seleccione Encima --');
define('JS_ZONE', '* The \'State\' entry must be selected from the list for this country.');
define('JS_COUNTRY', '* The \'Country\' value must be chosen.\n');
define('JS_TELEPHONE', '* The \'Telephone Number\' entry must have at least ' . ENTRY_TELEPHONE_MIN_LENGTH . ' characters.\n');
define('JS_PASSWORD', '* The \'Password\' and \'Confirmation\' entries must match and have at least ' . ENTRY_PASSWORD_MIN_LENGTH . ' characters.\n');

define('JS_ORDER_DOES_NOT_EXIST', '&iexcl;El pedido n&uacute;mer %s no existe!');

define('CATEGORY_PERSONAL', 'Personal');
define('CATEGORY_ADDRESS', 'Direcci&oacute;n');
define('CATEGORY_CONTACT', 'Contacto');
define('CATEGORY_COMPANY', 'Compa&ntilde;ia');
define('CATEGORY_OPTIONS', 'Opciones');

define('ENTRY_GENDER', 'G&eacute;nero:');
define('ENTRY_GENDER_ERROR', '&nbsp;<span class="errorText">requerido</span>');
define('ENTRY_FIRST_NAME', 'Nombre:');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_LAST_NAME', 'Apellidos:');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_DATE_OF_BIRTH', 'Fecha de Nacimiento:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(eg. 05/21/1970)</span>');
define('ENTRY_EMAIL_ADDRESS', 'Direcci&oacute;n de Correo electr&oacute;nico:');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' chars</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<span class="errorText">&iexcl;La direcci&oacute;n de correo no parece ser v&aacute;lida!</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<span class="errorText">&iexcl;Esta direcci&oacute;n de correo ya existe!</span>');
define('ENTRY_COMPANY', 'Nombre de la empresa:');
define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_PRICING_GROUP', 'Grupo de descuento de precio');
define('ENTRY_STREET_ADDRESS', 'Direcci&oacute;n:');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<span class="errorText">minimo ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_SUBURB', 'Localidad:');
define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_POST_CODE', 'C&oacute;digo Postal:');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<span class="errorText">minimo ' . ENTRY_POSTCODE_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_CITY', 'Ciudad:');
define('ENTRY_CITY_ERROR', '&nbsp;<span class="errorText">minimo ' . ENTRY_CITY_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_STATE', 'Estado:');
define('ENTRY_STATE_ERROR', '&nbsp;<span class="errorText">requerido</span>');
define('ENTRY_COUNTRY', 'Pa&iacute;s:');
define('ENTRY_COUNTRY_ERROR', '');
define('ENTRY_TELEPHONE_NUMBER', 'N&uacute;mero de Tel&eacute;fono:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_FAX_NUMBER', 'N&uacute;mero de Fax:');
define('ENTRY_FAX_NUMBER_ERROR', '');
define('ENTRY_NEWSLETTER', 'Noticias:');
define('ENTRY_NEWSLETTER_YES', 'Suscribirse');
define('ENTRY_NEWSLETTER_NO', 'No Suscribirse');
define('ENTRY_NEWSLETTER_ERROR', '');

// images
//define('IMAGE_ANI_SEND_EMAIL', 'Enviando correo electr&oacute;nico');
define('IMAGE_BACK', 'Volver');
define('IMAGE_BACKUP', 'Copia de Seguridad');
define('IMAGE_CANCEL', 'Cancelar');
define('IMAGE_CONFIRM', 'Confirmar');
define('IMAGE_COPY', 'Copiar');
define('IMAGE_COPY_TO', 'Copiar a ');
define('IMAGE_DETAILS', 'Detalles');
define('IMAGE_DELETE', 'Eliminar');
define('IMAGE_EDIT', 'Editar');
define('IMAGE_EMAIL', 'Correo electr&oacute;nico');
define('IMAGE_FILE_MANAGER', 'Administrador de archivos');
define('IMAGE_ICON_STATUS_GREEN', 'Activo');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', 'Poner activo');
define('IMAGE_ICON_STATUS_RED', 'Inactivo');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'Poner inactivo');
define('IMAGE_ICON_STATUS_RED_EZPAGES', 'Error -- demasidos tipos de URL/contenidos introducidos');
define('IMAGE_ICON_STATUS_RED_ERROR', 'Error');
define('IMAGE_ICON_INFO', 'Informaci&oacute;n');
define('IMAGE_INSERT', 'Insertar');
define('IMAGE_LOCK', 'Bloquear');
define('IMAGE_MODULE_INSTALL', 'Instalar m&oacute;dulo');
define('IMAGE_MODULE_REMOVE', 'Eliminar m&oacute;dulo');
define('IMAGE_MOVE', 'Mover');
define('IMAGE_NEW_BANNER', 'Nuevo Banner');
define('IMAGE_NEW_CATEGORY', 'Nueva categor&iacute;a');
define('IMAGE_NEW_COUNTRY', 'Nuevo Pa&iacute;s');
define('IMAGE_NEW_CURRENCY', 'Nueva moneda');
define('IMAGE_NEW_FILE', 'Nuevo fichero');
define('IMAGE_NEW_FOLDER', 'Nuevo directorio');
define('IMAGE_NEW_LANGUAGE', 'Nuevo Idioma');
define('IMAGE_NEW_NEWSLETTER', 'Nueva Noticia');
define('IMAGE_NEW_PRODUCT', 'Nuevo Producto');
define('IMAGE_NEW_SALE', 'Nueva Venta');
define('IMAGE_NEW_TAX_CLASS', 'Nueva Clase de impuesto');
define('IMAGE_NEW_TAX_RATE', 'Nuevo porcentaje de impuesto');
define('IMAGE_NEW_TAX_ZONE', 'Nueva Zona de Impuestos');
define('IMAGE_NEW_ZONE', 'Nueva Zona');
define('IMAGE_OPTION_NAMES', 'Administrador de nombres de opciones');
define('IMAGE_OPTION_VALUES', 'Administrador de valores de opciones');
define('IMAGE_ORDERS', 'Pedidos');
define('IMAGE_ORDERS_INVOICE', 'FacturaInvoice');
define('IMAGE_ORDERS_PACKINGSLIP', 'Hoja de embalaje');
define('IMAGE_PREVIEW', 'Previsualizar');
define('IMAGE_RESTORE', 'Restaurar');
define('IMAGE_RESET', 'Reiniciar');
define('IMAGE_SAVE', 'Guardar');
define('IMAGE_SEARCH', 'Buscar');
define('IMAGE_SELECT', 'Seleccione');
define('IMAGE_SEND', 'Enviar');
define('IMAGE_SEND_EMAIL', 'Enviar correo electr&oacute;nico');
define('IMAGE_UNLOCK', 'Desbloquear');
define('IMAGE_UPDATE', 'Actualizar');
define('IMAGE_UPDATE_CURRENCIES', 'Actualizar valor de cambio');
define('IMAGE_UPLOAD', 'Subir');
define('IMAGE_TAX_RATES','Tasa de impuesto');
define('IMAGE_DEFINE_ZONES','Definir zonas');
define('IMAGE_PRODUCTS_PRICE_MANAGER', 'Administrador de precios de producto');
define('IMAGE_UPDATE_PRICE_CHANGES', 'Actualizar cambios de precio');
define('IMAGE_ADD_BLANK_DISCOUNTS','A&ntilde;adir ' . DISCOUNT_QTY_ADD . ' descuento en blanco de cantidad');
define('IMAGE_CHECK_VERSION', 'Comprobar actualizaciones para Zen Cart');
define('IMAGE_PRODUCTS_TO_CATEGORIES', 'Administrador de enlaces de m&uacute;ltiples categor&iacute;as');

define('IMAGE_ICON_STATUS_ON', 'Estado - Activado');
define('IMAGE_ICON_STATUS_OFF', 'Estado - Desactivado');
define('IMAGE_ICON_LINKED', 'Este producto est&aacute; enlazado');

define('IMAGE_REMOVE_SPECIAL','Eliminar informaci&oacute;n de precio especial');
define('IMAGE_REMOVE_FEATURED','Eliminar informaci&oacute;n de producto destacado');
define('IMAGE_INSTALL_SPECIAL', 'A&ntilde;adir informaci&oacute;n de precio especial');
define('IMAGE_INSTALL_FEATURED', 'A&ntilde;adir informaci&oacute;n sobre producto destacado');

define('ICON_PRODUCTS_PRICE_MANAGER','Administrador de precio de productos');
define('ICON_COPY_TO', 'Copiar a');
define('ICON_CROSS', 'Falso');
define('ICON_CURRENT_FOLDER', 'Directorio actual');
define('ICON_DELETE', 'Eliminar');
define('ICON_EDIT', 'Editar');
define('ICON_ERROR', 'Error');
define('ICON_FILE', 'Archivo');
define('ICON_FILE_DOWNLOAD', 'Descargar');
define('ICON_FOLDER', 'Directorio');
//define('ICON_LOCKED', 'Bloqueado');
define('ICON_MOVE', 'Mover');
define('ICON_PREVIOUS_LEVEL', 'Nivel anterior');
define('ICON_PREVIEW', 'Previsualizar');
define('ICON_RESET', 'Reiniciar');
define('ICON_STATISTICS', 'Estad&iacute;sticas');
define('ICON_SUCCESS', 'Exitoso');
define('ICON_TICK', 'Verdadero');
//define('ICON_UNLOCKED', 'Desbloqueado');
define('ICON_WARNING', 'Advertencia');

// constants for use in zen_prev_next_display function
define('TEXT_RESULT_PAGE', 'P&aacute;gina %s de %d');
define('TEXT_DISPLAY_NUMBER_OF_ADMINS', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> administradores)');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> banners)');
define('TEXT_DISPLAY_NUMBER_OF_CATEGORIES', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> categor&iacute;as)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> paises)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> clientes)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> monedas)');
define('TEXT_DISPLAY_NUMBER_OF_FEATURED', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> productos destacados)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> idiomas)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> fabricantes)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> noticias)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> pedidos)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> estados de pedido)');
define('TEXT_DISPLAY_NUMBER_OF_PRICING_GROUPS', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> grupos de precio)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> productos)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCT_TYPES', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> tipos de producto)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> productos esperados)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> productos comentados)');
define('TEXT_DISPLAY_NUMBER_OF_SALES', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> ventas)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> productos especiales)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> tax classes)');
define('TEXT_DISPLAY_NUMBER_OF_TEMPLATES', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> asociaciones de plantilla)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> zonas de impuestos)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> tasas de impuestos)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> zonas)');

define('PREVNEXT_BUTTON_PREV', '&lt;&lt;');
define('PREVNEXT_BUTTON_NEXT', '&gt;&gt;');


define('TEXT_DEFAULT', 'por defecto');
define('TEXT_SET_DEFAULT', 'Establecer por defecto');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* Requirido</span>');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'Error: No hay actualmente establecidas monedas. Por favor establezca una en: Utilidades administrativas->Lugares->Monedas');

define('TEXT_CACHE_CATEGORIES', 'Bloque de categor&iacute;as');
define('TEXT_CACHE_MANUFACTURERS', 'Bloque de Fabricantes');
define('TEXT_CACHE_ALSO_PURCHASED', 'M&oacute;dulo tambi&eacute;n compraron');

define('TEXT_NONE', '--ninguno--');
define('TEXT_TOP', 'cima');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Error: El destino no existe %s');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Error: Destino no escribible %s');
define('ERROR_FILE_NOT_SAVED', 'Error: La carga del fichero no fue guardada.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Error: Tipo de fichero de subida no permitido %s');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Exitoso: Subida del fichero guardada satisfactoriamente %s');
define('WARNING_NO_FILE_UPLOADED', 'Advertencia: Fichero no subido.');
define('WARNING_FILE_UPLOADS_DISABLED', 'Advertencia: Las subidas de ficheros est&aacute;n deshabilitada en el archivo de configuraci&oacute;n php.ini.');
define('ERROR_ADMIN_SECURITY_WARNING', 'Advertencia: Su inicio de sesi&oacute;n administrativo no es seguro... tampoco ha cambiado la configuraci&oacute;n por defecto<br />El/Los usuario(s) deben ser cambiados lo antes posible por motivos de seguridad de su tienda<br />Vaya a Utilidades->Configuraci&oacute;n administrativa para cambiar el nombre de usuario y contrase&ntilde;as.<br />Para seguridad adicional por favor lea los /docs');
define('WARNING_DATABASE_VERSION_OUT_OF_DATE','Su base de datos parece necesitar parchearse a un nivel superior. Vea Utilidades->Informaci&oacute;n del servidor para comprobar los niveles del parche.');
define('WARN_DATABASE_VERSION_PROBLEM','verdadero'); //set to false to turn off warnings about database version mismatches
define('WARNING_ADMIN_DOWN_FOR_MAINTENANCE', '<strong>ADVERTENCIA:</strong> Esta Web est&aacute; cerrada actualmente por mantenimiento ...<br />AVISO: No puede testear la mayor&iacute;a de los m&oacute;dulos de pago y env&iacute;o en modo de mantenimiento');
define('WARNING_BACKUP_CFG_FILES_TO_DELETE', 'ADVERTENCIA: Estos ficheros deben ser eliminados para evitar vulnerabilidades de seguridad: ');
define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Advertencia: El archivo de instalaci&oacute;n existe en: ' . DIR_FS_CATALOG . 'zc_install. Por motivos de seguridad, por favor, elimine este directorio.');
define('WARNING_CONFIG_FILE_WRITEABLE', 'Advertencia: Si archivo de configuraci&oacute;n: %sincludes/configure.php. Es un riesgo potencial de seguridad - por favor establezca los permisos correctos para este fichero (solo-lectura, CHMOD 644 o 444 son los t&iacute;picos).  <a href="http://tutorials.zen-cart.com/index.php?article=90" target="_blank">Vea este FAQ</a>');
define('WARNING_COULD_NOT_LOCATE_LANG_FILE', 'ADVERTENCIA: No se puede localizar los arhivos de idioma: ');
define('ERROR_MODULE_REMOVAL_PROHIBITED', 'ERROR: La eliminaci&oacute;n del m&oacute;dulo est&aacute; prohibida: ');

define('_JANUARY', 'Enero');
define('_FEBRUARY', 'Febrero');
define('_MARCH', 'Marzo');
define('_APRIL', 'Abril');
define('_MAY', 'Mayo');
define('_JUNE', 'Junio');
define('_JULY', 'Julio');
define('_AUGUST', 'Augosto');
define('_SEPTEMBER', 'Septiembre');
define('_OCTOBER', 'Octubre');
define('_NOVEMBER', 'Noviembre');
define('_DECEMBER', 'Deciembre');

define('TEXT_DISPLAY_NUMBER_OF_GIFT_VOUCHERS', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> vales regalo)');
define('TEXT_DISPLAY_NUMBER_OF_COUPONS', 'Mostrando <b>%d</b> de <b>%d</b> (de <b>%d</b> vales)');

define('TEXT_VALID_PRODUCTS_LIST', 'Lista de producto');
define('TEXT_VALID_PRODUCTS_ID', 'ID de productos');
define('TEXT_VALID_PRODUCTS_NAME', 'Nombre del producto');
define('TEXT_VALID_PRODUCTS_MODEL', 'Modelo del producto');

define('TEXT_VALID_CATEGORIES_LIST', 'Lista de categor&iacute;as');
define('TEXT_VALID_CATEGORIES_ID', 'ID de Categor&iacute;a');
define('TEXT_VALID_CATEGORIES_NAME', 'Nombre de la categor&iacute;a');

define('DEFINE_LANGUAGE','Definir Idioma:');

define('BOX_ENTRY_COUNTER_DATE','El Contador de clicks empez&oacute;:');
define('BOX_ENTRY_COUNTER','Contador de clicks:');

// not installed
define('NOT_INSTALLED_TEXT','No instalado');

// Product Options Values Sort Order - option_values.php
  define('BOX_CATALOG_PRODUCT_OPTIONS_VALUES','Ordenar valores de opciones ');

  define('TEXT_UPDATE_SORT_ORDERS_OPTIONS','<strong>Actualizar orden de atributos de los valores de opci&oacute;n por defecto</strong> ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_UPDATES','<strong>Actualizar todos los productos\' Attribute Sort Orders</strong><br />to match Option Value Default Sort Orders:<br />');

// Product Options Name Sort Order - option_values.php
  define('BOX_CATALOG_PRODUCT_OPTIONS_NAME','Ordenador de nombre de opciones');

// Attributes only
  define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_CONTROLLER','Controlador de atributos');

// generic model
  define('TEXT_MODEL','Modelo:');

// column controller
  define('BOX_TOOLS_LAYOUT_CONTROLLER','Controlador de disposici&oacute;n de bloques');

// check GV release queue and alert store owner
  define('SHOW_GV_QUEUE',verdadero);
  define('TEXT_SHOW_GV_QUEUE','%s esperando aprobaci&oacute;n ');
  define('IMAGE_GIFT_QUEUE', TEXT_GV_NAME . ' Cola');
  define('IMAGE_ORDER','Orden');

  define('BOX_TOOLS_EMAIL_WELCOME','Correo electr&oacute;nico de bienvenida');

  define('IMAGE_DISPLAY','Visualizar');
  define('IMAGE_UPDATE_SORT','Actualizar orden');
  define('IMAGE_EDIT_PRODUCT','Editar Producto');
  define('IMAGE_EDIT_ATTRIBUTES','Editar atributos');
  define('TEXT_NEW_PRODUCT', 'Producto en Categor&iacute;a: &quot;%s&quot;');
  define('IMAGE_OPTIONS_VALUES','Nombre de Opciones y Valores de Opciones');
  define('TEXT_PRODUCTS_PRICE_MANAGER','ADMINISTRADOR DE PRECIOS DE PRODUCTOS');
  define('TEXT_PRODUCT_EDIT','EDITAR PRODUCTO');
  define('TEXT_ATTRIBUTE_EDIT','EDITAR ATRIBUTOS');
  define('TEXT_PRODUCT_DETAILS','VER DETALLES');

// sale maker
  define('DEDUCTION_TYPE_DROPDOWN_0', 'Deducir cantidad');
  define('DEDUCTION_TYPE_DROPDOWN_1', 'Porcentaje');
  define('DEDUCTION_TYPE_DROPDOWN_2', 'Nuevo precio');

// Min and Units
  define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','Min:');
  define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING','Unidades:');
  define('PRODUCTS_QUANTITY_IN_CART_LISTING','En cesta:');
  define('PRODUCTS_QUANTITY_ADD_ADDITIONAL_LISTING','A&ntilde;adir adicionales:');

  define('TEXT_PRODUCTS_MIX_OFF','*Opciones No mezcladas');
  define('TEXT_PRODUCTS_MIX_ON','*Opciones mezcladas');

// search filters
  define('TEXT_INFO_SEARCH_DETAIL_FILTER','Filtro de b&uacute;squeda: ');
  define('HEADING_TITLE_SEARCH_DETAIL','Buscar: ');
  define('HEADING_TITLE_SEARCH_DETAIL_REPORTS', 'Buscar producto(s) - Delimitados por comas');
  define('HEADING_TITLE_SEARCH_DETAIL_REPORTS_NAME_MODEL', 'Buscar Nombre/Modelo de productos');

  define('PREV_NEXT_PRODUCT', 'Productos: ');
  define('TEXT_CATEGORIES_STATUS_INFO_OFF', '<span class="alert">*La categor&iacute;a est&aacute; deshabilitada</span>');
  define('TEXT_PRODUCTS_STATUS_INFO_OFF', '<span class="alert">*El Producto est&aacute;a Deshabiltiado</span>');

// admin demo
  define('ADMIN_DEMO_ACTIVE','La demostraci&oacute;n administrativa est&aacute; activada. Algunas configuraciones est&aacute;n deshabilitadas');
  define('ADMIN_DEMO_ACTIVE_EXCLUSION','Admin Demo is currently Active. Some settings are will be disabled - <strong>NOTE: Admin Override Enabled</strong>');
  define('ERROR_ADMIN_DEMO','La Demo Administrativa est&aacute; Activa ... la(s) caracter&iacute;stica(s) que est&aacute; intentando acceder han sido deshabilitadas');

// Version Check notices
  define('TEXT_VERSION_CHECK_NEW_VER','Nueva versi&oacute;n Disponible v');
  define('TEXT_VERSION_CHECK_NEW_PATCH','Nuevo PARCHE Disponible: v');
  define('TEXT_VERSION_CHECK_PATCH','parche');
  define('TEXT_VERSION_CHECK_DOWNLOAD','Descargar aqu&iacute;');
  define('TEXT_VERSION_CHECK_CURRENT','Su versi&oacute;n de Zen Cart&trade; parece ser la m&aacute;s reciente.');

// downloads manager
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_DOWNLOADS_MANAGER', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> descargas)');
define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_DOWNLOADS_MANAGER', 'Administrador de Descargas');

define('BOX_CATALOG_FEATURED','Productos destacados');

define('ERROR_NOTHING_SELECTED', 'No se ha seleccionado nada ... No hay cambios que se hayan hecho');
define('TEXT_STATUS_WARNING','<strong>AVISO:</strong> el estado es auto activado/desactivadod cuando las fechas sean seleccionadas');

define('TEXT_LEGEND_LINKED', 'Producto enlazado');
define('TEXT_MASTER_CATEGORIES_ID','Categor&iacue;a de Producto principal:');
define('TEXT_LEGEND', 'LEYENDA: ');
define('TEXT_LEGEND_STATUS_OFF', 'Estado apagado ');
define('TEXT_LEGEND_STATUS_ON', 'Estado encendido ');

define('TEXT_INFO_MASTER_CATEGORIES_ID', '<strong>AVISO: La categor&iacute;a principal es usada para prop&oacute;sitos de precio donde<br />la categor&iacute;a de productos afecta a los precios en los productos enlazados, ejemplo: Ventas</strong>');
define('TEXT_YES', 'S&iacute;');
define('TEXT_NO', 'No');

// shipping error messages
define('ERROR_SHIPPING_CONFIGURATION', '<strong>&iexcl;Errores en la configuraci&oacute;n de Envios!</strong>');
define('ERROR_SHIPPING_ORIGIN_ZIP', '<strong>Advertencia:</strong> Su C&oacute;digo Postal no est&aacute; definido. Vea la Configuraci&oacute;n | Env&iacute;os/Paqueter&iacute;a para configurarlo.');
define('ERROR_ORDER_WEIGHT_ZERO_STATUS', '<strong>Advertencia:</strong> peso 0 est&aacute; configurado para env&iacute;os gratu&iacute;tos y El m&oacute;dulo de env&iacute;o gratu&iacute;to no est&aacute;a activado');
define('ERROR_USPS_STATUS', '<strong>Advertencia:</strong> El m&oacute;dulo de Env&iacute;o USPS est&aacute; todav&iacute;a sin nombre de usuario, o est&aacute; en modo TEST para la PRODUCTION y no funcionar&aacute;a.<br />Si no puede recuperar las tarifas de env&iacute;o de UPSS, contacte con UPS para activar su cuenta de Utilidades Web para su servidor en producci&oacute;n. 1-800-344-7779 o icustomercare@usps.com');

define('ERROR_SHIPPING_MODULES_NOT_DEFINED', 'AVISO: Usted no tiene m&oacute;dulos de envio activados. Por favor vaya a M&oacute;dulos>Env&iacute;oos para configurarlo.');
define('ERROR_PAYMENT_MODULES_NOT_DEFINED', 'AVISO: Usted no tiene el m&oacute;dulo de pagos activado. Por favor vaya a Modulos->Pagos para configurarlo.');

// text pricing
define('TEXT_CHARGES_WORD','Cargo calculado:');
define('TEXT_PER_WORD','<br />Precio por palabra: ');
define('TEXT_WORDS_FREE',' Palabra(s) gratis ');
define('TEXT_CHARGES_LETTERS','Cargo Calculado:');
define('TEXT_PER_LETTER','<br />Precio por letra ');
define('TEXT_LETTERS_FREE',' Letra(s) gratis ');
define('TEXT_ONETIME_CHARGES','*cargado una vez = ');
define('TEXT_ONETIME_CHARGES_EMAIL',"\t" . '*cargado una vez = ');
define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', 'Opci&oacute;n de descuento por cantidad');
define('TABLE_ATTRIBUTES_QTY_PRICE_QTY','CANTIDAD');
define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE','PRECIO');
define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', 'Opci&oacute;n Cargo por una vez de Descuento por cantidad');
define('TEXT_CATEGORIES_PRODUCTS', 'Seleccione una Categor&iacute;a con Productos ... O muevalos entre los Productos');
define('TEXT_PRODUCT_TO_VIEW', 'Seleccione un producto para verlo y presione mostrar ...');

define('TEXT_INFO_SET_MASTER_CATEGORIES_ID', 'ID de Categor&iacute;a principal no v&aacute;lido');
define('TEXT_INFO_ID', ' ID# ');
define('TEXT_INFO_SET_MASTER_CATEGORIES_ID_WARNING', '<strong>ADVERTENCIA:</strong> &iexcl;Este producto est&aacute; enlazado a m&uacute;ltiples categor&iacute;as pero no se ha seleccionado una categor&iacute;a principal!');

define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT', 'Producto para consultar precio');
define('PRODUCTS_PRICE_IS_FREE_TEXT','El productos es gratu&iacute;to');

define('TEXT_PRODUCT_WEIGHT_UNIT','kg');

// min, max, units
define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING', 'Max:');

// Discount Savings
  define('PRODUCT_PRICE_DISCOUNT_PREFIX','Ahorre:&nbsp;');
  define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE','% descuento');
  define('PRODUCT_PRICE_DISCOUNT_AMOUNT','&nbsp;descuento');
// Sale Maker Sale Price
  define('PRODUCT_PRICE_SALE','Venta:&nbsp;');

// Rich Text / HTML resources
define('TEXT_HTML_EDITOR_NOT_DEFINED','Si no tiene un editor HTML definido o tiene JavaScript desactivado, usted puede introducir c&oacute;digo HTML aqu&iacute; manualmente.');
define('TEXT_WARNING_HTML_DISABLED','<span class = "main">Aviso: Usted est&aacute; usando correos electr&oacute;nicos de SOLO TEXTO. Si le interesara enviar HTML necesita activar "usar MIME HTML" bajo las opciones del correo electr&oacute;nico</span>');
define('TEXT_WARNING_CANT_DISPLAY_HTML','<span class = "main">Aviso: Usted est&aacute; usando correos electr&oacute;nicos de SOLO TEXTO. Si le interesara enviar HTML necesita activar "usar MIME HTML" bajo las opciones del correo electr&oacute;nico</span>');
define('TEXT_EMAIL_CLIENT_CANT_DISPLAY_HTML',"Usted est&aacute; viendo este texto porque nosotros le envianos un correo electr&oacute;nico en formato HTML pero el cliente de correo electr&oacute;nico no puede mostrar mensajes HTML.");
define('ENTRY_EMAIL_PREFERENCE','Preferencias de Formato de Correo electr&oacute;nico:');
define('ENTRY_EMAIL_FORMAT_COMMENTS','Elija  "ninguno" o "optar dejarlo" desactivar&aacute; TODO el correo, incuyendo los detalles de los pedidos');
define('ENTRY_EMAIL_HTML_DISPLAY','HTML');
define('ENTRY_EMAIL_TEXT_DISPLAY','Solo-Texto');
define('ENTRY_EMAIL_NONE_DISPLAY','Nunca');
define('ENTRY_EMAIL_OPTOUT_DISPLAY','Opt&oacute; dejar las Noticias');
define('ENTRY_NOTHING_TO_SEND','No ha introducido un contenido para su mensaje');
 define('EMAIL_SEND_FAILED','ERROR: Fallo al enviar un correo electr&oacute;nico a: "%s" <%s> con asunto: "%s"');

  define('EDITOR_NONE', 'Texto Plano');
  define('TEXT_EDITOR_INFO', 'Editor de Texto');
  define('ERROR_EDITORS_FOLDER_NOT_FOUND', 'Usted tiene un editor seleccionado en \'Mi Tienda\' pero no puede ser localizado en el directorio \'/editors/\'. Por favor deshabilite su selecci&oacute;n o mueva los ficheros de su editor al directorio \''.DIR_WS_CATALOG.'editors/\'');
  define('TEXT_CATEGORIES_PRODUCTS_SORT_ORDER_INFO', 'Orden de Muestreo de Catogor&iacute;as/Producto: ');
  define('TEXT_SORT_PRODUCTS_SORT_ORDER_PRODUCTS_NAME', 'Orden de los productos, Nombre de los productos');
  define('TEXT_SORT_PRODUCTS_NAME', 'Nombre de los productos');
  define('TEXT_SORT_PRODUCTS_MODEL', 'Modelo de los productos');
  define('TEXT_SORT_PRODUCTS_QUANTITY', 'Cantidad de Productos+, Nombre de los productos');
  define('TEXT_SORT_PRODUCTS_QUANTITY_DESC', 'Products Qty-, Nombre de los productos');
  define('TEXT_SORT_PRODUCTS_PRICE', 'Precio de los productos+, Nombre de los productos');
  define('TEXT_SORT_PRODUCTS_PRICE_DESC', 'Precio de los productos-, Nombre de los productos');
  define('TEXT_SORT_CATEGORIES_SORT_ORDER_PRODUCTS_NAME', 'Orden de las categor&iacute;as, Nombre de las Categor&iacute;as');
  define('TEXT_SORT_CATEGORIES_NAME', 'Nombre de categor&iacute;as');



  define('TABLE_HEADING_YES','S&iacute;');
  define('TABLE_HEADING_NO','No');
  define('TEXT_PRODUCTS_IMAGE_MANUAL', '<br /><strong>O, seleccione una imagen existente del servidor, nombre de archivo:</strong>');
  define('TEXT_IMAGES_OVERWRITE', '<br /><strong>&iquest;Sobreescribir la imagen existente del servidor?</strong>');
  define('TEXT_IMAGE_OVERWRITE_WARNING','ADVERTENCIA: El nombre de archivo ha sido actualizado pero no sobreescrito ');
  define('TEXT_IMAGES_DELETE', '<strong>&iquest;Eliminar Imagen?</strong> AVISO: Elimina la imagen del producto, la Imagen no es eliminada del servidor:');
  define('TEXT_IMAGE_CURRENT', 'Nombre de la Imagen: ');

  define('ERROR_DEFINE_OPTION_NAMES', 'Advertencia: No hay Nombres de opciones que hayan sido definidos');
  define('ERROR_DEFINE_OPTION_VALUES', 'Advertencia: No hay Valores de Opciones que hayan sido definidos');
  define('ERROR_DEFINE_PRODUCTS', 'Advertencia: No hay productos que hayan sido definidos');
  define('ERROR_DEFINE_PRODUCTS_MASTER_CATEGORIES_ID', 'Advertencia: No hay ID de categor&iacute;as principales que se hayan establecido para este producto');

  define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_ON','A&ntile;adir incluir Subcategor&iacute;as');
  define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_OFF','A&ntilde;adir sin Subcategor&iacute;as');

  define('BUTTON_PREVIOUS_ALT','Producto Anterior');
  define('BUTTON_NEXT_ALT','Siguiente Producto');

  define('BUTTON_PRODUCTS_TO_CATEGORIES', 'Administrador de enlaces de categor&iacute;as m&uacute;ltiples');
  define('BUTTON_PRODUCTS_TO_CATEGORIES_ALT', 'Copiar producto a m&uacute;ltiples categor&iacute;as');

  define('TEXT_INFO_OPTION_NAMES_VALUES_COPIER_STATUS', 'All Global Copy, Add and Delete Features Status is currently OFF');
  define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_ON', 'Display Global Features - ON');
  define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_OFF', 'Display Global Features - OFF');

// moved from categories and all product type language files
  define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', 'Error: No se pueden enlazar productos en la misma categor&iacute;a.');
  define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Error: El directorio de im&aacute;genes del cat&aacute;logo no es escribible: ' . DIR_FS_CATALOG_IMAGES);
  define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Error: El directorio de im&aacute;genes no existe: ' . DIR_FS_CATALOG_IMAGES);
  define('ERROR_CANNOT_MOVE_CATEGORY_TO_PARENT', 'Error: La categor&iacute;a no puede ser movida a una categor&iacute;a.');
  define('ERROR_CANNOT_MOVE_PRODUCT_TO_CATEGORY_SELF', 'Error: El producto no puede ser movido a la misma categor&iuacte;a o a una categor&iacute;a donde ya existe.');
  define('ERROR_CATEGORY_HAS_PRODUCTS', 'Error: &iexcl;Esta categor&iacute;a tiene productos!<br /><br />Esto se podr&iacute;a hacer temporalmente mientras construye sus categor&iacute;as ... En las categor&iacute;as se cuelgan otros Productos o Categor&iacute;as, &iexcl;pero nunca ambos!');
  define('SUCCESS_CATEGORY_MOVED', '&iexcl;Exitoso! La categor&iacute;a ha sido movida satisfactoriamente ...');
  define('ERROR_CANNOT_MOVE_CATEGORY_TO_CATEGORY_SELF', 'Error: &iexcl; No se puede mover la categor&iacute;a a la misma categor&iacute;a! ID#');

// EZ-PAGES Alerts
  define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', 'ADVERTENCIA: EZ-PAGES HEADER - Solo Para IP Administrativa');
  define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', 'ADVERTENCIA: EZ-PAGES FOOTER - Solo Para IP Administrativa');
  define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', 'ADVERTENCIA: EZ-PAGES SIDEBOX - Solo Para IP Administrativa');

// moved from product types
// warnings on Virtual and Always Free Shipping
  define('TEXT_VIRTUAL_PREVIEW','Advertencia: Este producto est&aacute; marcado - Env&iacute;o gratu&iacute;ton salt&aacute;ndose la direcci&oacute;n de env&iacute;o<br />El env&iacute;o no ser&aacute; solicitado cuando todos los productos siendo en el pedido, productos virtuales');
  define('TEXT_VIRTUAL_EDIT','Advertencia: Este producto est&aacute; marcado - Free Shipping and Skips Shipping Address<br />El env&iacute;o no ser&aacute; solicitado cuando todos los productos siendo, en el pedido, Productos Virtuales');
  define('TEXT_FREE_SHIPPING_PREVIEW','Advertencia: Este producto est&aacute; marcado - Free Shipping, Shipping Address Required<br />El m&oacute;dulo de env&iacute;o es requerido cuando todos los productos en el pedido son simbrepo productos con envio gratu&iacute;to');
  define('TEXT_FREE_SHIPPING_EDIT','Advertencia: Yes makes the product - Free Shipping, Shipping Address Required<br />Free Shipping Module is required when all products in the order are Always Free Shipping Products');

// admin activity log warnings
  define('WARNING_ADMIN_ACTIVITY_LOG_DATE', 'ADVERTENCIA: El registro de actividad administrativa tiene registros de m&aacute;s de 2 meses y debe ser limpiado ... ');
  define('WARNING_ADMIN_ACTIVITY_LOG_RECORDS', 'ADVERTENCIA: El registro de actividad del administrador tiene m&aacute;s de 50,000 registros y debe ser limpiado ... ');
  define('RESET_ADMIN_ACTIVITY_LOG', 'Ir al administrador de la tienda para reiniciar el registro de actividad del administrador');

  define('CATEGORY_HAS_SUBCATEGORIES', 'AVISO: Esta categor&iacute;a tiene subcategor&iacute;as<br />El producto no puede ser a&ntilde;anadido');

  define('WARNING_WELCOME_DISCOUNT_COUPON_EXPIRES_IN', '&iexcl;ADVERTENCIA! Bienvenido al mensaje del vale de descuento, expira en %s d&iacute;as');

///////////////////////////////////////////////////////////
// include additional files:
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . FILENAME_EMAIL_EXTRAS);
  include(zen_get_file_directory(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/', FILENAME_OTHER_IMAGES_NAMES, 'falso'));


?>