<?php

# `cd fonestorm-clients/php/SwaggerClient-php` and `composer install` to download dependencies
# Place this script in `fonestorm-clients/php/test.php` to test

require_once(__DIR__ . '/SwaggerClient-php/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AuthApi();
$username = "2005551524";
$password = "3060439019";
$expires = 56; // int | FracTEL Token Life Time in Seconds | Default is 3600 seconds | Maximum is 24 hours

try {
    $result = json_decode($api_instance->postAuth($username, $password, $expires));
    $token = $result->token;
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postAuth: ', $e->getMessage(), PHP_EOL;
}
print_r($token);
$api_instance = new Swagger\Client\Api\MessagesApi();
// $api_instance->api_client->config->debugging = true;
// $api_instance->api_client->config->base_path = '/edge';
// $api_instance->api_client->config->host = 'dev-api.fractel.net';
// $api_instance->api_client->default_headers = ['token' => $token];
$api_instance->getApiClient()->getConfig()->setDebug(true);
$api_instance->getApiClient()->getConfig()->setHost('dev-api.fractel.net/edge');
$api_instance->getApiClient()->getConfig()->addDefaultHeader('token', $token);
$to = "3212236343";
$fonenumber = "3212654518";
$message = "helloworld";

try {
    $result = $api_instance->postMessagesSend($to, $fonenumber, $message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->postMessagesSend: ', $e->getMessage(), PHP_EOL;
}

?>
