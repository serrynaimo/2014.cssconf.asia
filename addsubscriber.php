<?php

require_once("configs.php");
require_once '../2012.jsconf.asia/mailchimp/mailchimp.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Origin, x-http-method-override, Content-Type, Accept");


/*if(isset($_GET['list']))
	$wrap = new CS_REST_Subscribers('2554f6f0907f592868a129c67da2627d', $cm_key);
else
	$wrap = new CS_REST_Subscribers('df11cf9b50bd17cb1ccd8e40023cdfd4', $cm_key);

$result = $wrap->add(array(
    'EmailAddress' => $_GET['email'],
    'Resubscribe' => true
));


if($result->was_successful()) {
    echo "Thanks! :)";
} else {
    echo $result->response->Message;
}*/

if(!empty($_GET['email']) && (!isset($_GET['fname']) || !empty($_GET['fname']))) {

    $MailChimp = new \Drewm\MailChimp($mc_key);

    $group = "CSSConf";

    if(!empty($_GET['group']) && $_GET['group'] == "DevFest") {
        $group = "DevFest";
    }

    $result = $MailChimp->call('lists/subscribe', array(
                    'id'                => '319c43ef80',
                    'email'             => array('email'=>$_GET['email']),
                    'merge_vars'        => array(
                                            'FNAME' => $_GET['fname'],
                                            'GROUPINGS' => array(
                                                array(
                                                    'name' => "Conference",
                                                    'groups' => array($group)
                                                )
                                            )
                                        ),
                    'double_optin'      => false,
                    'update_existing'   => true,
                    'replace_interests' => false,
                    'send_welcome'      => false,
                ));

    if(isset($result['email'])) {
        echo "Thanks! :)";
    } else if(isset($result['error'])) {
        echo "That's not a valid email. Can you check again?";
    } else {
        echo "Something went wrong. Please try this another time again. :(";
    }

} else {
    echo "Please provide both your first name and email address.";
}



?><br/><br/>
<a href="http://cssconf.asia">Back to the site</a>

