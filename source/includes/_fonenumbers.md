# Fonenumbers

## List All Fonenumbers

> Example Request

```shell
# Get all fonenumbers under account.
$ curl --request GET
--url 'https://api.fractel.net/v2/fonenumbers'
--header 'Content-Type: application/json'
--header 'Accept: application/json'
--header 'token: key'
```

> Example Response

```json
{
  "statusCode": 200,
  "fonenumbers": [
    {
      "fonenumber": "8889807630",
      "serviceType": "TimeOfDayRoute",
      "receive": {
        "url": "https://hookb.in/Ew7WzAb2",
        "method": "JSON",
        "username": "johndoe",
        "password": "secret"
      },
      "receiveNotify": {
        "url": "https://hookb.in/Ew7WzAb2",
        "method": "JSON",
        "username": "johndoe",
        "password": "secret"
      },
      "sendNotify": {
        "url": "https://hookb.in/Ew7WzAb2",
        "method": "JSON",
        "username": "johndoe",
        "password": "secret"
      },
      "isActive": "yes"
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

### Query Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
filter | string | fonenumbers | Filter the response attributes. Allowed values are `fonenumbers` or `all`. See Notes for additional information.

### Notes

#### `filter`

The default `filter` value is `fonenumbers`. For a more detailed response you may use `all`.

- `fonenumbers` returns an array of fonenumber strings.
- `all` returns an array of fonenumber objects.

## Order New Fonenumber

> Example Request

```shell
# Order quick fonenumber with a `321` area code.
$ curl --request POST
--url 'https://api.fractel.net/v2/fonenumbers'
--header 'Content-Type: application/json'
--header 'Accept: application/json'
--header 'token: key'
--data '{"area_code": "321" }'
```

> Example Response

```json
{
  "statusCode": 200,
  "fonenumber": {
    "fonenumber": "3212335701",
    "smsEnabled": "yes",
    "mmsEnabled": "yes",
    "state": "FL",
    "rateCenter": "SANFORD"
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
# Get details for fonenumber `3212182662`
$ curl --request GET
--url 'https://api.fractel.net/v2/fonenumbers/3212182662'
--header 'Content-Type: application/json'
--header 'Accept: application/json'
--header 'token: key'
```

> Example Response

```json
{
  "statusCode": 200,
  "fonenumber": {
    "fonenumber": "3212335701",
    "serviceType": "TrunkGroup",
    "receive": {
      "url": "https://hookb.in/Ew7WzAb2",
      "method": "JSON",
      "username": "johndoe",
      "password": "secret"
    },
    "receiveNotify": {
      "url": "https://hookb.in/Ew7WzAb2",
      "method": "JSON",
      "username": "johndoe",
      "password": "secret"
    },
    "sendNotify": {
      "url": "https://hookb.in/Ew7WzAb2",
      "method": "JSON",
      "username": "johndoe",
      "password": "secret"
    },
    "isActive": "yes"
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
# Set fonenumber service type for `3212182662`
# to receive messages to email address `support@domain.com`
$ curl --request PUT
--url 'https://api.fractel.net/v2/fonenumbers/3212182662'
--header 'Content-Type: application/json'
--header 'Accept: application/json'
--header 'token: key'
--data '{"type": "Email", "value": "support@domain.com"}'
```

> Example Response

```json
{
  "statusCode": 200,
  "result": "SUCCESS"
}
```

Configure the service type for account Fonenumber.

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
# Cancel fonenumber `3212182662` and remove from account.
$ curl --request DELETE
--url 'https://api.fractel.net/v2/fonenumbers/3212182662'
--header 'Content-Type: application/json'
--header 'Accept: application/json'
--header 'token: key'
```

> Example Response

```json
{
  "statusCode": 200,
  "fonenumber": "3212335701",
  "result": "SUCCESS"
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
