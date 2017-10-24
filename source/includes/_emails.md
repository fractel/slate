# Emails

## List All Emails

> Example Request

```shell
curl --request GET 
--url 'https://api.fonestorm.com/v2/emails'
--header 'Content-Type: application/json'
--header 'Accept: application/json' 
--header 'token: key'
```

```php
```

```python
```

> Example Response

```json
{
  "emails": [
    {
      "id": "EVT5774247349",
      "to": [
        "john@doe.net"
      ],
      "from": "jane@doe.net",
      "subject": "Hey John",
      "body": "This%20is%20a%20reminder%20about%20our%20appointment.",
      "time": "2017-10-20T21:22:00.000Z",
      "send_individually": true
    }
  ]
}
```

Get all emails listed under the account.

### HTTP Request

Method | Route
--------- | -------
**GET** | `/emails`

### Response Properties

Property | Type | Description
--------- | ------- | -----------
emails | array[object] | Array of [email](#email) objects.

## Create Email

> Example Request

```shell
curl --request POST 
--url 'https://api.fonestorm.com/v2/emails'
--header 'Content-Type: application/json'
--header 'Accept: application/json' 
--header 'token: key' 
--data '{"from":"john@doe.net", "to":"[\"jane@doe.net\"]", "subject":"Order Shipped", "message":"Your order has been shipped."}'
```

```php
```

```python
```

> Example Response

```json
{
  "email": {
    "id": "EVT5774247349"
  }
}
```

Create an email under the account.

### HTTP Request

Method | Route
--------- | -------
**POST** | `/emails`

### Body Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
from | string | | Email address of sender.
to | array[string] | | Email addresses of receivers.
subject<br/>_optional_ | string | | Email subject.
body<br/>_optional_ | string | | Email body.
time<br/>_optional_ | string | | Send time and date for email. Leave blank to send immediately.
send\_individually<br/>_optional_ | string | | Send individual emails to each recepient.

### Response Properties

Property | Type | Description
--------- | ------- | -----------
email | object | [Email](#email) object.

## Delete Email

> Example Request

```shell
curl --request DELETE 
--url 'https://api.fonestorm.com/v2/emails/EVT5774247349'
--header 'Content-Type: application/json'
--header 'Accept: application/json' 
--header 'token: key'
```

```php
```

```python
```

> Example Response

```json
{
  "email": {
    "id": "EVT5774247349"
  }
}
```

Delete an email under the account.

### HTTP Request

Method | Route
--------- | -------
**DELETE** | `/emails/:id`

### Path Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
id | string |  | Identifier for email.

### Response Properties

Property | Type | Description
--------- | ------- | -----------
email | object | [Email](#email) object.

## Get Email Details

> Example Request

```shell
curl --request GET 
--url 'https://api.fonestorm.com/v2/emails/EVT5774247349'
--header 'Content-Type: application/json'
--header 'Accept: application/json' 
--header 'token: key'
```

```php
```

```python
```

> Example Response

```json
{
  "email": {
    "id": "EVT5774247349",
    "to": [
      "john@doe.net"
    ],
    "from": "jane@doe.net",
    "subject": "Hey John",
    "body": "This%20is%20a%20reminder%20about%20our%20appointment.",
    "time": "2017-10-20T21:22:00.000Z",
    "send_individually": true
  }
}
```

Get an email under the account.

### HTTP Request

Method | Route
--------- | -------
**GET** | `/emails/:id`

### Path Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
id | string |  | Identifier for email.

### Response Properties

Property | Type | Description
--------- | ------- | -----------
email | object | [Email](#email) object.

## Update Email

> Example Request

```shell
curl --request PUT 
--url 'https://api.fonestorm.com/v2/emails/EVT5774247349'
--header 'Content-Type: application/json'
--header 'Accept: application/json' 
--header 'token: key' 
--data '{}'
```

```php
```

```python
```

> Example Response

```json
{
  "email": {
    "id": "EVT5774247349"
  }
}
```

Update an email under the account.

### HTTP Request

Method | Route
--------- | -------
**PUT** | `/emails/:id`

### Path Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
id | string |  | Identifier for email.

### Body Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
from<br/>_optional_ | string | | Email address of sender.
to<br/>_optional_ | array[string] | | Email addresses of receivers.
subject<br/>_optional_ | string | | Email subject.
body<br/>_optional_ | string | | Email body.
time<br/>_optional_ | string | | Send time and date for email. Leave blank to send immediately.
send\_individually<br/>_optional_ | string | | Send individual emails to each recepient.
### Response Properties

Property | Type | Description
--------- | ------- | -----------
email | object | [Email](#email) object.