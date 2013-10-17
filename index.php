<?php
include('src/facebook.php');

$config['appid' ] = "154817238062054";
$config['secret'] = "651640527c71851130c2e60c5bcbd138";

// Create our Application instance.
$facebook = new Facebook(array(
    'appId'  => $config['appid'],
    'secret' => $config['secret'],
    'cookie' => true
));

$signedRequest = $facebook->getSignedRequest();
if($signedRequest['page']['liked'] == 1) {
    echo "LIKED";
} else {
    echo "NOT LIKED";
}
?>