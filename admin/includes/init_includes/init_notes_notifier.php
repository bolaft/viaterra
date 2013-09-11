<?php
/**
 * init_includes/init_notes_notifier.php
 *
 * @package notes
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 *
 * @version: 0.9151 Paul Mathot
 */
if (!defined('IS_ADMIN_FLAG')) {
  die('Illegal Access');
}
// config
define('TABLE_NOTES', DB_PREFIX .'notes');
define('TABLE_NOTES_CATEGORIES', DB_PREFIX .'notes_categories');  
define('FILENAME_NOTES', 'notes.php'); 
define('MODULE_NOTES_STATUS','True');

function zen_active_notes(){
  global $db, $messageStack;
  // BOF list active notes

  $order_by = '';
  // use CURDATE ?
  $notes_active_query = ("select * FROM " . TABLE_NOTES . " n LEFT JOIN " . TABLE_NOTES_CATEGORIES . " nc ON (n.notes_categories_id = nc.notes_categories_id) " . " WHERE (`notes_status` = '1') AND (((`notes_start_date` <= NOW()) AND (`notes_start_date` >= '0001-01-01')) AND  ((`notes_end_date` >= NOW()) OR (`notes_end_date` <= '0001-01-01')))" . $order_by);
  $notes_active_results = $db->Execute($notes_active_query);
  
  if(count($notes_active_results) > 0){
    if(isset($_GET['oID']) && ($_GET['oID'] > 0)){
      // lookup the customer id of the order
      // so we can show the customer notes when viewing orders ($order is not available yet at this point, we need a query)
      $notes_customer_query = ("select customers_id FROM " . TABLE_ORDERS . " WHERE (`orders_id` = " . (int)$_GET['oID'] . ") LIMIT 1");
      $notes_customer_result = $db->Execute($notes_customer_query);
    }
  }
            
  while(!$notes_active_results->EOF){
    /*
    echo '<pre>';
    print_r($notes_active_results->fields);
    echo '</pre>';
    */
    $note_link = zen_href_link('notes', 'nID=' . $notes_active_results->fields['notes_id']);
    $notes_active_array = $notes_active_results->fields;
    $notes_active = new objectInfo($notes_active_array);
    //print_r($notes_active);
    
    switch(true){
      
      case($notes_active->notes_is_special_status == 1):
        // special products, customers, orders or categories note
        if(basename($_SERVER['PHP_SELF']) != FILENAME_NOTES){
          // do not show on notes page itself
          if($notes_active->customers_id > 0 || $notes_active->orders_id > 0 ||$notes_active->categories_id > 0 ||$notes_active->products_id > 0){
             // these notes must only be shown when the customer/order/category/product is viewed by the admin 
 
            // customers note
            if(isset($_GET['cID']) && ($_GET['cID'] == $notes_active->customers_id) ||(($notes_customer_result->fields['customers_id'] > 0) && ($notes_customer_result->fields['customers_id'] == $notes_active->customers_id)))
              $messageStack->add('[' . $notes_active_results->fields['notes_categories_name'] . ']' . ' Customers note:<br />' . '<a href="' . $note_link . '&action=view' . '"><strong>' . $notes_active_results->fields['notes_title'] . '</strong></a><hr />', 'error');     
             
            // orders note   
            if(isset($_GET['oID']) && ($_GET['oID'] == $notes_active->orders_id))              
              $messageStack->add('[' . $notes_active_results->fields['notes_categories_name'] . ']' . ' Orders note:<br />' . '<a href="' . $note_link . '"><strong>' . $notes_active_results->fields['notes_title'] . '</strong></a><hr />', 'error');

            // category note       
            if(isset($_GET['cPath']) && ($_GET['cPath'] != '') && ($_GET['cPath'] == $notes_active->categories_id))
              $messageStack->add('[' . $notes_active_results->fields['notes_categories_name'] . ']' . ' Categories note:<br />' . '<a href="' . $note_link . '"><strong>' . $notes_active_results->fields['notes_title'] . '</strong></a><hr />', 'error');     
            
            // products note      
            if(isset($_GET['pID']) && ($_GET['pID'] == $notes_active->products_id))
              $messageStack->add('[' . $notes_active_results->fields['notes_categories_name'] . ']' . ' Products note:<br />' . '<a href="' . $note_link . '"><strong>' . $notes_active_results->fields['notes_title'] . '</strong></a><hr />', 'error'); 
       
          }else{
            // note is not attached yet  
            if(isset($_GET['pID']) || isset($_GET['cPath']) || isset($_GET['oID']) || isset($_GET['cID'])){
              $parameters = '';
              $parameters = ((isset($_GET['cPath'])) ? '&cPath=' . $_GET['cPath'] : '') . ((isset($_GET['pID'])) ? '&pID=' . (int)$_GET['pID'] : '') . ((isset($_GET['oID'])) ? '&oID=' . (int)$_GET['oID'] : '') .((isset($_GET['cID'])) ? '&cID=' . (int)$_GET['cID'] : '') ; 
              $messageStack->add('Attach this ' . '[' . $notes_active_results->fields['notes_categories_name'] . ']' . ' note now?<br />' . '<a href="' . $note_link . '&action=edit' . $parameters . '"><strong>' . $notes_active_results->fields['notes_title'] . '</strong></a><hr />', 'warning');
            } 
          }
        }
      break;
      
      case(($notes_active->notes_is_special_status != 1) && ($notes_active->customers_id > 0 || $notes_active->orders_id > 0 ||$notes_active->categories_id > 0 ||$notes_active->products_id > 0)):
        // non special products, customers, orders or categories note        
      
        // customers note
        if($notes_active->customers_id > 0)
          $messageStack->add('[' . $notes_active_results->fields['notes_categories_name'] . ']' . ' Customers note:<br />' . '<a href="' . $note_link . '"><strong>' . $notes_active_results->fields['notes_title'] . '</strong></a><br />' .
          '<a href="' . FILENAME_CUSTOMERS . '.php' . '?cID=' . $notes_active->customers_id . '&action=edit' . '"><strong>' . 'Edit customer' . '</strong></a>' . 
          '<hr />', 'warning');
        // orders note   
        if($notes_active->orders_id > 0)
          $messageStack->add('[' . $notes_active_results->fields['notes_categories_name'] . ']' . ' Orders note:<br />' . '<a href="' . $note_link . '"><strong>' . $notes_active_results->fields['notes_title'] . '</strong></a><br />' .
          '<a href="' . FILENAME_ORDERS . '.php' . '?oID=' . $notes_active->orders_id . '&action=edit' . '"><strong>' . 'Edit order' . '</strong></a>' . 
          '<hr />', 'warning');
          
        // category note)       
        if(zen_not_null($notes_active->categories_id))
          $messageStack->add('[' . $notes_active_results->fields['notes_categories_name'] . ']' . ' Categories note:<br />' . '<a href="' . $note_link . '"><strong>' . $notes_active_results->fields['notes_title'] . '</strong></a><br />' .
          '<a href="' . FILENAME_CATEGORIES . '.php' . '?cPath=' . $notes_active->categories_id . '"><strong>' . 'Edit category' . '</strong></a>' . 
          '<hr />', 'warning');
          
        // products note
        if($notes_active->products_id > 0){
          //&product_type=1&cPath=1_4&pID=1&action=new_product
          $messageStack->add('[' . $notes_active_results->fields['notes_categories_name'] . ']' . ' Products note:<br />' . '<a href="' . $note_link . '"><strong>' . $notes_active_results->fields['notes_title'] . '</strong></a><br />' .
          '<a href="' . FILENAME_PRODUCT . '.php' . '?action=new_product&pID=' . $notes_active->products_id . '&product_type=' . zen_get_products_type($notes_active->products_id) . '&cPath=' . zen_get_products_category_id($notes_active->products_id) . '"><strong>' . 'Edit product' . '</strong></a>' . 
          '<hr />', 'warning');
        }       
      
      break;      
      
      default:
        // general notes
        $messageStack->add('[' . $notes_active_results->fields['notes_categories_name'] . ']' . ' Note:<br />' . '<a href="' . $note_link . '"><strong>' . $notes_active_results->fields['notes_title'] . '</strong></a><hr />', 'warning');
      break;      
      
    }
    
  
    if(($notes_active->notes_is_special_status == 1) && (basename($_SERVER['PHP_SELF']) != FILENAME_NOTES)){
      $show_special = true;
    }   
    
    if($notes_active->customers_id > 0 || $notes_active->orders_id > 0 ||$notes_active->categories_id > 0 ||$notes_active->products_id > 0){   
     
      
           
    }elseif($special){
      // ask to attach
      //exit('special attach ' . $notes_active->notes_id);

    }elseif($notes_active->notes_is_special_status != 1){
   }
    

    $notes_active_results->MoveNext();
  }
  // EOF list active notes   
}
if((basename($_SERVER['PHP_SELF']) != 'login.php') && (MODULE_NOTES_STATUS == 'True')){
  // xxxxx  check if installed first!!!
  zen_active_notes();
  
}
?>