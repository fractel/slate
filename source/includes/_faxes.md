# Faxes

## Send Fax

> Example Request

```shell
curl --request POST 
--url 'https://api.fonestorm.com/v2/faxes'
--header 'Content-Type: application/json'
--header 'Accept: application/json' 
--header 'token: key' 
--data '{"fonenumber":"3215551081", "to":"3215551810", "message":"Your order has been confirmed. As requested, we've attached the PDF to this fax.", "url":"https://domain.com/invoices/e4a38358-5044-4f79-8bb8-518c02b38839.pdf"}'
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
  "fax": {
    "id": "cca3a989-8942-462d-b7fa-878d47687d63"
  }
}
```

### HTTP Request

Method | Route
--------- | -------
**POST** | `/faxes`

### Body Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
fonenumber | string |  | FracTEL fonenumber to use for fax.
to | string |  | Phone number to fax.
message | string |  | Message to fax.
pdf<br/>_optional_ | string | | URL of a PDF file to send with fax.


### Response Properties

Property | Type | Description
--------- | ------- | -----------
fax | object | [Fax](#fax) object.

## Send Notify

> Example Request

```shell
curl --request POST 
--url 'https://api.fonestorm.com/v2/faxes/send_notify'
--header 'Content-Type: application/json'
--header 'Accept: application/json' 
--header 'token: key' 
--data '{"fonenumber":"3215551111", "method":"JSON", "url":"https://requestb.in/1h8v9c01"}'
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
        "url": "https://requestb.in/1h8v9c01",
        "method": "JSON"
      }
    }
  }
}
```

Configure the callback URL to notify when an outbound fax is made. Each FoneNumber can be configured to use its own callback URL for handling send notifications.

### HTTP Request

Method | Route
--------- | -------
**POST** | `/faxes/send_notify`

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

This is a valid HTTP or HTTPS URL that will accept callback data when an outbound fax is sent from the FoneNumber specified in `fonenumber`.

#### `method`

One of three available methods must be specified for the callback execution.

- `GET` returns data through query string parameters on a `GET` to the given URL.
- `POST` returns data as _(application/x-www-form-urlencoded)_ in the body of a `POST` to the given URL.
- `JSON` returns data as _(application/json)_ in the body of a `POST` to the given URL.

#### Callback Data

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
uid | string | | Unique identifier for the fax.
account_code | string | | FoneStorm account code.
status | string | |  Fax status (`SUCCESS` or `FAILED`)
from | string | | FoneNumber of sender.
to | string | | Phone number of recipient.
timestamp | string | | Time stamp.
file | string | | Fax file URL.
type | string | | Call type (`VOICE`)
attempts | number | | Number of fax attempts.
pages | number | | Number of total pages.
pages_transmitted | number | | Number of transmitted pages.

Callback URLs using the `GET` method use token replacements to place callback data values in query string parameters. For example, the following partial query string maps each callback data value to parameters in the query string: `recipient={{to}}&sender={{from}}&id={{uid}}`

## Receive Notify

> Example Request

```shell
curl --request POST 
--url 'https://api.fonestorm.com/v2/faxes/receive_notify'
--header 'Content-Type: application/json'
--header 'Accept: application/json' 
--header 'token: key' 
--data '{"fonenumber":"3215551111", "method":"JSON", "url":"https://requestb.in/1h8v9c01"}'
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
        "url": "",
        "method": ""
      }
    },
    "fax_options": {
      "receive_notify": {
        "url": "https://requestb.in/1h8v9c01",
        "method": "JSON"
      },
      "send_notify": {
        "url": "",
        "method": ""
      }
    }
  }
}
```

Configure the callback URL to notify when an inbound fax is received. Each FoneNumber can be configured to use its own callback URL for handling receive notifications.

### HTTP Request

Method | Route
--------- | -------
**POST** | `/faxes/receive_notify`

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

This is a valid HTTP or HTTPS URL that will accept callback data when a fax is sent to the FoneNumber specified in `fonenumber`.

#### `method`

One of three available methods must be specified for the callback execution.

- `GET` returns data through query string parameters on a `GET` to the given URL.
- `POST` returns data as _(application/x-www-form-urlencoded)_ in the body of a `POST` to the given URL.
- `JSON` returns data as _(application/json)_ in the body of a `POST` to the given URL.

#### Callback Data

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
uid | string | | Unique identifier for the fax.
account_code | string | | FoneStorm account code.
status | string | |  Fax status (`SUCCESS` or `FAILED`)
from | string | | FoneNumber of sender.
to | string | | Phone number of recipient.
timestamp | string | | Time stamp.
file | string | | Fax file URL.
type | string | | Call type (`VOICE`)
attempts | number | | Number of fax attempts.
pages | number | | Number of total pages.
pages_transmitted | number | | Number of transmitted pages.

Callback URLs using the `GET` method use token replacements to place callback data values in query string parameters. For example, the following partial query string maps each callback data value to parameters in the query string: `recipient={{to}}&sender={{from}}&id={{uid}}`
