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
//  $Id: attributes_controller.php,v 1.2 2006/01/14 13:32:20 damage_in Exp $
//

define('HEADING_TITLE_OPT', 'Opciones de Producto');
define('HEADING_TITLE_VAL', 'Valores de Opci�n');
define('HEADING_TITLE_ATRIB', 'Gestionar Atributos');
define('HEADING_TITLE_ATRIB_SELECT', 'Por favor, elija un producto del cual mostrar sus atributos...');
define('TEXT_PRICES_AND_WEIGHTS', 'Precios y pesos');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR', 'Factor de precio: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_OFFSET', 'Desviaci�n: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_ONETIME', 'Una vez:');

define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_ONETIME', 'Factor �nico: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_OFFSET_ONETIME', 'Desviaci�n: ');

define('TABLE_HEADING_ATTRIBUTES_QTY_PRICES', 'Descuento por cdad. de atributos:');
define('TABLE_HEADING_ATTRIBUTES_QTY_PRICES_ONETIME', 'Descuentos �nicos por cdad. de atributos:');

define('TABLE_HEADING_ATTRIBUTES_PRICE_WORDS', 'Precio por palabra:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_WORDS_FREE', '- Palabras gratis:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_LETTERS', 'Precio por letra:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_LETTERS_FREE', '- Letras gratis:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_PRODUCT', 'Nombre de Producto');
define('TABLE_HEADING_OPT_NAME', 'Nombre de Opci�n');
define('TABLE_HEADING_OPT_VALUE', 'Valor de Opci�n');
define('TABLE_HEADING_OPT_PRICE', 'Precio');
define('TABLE_HEADING_OPT_PRICE_PREFIX', 'Prefijo');
define('TABLE_HEADING_ACTION', 'Acci�n');
define('TABLE_HEADING_DOWNLOAD', 'Productos descargables:');
define('TABLE_TEXT_FILENAME', 'Fichero:');
define('TABLE_TEXT_MAX_DAYS', 'D�as para la descarga:');
define('TABLE_TEXT_MAX_COUNT', 'Cantidad m�xima de descargas:');
define('TABLE_HEADING_OPT_DISCOUNTED', 'Descuento');
define('TABLE_HEADING_PRICE_BASE_INCLUDED', 'Base');

define('TEXT_WARNING_OF_DELETE', 'Esta opci�n tiene productos y valores vinculados a ella; no es seguro eliminarla.');
define('TEXT_OK_TO_DELETE', 'Esta opci�n no tiene productos y valores vinculados a ella; es seguro eliminarla.');
define('TEXT_OPTION_ID', 'ID de Opci�n');
define('TEXT_OPTION_NAME', 'Nombre de Opci�n');

define('ATTRIBUTE_WARNING_DUPLICATE', 'Atributo duplicado - El atributo no fue agregado'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE', 'Atributo duplicado - El atributo no fue modificado'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_INVALID_MATCH', 'Opci�n de atributo y valor de atributo NO coinciden - El atributo no fue agregado'); // miss matched option and options value
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE', 'Opci�n de atributo y valor de atributo NO coinciden - El atributo no fue modificado'); // miss matched option and options value
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE', 'Se agreg� una posible duplicaci�n de nombre de opci�n'); // Options Name Duplicate warning
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE', 'Se Agreg� una posible duplicaci�n de valor de opci�n'); // Options Value Duplicate warning

define('PRODUCTS_ATTRIBUTES_EDITING', 'EDITANDO'); // title
define('PRODUCTS_ATTRIBUTES_DELETE', 'ELIMINANDO'); // title
define('PRODUCTS_ATTRIBUTES_ADDING', 'AGREGANDO NUEVOS ATRIBUTOS'); // title
define('TEXT_DOWNLOADS_DISABLED', 'NOTA: las descargas est�n deshabilitadas');

define('TABLE_TEXT_MAX_DAYS_SHORT', 'D�as:');
define('TABLE_TEXT_MAX_COUNT_SHORT', 'M�x:');

  define('TABLE_HEADING_OPTION_SORT_ORDER', 'Orden');
  define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER', 'Orden por defecto');
  define('TEXT_SORT', ' Orden: ');

  define('TABLE_HEADING_OPT_WEIGHT_PREFIX', 'Prefijo');
  define('TABLE_HEADING_OPT_WEIGHT', 'Peso');
  define('TABLE_HEADING_OPT_SORT_ORDER', 'Orden');
  define('TABLE_HEADING_OPT_DEFAULT', 'por defecto');

  define('TABLE_HEADING_OPT_TYPE', 'Tipo de opci�n'); //CLR 031203 add option type column
  define('TABLE_HEADING_OPTION_VALUE_SIZE', 'Tama�o');
  define('TABLE_HEADING_OPTION_VALUE_MAX', 'M�x');
  define('TABLE_HEADING_OPTION_VALUE_ROWS', 'Filas');
  define('TABLE_HEADING_OPTION_VALUE_COMMENTS', 'Comentarios');

  define('TEXT_OPTION_VALUE_COMMENTS', 'Comentarios: ');
  define('TEXT_OPTION_VALUE_SIZE', 'Mostrar tama�o: ');
  define('TEXT_OPTION_VALUE_MAX', 'Tama�o m�ximo: ');

  define('TEXT_ATTRIBUTES_IMAGE', 'Imagen de muestra de los atributos:');
  define('TEXT_ATTRIBUTES_IMAGE_DIR', 'Directorio de las im�genes de los atributos:');

  define('TEXT_ATTRIBUTES_FLAGS', 'Atributos:');
  define('TEXT_ATTRIBUTES_DISPLAY_ONLY', 'Usado s�lo<br />para articulos de muestra:');
  define('TEXT_ATTRIBUTES_IS_FREE', 'Atributo gratis<br />Cuando el producto es gratis:');
  define('TEXT_ATTRIBUTES_DEFAULT', 'Atributo por defecto<br />para marcar como seleccionado:');
  define('TEXT_ATTRIBUTE_IS_DISCOUNTED', 'Aplicar los mismos descuentos<br />Usados por el producto:');
  define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED', 'Incluir en el precio base<br />En precios c/atributos');

  define('LEGEND_BOX','Leyenda:');
  define('LEGEND_KEYS','Desactivado/Activado');
  define('LEGEND_ATTRIBUTES_DISPLAY_ONLY', 'Mostrar s�lo');
  define('LEGEND_ATTRIBUTES_IS_FREE', 'Gratis');
  define('LEGEND_ATTRIBUTES_DEFAULT', 'Por defecto');
  define('LEGEND_ATTRIBUTE_IS_DISCOUNTED', 'Descontado');
  define('LEGEND_ATTRIBUTE_PRICE_BASE_INCLUDED','Precio base');
  define('LEGEND_ATTRIBUTES_REQUIRED','Requerido');
  define('LEGEND_ATTRIBUTES_IMAGES','Im�genes');
  define('LEGEND_ATTRIBUTES_DOWNLOAD','Nombre de archivo<br />v�lido/erroneo');
  define('TEXT_ATTRIBUTES_UPDATE_SORT_ORDER', 'ORDEN POR DEFECTO');
  define('TEXT_PRODUCTS_LISTING', 'Lista de productos para: ');
  define('TEXT_NO_PRODUCTS_SELECTED', 'Falta elegir producto');
  define('TEXT_NO_ATTRIBUTES_DEFINED', 'Atributos sin definir para el producto ID#');

  define('TEXT_PRODUCTS_ID', 'Productos ID#');
  define('TEXT_ATTRIBUTES_DELETE', 'ELIMINAR TODOS');
  define('TEXT_ATTRIBUTES_COPY_PRODUCTS', 'Copiar al producto');
  define('TEXT_ATTRIBUTES_COPY_CATEGORY', 'Copiar a la categor�a');

  define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES', 'Cambios de atributos para los productos ID# ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE', 'Eliminar <strong>TODOS</strong> los atributos de producto para:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO', 'Copiar atributos a otro producto o a una categor�a entera desde:<br />');

  define('TEXT_ATTRIBUTES_COPY_TO_PRODUCTS', 'PRODUCTO');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT', 'Copiar atributos a otro <strong>Producto</strong> desde ID#');
  define('TEXT_INFO_ATTRIBUTES_FEATURE_COPY_TO', 'Seleccione el producto al que copiar todos los atributos:');

  define('TEXT_ATTRIBUTES_COPY_TO_CATEGORY', 'CATEGOR�A');
  define('TEXT_INFO_ATTRIBUTES_FEATURE_CATEGORIES_COPY_TO', 'Seleccione la categor�a a la que copiar los atributos:');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY', 'Copiar atributos a todos los productos en la <strong>Categoria</strong> desde el Producto ID#');

  define('TEXT_COPY_ATTRIBUTES_CONDITIONS', '<strong>�C�mo deber�an manipularse los atributos de productos existentes?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE', 'Primero <strong>borre</strong>, luego copie los nuevos atributos');
  define('TEXT_COPY_ATTRIBUTES_UPDATE', '<strong>Actualice</strong> con nuevas configuraciones/precios, luego agregue otros');
  define('TEXT_COPY_ATTRIBUTES_IGNORE', '<strong>Ignorar</strong> y agregar s�lo los nuevos atributos');

  define('SUCCESS_PRODUCT_UPDATE_SORT', 'Orden de atributos actualizado correctamente para ID# ');
  define('SUCCESS_PRODUCT_UPDATE_SORT_NONE', 'Sin atributos a los que actualizar el orden para ID# ');
  define('SUCCESS_ATTRIBUTES_DELETED', 'Atributos eliminados correctamente');
  define('SUCCESS_ATTRIBUTES_UPDATE', 'Atributos actualizados correctamente');

  define('WARNING_PRODUCT_COPY_TO_CATEGORY_NONE', 'No seleccion� una categor�a para la copia');
  define('TEXT_PRODUCT_IN_CATEGORY_NAME', ' - en la Categor�a: ');

  define('TEXT_DELETE_ALL_ATTRIBUTES', '�Seguro que desea eliminar todos los atributos para ID# ');

  define('TEXT_ATTRIBUTE_COPY_SKIPPING', '<strong>Ignorar nuevos atributos</strong> ');
  define('TEXT_ATTRIBUTE_COPY_INSERTING', '<strong>Agregando nuevos atributos desde</strong> ');
  define('TEXT_ATTRIBUTE_COPY_UPDATING', '<strong>Actualizando desde el atributo</strong> ');

// preview
  define('TEXT_ATTRIBUTES_PREVIEW', 'PREVISUALIZAR ATRIBUTOS');
  define('TEXT_ATTRIBUTES_PREVIEW_DISPLAY', 'PREVISUALIZAR MUESTRA DE ATRIBUTOS PARA ID#');
  define('TEXT_PRODUCT_OPTIONS', '<strong>Por Favor, Elija:</strong>');
  define('TEXT_PRODUCT_WEIGHT_UNIT', ' kg');

  define('TEXT_ATTRIBUTES_INSERT_INFO', '<strong>Defina la configuraci�n de los atributos y luego presione el bot�n Agregar</strong>');
  define('TEXT_PRICED_BY_ATTRIBUTES', 'Precio asignado por atributos');
  define('TEXT_PRODUCTS_PRICE', 'Precio de productos: ');
  define('TEXT_SPECIAL_PRICE', 'Precio de oferta: ');
  define('TEXT_SALE_PRICE', 'Precio de liquidaci�n: ');
  define('TEXT_FREE', 'GRATIS');
  define('TEXT_CALL_FOR_PRICE', 'Llamar por Precio');
  define('TEXT_SAVE_CHANGES','ACTUALIZAR Y GUARDAR CAMBIOS:');

  define('TEXT_INFO_ID', 'ID#');
  define('TEXT_INFO_ALLOW_ADD_TO_CART_NO', 'No a�adir al carro');
?>
