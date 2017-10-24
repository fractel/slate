# Events

## List All Events

> Example Request

```shell
curl --request GET 
--url 'https://api.fonestorm.com/v2/events'
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
  "events": [
  	{
      "id": "be9bdf49-69a9-4897-9406-bf4989eab01a",
      "account_id": "1005453212",
      "end_time": "2017-10-20T22:39:37.000Z",
      "start_time": "2017-10-20T21:39:37.000Z",
      "title": "Work Meeting",
      "location": "Meeting Phone Bridge",
      "description": "Status report for the week.",
      "status": "PENDING",
      "reschedule_count": 0,
      "created_at": "2017-10-20T21:42:19.000Z",
      "updated_at": "2017-10-20T21:42:19.000Z",
      "organizer": {
        "full_name": "John Doe",
        "id": "a4dbe836-2f18-4c20-80a9-5298e8eb8f78",
        "account_id": "2005553216",
        "email": "john@doe.net",
        "first_name": "John",
        "last_name": "Doe",
        "opt_in_call": false,
        "opt_in_email": true,
        "opt_in_fax": true,
        "opt_in_message": true,
        "phone": "3215551081",
        "created_at": "2017-10-12T20:08:00.000Z",
        "updated_at": "2017-10-12T20:08:00.000Z"
      },
      "attendees": [
        {
          "full_name": "Jane Doe",
          "id": "a4dbe836-2f18-4c20-80a9-5298e8eb8f78",
          "account_id": "2005553216",
          "email": "jane@doe.net",
          "first_name": "Jane",
          "last_name": "Doe",
          "opt_in_call": false,
          "opt_in_email": true,
          "opt_in_fax": true,
          "opt_in_message": true,
          "phone": "3215558110",
          "created_at": "2017-10-12T20:08:00.000Z",
          "updated_at": "2017-10-12T20:08:00.000Z"
        }
      ]
    }
  ]
}
```

Get all events listed under the account.

### HTTP Request

Method | Route
--------- | -------
**GET** | `/events`

### Response Properties

Property | Type | Description
--------- | ------- | -----------
events | array[object] | Array of [event](#event) objects.

## Create Event

> Example Request

```shell
curl --request POST 
--url 'https://api.fonestorm.com/v2/events'
--header 'Content-Type: application/json'
--header 'Accept: application/json' 
--header 'token: key' 
--data '{"title":"Work Meeting", "location":"Meeting Phone Bridge", "start_time":"2017-10-20T21:39:37.000Z", "end_time":"2017-10-20T22:39:37.000Z", "organizer":"a4dbe836-2f18-4c20-80a9-5298e8eb8f78", "attendees":"[\"n4dbe836-1f18-4c20-90a9-5298e8eb8f78\"]"}'
```

```php
```

```python
```

> Example Response

```json
{
  "event": {
    "id": "be9bdf49-69a9-4897-9406-bf4989eab01a",
    "account_id": "1005453212",
    "end_time": "2017-10-20T22:39:37.000Z",
    "start_time": "2017-10-20T21:39:37.000Z",
    "title": "Work Meeting",
    "location": "Meeting Phone Bridge",
    "description": "Status report for the week.",
    "status": "PENDING",
    "reschedule_count": 0,
    "created_at": "2017-10-20T21:42:19.000Z",
    "updated_at": "2017-10-20T21:42:19.000Z",
    "organizer": {
      "full_name": "John Doe",
      "id": "a4dbe836-2f18-4c20-80a9-5298e8eb8f78",
      "account_id": "2005553216",
      "email": "john@doe.net",
      "first_name": "John",
      "last_name": "Doe",
      "opt_in_call": false,
      "opt_in_email": true,
      "opt_in_fax": true,
      "opt_in_message": true,
      "phone": "3215551081",
      "created_at": "2017-10-12T20:08:00.000Z",
      "updated_at": "2017-10-12T20:08:00.000Z"
    },
    "attendees": [
      {
        "full_name": "Jane Doe",
        "id": "n4dbe836-1f18-4c20-90a9-5298e8eb8f78",
        "account_id": "2005553216",
        "email": "jane@doe.net",
        "first_name": "Jane",
        "last_name": "Doe",
        "opt_in_call": false,
        "opt_in_email": true,
        "opt_in_fax": true,
        "opt_in_message": true,
        "phone": "3215558110",
        "created_at": "2017-10-12T20:08:00.000Z",
        "updated_at": "2017-10-12T20:08:00.000Z"
      }
    ]
  }
}
```

Create an event under the account.

### HTTP Request

Method | Route
--------- | -------
**POST** | `/events`

### Body Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
id | string | | Event id.
organizer\_contact\_id | string | | Event organizer contact id.
start_time | date | | Event start time.
end_time | date | | Event end time.
title | string | | Event title.
attendees | array[string] | | Event attendee contact ids.
description<br/>_optional_ | string | | Event description.
location<br/>_optional_ | string | | Event location.
status<br/>_optional_ | string | PENDING | Event status (`PENDING`, `PROCESSED`, `CANCELLED`, `FAILED`, `SUSPENDED`)
reschedule\_count<br/>_optional_ | integer | 0 | Event reschedule count.

### Response Properties

Property | Type | Description
--------- | ------- | -----------
event | object | [Event](#event) object.

## Delete Event

> Example Request

```shell
curl --request DELETE 
--url 'https://api.fonestorm.com/v2/events/7953046e-9edb-414b-bf2e-82edd4779e53'
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
  "event": {
    "id": "7953046e-9edb-414b-bf2e-82edd4779e53",
    "account_id": "1005453212",
    "end_time": "2017-10-20T22:39:37.000Z",
    "start_time": "2017-10-20T21:39:37.000Z",
    "title": "Work Meeting",
    "location": "Meeting Phone Bridge",
    "description": "Status report for the week.",
    "status": "PENDING",
    "reschedule_count": 0,
    "created_at": "2017-10-20T21:42:19.000Z",
    "updated_at": "2017-10-20T21:42:19.000Z",
    "organizer": {
      "full_name": "John Doe",
      "id": "a4dbe836-2f18-4c20-80a9-5298e8eb8f78",
      "account_id": "2005553216",
      "email": "john@doe.net",
      "first_name": "John",
      "last_name": "Doe",
      "opt_in_call": false,
      "opt_in_email": true,
      "opt_in_fax": true,
      "opt_in_message": true,
      "phone": "3215551081",
      "created_at": "2017-10-12T20:08:00.000Z",
      "updated_at": "2017-10-12T20:08:00.000Z"
    },
    "attendees": [
      {
        "full_name": "Jane Doe",
        "id": "n4dbe836-1f18-4c20-90a9-5298e8eb8f78",
        "account_id": "2005553216",
        "email": "jane@doe.net",
        "first_name": "Jane",
        "last_name": "Doe",
        "opt_in_call": false,
        "opt_in_email": true,
        "opt_in_fax": true,
        "opt_in_message": true,
        "phone": "3215558110",
        "created_at": "2017-10-12T20:08:00.000Z",
        "updated_at": "2017-10-12T20:08:00.000Z"
      }
    ]
  }
}
```

Delete an event under the account.

### HTTP Request

Method | Route
--------- | -------
**DELETE** | `/events/:id`

### Path Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
id | string |  | Identifier for event.

### Response Properties

Property | Type | Description
--------- | ------- | -----------
event | object | [Event](#event) object.

## Get Event Details

> Example Request

```shell
curl --request GET 
--url 'https://api.fonestorm.com/v2/events/be9bdf49-69a9-4897-9406-bf4989eab01a'
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
  "event": {
    "id": "be9bdf49-69a9-4897-9406-bf4989eab01a",
    "account_id": "1005453212",
    "end_time": "2017-10-20T22:39:37.000Z",
    "start_time": "2017-10-20T21:39:37.000Z",
    "title": "Work Meeting",
    "location": "Meeting Phone Bridge",
    "description": "Status report for the week.",
    "status": "PENDING",
    "reschedule_count": 0,
    "created_at": "2017-10-20T21:42:19.000Z",
    "updated_at": "2017-10-20T21:42:19.000Z",
    "organizer": {
      "full_name": "John Doe",
      "id": "a4dbe836-2f18-4c20-80a9-5298e8eb8f78",
      "account_id": "2005553216",
      "email": "john@doe.net",
      "first_name": "John",
      "last_name": "Doe",
      "opt_in_call": false,
      "opt_in_email": true,
      "opt_in_fax": true,
      "opt_in_message": true,
      "phone": "3215551081",
      "created_at": "2017-10-12T20:08:00.000Z",
      "updated_at": "2017-10-12T20:08:00.000Z"
    },
    "attendees": [
      {
        "full_name": "Jane Doe",
        "id": "a4dbe836-2f18-4c20-80a9-5298e8eb8f78",
        "account_id": "2005553216",
        "email": "jane@doe.net",
        "first_name": "Jane",
        "last_name": "Doe",
        "opt_in_call": false,
        "opt_in_email": true,
        "opt_in_fax": true,
        "opt_in_message": true,
        "phone": "3215558110",
        "created_at": "2017-10-12T20:08:00.000Z",
        "updated_at": "2017-10-12T20:08:00.000Z"
      }
    ]
  }
}
```

Get an event under the account.

### HTTP Request

Method | Route
--------- | -------
**GET** | `/events/:id`

### Path Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
id | string |  | Identifier for event.

### Response Properties

Property | Type | Description
--------- | ------- | -----------
event | object | [Event](#event) object.

## Update Event

> Example Request

```shell
curl --request PUT 
--url 'https://api.fonestorm.com/v2/events/be9bdf49-69a9-4897-9406-bf4989eab01a'
--header 'Content-Type: application/json'
--header 'Accept: application/json' 
--header 'token: key' 
--data '{"title":"Status Meeting"}'
```

```php
```

```python
```

> Example Response

```json
{
  "event": {
    "id": "be9bdf49-69a9-4897-9406-bf4989eab01a",
    "account_id": "1005453212",
    "end_time": "2017-10-20T22:39:37.000Z",
    "start_time": "2017-10-20T21:39:37.000Z",
    "title": "Status Meeting",
    "location": "Meeting Phone Bridge",
    "description": "Status report for the week.",
    "status": "PENDING",
    "reschedule_count": 0,
    "created_at": "2017-10-20T21:42:19.000Z",
    "updated_at": "2017-10-20T21:42:19.000Z",
    "organizer": {
      "full_name": "John Doe",
      "id": "a4dbe836-2f18-4c20-80a9-5298e8eb8f78",
      "account_id": "2005553216",
      "email": "john@doe.net",
      "first_name": "John",
      "last_name": "Doe",
      "opt_in_call": false,
      "opt_in_email": true,
      "opt_in_fax": true,
      "opt_in_message": true,
      "phone": "3215551081",
      "created_at": "2017-10-12T20:08:00.000Z",
      "updated_at": "2017-10-12T20:08:00.000Z"
    },
    "attendees": [
      {
        "full_name": "Jane Doe",
        "id": "a4dbe836-2f18-4c20-80a9-5298e8eb8f78",
        "account_id": "2005553216",
        "email": "jane@doe.net",
        "first_name": "Jane",
        "last_name": "Doe",
        "opt_in_call": false,
        "opt_in_email": true,
        "opt_in_fax": true,
        "opt_in_message": true,
        "phone": "3215558110",
        "created_at": "2017-10-12T20:08:00.000Z",
        "updated_at": "2017-10-12T20:08:00.000Z"
      }
    ]
  }
}
```

Update an event under the account.

### HTTP Request

Method | Route
--------- | -------
**PUT** | `/events/:id`

### Path Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
id | string |  | Identifier for event.

### Body Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
organizer\_contact\_id<br/>_optional_  | string | | Event organizer contact id.
start\_time<br/>_optional_  | date | | Event start time.
end\_time<br/>_optional_  | date | | Event end time.
title<br/>_optional_  | string | | Event title.
attendees<br/>_optional_  | array[string] | | Event attendee contact ids.
description<br/>_optional_ | string | | Event description.
location<br/>_optional_ | string | | Event location.
status<br/>_optional_ | string | | Event status (`PENDING`, `PROCESSED`, `CANCELLED`, `FAILED`, `SUSPENDED`)
reschedule\_count<br/>_optional_ | integer | | Event reschedule count.

### Response Properties

Property | Type | Description
--------- | ------- | -----------
event | object | [Event](#event) object.