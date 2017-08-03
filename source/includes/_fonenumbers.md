# Fonenumbers

## List All Fonenumbers

> Example Request

```shell
# Get all DIDs under account.
$ curl --request GET
--url 'https://api.fractel.net/v2/fonenumbers'
--header 'Content-Type: application/json'
--header 'Accept: application/json'
--header 'token: key'
```

```javascript
var FracTelApi210 = require('frac_tel_api_211');

var apiInstance = new FracTelApi210.FonenumbersApi();

var opts = {
  'filter': "filter_example" // String | Filters for the response.
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
$filter = "filter_example"; // string | Filters for the response.

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
filter = 'filter_example' # str | Filters for the response. (optional)

try:
    # Get all active fonenumbers listed under the account.
    api_response = api_instance.get_fonenumbers(filter=filter)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling FonenumbersApi->get_fonenumbers: %s\n" % e)
```

> Example Response

```json
{
  "statusCode": 200,
  "Fonenumbers": [
    {
      "Number": [
        "3094399908"
      ],
      "RegionBlock": [
        "na"
      ],
      "CNAMLookup": [
        "yes"
      ],
      "AccountCode": [
        "2005551524"
      ],
      "ServiceOption": [
        "475744919148"
      ],
      "ServiceType": [
        "Device"
      ],
      "T38": [
        "yes"
      ],
      "SMS": [
        "no"
      ],
      "PortedNumber": [
        "no"
      ],
      "ActivateDate": [
        "2017-01-06 10:09:51"
      ],
      "RewriteTo": [
        ""
      ]
    }
  ],
  "total": 1,
  "result": "SUCCESS"
}
```

Get all active Fonenumbers listed under the account.

### HTTP Request

Method | Route
--------- | -------
**GET** | `/fonenumbers`

## Order New Fonenumber

> Example Request

```shell
# Order quick DID with a `321` area code.
$ curl --request POST
--url 'https://api.fractel.net/v2/fonenumbers'
--header 'Content-Type: application/json'
--header 'Accept: application/json'
--header 'token: key'
--data '{"area_code": "321" }'
```

```javascript
var FracTelApi210 = require('frac_tel_api_211');

var apiInstance = new FracTelApi210.FonenumbersApi();

var areaCode = "areaCode_example"; // String | A valid 3-digit Area Code.


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
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FonenumbersApi();
$area_code = "area_code_example"; // string | A valid 3-digit Area Code.

try {
    $result = $api_instance->postFonenumbers($area_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FonenumbersApi->postFonenumbers: ', $e->getMessage(), PHP_EOL;
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
area_code = 'area_code_example' # str | A valid 3-digit Area Code.

try:
    # Order quick fonenumber for the account.
    api_response = api_instance.post_fonenumbers(area_code)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling FonenumbersApi->post_fonenumbers: %s\n" % e)
```

> Example Response

```json
{
  "statusCode": 200,
  "Fonenumber": {
    "RateCenter": [
      "REEDYCREEK"
    ],
    "State": [
      "FL"
    ],
    "MMS": [
      "yes"
    ],
    "Tier": [
      "B"
    ],
    "Result": [
      "SUCCESS"
    ],
    "Number": [
      "3212182662"
    ],
    "T38": [
      "yes"
    ],
    "SMS": [
      "yes"
    ]
  },
  "result": "SUCCESS",
  "total": 1
}
```

Order a new Fonenumber for the account.

### HTTP Request

Method | Route
--------- | -------
**POST** | `/fonenumbers`

### Body Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
area_code | string |  | A valid 3-digit Area Code.

<aside class="notice">
Adding a Fonenumber to your account may result in additional charges and fees.
</aside>

## Get Fonenumber Details

> Example Request

```shell
# Get details for DID `3212182662`
$ curl --request GET
--url 'https://api.fractel.net/v2/fonenumbers/3212182662'
--header 'Content-Type: application/json'
--header 'Accept: application/json'
--header 'token: key'
```

```javascript
var FracTelApi210 = require('frac_tel_api_211');

var apiInstance = new FracTelApi210.FonenumbersApi();

var fonenumber = "fonenumber_example"; // String | Your FracTEL fonenumber.


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
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FonenumbersApi();
$fonenumber = "fonenumber_example"; // string | Your FracTEL fonenumber.

try {
    $result = $api_instance->getFonenumbersFonenumber($fonenumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FonenumbersApi->getFonenumbersFonenumber: ', $e->getMessage(), PHP_EOL;
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
fonenumber = 'fonenumber_example' # str | Your FracTEL fonenumber.

try:
    # Get a single fonenumber listed under the account.
    api_response = api_instance.get_fonenumbers_fonenumber(fonenumber)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling FonenumbersApi->get_fonenumbers_fonenumber: %s\n" % e)
```

> Example Response

```json
{
  "statusCode": 200,
  "Fonenumber": {
    "T38": [
      "yes"
    ],
    "ServiceType": [
      "TrunkGroup"
    ],
    "SMS": [
      "yes"
    ],
    "PortedNumber": [
      "no"
    ],
    "ActivateDate": [
      "2017-07-27 04:33:32"
    ],
    "RewriteTo": [
      ""
    ],
    "AccountCode": [
      "2005551524"
    ],
    "ServiceOption": [
      "2005551524"
    ],
    "Number": [
      "3212182662"
    ],
    "RegionBlock": [
      "na"
    ],
    "CNAMLookup": [
      "yes"
    ]
  },
  "total": 1,
  "result": "SUCCESS"
}
```

Get information for a single Fonenumber listed under the account.

### HTTP Request

Method | Route
--------- | -------
**GET** | `/fonenumbers/:fonenumber`

### Path Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
fonenumber | string |  | A Fonenumber associated with the account.

## Update Fonenumber

> Example Request

```shell
# Set DID service type for DID `3212182662`
# to receive messages to email address `support@domain.com`
$ curl --request PUT
--url 'https://api.fractel.net/v2/fonenumbers/3212182662'
--header 'Content-Type: application/json'
--header 'Accept: application/json'
--header 'token: key'
--data '{"type": "Email", "value": "support@domain.com"}'
```

```javascript
var FracTelApi210 = require('frac_tel_api_211');

var apiInstance = new FracTelApi210.FonenumbersApi();

var fonenumber = "fonenumber_example"; // String | Your FracTEL fonenumber.

var type = "type_example"; // String | Message routing type.

var opts = {
  'value': "value_example", // String | Message routing type value.
  'urlMethod': "urlMethod_example", // String | URL method.
  'urlUsername': "urlUsername_example", // String | URL auth username.
  'urlPassword': "urlPassword_example" // String | URL auth password.
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
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FonenumbersApi();
$fonenumber = "fonenumber_example"; // string | Your FracTEL fonenumber.
$type = "type_example"; // string | Message routing type.
$value = "value_example"; // string | Message routing type value.
$url_method = "url_method_example"; // string | URL method.
$url_username = "url_username_example"; // string | URL auth username.
$url_password = "url_password_example"; // string | URL auth password.

try {
    $result = $api_instance->putFonenumbersFonenumber($fonenumber, $type, $value, $url_method, $url_username, $url_password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FonenumbersApi->putFonenumbersFonenumber: ', $e->getMessage(), PHP_EOL;
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
fonenumber = 'fonenumber_example' # str | Your FracTEL fonenumber.
type = 'type_example' # str | Message routing type.
value = 'value_example' # str | Message routing type value. (optional)
url_method = 'url_method_example' # str | URL method. (optional)
url_username = 'url_username_example' # str | URL auth username. (optional)
url_password = 'url_password_example' # str | URL auth password. (optional)

try:
    # Configure the service type for an account fonenumber.
    api_response = api_instance.put_fonenumbers_fonenumber(fonenumber, type, value=value, url_method=url_method, url_username=url_username, url_password=url_password)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling FonenumbersApi->put_fonenumbers_fonenumber: %s\n" % e)
```

> Example Response

```json
{
  "statusCode": 200,
  "result": "SUCCESS"
}
```

Configure the service type for account DID.

### HTTP Request

Method | Route
--------- | -------
**PUT** | `/fonenumbers/:fonenumber`

### Path Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
fonenumber | string |  | Your Fonenumber.

### Body Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
fonenumber | string |  | Your Fonenumber.
type | string |  | Message routing type. Allowed values are `None`, `Device`, `Email`, `URL` or `Forward`.
value | string |  | Message routing type value.
url_method<br/>_optional_ | string |  | URL method. Allowed values are `GET`, `POST`, or `JSON`. See Notes for additional information.
url_username<br/>_optional_ | string |  | URL username for HTTP **Basic** authentication scheme.
url_password<br/>_optional_ | string |  | URL password for HTTP **Basic** authentication scheme.

### Notes

#### `url_method`

When `type` is `URL` then `url_method` is required. The URL `value` is expected to be a valid HTTP or HTTPS URL that will accept data when a message is sent to the Fonenumber. One of three available methods must be specified for the execution.

- `GET` returns data through query string parameters on a `GET` to the given URL.
- `POST` returns data as _(application/x-www-form-urlencoded)_ in the body of a `POST` to the given URL.
- `JSON` returns data as _(application/json)_ in the body of a `POST` to the given URL.

## Delete Fonenumber

> Example Request

```shell
# Cancel DID `3212182662` and remove from account.
$ curl --request DELETE
--url 'https://api.fractel.net/v2/fonenumbers/3212182662'
--header 'Content-Type: application/json'
--header 'Accept: application/json'
--header 'token: key'
```

```javascript
var FracTelApi210 = require('frac_tel_api_211');

var apiInstance = new FracTelApi210.FonenumbersApi();

var fonenumber = "fonenumber_example"; // String | Your FracTEL fonenumber.


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
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FonenumbersApi();
$fonenumber = "fonenumber_example"; // string | Your FracTEL fonenumber.

try {
    $result = $api_instance->deleteFonenumbersFonenumber($fonenumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FonenumbersApi->deleteFonenumbersFonenumber: ', $e->getMessage(), PHP_EOL;
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
fonenumber = 'fonenumber_example' # str | Your FracTEL fonenumber.

try:
    # Remove fonenumber from the account.
    api_response = api_instance.delete_fonenumbers_fonenumber(fonenumber)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling FonenumbersApi->delete_fonenumbers_fonenumber: %s\n" % e)
```

> Example Response

```json
{
  "statusCode": 200,
  "fonenumber": {
    "Result": [
      "CANCELOK"
    ],
    "Number": [
      "3212182662"
    ]
  },
  "result": "SUCCESS",
  "total": 1
}
```

Remove Fonenumber from account.

### HTTP Request

Method | Route
--------- | -------
**DELETE** | `/fonenumbers/:fonenumber`

### Path Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
fonenumber | string |  | Your Fonenumber.
