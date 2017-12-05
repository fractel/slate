# Calls

## Create Call

> Example Request

```shell
# Make a voice call that plays
# a text-to-speech message
# from FoneNumber 3215551081
# to a recipient 3215551802
curl --request POST
--url 'https://api.fonestorm.com/v2/calls'
--header 'Content-Type: application/json'
--header 'Accept: application/json'
--header 'token: key'
--data '{"fonenumber":"3215551081", "to":"3215551802", "tts":"Hi, Jane this is a reminder about your appointment scheduled for tomorrow at 12:30pm."}'
```

```javascript
// Make a voice call that plays
// a text-to-speech message
// from FoneNumber 3215551081
// to a recipient 3215551802
var FoneStormApi220 = require('fone_storm_api_220');
var apiInstance = new FoneStormApi220.CallsApi();
var fonenumber = "3215551081";
var to = "3215551802";
var opts = {
  'tts': "Hi, Jane this is a reminder about your appointment scheduled for tomorrow at 12:30pm."
};
var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.postCalls(fonenumber, to, opts, callback);
```

```php
<?php
// Make a voice call that plays
// a text-to-speech message
// from FoneNumber 3215551081
// to a recipient 3215551802
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CallsApi();
$fonenumber = "3215551081";
$to = "3215551802";
$tts = "Hi, Jane this is a reminder about your appointment scheduled for tomorrow at 12:30pm.";

try {
    $result = $api_instance->postCalls($fonenumber, $to, $tts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->postCalls: ', $e->getMessage(), PHP_EOL;
}
?>
```

```python
# Make a voice call that plays
# a text-to-speech message
# from FoneNumber 3215551081
# to a recipient 3215551802
from __future__ import print_function
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.CallsApi()
fonenumber = '3215551081'
to = '3215551802'
tts = 'Hi, Jane this is a reminder about your appointment scheduled for tomorrow at 12:30pm.'

try:
    # Create a new call under the account.
    api_response = api_instance.post_calls(fonenumber, to, tts=tts)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling CallsApi->post_calls: %s\n" % e)
```

> Example Response

```json
{
  "call": {
    "id": "ce20fe86-b5ce-11e7-9eec-cf0ab03fdb06"
  }
}
```

### HTTP Request

Method | Route
--------- | -------
**POST** | `/calls`

### Body Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
fonenumber | string |  | FoneNumber to use as caller.
to | string |  | Phone number to call.
tts<br/>_optional_ | string |  | Text to speech message.

### Response Properties

Property | Type | Description
--------- | ------- | -----------
call | object | [Call](#call) object.

## Send Notify

> Example Request

```shell
# Configure FoneNumber 3215551111 to receive a callback with
# POST data (application/x-www-form-urlencoded) to url https://requestb.in/1h8v9c01
# when a voice call is made.
curl --request POST
--url 'https://api.fonestorm.com/v2/calls/send_notify'
--header 'Content-Type: application/json'
--header 'Accept: application/json'
--header 'token: key'
--data '{"fonenumber":"3215551111", "method":"JSON", "url":"https://requestb.in/1h8v9c01"}'
```

```javascript
// Configure FoneNumber 3215551111 to receive a callback with
// POST data (application/x-www-form-urlencoded) to url https://requestb.in/1h8v9c01
// when a voice call is made.
var FoneStormApi220 = require('fone_storm_api_220');
var apiInstance = new FoneStormApi220.CallsApi();
var fonenumber = "3215551111"; // String | Your FracTEL phone number
var method = "JSON"; // String | Callback URL method.
var url = "https://requestb.in/1h8v9c01"; // String | Callback URL.
var opts = {};

var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.postCallsSendNotify(fonenumber, method, url, opts, callback);
```

```php
<?php
// Configure FoneNumber 3215551111 to receive a callback with
// POST data (application/x-www-form-urlencoded) to url https://requestb.in/1h8v9c01
// when a voice call is made.
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CallsApi();
$fonenumber = "3215551111";
$method = "JSON";
$url = "https://requestb.in/1h8v9c01";

try {
    $result = $api_instance->postCallsSendNotify($fonenumber, $method, $url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->postCallsSendNotify: ', $e->getMessage(), PHP_EOL;
}
?>
```

```python
# Configure FoneNumber 3215551111 to receive a callback with
# POST data (application/x-www-form-urlencoded) to url https://requestb.in/1h8v9c01
# when a voice call is made.
from __future__ import print_function
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.CallsApi()
fonenumber = '3215551111'
method = 'JSON'
url = 'https://requestb.in/1h8v9c01'

try:
    # Configure the callback URL to notify when a call is made.
    api_response = api_instance.post_calls_send_notify(fonenumber, method, url)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling CallsApi->post_calls_send_notify: %s\n" % e)
```

> Example Response

```json
{
  "fonenumber": {
    "fonenumber": "3215551111",
    "state": "FL",
    "rate_center": "ORLANDO",
    "is_active": "yes",
    "sms_options": {
      "receive": {
        "type": "",
        "email": "",
        "device": "",
        "forward": "",
        "url": "",
        "url_method": ""
      },
      "receive_notify": {
        "url": "",
        "method": ""
      },
      "send_notify": {
        "url": "",
        "method": ""
      },
      "sms_enabled": "no",
      "mms_enabled": "no"
    },
    "voice_options": {
      "receive_notify": {
        "url": "",
        "method": ""
      },
      "send_notify": {
        "url": "https://requestb.in/1h8v9c01",
        "method": "JSON"
      }
    },
    "fax_options": {
      "receive_notify": {
        "url": "",
        "method": ""
      },
      "send_notify": {
        "url": "",
        "method": ""
      }
    }
  }
}
```

Configure the callback URL to notify when an outbound call is made. Each FoneNumber can be configured to use its own callback URL for handling send notifications.

### HTTP Request

Method | Route
--------- | -------
**POST** | `/calls/send_notify`

### Body Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
fonenumber | string |  | A FoneNumber associated with the account.
method | string | | Allowed values are `GET`,`POST`, or `JSON`. See **Notes** for additional information.
url | string | | Callback URL. See **Notes** for additional information.
url\_username<br/>_optional_ | string | | Callback URL username.
url\_username<br/>_optional_ | string | | Callback URL password.

### Response Properties

Property | Type | Description
--------- | ------- | -----------
fonenumber | object | [FoneNumber](#fonenumber) object.

### Notes

#### `url`

This is a valid HTTP or HTTPS URL that will accept callback data when an outbound call is made from the FoneNumber specified in `fonenumber`.

#### `method`

One of three available methods must be specified for the callback execution.

- `GET` returns data through query string parameters on a `GET` to the given URL.
- `POST` returns data as _(application/x-www-form-urlencoded)_ in the body of a `POST` to the given URL.
- `JSON` returns data as _(application/json)_ in the body of a `POST` to the given URL.

#### Callback Data

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
uid | string | | Unique identifier for the call.
account_code | string | | FoneStorm account code.
direction | string | |  Call direction (`OUTBOUND`)
status | string | |  Call status (`BEGIN` or `END`)
from | string | | FoneNumber of sender.
to | string | | Phone number of recipient.
type | string | | Call type (`VOICE`)
disposition | string | | Call disposition (`ANSWERED`, `NO_ANSWER`, `BUSY`, `CANCEL`, `REJECTED`, `FAILED:XXX`) if _status_ is `END`
billable_seconds | number | | Billable seconds for the call if _status_ is `END`

Callback URLs using the `GET` method use token replacements to place callback data values in query string parameters. For example, the following partial query string maps each callback data value to parameters in the query string: `recipient={{to}}&caller={{from}}&account={{account_code}}&id={{uid}}`

## Receive Notify

> Example Request

```shell
# Configure FoneNumber 3215551111 to receive a callback with
# JSON payload data (application/json) to url https://requestb.in/1h8v9c01
# when a voice call is received.
curl --request POST
--url 'https://api.fonestorm.com/v2/calls/receive_notify'
--header 'Content-Type: application/json'
--header 'Accept: application/json'
--header 'token: key'
--data '{"fonenumber":"3215551111", "method":"JSON", "url":"https://requestb.in/1h8v9c01"}'
```

```javascript
// Configure FoneNumber 3215551111 to receive a callback with
// JSON payload data (application/json) to url https://requestb.in/1h8v9c01
// when a voice call is received.
var FoneStormApi220 = require('fone_storm_api_220');
var apiInstance = new FoneStormApi220.CallsApi();
var fonenumber = "3215551111";
var method = "JSON";
var url = "https://requestb.in/1h8v9c01";
var opts = {};

var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.postCallsReceiveNotify(fonenumber, method, url, opts, callback);
```

```php
<?php
// Configure FoneNumber 3215551111 to receive a callback with
// JSON payload data (application/json) to url https://requestb.in/1h8v9c01
// when a voice call is received.
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CallsApi();
$fonenumber = "3215551111";
$method = "method_example";
$url = "https://requestb.in/1h8v9c01";

try {
    $result = $api_instance->postCallsReceiveNotify($fonenumber, $method, $url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->postCallsReceiveNotify: ', $e->getMessage(), PHP_EOL;
}
?>
```

```python
# Configure FoneNumber 3215551111 to receive a callback with
# JSON payload data (application/json) to url https://requestb.in/1h8v9c01
# when a voice call is received.
from __future__ import print_function
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.CallsApi()
fonenumber = '3215551111'
method = 'JSON'
url = 'https://requestb.in/1h8v9c01'

try:
    # Configure the callback URL to notify when a call is received.
    api_response = api_instance.post_calls_receive_notify(fonenumber, method, url)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling CallsApi->post_calls_receive_notify: %s\n" % e)
```

> Example Response

```json
{
  "fonenumber": {
    "fonenumber": "3215551111",
    "state": "FL",
    "rate_center": "ORLANDO",
    "is_active": "yes",
    "sms_options": {
      "receive": {
        "type": "",
        "email": "",
        "device": "",
        "forward": "",
        "url": "",
        "url_method": ""
      },
      "receive_notify": {
        "url": "",
        "method": ""
      },
      "send_notify": {
        "url": "",
        "method": ""
      },
      "sms_enabled": "no",
      "mms_enabled": "no"
    },
    "voice_options": {
      "receive_notify": {
        "url": "https://requestb.in/1h8v9c01",
        "method": "JSON"
      },
      "send_notify": {
        "url": "",
        "method": ""
      }
    },
    "fax_options": {
      "receive_notify": {
        "url": "",
        "method": ""
      },
      "send_notify": {
        "url": "",
        "method": ""
      }
    }
  }
}
```

Configure the callback URL to notify when a call is received. Each FoneNumber can be configured to use its own callback URL for handling receive notifications.

### HTTP Request

Method | Route
--------- | -------
**POST** | `/calls/receive_notify`

### Body Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
fonenumber | string |  | A FoneNumber associated with the account.
url | string | | Callback URL. See **Notes** for additional information.
method | string | | Allowed values are `GET`,`POST`, or `JSON`. See **Notes** for additional information.
url\_username<br/>_optional_ | string | | Callback URL username.
url\_username<br/>_optional_ | string | | Callback URL password.

### Response Properties

Property | Type | Description
--------- | ------- | -----------
fonenumber | object | [FoneNumber](#fonenumber) object.

### Notes

#### `url`

This is a valid HTTP or HTTPS URL that will accept callback data when an inbound call is received to the FoneNumber specified in `fonenumber`.

#### `method`

One of three available methods must be specified for the callback execution.

- `GET` returns data through query string parameters on a `GET` to the given URL.
- `POST` returns data as _(application/x-www-form-urlencoded)_ in the body of a `POST` to the given URL.
- `JSON` returns data as _(application/json)_ in the body of a `POST` to the given URL.

#### Callback Data

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
uid | string | | Unique identifier for the call.
account_code | string | | FoneStorm account code.
direction | string | |  Call direction (`INBOUND`)
status | string | |  Call status (`BEGIN` or `END`)
from | string | | FoneNumber of sender.
to | string | | Phone number of recipient.
type | string | | Call type (`VOICE`)
disposition | string | | Call disposition (`ANSWERED`, `NO_ANSWER`, `BUSY`, `CANCEL`, `REJECTED`, `FAILED:XXX`) if _status_ is `END`
billable_seconds | number | | Billable seconds for the call if _status_ is `END`

Callback URLs using the `GET` method use token replacements to place callback data values in query string parameters. For example, the following partial query string maps each callback data value to parameters in the query string: `recipient={{to}}&caller={{from}}&account={{account_code}}&id={{uid}}`
