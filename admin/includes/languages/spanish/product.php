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
//  $Id: product.php,v 1.1 2005/12/22 22:31:18 gorkau Exp $
//

define('HEADING_TITLE', 'Categor�as / Productos');

define('HEADING_TITLE_GOTO', 'Ir a:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', 'Categor�as / Productos');
define('TABLE_HEADING_CATEGORIES_SORT_ORDER', 'Ordenar');
define('TABLE_HEADING_PRICE', 'Precio/Oferta/Rebajas');
define('TABLE_HEADING_QUANTITY', 'Cantidad');

define('TABLE_HEADING_ACTION', 'Acci�n');
define('TABLE_HEADING_STATUS', 'Estado');

define('TEXT_CATEGORIES', 'Categor�as:');
define('TEXT_SUBCATEGORIES', 'Subcategor�as:');
define('TEXT_PRODUCTS', 'Productos:');
define('TEXT_PRODUCTS_PRICE_INFO', 'Precio:');
define('TEXT_PRODUCTS_TAX_CLASS', 'Clase de Impuesto:');
define('TEXT_PRODUCTS_AVERAGE_RATING', 'Calificaci�n Promedio:');
define('TEXT_PRODUCTS_QUANTITY_INFO', 'Cantidad:');
define('TEXT_DATE_ADDED', 'Agregado el:');
define('TEXT_DATE_AVAILABLE', 'Fecha de Disponibilidad:');
define('TEXT_LAST_MODIFIED', '�ltima Modificaci�n:');
define('TEXT_IMAGE_NONEXISTENT', 'LA IMAGEN NO EXISTE');
define('TEXT_NO_CHILD_CATEGORIES_OR_PRODUCTS', 'Por favor, ingrese una nueva categor�a o producto en este nivel.');
define('TEXT_PRODUCT_MORE_INFORMATION', 'Por favor, para m�s informaci�n visite el <a href="http://%s" target="blank">sitio</a> de este producto.');
define('TEXT_PRODUCT_DATE_ADDED', 'Este producto fue agregado a nuestro cat�logo el %s.');
define('TEXT_PRODUCT_DATE_AVAILABLE', 'Este producto estar� en stock el %s.');

define('TEXT_EDIT_INTRO', 'Por favor, haga los cambios necesarios');
define('TEXT_EDIT_CATEGORIES_ID', 'ID de Categor�a:');
define('TEXT_EDIT_CATEGORIES_NAME', 'Nombre de Categor�a:');
define('TEXT_EDIT_CATEGORIES_IMAGE', 'Imagen de Categor�a:');
define('TEXT_EDIT_SORT_ORDER', 'Orden:');

define('TEXT_INFO_COPY_TO_INTRO', 'Por favor, elija una nueva categor�a a la que desea copiar este producto');
define('TEXT_INFO_CURRENT_CATEGORIES', 'Categor�as Actuales: ');

define('TEXT_INFO_HEADING_NEW_CATEGORY', 'Nueva Categor�a');
define('TEXT_INFO_HEADING_EDIT_CATEGORY', 'Editar Categor�a');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', 'Eliminar Categor�a');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', 'Mover Categor�a');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', 'Eliminar Producto');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', 'Mover Producto');
define('TEXT_INFO_HEADING_COPY_TO', 'Copiar a');

define('TEXT_DELETE_CATEGORY_INTRO', '�Seguro que desea eliminar esta categor�a?');
define('TEXT_DELETE_PRODUCT_INTRO', '�Seguro que desea eliminar permanentemente este producto?');

define('TEXT_DELETE_WARNING_CHILDS', '<b>ADVERTENCIA:</b> �Hay %s categor�as(-hijo) que siguen vinculadas a esta categor�a!');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>ADVERTENCIA:</b> �Hay %s productos que siguen vinculados a esta categor�a!');

define('TEXT_MOVE_PRODUCTS_INTRO', 'Por favor, seleccione la categor�a en que quiere que est� <b>%s</b>');
define('TEXT_MOVE_CATEGORIES_INTRO', 'Por favor, seleccione la categor�a en que quiere que est� <b>%s</b>');
define('TEXT_MOVE', 'Mover <b>%s</b> a:');

define('TEXT_NEW_CATEGORY_INTRO', 'Por favor, complete la siguiente informaci�n para la nueva categor�a');
define('TEXT_CATEGORIES_NAME', 'Nombre de Categor�a:');
define('TEXT_CATEGORIES_IMAGE', 'Imagen de Categor�a:');
define('TEXT_SORT_ORDER', 'Orden:');

define('TEXT_PRODUCTS_STATUS', 'Estado del Documento:');
define('TEXT_PRODUCTS_VIRTUAL', 'El Producto es Virtual:');
define('TEXT_PRODUCTS_IS_ALWAYS_FREE_SHIPPING', 'Env�o Gratis Siempre:');
define('TEXT_PRODUCTS_QTY_BOX_STATUS', 'Recuadro de Cantidad del Producto:');
define('TEXT_PRODUCTS_DATE_AVAILABLE', 'Fecha de Disponibilidad:');
define('TEXT_PRODUCT_AVAILABLE', 'En stock');
define('TEXT_PRODUCT_NOT_AVAILABLE', 'Sin stock');
define('TEXT_PRODUCT_IS_VIRTUAL', 'S�, no hace falta la Direcci�n de Env�o');
define('TEXT_PRODUCT_NOT_VIRTUAL', 'No, hace falta la Direcci�n de Env�o');
define('TEXT_PRODUCT_IS_ALWAYS_FREE_SHIPPING', 'S�, Env�o Gratis Siempre');
define('TEXT_PRODUCT_NOT_ALWAYS_FREE_SHIPPING', 'No, Reglas Normales de Env�o');

define('TEXT_PRODUCTS_SORT_ORDER', 'Ordenaci�n:');

define('TEXT_PRODUCTS_QTY_BOX_STATUS_ON', 'S�, mostrar recuadro de cantidad');
define('TEXT_PRODUCTS_DESCRIPTION', 'Descripci�n del producto:');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_OFF', 'No, no mostrar recuadro de cantidad');

define('TEXT_PRODUCTS_MANUFACTURER', 'Fabricante de los productos:');
define('TEXT_PRODUCTS_NAME', 'Nombre del documento:');
define('TEXT_PRODUCTS_DETAILS', 'Contenido del documento:');
define('TEXT_PRODUCTS_QUANTITY', 'Cantidad de productos:');
define('TEXT_PRODUCTS_MODEL', 'Modelo de los productos:');
define('TEXT_PRODUCTS_IMAGE', 'Imagen del documento:');
define('TEXT_PRODUCTS_IMAGE_DIR', 'Subir a directorio:');
define('TEXT_PRODUCTS_URL', 'URL del documento:');
define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(sin http://)</small>');
define('TEXT_PRODUCTS_PRICE_NET', 'Precio de los productos (Neto):');
define('TEXT_PRODUCTS_PRICE_GROSS', 'Precio de los productos (Bruto):');
define('TEXT_PRODUCTS_WEIGHT', 'Peso de los productos:');
define('EMPTY_CATEGORY', 'Categor�a Vac�a');

define('TEXT_HOW_TO_COPY', 'Copiar M�todo:');
define('TEXT_COPY_AS_LINK', 'Vincular producto');
define('TEXT_COPY_AS_DUPLICATE', 'Duplicar producto');

define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', 'Error: No se pueden vincular productos en la misma categor�a.');
define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Error: No se puede escribir en el directorio de las im�genes del cat�logo: ' . DIR_FS_CATALOG_IMAGES);
define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Error: El directorio de las im�genes del cat�logo no existe: ' . DIR_FS_CATALOG_IMAGES);
define('ERROR_CANNOT_MOVE_CATEGORY_TO_PARENT', 'Error: No se puede mover la categor�a a una subcategor�a.');
// Products and Attribute Copy Options
  define('TEXT_COPY_ATTRIBUTES_ONLY', 'Usado s�lo para Productos Duplicados ...');
  define('TEXT_COPY_ATTRIBUTES','�Copiar atributos de productos por dublicado?');
  define('TEXT_COPY_ATTRIBUTES_YES', 'S�');
  define('TEXT_COPY_ATTRIBUTES_NO', 'No');

  define('TEXT_COPY_DISCOUNTS_ONLY','S�lo usado productos duplicados con descuentos ...');
  define('TEXT_COPY_DISCOUNTS','�Copiar descuentos de productos al duplicado?');
  define('TEXT_COPY_DISCOUNTS_YES','S�');
  define('TEXT_COPY_DISCOUNTS_NO','No');
  define('TEXT_INFO_CURRENT_PRODUCT', 'Producto Actual: ');
  define('TABLE_HEADING_MODEL', 'Modelo');

  define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES', 'Cambios de Atributos para los Productos ID# ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE', 'Eliminar <strong>TODOS</strong> los Atributos de Producto para:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO', 'Copiar Atributos a otro Producto o a una Categor�a entera desde:<br />');

  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT', 'Copiar Attributos a otro <strong>Producto</strong> desde:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY', 'Copiar Attributos a otra <strong>Categor�a</strong> desde:<br />');

  define('TEXT_COPY_ATTRIBUTES_CONDITIONS', '<strong>�C�mo deber�an manipularse los atributos de productos existentes?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE', 'Primero <strong>borre</strong>, luego copie los nuevos atributos');
  define('TEXT_COPY_ATTRIBUTES_UPDATE', '<strong>Actuelice</strong> con nuevas configuraciones/precios, luego agregue otros');
  define('TEXT_COPY_ATTRIBUTES_IGNORE', '<strong>Ignorar</strong> y agregar s�lo los nuevos atributos');

  define('SUCCESS_ATTRIBUTES_DELETED', 'Atributos eliminados correctamente');
  define('SUCCESS_ATTRIBUTES_UPDATE', 'Attributos actualizados correctamente');

  define('ICON_ATTRIBUTES', 'Caracter�sticas del Atributo');

  define('TEXT_CATEGORIES_IMAGE_DIR', 'Subir al directorio:');

  define('TEXT_VIRTUAL_PREVIEW', 'Advertencia: Este producto fue marcado para Env�o Gratis y Sin Direcci�n de Env�o');
  define('TEXT_VIRTUAL_EDIT', 'Advertencia: Este producto fue marcado para Env�o Gratis y Sin Direcci�n de Env�o');
  define('TEXT_FREE_SHIPPING_PREVIEW', 'Advertencia: Este producto fue marcado para Env�o Gratis, Con Direcci�n de Env�o');
  define('TEXT_FREE_SHIPPING_EDIT', 'Advertencia: S�, marcar este producto como Env�o Gratis, Con Direcci�n de Env�o');

  define('TEXT_PRODUCTS_QTY_BOX_STATUS_PREVIEW', 'Advertencia: No mostrar el Recuadro de Cantidad, Cdad. por Defecto 1');
  define('TEXT_PRODUCTS_QTY_BOX_STATUS_EDIT', 'Advertencia: No mostrar el Recuadro de Cantidad, Cdad. por Defecto 1');

  define('TEXT_PRODUCT_OPTIONS', '<strong>Por favor, elija:</strong>');
  define('TEXT_PRODUCT_WEIGHT_UNIT', 'kg');
  define('TEXT_PRODUCTS_ATTRIBUTES_INFO', 'Caracter�sticas del Atributo para:');
  define('TEXT_PRODUCT_ATTRIBUTES_DOWNLOADS', 'Descargas: ');

  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES', 'El Precio de los Productos Sube por los Atributos:');
  define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE', 'S�');
  define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE', 'No');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_PREVIEW', '*Al mostrarse el precio se incluir� el precio del grupo de atributos m�s bajo, m�s el precio del producto');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT', '*Al mostrarse el precio se incluir� el precio del grupo de atributos m�s bajo, m�s el precio del producto');

  define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL', 'Cdad. M�n. del Producto:');
  define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL', 'Cdad. de Unidades del Producto:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL', 'Cdad. M�x. del Producto:');

  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT', '0 = Ilimitada, 1 = Sin Recuadro de Cantidad ni M�ximo');

  define('TEXT_PRODUCTS_MIXED', 'Cdad. M�n/Unidad Combinada del Producto:');

  define('PRODUCTS_PRICE_IS_FREE_TEXT', 'El producto es gratis');
  define('TEXT_PRODUCT_IS_FREE', 'El Producto es Gratis:');
  define('TEXT_PRODUCTS_IS_FREE_PREVIEW', '*El producto fue marcado como GRATIS');
  define('TEXT_PRODUCTS_IS_FREE_EDIT', '*El producto fue marcado como GRATIS');

  define('TEXT_PRODUCT_IS_CALL', 'El producto est� como Llamar por Precio:');
  define('TEXT_PRODUCTS_IS_CALL_PREVIEW', '*El producto fue marcado como LLAMAR X PRECIO');
  define('TEXT_PRODUCTS_IS_CALL_EDIT', '*El produco fue marcado como LLAMAR X PRECIO');

  define('TEXT_ATTRIBUTE_COPY_SKIPPING', '<strong>Salteando Nuevos Atributos</strong> ');
  define('TEXT_ATTRIBUTE_COPY_INSERTING', '<strong>Agregando Nuevos Atributos desde</strong> ');
  define('TEXT_ATTRIBUTE_COPY_UPDATING', '<strong>Actualizando desde el Atributo</strong> ');

// meta tags
  define('TEXT_META_TAG_TITLE_INCLUDES','<strong>Marcar qu� ha de incluir el t�tulo de la meta tag del documento:</strong>');
  define('TEXT_PRODUCTS_METATAGS_PRODUCTS_NAME_STATUS','<strong>Nombre del documento:</strong>');
  define('TEXT_PRODUCTS_METATAGS_TITLE_STATUS','<strong>T�tulo:</strong>');
  define('TEXT_PRODUCTS_METATAGS_MODEL_STATUS','<strong>Modelo:</strong>');
  define('TEXT_PRODUCTS_METATAGS_PRICE_STATUS','<strong>Precio:</strong>');
  define('TEXT_PRODUCTS_METATAGS_TITLE_TAGLINE_STATUS','<strong>T�tulo/Tagline:</strong>');
  define('TEXT_META_TAGS_TITLE','<strong>T�tulo de meta tag:</strong>');
  define('TEXT_META_TAGS_KEYWORDS','<strong>Palabras clave de meta tag:</strong>');
  define('TEXT_META_TAGS_DESCRIPTION','<strong>Descripci�n de meta tag:</strong>');
  define('TEXT_META_EXCLUDED', '<span class="alert">EXCLUIDO</span>');
?>
