<?php

require_once("configs.php");
require_once '../2012.jsconf.asia/cmonitor/csrest_subscribers.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Origin, x-http-method-override, Content-Type, Accept");

$wrap = new CS_REST_Subscribers('76ef76d33c1ecd1f7e5af419f9684da4', $cm_key);
	
$result = $wrap->add(array(
    'EmailAddress' => $_GET['email'],
    'Resubscribe' => true
));


if($result->was_successful()) {
    echo "Thanks! :)";
} else {
    echo $result->response->Message;
}

?><br/><br/>
<a href="http://cssconf.asia">Back to the site</a>

