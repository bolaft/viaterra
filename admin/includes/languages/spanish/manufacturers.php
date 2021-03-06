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
//  $Id: manufacturers.php,v 1.2 2006/01/17 20:00:25 gorkau Exp $
//

define('HEADING_TITLE', 'Fabricantes');

define('TABLE_HEADING_MANUFACTURERS', 'Fabricantes');
define('TABLE_HEADING_ACTION', 'Acci�n');

define('TEXT_HEADING_NEW_MANUFACTURER', 'Nuevo fabricante');
define('TEXT_HEADING_EDIT_MANUFACTURER', 'Editar fabricante');
define('TEXT_HEADING_DELETE_MANUFACTURER', 'Eliminar fabricante');

define('TEXT_MANUFACTURERS', 'Fabricantes:');
define('TEXT_DATE_ADDED', 'A�adido el:');
define('TEXT_LAST_MODIFIED', '�ltima modificaci�n:');
define('TEXT_PRODUCTS', 'Productos:');
define('TEXT_PRODUCTS_IMAGE_DIR', 'Subir al directorio:');
define('TEXT_IMAGE_NONEXISTENT', 'LA IMAGEN NO EXISTE');

define('TEXT_NEW_INTRO', 'Por favor, complete la siguiente informaci�n para el nuevo fabricante');
define('TEXT_EDIT_INTRO', 'Por favor, haga los cambios necesarios');

define('TEXT_MANUFACTURERS_NAME', 'Nombre de los fabricantes:');
define('TEXT_MANUFACTURERS_IMAGE', 'Imagen de los fabricantes:');
define('TEXT_MANUFACTURERS_URL', 'URLs de los fabricantes:');

define('TEXT_DELETE_INTRO', '�Seguro que desea eliminar este fabricante?');
define('TEXT_DELETE_IMAGE', '�Eliminar imagen de los fabricantes?');
define('TEXT_DELETE_PRODUCTS', '�Eliminar productos de este fabricante? (incluyendo los comentarios de productos, las ofertas, los productos por venir)');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>ADVERTENCIA:</b> �Hay %s productos que siguen vinculados a este fabricante!');

define('ERROR_DIRECTORY_NOT_WRITEABLE', 'Error: No puedo escribir en este directorio. Por favor, configure los permisos de usuario correctos en: %s');
define('ERROR_DIRECTORY_DOES_NOT_EXIST', 'Error: El directorio no existe: %s');
?>
