# Calls

## Create Call

> Example Request

```shell
curl --request POST 
--url 'https://api.fonestorm.com/v2/calls'
--header 'Content-Type: application/json'
--header 'Accept: application/json' 
--header 'token: key' 
--data '{"fonenumber":"3215551081", "to":"3215551801", "tts":"Hi, Jane this is a reminder about your appointment scheduled for tomorrow at 12:30pm."}'
```

```javascript
```

```php
```

```python
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
curl --request POST 
--url 'https://api.fonestorm.com/v2/calls/send_notify'
--header 'Content-Type: application/json'
--header 'Accept: application/json' 
--header 'token: key' 
--data '{"fonenumber":"3215551081", "method":"JSON", "url":"https://requestb.in/1h8v9c01"}'
```

```javascript
```

```php
```

```python
```

> Example Response

```json
{
  "callback": {
    "url": "https://requestb.in/16fu9oz1",
    "method": "JSON"
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
curl --request POST 
--url 'https://api.fonestorm.com/v2/calls/receive_notify'
--header 'Content-Type: application/json'
--header 'Accept: application/json' 
--header 'token: key' 
--data '{"fonenumber":"3215551081", "method":"JSON", "url":"https://requestb.in/1h8v9c01"}'
```

```javascript
```

```php
```

```python
```

> Example Response

```json
{
  "callback": {
    "url": "https://requestb.in/16fu9oz1",
    "method": "JSON"
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
