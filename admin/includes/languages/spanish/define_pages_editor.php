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
// $Id: define_pages_editor.php,v 1.2 2006/01/14 13:32:20 damage_in Exp $
//

define('HEADING_TITLE', 'Definir editor de p�ginas para: ');
define('NAVBAR_TITLE', 'Definir editor de p�ginas');

define('TEXT_INFO_EDIT_PAGE', 'Seleccione una p�gina para editar:');

define('TEXT_INFO_MAIN_PAGE', 'P�gina principal');

define('TEXT_INFO_SHIPPINGINFO', 'Env�os y devoluciones.');
define('TEXT_INFO_PRIVACY', 'Privacidad');
define('TEXT_INFO_CONDITIONS', 'Condiciones de uso');
define('TEXT_INFO_CONTACT_US', 'Contacte con nosotros');
define('TEXT_INFO_CHECKOUT_SUCCESS', 'Orden con �xito');

define('TEXT_INFO_PAGE_2', 'P�gina 2');
define('TEXT_INFO_PAGE_3', 'P�gina 3');
define('TEXT_INFO_PAGE_4', 'P�gina 4');

define('TEXT_FILE_DOES_NOT_EXIST', 'No existe el archivo: %s');

define('ERROR_FILE_NOT_WRITEABLE', 'Error: No puede escribirse este archivo. Por favor, seleccione el permiso de usuario correcto en: %s');

define('TEXT_INFO_SELECT_FILE', 'Seleccione un archivo a editar ...');
define('TEXT_INFO_EDITING', 'Editando archivo:');

define('TEXT_INFO_CAUTION','Nota: Debe editar siempre los archivos localizados en el directorio de su plantilla actual. Ejemplo: /languages/' . $_SESSION['language'] . '/html_includes/' . $template_dir . '<br />Aseg�rese de hacer copias de seguridad antes de modificar sus archivos.');
?>