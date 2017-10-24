# Contacts

## List All Contacts

> Example Request

```shell
curl --request GET 
--url 'https://api.fonestorm.com/v2/contacts'
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
  "contacts": [
    {
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
      "updated_at": "2017-10-13T20:03:43.000Z"
    }
  ]
}
```

Get all contacts listed under the account.

### HTTP Request

Method | Route
--------- | -------
**GET** | `/contacts`

### Response Properties

Property | Type | Description
--------- | ------- | -----------
contacts | array[object] | Array of [contact](#contact) objects.

## Create Contact

> Example Request

```shell
curl --request POST 
--url 'https://api.fonestorm.com/v2/contacts'
--header 'Content-Type: application/json'
--header 'Accept: application/json' 
--header 'token: key' 
--data '{"email":"jane@doe.net", "phone":"3215558101", "first_name":"Jane", "last_name":"Doe"}'
```

```php
```

```python
```

> Example Response

```json
{
  "contact": {
    "full_name": "Jane Doe",
    "id": "7aa2907e-d468-4868-88e7-e00d2c0c7b55",
    "email": "jane@doe.net",
    "first_name": "Jane",
    "last_name": "Doe",
    "opt_in_call": true,
    "opt_in_email": false,
    "opt_in_fax": false,
    "opt_in_message": true,
    "phone": "3215558101",
    "account_id": "2005353211",
    "updated_at": "2017-10-20T20:22:03.236Z",
    "created_at": "2017-10-20T20:22:03.236Z"
  }
}
```

Create a contact under the account.

### HTTP Request

Method | Route
--------- | -------
**POST** | `/contacts`

### Body Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
email | string | | Contact email address.
first\_name<br/>_optional_ | string | | Contact first name.
last\_name<br/>_optional_ | string | | Contact last name.
phone<br/>_optional_ | string | | Contact phone number.
opt\_in\_call<br/>_optional_ | boolean | | Contact opt-in preference for calls.
opt\_in\_email<br/>_optional_ | boolean | | Contact opt-in preference for emails.
opt\_in\_fax<br/>_optional_ | boolean | | Contact opt-in preference for faxes.
opt\_in\_message<br/>_optional_ | boolean | | Contact opt-in preference for messages.

### Response Properties

Property | Type | Description
--------- | ------- | -----------
contact | object | [Contact](#contact) object.

## Delete Contact

> Example Request

```shell
curl --request DELETE 
--url 'https://api.fonestorm.com/v2/contacts/7953046e-9edb-414b-bf2e-82edd4779e53'
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
  "contact": {
    "full_name": "Jane Doe",
    "id": "7aa2907e-d468-4868-88e7-e00d2c0c7b55",
    "email": "jane@doe.net",
    "first_name": "Jane",
    "last_name": "Doe",
    "opt_in_call": true,
    "opt_in_email": false,
    "opt_in_fax": false,
    "opt_in_message": true,
    "phone": "3215558101",
    "account_id": "2005353211",
    "updated_at": "2017-10-20T20:22:03.236Z",
    "created_at": "2017-10-20T20:22:03.236Z"
  }
}
```

Delete a contact under the account.

### HTTP Request

Method | Route
--------- | -------
**DELETE** | `/contacts/:id`

### Path Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
id | string |  | Identifier for contact.

### Response Properties

Property | Type | Description
--------- | ------- | -----------
contact | object | [Contact](#contact) object.

## Get Contact Details

> Example Request

```shell
curl --request GET 
--url 'https://api.fonestorm.com/v2/contacts/a4dbe836-2f18-4c20-80a9-5298e8eb8f78'
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
  "contact": {
    "full_name": "John Doe",
    "id": "a4dbe836-2f18-4c20-80a9-5298e8eb8f78",
    "account_id": "2005353211",
    "email": "john@doe.net",
    "first_name": "John",
    "last_name": "Doe",
    "opt_in_call": false,
    "opt_in_email": true,
    "opt_in_fax": true,
    "opt_in_message": true,
    "phone": "3217591081",
    "created_at": "2017-10-12T20:08:00.000Z",
    "updated_at": "2017-10-12T20:09:02.000Z",
    "attributes": {
      "thoughts_on_purple": "Makes me feel like royalty."
    }
  }
}
```

Get a contact under the account.

### HTTP Request

Method | Route
--------- | -------
**GET** | `/contacts/:id`

### Path Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
id | string |  | Identifier for contact.

### Response Properties

Property | Type | Description
--------- | ------- | -----------
contact | object | [Contact](#contact) object.

## Update Contact

> Example Request

```shell
curl --request PUT 
--url 'https://api.fonestorm.com/v2/contacts/2bda9210-70c8-4070-acbd-e2d220b640ae'
--header 'Content-Type: application/json'
--header 'Accept: application/json' 
--header 'token: key' 
--data '{"last_name":"Smith"}'
```

```php
```

```python
```

> Example Response

```json
{
  "contact": {
    "full_name": "Jane Smith",
    "id": "2bda9210-70c8-4070-acbd-e2d220b640ae",
    "account_id": "2005353211",
    "email": "jane@doe.net",
    "first_name": "Jane",
    "last_name": "Smith",
    "opt_in_call": true,
    "opt_in_email": false,
    "opt_in_fax": false,
    "opt_in_message": true,
    "phone": "3215558101",
    "created_at": "2017-10-20T20:23:34.000Z",
    "updated_at": "2017-10-20T20:24:00.381Z"
  }
}
```

Update a contact under the account.

### HTTP Request

Method | Route
--------- | -------
**PUT** | `/contacts/:id`

### Path Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
id | string |  | Identifier for contact.

### Body Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
email | string | | Contact email address.
first\_name<br/>_optional_ | string | | Contact first name.
last\_name<br/>_optional_ | string | | Contact last name.
phone<br/>_optional_ | string | | Contact phone number.
opt\_in\_call<br/>_optional_ | boolean | | Contact opt-in preference for calls.
opt\_in\_email<br/>_optional_ | boolean | | Contact opt-in preference for emails.
opt\_in\_fax<br/>_optional_ | boolean | | Contact opt-in preference for faxes.
opt\_in\_message<br/>_optional_ | boolean | | Contact opt-in preference for messages.

### Response Properties

Property | Type | Description
--------- | ------- | -----------
contact | object | [Contact](#contact) object.

## Get Contact Events

> Example Request

```shell
curl --request GET 
--url 'https://api.fonestorm.com/v2/contacts/7953046e-9edb-414b-bf2e-82edd4779e53/events'
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
      "id": "_8kpjaghh8ksj6ba488r3ab9k6t0k6ba26t338b9l85344d248gr3ce9m6k",
      "account_id": "1005453202",
      "end_time": "2017-09-22T00:00:00.000Z",
      "organizer_contact_id": "eb0c19c3-ecec-4654-b375-2d9163568b94",
      "start_time": "2017-09-21T23:00:00.000Z",
      "title": "Skrum Conference",
      "location": null,
      "description": null,
      "status": "PENDING",
      "reschedule_count": 0,
      "created_at": "2017-09-21T22:56:46.000Z",
      "updated_at": "2017-09-21T22:56:46.000Z"
    }
  ]
}
```

Get a contact's associated events.

### HTTP Request

Method | Route
--------- | -------
**GET** | `/contacts/:id/events`

### Path Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
id | string |  | Identifier for contact.

### Response Properties

Property | Type | Description
--------- | ------- | -----------
events | array[object] | Array of [event](#event) objects.

## Get Contact Surveys

> Example Request

```shell
curl --request GET 
--url 'https://api.fonestorm.com/v2/contacts/7953046e-9edb-414b-bf2e-82edd4779e53/surveys'
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
  "surveys": [
    {
      "id": "421f18a8-c9b4-4c7a-b43a-acbffd18ba72",
      "account_id": "2005353211",
      "title": "Color Moods",
      "created_at": "2017-10-03T22:32:49.000Z",
      "updated_at": "2017-10-03T22:32:49.000Z"
    }
  ]
}
```

Get a contact's associated surveys.

### HTTP Request

Method | Route
--------- | -------
**GET** | `/contacts/:id/surveys`

### Path Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
id | string |  | Identifier for contact.

### Response Properties

Property | Type | Description
--------- | ------- | -----------
surveys | array[object] | Array of [survey](#survey) objects.