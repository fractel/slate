# Authentication

> Example Request

```shell
# Obtain an authentication token that is valid for two hours.
$ curl --request POST
--url 'https://api.fonestorm.com/v2/auth'
--header 'Content-Type: application/json'
--header 'Accept: application/json'
--data '{"username": "xxxxxxxxxx", "password": "xxxxxxxxxx", "expires": 7200}'
```

```javascript
// Obtain an authentication token that is valid for two hours.
var FracTelApi212 = require('frac_tel_api_212');
var apiInstance = new FracTelApi212.AuthApi();
var username = "xxxxxxxxxx";
var password = "xxxxxxxxxx";
var opts = {
  'expires': 7200
};

var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.postAuth(username, password, opts, callback);
```

```php
<?php
# Obtain an authentication token that is valid for two hours.
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AuthApi();
$username = "xxxxxxxxxx";
$password = "xxxxxxxxxx";
$expires = 7200;

try {
    $result = $api_instance->postAuth($username, $password, $expires);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postAuth: ', $e->getMessage(), PHP_EOL;
}
?>
```

```python
# Obtain an authentication token that is valid for two hours.
from __future__ import print_function
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# Create an instance of the API class
api_instance = swagger_client.AuthApi()
username = 'xxxxxxxxxx'
password = 'xxxxxxxxxx'
expires = 7200

try:
    # Obtain a FracTEL Auth token
    api_response = api_instance.post_auth(username, password, expires=expires)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling AuthApi->post_auth: %s\n" % e)
```

> Example Response

```json
{
  "status_code": 200,
  "result": "REGISTERED",
  "token": "1825a1831d69218d474d6829501ac644",
  "expires": "2017-07-13T21:19:30.000Z"
}
```

FoneStorm uses an API key to allow access to the API. FoneStorm expects for the API key (also called a "token") to be included in all API requests to the server in a header that looks like the following:

`token: key`

<aside class="notice">
You must replace <code>key</code> with your own API key.
</aside>

The authentication endpoint allows you to obtain an authentication token that can be used to make authenticated requests to protected endpoints.

### HTTP Request

Method | Route
--------- | -------
**POST** | `/auth`

### Body Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
username | string |  |FracTEL username.
password | string | | FracTEL password.
expires<br/>_optional_ | integer | 3600 | Token time to live in seconds. The maximum allowed time is 24 hours.

### Response Properties

Property | Type | Description
--------- | ------- | -----------
status_code | integer | HTTP status code.
result | string | Text result of the request.
token | string | Generated token used for making additional requests.
expires | datetime | UTC expiration time of token.

<aside class="notice">
API calls that use invalid or expired tokens will receive a response of <code>401 - Unauthorized</code>.
</aside>
