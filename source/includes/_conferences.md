# Conferences

## List All Conferences

> Example Request

```shell
curl --request GET 
--url 'https://api.fonestorm.com/v2/conferences'
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
  "conferences": [
    {
      "id": "f9037cf2-363e-4506-915f-4419e5d69c52",
      "label": "Work Progress Meeting",
      "start_time": "2017-11-20T18:39:00.000Z",
      "end_time": "2017-11-20T19:39:00.000Z",
      "organizer": "a4dbe836-2f18-4c20-80a9-5298e8eb",
      "attendees": [
        "a4dbe836-2f18-4c20-80a9-5298e8eb8f78"
      ],
      "caller_id": "3217591081",
      "conference_pin": "216897",
      "conference_url": "https://requestb.in/15h1m971"
    }
  ]
}
```

Get all conferences listed under the account.

### HTTP Request

Method | Route
--------- | -------
**GET** | `/conferences`

### Response Properties

Property | Type | Description
--------- | ------- | -----------
conferences | array[object] | Array of [conference](#conference) objects.

## Create Conference

> Example Request

```shell
curl --request POST 
--url 'https://api.fonestorm.com/v2/conferences'
--header 'Content-Type: application/json'
--header 'Accept: application/json' 
--header 'token: key' 
--data '{"start_time":"2017-10-23T13:54:17+00:00", "end_time":"2017-10-23T14:54:17+00:00", "label":"Weekly progress status meeting.", "organizer": "f854e5a0-913b-4230-be26-9adf2e68edfc", "attendees":"[\"4fb07dbf-7597-4af7-8f03-05acd254c7f5\", \"f7d77a6b-53ec-47d9-a2f9-28c1764fecc8\"]" }'
```

```php
```

```python
```

> Example Response

```json
{
  "conference": {
    "id": "f9037cf2-363e-4506-915f-4419e5d69c52",
    "conference_pin": "216897"
  }
}
```

Create a conference under the account.

### HTTP Request

Method | Route
--------- | -------
**POST** | `/conferences`

### Body Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
start_time | date |  | Start time and date of conference.
end_time | date |  | End time and date of conference
id<br/>_optional_ | string |  | Identifier for conference.
label<br/>_optional_ | string |  | Label for conference.
organizer<br/>_optional_ | string |  | Organizer of conference.
attendees<br/>_optional_ | array[string] |  | Attendees of conference.
caller\_id<br/>_optional_ | string |  | Caller id for conference call.
callback\_url<br/>_optional_ | string |  | Callback URL for conference.

### Response Properties

Property | Type | Description
--------- | ------- | -----------
conference | object | [Conference](#conference) object.

## Delete Conference

> Example Request

```shell
curl --request DELETE 
--url 'https://api.fonestorm.com/v2/conferences/f9037cf2-363e-4506-915f-4419e5d69c52'
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
  "conference": {
    "id": "f9037cf2-363e-4506-915f-4419e5d69c52"
  }
}
```

Delete a conference under the account.

### HTTP Request

Method | Route
--------- | -------
**DELETE** | `/conferences/:id`

### Path Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
id | string |  | Unique identifier of conference.

### Response Properties

Property | Type | Description
--------- | ------- | -----------
conference | object | [Conference](#conference) object.

## Get Conference Details

> Example Request

```shell
curl --request GET 
--url 'https://api.fonestorm.com/v2/conferences/f9037cf2-363e-4506-915f-4419e5d69c52'
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
  "conference": {
    "id": "f9037cf2-363e-4506-915f-4419e5d69c52",
    "label": "Work Progress Meeting",
    "start_time": "2017-11-20T18:39:00.000Z",
    "end_time": "2017-11-20T19:39:00.000Z",
    "organizer": "a4dbe836-2f18-4c20-80a9-5298e8eb",
    "attendees": [
      "a4dbe836-2f18-4c20-80a9-5298e8eb8f78"
    ],
    "caller_id": "3217591081",
    "conference_pin": "216897",
    "conference_url": "https://requestb.in/15h1m971",
    "conference_status": "unknown",
    "organizer_status": false,
    "attendees_status": 0
  }
}
```

Get a conference under the account.

### HTTP Request

Method | Route
--------- | -------
**GET** | `/conferences/:id`

### Path Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
id | string |  | Identifier for conference.

### Response Properties

Property | Type | Description
--------- | ------- | -----------
conference | object | [Conference](#conference) object.

## Update Conference

> Example Request

```shell
curl --request PUT 
--url 'https://api.fonestorm.com/v2/conferences/f9037cf2-363e-4506-915f-4419e5d69c52'
--header 'Content-Type: application/json'
--header 'Accept: application/json' 
--header 'token: key' 
--data '{"label":"Progress report for the week."}'
```

```php
```

```python
```

> Example Response

```json
{
  "conference": {
    "id": "f9037cf2-363e-4506-915f-4419e5d69c52"
  }
}
```

Update a conference under the account.

### HTTP Request

Method | Route
--------- | -------
**PUT** | `/conferences/:id`

### Path Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
id | string |  | Unique identifier of conference.

### Body Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
start\_time<br/>_optional_ | date |  | Start time and date of conference.
end\_time<br/>_optional_ | date |  | End time and date of conference
label<br/>_optional_ | string |  | Label for conference.
organizer<br/>_optional_ | string |  | Organizer of conference.
attendees<br/>_optional_ | array[string] |  | Attendees of conference.
caller\_id<br/>_optional_ | string |  | Caller id for conference call.
callback\_url<br/>_optional_ | string |  | Callback URL for conference.

### Response Properties

Property | Type | Description
--------- | ------- | -----------
conference | object | [Conference](#conference) object.