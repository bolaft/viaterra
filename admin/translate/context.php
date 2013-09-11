<?php

require_once('config.inc.php');
require_once('class/ServicesJSON.class.php');
require_once('class/MicrosoftTranslator.class.php');

$translator = new MicrosoftTranslator(ACCOUNT_KEY);

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Translate</title>
	<script src="http://code.jquery.com/jquery-1.5.js"></script>
	<script src="context/js/jquery.ajaxLoader.js"></script>
	<script src="context/js/json-jquery.js" type="text/javascript"></script> 
</head>
<body>	
	<form>
		<a href="#" id="translate">Translate</a>
		<label for="fr"></label>French<input type="text" name="fr" id="fr" />
		<label for="en"></label>English<input type="text" name="en" id="en" />
		<label for="de"></label>derman<input type="text" name="de" id="de" />
	</form>
</body>
</html>