<?php
/**
 * This file will retuen JSON response
 */
require_once('translate/config.inc.php');
//require_once('translate/class/ServicesJSON.class.php');
//require_once('translate/class/MicrosoftTranslator.class.php');

//$translator = new MicrosoftTranslator(ACCOUNT_KEY);
$text_to_translate = $_REQUEST['text'];
$to = $_REQUEST['to'];
$from = 'fr';
//$translator->translate($from, $to, $text_to_translate);
//echo $translator->response->jsonResponse;

$url = 'https://api.datamarket.azure.com/Data.ashx/Bing/MicrosoftTranslator/v1/Translate?Text=%27'.urlencode($text_to_translate).'%27&To=%27' . $to . '%27&From=%27' . $from . '%27&$top=100&$format=json';

    $accountKey = ACCOUNT_KEY;
    $handle = curl_init ($url);
    if ($handle) {
        $curlOptArr = array(
            CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
            CURLOPT_USERPWD => $accountKey . ':' . $accountKey,
            CURLOPT_RETURNTRANSFER => TRUE

        );
        curl_setopt_array($handle, $curlOptArr);
        $response = curl_exec($handle);
		
        $data = json_decode($response,true);
        if (is_array($data)) {
            if (isset($data['d']['results'][0]['Text'])) {
                print json_encode($data['d']['results'][0]['Text']);
            } else {
                print false;
            }
        } else {
            print $text;
        }
        $errRet = curl_error($handle);
        curl_close($handle);
    }
