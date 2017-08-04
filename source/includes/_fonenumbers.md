# FoneNumbers

## List All FoneNumbers

> Example Request

```shell
# Get all FoneNumbers under account.
$ curl --request GET
--url 'https://api.fonestorm.com/v2/fonenumbers'
--header 'Content-Type: application/json'
--header 'Accept: application/json'
--header 'token: key'
```

```javascript
var FracTelApi211 = require('frac_tel_api_211');
var apiInstance = new FracTelApi210.FonenumbersApi();
var opts = {
  'filter': "all"
};

var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getFonenumbers(opts, callback);
```

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FonenumbersApi();
$filter = "all";

try {
    $result = $api_instance->getFonenumbers($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FonenumbersApi->getFonenumbers: ', $e->getMessage(), PHP_EOL;
}
?>
```

```python
from __future__ import print_function
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.FonenumbersApi()
filter = 'all'

try:
    # Get all active FoneNumbers listed under the account.
    api_response = api_instance.get_fonenumbers(filter=filter)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling FonenumbersApi->get_fonenumbers: %s\n" % e)
```

> Example Response

```json
{
  "status_code": 200,
  "fonenumbers": [
    {
      "fonenumber": "8889807630",
      "service_type": "TimeOfDayRoute",
      "receive": {
        "type": "URL",
        "email": "",
        "device": "",
        "forward": "",
        "url": "https://hookb.in/Ew7WzAb2",
        "url_method": "JSON"
      },
      "receive_notify": {
        "url": "https://hookb.in/Ew7WzAb2",
        "method": "JSON"
      },
      "send_notify": {
        "url": "https://hookb.in/Ew7WzAb2",
        "method": "JSON"
      },
      "sms_enabled": "no",
      "mms_enabled": "no",
      "is_active": "yes"
    }
  ],
  "total": 1,
  "result": "SUCCESS"
}
```

Get all active FoneNumbers listed under the account.

### HTTP Request

Method | Route
--------- | -------
**GET** | `/fonenumbers`

### Query Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
filter | string | fonenumbers | Filter the response attributes. Allowed values are `fonenumbers` or `all`. See Notes for additional information.

### Notes

#### `filter`

The default `filter` value is `fonenumbers`. For a more detailed response you may use `all`.

- `fonenumbers` returns an array of FoneNumber strings.
- `all` returns an array of FoneNumber objects.

## Order New FoneNumber

> Example Request

```shell
# Order quick FoneNumber with a `321` area code.
$ curl --request POST
--url 'https://api.fonestorm.com/v2/fonenumbers'
--header 'Content-Type: application/json'
--header 'Accept: application/json'
--header 'token: key'
--data '{"area_code": "321" }'
```

```javascript
// Order FoneNumber with a `321` area code.
var FracTelApi211 = require('frac_tel_api_211');
var apiInstance = new FracTelApi210.FonenumbersApi();
var areaCode = "321";

var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.postFonenumbers(areaCode, callback);
```

```php
<?php
// Order FoneNumber with a `321` area code.
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FonenumbersApi();
$area_code = "321";

try {
    $result = $api_instance->postFonenumbers($area_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FonenumbersApi->postFonenumbers: ', $e->getMessage(), PHP_EOL;
}
?>
```

```python
# Order FoneNumber with a `321` area code.
from __future__ import print_function
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.FonenumbersApi()
area_code = '321'

try:
    # Order quick FoneNumber for the account.
    api_response = api_instance.post_fonenumbers(area_code)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling FonenumbersApi->post_fonenumbers: %s\n" % e)
```

> Example Response

```json
{
  "status_code": 200,
  "fonenumber": {
    "fonenumber": "3212335701",
    "sms_enabled": "yes",
    "mms_enabled": "yes",
    "state": "FL",
    "rate_center": "SANFORD"
  },
  "result": "SUCCESS"
}
```

Order a new FoneNumber for the account.

### HTTP Request

Method | Route
--------- | -------
**POST** | `/fonenumbers`

### Body Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
area_code | string |  | A valid 3-digit Area Code.

<aside class="notice">
Adding a FoneNumber to your account may result in additional charges and fees.
</aside>

## Get FoneNumber Details

> Example Request

```shell
# Get details for FoneNumber `3212182662`
$ curl --request GET
--url 'https://api.fonestorm.com/v2/fonenumbers/3212182662'
--header 'Content-Type: application/json'
--header 'Accept: application/json'
--header 'token: key'
```

```javascript
// Get details for FoneNumber `3212182662`
var FracTelApi211 = require('frac_tel_api_211');
var apiInstance = new FracTelApi210.FonenumbersApi();
var fonenumber = "3212182662";

var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getFonenumbersFonenumber(fonenumber, callback);
```

```php
<?php
// Get details for FoneNumber `3212182662`
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FonenumbersApi();
$fonenumber = "3212182662";

try {
    $result = $api_instance->getFonenumbersFonenumber($fonenumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FonenumbersApi->getFonenumbersFonenumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

```python
# Get details for FoneNumber `3212182662`
from __future__ import print_function
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.FonenumbersApi()
fonenumber = '3212182662' # str | Your FracTEL fonenumber.

try:
    # Get a single FoneNumber listed under the account.
    api_response = api_instance.get_fonenumbers_fonenumber(fonenumber)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling FonenumbersApi->get_fonenumbers_fonenumber: %s\n" % e)
```

> Example Response

```json
{
  "status_code": 200,
  "fonenumber": {
    "fonenumber": "8889807630",
    "service_type": "TimeOfDayRoute",
    "receive": {
      "type": "URL",
      "email": "",
      "device": "",
      "forward": "",
      "url": "https://hookb.in/Ew7WzAb2",
      "url_method": "JSON"
    },
    "receive_notify": {
      "url": "https://hookb.in/Ew7WzAb2",
      "method": "JSON"
    },
    "send_notify": {
      "url": "https://hookb.in/Ew7WzAb2",
      "method": "JSON"
    },
    "sms_enabled": "no",
    "mms_enabled": "no",
    "is_active": "yes"
  },
  "result": "SUCCESS"
}
```

Get information for a single FoneNumber listed under the account.

### HTTP Request

Method | Route
--------- | -------
**GET** | `/fonenumbers/:fonenumber`

### Path Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
fonenumber | string |  | A FoneNumber associated with the account.

## Update FoneNumber

> Example Request

```shell
# Set FoneNumber service type for `3212182662`
# to receive messages to email address `support@domain.com`
$ curl --request PUT
--url 'https://api.fonestorm.com/v2/fonenumbers/3212182662'
--header 'Content-Type: application/json'
--header 'Accept: application/json'
--header 'token: key'
--data '{"type": "Email", "value": "support@domain.com"}'
```

```javascript
// Set service for FoneNumber `3212182662`
// to receive messages to email address `support@domain.com`
var FracTelApi211 = require('frac_tel_api_211');
var apiInstance = new FracTelApi210.FonenumbersApi();
var fonenumber = "3212182662"; // String | Your FracTEL FoneNumber.
var type = "Email";
var opts = {
  'value': "support@domain.com",
};

var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.putFonenumbersFonenumber(fonenumber, type, opts, callback);
```

```php
<?php
// Set service for FoneNumber `3212182662`
// to receive messages to email address `support@domain.com`
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FonenumbersApi();
$fonenumber = "3212182662";
$type = "Email";
$value = "support@domain.com";

try {
    $result = $api_instance->putFonenumbersFonenumber($fonenumber, $type, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FonenumbersApi->putFonenumbersFonenumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

```python
# Set service for FoneNumber `3212182662`
# to receive messages to email address `support@domain.com`
from __future__ import print_function
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.FonenumbersApi()
fonenumber = '3212182662'
type = 'Email'
value = 'support@domain.com'

try:
    # Configure the service type for an account FoneNumber.
    api_response = api_instance.put_fonenumbers_fonenumber(fonenumber, type, value=value, url_method=url_method, url_username=url_username, url_password=url_password)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling FonenumbersApi->put_fonenumbers_fonenumber: %s\n" % e)
```

> Example Response

```json
{
  "status_code": 200,
  "result": "SUCCESS"
}
```

Configure the service type for account FoneNumber.

### HTTP Request

Method | Route
--------- | -------
**PUT** | `/fonenumbers/:fonenumber`

### Path Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
fonenumber | string |  | A FoneNumber associated with the account.

### Body Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
fonenumber | string |  | A FoneNumber associated with the account.
type | string |  | Message routing type. Allowed values are `None`, `Device`, `Email`, `URL` or `Forward`.
value | string |  | Message routing type value.
url_method<br/>_optional_ | string |  | URL method. Allowed values are `GET`, `POST`, or `JSON`. See Notes for additional information.
url_username<br/>_optional_ | string |  | URL username for HTTP **Basic** authentication scheme.
url_password<br/>_optional_ | string |  | URL password for HTTP **Basic** authentication scheme.

### Notes

#### `url_method`

When `type` is `URL` then `url_method` is required. The URL `value` is expected to be a valid HTTP or HTTPS URL that will accept data when a message is sent to the FoneNumber. One of three available methods must be specified for the execution.

- `GET` returns data through query string parameters on a `GET` to the given URL.
- `POST` returns data as _(application/x-www-form-urlencoded)_ in the body of a `POST` to the given URL.
- `JSON` returns data as _(application/json)_ in the body of a `POST` to the given URL.

## Delete FoneNumber

> Example Request

```shell
# Cancel FoneNumber `3212182662` and remove from account.
$ curl --request DELETE
--url 'https://api.fonestorm.com/v2/fonenumbers/3212182662'
--header 'Content-Type: application/json'
--header 'Accept: application/json'
--header 'token: key'
```

```javascript
// Cancel FoneNumber `3212182662` and remove from account.
var FracTelApi211 = require('frac_tel_api_211');
var apiInstance = new FracTelApi210.FonenumbersApi();
var fonenumber = "3212182662";

var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.deleteFonenumbersFonenumber(fonenumber, callback);
```

```php
<?php
// Cancel FoneNumber `3212182662` and remove from account.
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FonenumbersApi();
$fonenumber = "3212182662";

try {
    $result = $api_instance->deleteFonenumbersFonenumber($fonenumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FonenumbersApi->deleteFonenumbersFonenumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

```python
# Cancel FoneNumber `3212182662` and remove from account.
from __future__ import print_function
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.FonenumbersApi()
fonenumber = '3212182662'

try:
    # Remove FoneNumber from the account.
    api_response = api_instance.delete_fonenumbers_fonenumber(fonenumber)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling FonenumbersApi->delete_fonenumbers_fonenumber: %s\n" % e)
```

> Example Response

```json
{
  "status_code": 200,
  "fonenumber": "3212335701",
  "result": "SUCCESS"
}
```

Remove FoneNumber from account.

### HTTP Request

Method | Route
--------- | -------
**DELETE** | `/fonenumbers/:fonenumber`

### Path Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
fonenumber | string |  | A FoneNumber associated with the account.
