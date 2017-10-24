# Surveys

## List All Surveys

> Example Request

```shell
curl --request GET 
--url 'https://api.fonestorm.com/v2/surveys'
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
      "account_id": "1003553214",
      "title": "Color Moods",
      "created_at": "2017-10-03T22:32:49.000Z",
      "updated_at": "2017-10-03T22:32:49.000Z"
    }
  ]
}
```

Get all surveys listed under the account.

### HTTP Request

Method | Route
--------- | -------
**GET** | `/surveys`

### Response Properties

Property | Type | Description
--------- | ------- | -----------
surveys | array[object] | Array of [survey](#survey) objects.

## Create Survey

> Example Request

```shell
curl --request POST 
--url 'https://api.fonestorm.com/v2/surveys'
--header 'Content-Type: application/json'
--header 'Accept: application/json' 
--header 'token: key' 
--data '{"title":"Customer Service Survey"}'
```

```php
```

```python
```

> Example Response

```json
{
  "survey": {
    "id": "f4707247-0f66-4574-a3e9-1a57abee2f7d",
    "title": "Customer Service Survey",
    "account_id": "1005543212",
    "updated_at": "2017-10-20T21:51:20.840Z",
    "created_at": "2017-10-20T21:51:20.840Z"
  }
}
```

Create a survey under the account.

### HTTP Request

Method | Route
--------- | -------
**POST** | `/surveys`

### Body Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
title | string | | Title of survey.
contacts | array[string] | | Array of survey contact ids.

### Response Properties

Property | Type | Description
--------- | ------- | -----------
survey | object | [Survey](#survey) object.

## Delete Survey

> Example Request

```shell
curl --request DELETE 
--url 'https://api.fonestorm.com/v2/surveys/f4707247-0f66-4574-a3e9-1a57abee2f7d'
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
  "survey": {
    "id": "f4707247-0f66-4574-a3e9-1a57abee2f7d",
    "title": "Customer Service Survey",
    "account_id": "1005543212",
    "updated_at": "2017-10-20T21:51:20.840Z",
    "created_at": "2017-10-20T21:51:20.840Z"
  }
}
```

Delete a survey under the account.

### HTTP Request

Method | Route
--------- | -------
**DELETE** | `/surveys/:id`

### Path Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
id | string |  | Identifier for survey.

### Response Properties

Property | Type | Description
--------- | ------- | -----------
survey | object | [Survey](#survey) object.

## Get Survey Details

> Example Request

```shell
curl --request GET 
--url 'https://api.fonestorm.com/v2/surveys/53726483-04c4-47f4-8828-2ac364b358a3'
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
  "survey": {
    "id": "53726483-04c4-47f4-8828-2ac364b358a3",
    "account_id": "1005253212",
    "title": "Customer Service Survey",
    "created_at": "2017-10-20T21:55:07.000Z",
    "updated_at": "2017-10-20T21:55:07.000Z",
    "contacts": [
      {
        "full_name": "John Doe",
        "id": "a4dbe836-2f18-4c20-80a9-5298e8eb8f78",
        "account_id": "1005253212",
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
      }
    ],
    "questions": [
      {
        "id": "19dfc547-a937-4093-9614-b3b5d3f1b29d",
        "survey_id": "53726483-04c4-47f4-8828-2ac364b358a3",
        "question": "Were you satisfied wth the help you received?",
        "attribute_name": "satisified_with_customer_service",
        "created_at": "2017-10-20T21:58:03.000Z",
        "updated_at": "2017-10-20T21:59:39.000Z",
        "choices": [
          {
            "id": "5e649bb5-4a91-42e5-ab58-2caff811abf0",
            "question_id": "19dfc547-a937-4093-9614-b3b5d3f1b29d",
            "type": "text",
            "label": "Please describe your experience.",
            "created_at": "2017-10-20T22:04:25.000Z",
            "updated_at": "2017-10-20T22:04:25.000Z",
            "responses": [
              {
                "id": "ca5e2e63-bcd4-48d7-9bfb-f91b614ce972",
                "survey_id": "53726483-04c4-47f4-8828-2ac364b358a3",
                "question_id": "19dfc547-a937-4093-9614-b3b5d3f1b29d",
                "choice_id": "5e649bb5-4a91-42e5-ab58-2caff811abf0",
                "contact_id": "a4dbe836-2f18-4c20-80a9-5298e8eb8f78",
                "answer": "Very helpful and provided plenty of insight.",
                "created_at": "2017-10-20T22:05:33.000Z",
                "updated_at": "2017-10-20T22:05:33.000Z",
                "contact": {
                  "full_name": "John Doe",
                  "id": "a4dbe836-2f18-4c20-80a9-5298e8eb8f78",
                  "account_id": "1005253212",
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
                }
              }
            ]
          }
        ]
      }
    ]
  }
}
```

Get a survey under the account.

### HTTP Request

Method | Route
--------- | -------
**GET** | `/surveys/:id`

### Path Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
id | string |  | Identifier for survey.

### Query Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
associations | boolean | false | Include all data associations.

### Response Properties

Property | Type | Description
--------- | ------- | -----------
survey | object | [Survey](#survey) object.

## Update Survey

> Example Request

```shell
curl --request PUT 
--url 'https://api.fonestorm.com/v2/surveys/f4707247-0f66-4574-a3e9-1a57abee2f7d'
--header 'Content-Type: application/json'
--header 'Accept: application/json' 
--header 'token: key' 
--data '{"title":"Customer Service Experience"}'
```

```php
```

```python
```

> Example Response

```json
{
  "survey": {
    "id": "f4707247-0f66-4574-a3e9-1a57abee2f7d",
    "title": "Customer Service Experience",
    "account_id": "1005543212",
    "updated_at": "2017-10-20T21:51:20.840Z",
    "created_at": "2017-10-20T21:52:44.830Z"
  }
}
```

Update a survey under the account.

### HTTP Request

Method | Route
--------- | -------
**PUT** | `/surveys/:id`

### Path Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
id | string |  | Identifier for survey.

### Body Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
title<br/>_optional_ | string | | Title of survey.
contacts<br/>_optional_ | array[string] | | Survey contact ids.

### Response Properties

Property | Type | Description
--------- | ------- | -----------
survey | object | [Survey](#survey) object.

## Get Survey Contacts

> Example Request

```shell
curl --request GET 
--url 'https://api.fonestorm.com/v2/surveys/05df2875-aa22-428a-9eb9-b9deb051b9e8/contacts'
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
      "account_id": "1005253212",
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
    }
  ]
}
```

Get a survey's associated contacts.

### HTTP Request

Method | Route
--------- | -------
**GET** | `/surveys/:id/contacts`

### Path Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
id | string |  | Identifier for survey.

### Response Properties

Property | Type | Description
--------- | ------- | -----------
contacts | array[object] | Array of [contact](#contact) objects.

## Create Survey Question

> Example Request

```shell
curl --request POST 
--url 'https://api.fonestorm.com/v2/surveys/53726483-04c4-47f4-8828-2ac364b358a3/questions'
--header 'Content-Type: application/json'
--header 'Accept: application/json' 
--header 'token: key' 
--data '{"question":"How was your service experience?", "attribute_name":"thoughts_on_service"}'
```

```php
```

```python
```

> Example Response

```json
{
  "question": {
    "id": "ca6e132b-ab96-4ae0-83f7-1ae8ec92c849",
    "question": "How was your service experience?",
    "attribute_name": "thoughts_on_service",
    "survey_id": "53726483-04c4-47f4-8828-2ac364b358a3",
    "updated_at": "2017-10-20T21:56:47.418Z",
    "created_at": "2017-10-20T21:56:47.418Z"
  }
}
```

Create a question under the survey.

### HTTP Request

Method | Route
--------- | -------
**POST** | `/surveys/:id/questions`

### Path Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
id | string |  | Identifier for survey.

### Body Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
question | string |  | Question to ask.
attribute\_name<br/>_optional_ | string |  | Attribute name used to indentify this information.

### Response Properties

Property | Type | Description
--------- | ------- | -----------
question | object | [Survey question](#survey) object.

## Get Survey Questions

> Example Request

```shell
curl --request GET 
--url 'https://api.fonestorm.com/v2/surveys/53726483-04c4-47f4-8828-2ac364b358a3/questions'
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
  "questions": [
    {
      "id": "ca6e132b-ab96-4ae0-83f7-1ae8ec92c849",
      "survey_id": "53726483-04c4-47f4-8828-2ac364b358a3",
      "question": "How was your service experience?",
      "attribute_name": "thoughts_on_service",
      "created_at": "2017-10-20T21:56:47.000Z",
      "updated_at": "2017-10-20T21:56:47.000Z"
    }
  ]
}
```

Get all questions under the survey.

### HTTP Request

Method | Route
--------- | -------
**GET** | `/surveys/:id/questions`

### Path Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
id | string |  | Identifier for survey.

### Response Properties

Property | Type | Description
--------- | ------- | -----------
questions | array[object] | Array of [survey question](#survey-question) objects.

## Delete Survey Question

> Example Request

```shell
curl --request DELETE 
--url 'https://api.fonestorm.com/v2/surveys/53726483-04c4-47f4-8828-2ac364b358a3/questions/ca6e132b-ab96-4ae0-83f7-1ae8ec92c849'
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
  "question": {
    "id": "ca6e132b-ab96-4ae0-83f7-1ae8ec92c849",
    "question": "How was your service experience?",
    "attribute_name": "thoughts_on_service",
    "survey_id": "53726483-04c4-47f4-8828-2ac364b358a3",
    "updated_at": "2017-10-20T21:56:47.418Z",
    "created_at": "2017-10-20T21:56:47.418Z"
  }
}
```

Delete a question from under the survey.

### HTTP Request

Method | Route
--------- | -------
**DELETE** | `/surveys/:id/questions/:qid`

### Path Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
id | string |  | Identifier for survey.
qid | string |  | Identifier for question.

### Response Properties

Property | Type | Description
--------- | ------- | -----------
question | object | [Survey question](#survey-question) object.

## Update Survey Question

> Example Request

```shell
curl --request PUT 
--url 'https://api.fonestorm.com/v2/surveys/53726483-04c4-47f4-8828-2ac364b358a3/questions/19dfc547-a937-4093-9614-b3b5d3f1b29d'
--header 'Content-Type: application/json'
--header 'Accept: application/json' 
--header 'token: key' 
--data '{"question":"Were you satisfied wth the help you received?", "attribute_name":"satisified_with_customer_service"}'
```

```php
```

```python
```

> Example Response

```json
{
  "question": {
    "id": "19dfc547-a937-4093-9614-b3b5d3f1b29d",
    "survey_id": "53726483-04c4-47f4-8828-2ac364b358a3",
    "question": "Were you satisfied wth the help you received?",
    "attribute_name": "satisified_with_customer_service",
    "created_at": "2017-10-20T21:58:03.000Z",
    "updated_at": "2017-10-20T21:59:39.681Z"
  }
}
```

Update a question under the survey.

### HTTP Request

Method | Route
--------- | -------
**PUT** | `/surveys/:id/questions/:qid`

### Path Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
id | string |  | Identifier for survey.
qid | string |  | Identifier for question.

### Body Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
question<br/>_optional_ | string |  | Question to ask.
attribute\_name<br/>_optional_ | string |  | Attribute name used to indentify this information.

### Response Properties

Property | Type | Description
--------- | ------- | -----------
question | object | [Survey question](#survey-question) object.

## Get Survey Question Choices

> Example Request

```shell
curl --request GET 
--url 'https://api.fonestorm.com/v2/surveys/05df2875-aa22-428a-9eb9-b9deb051b9e8/questions/19dfc547-a937-4093-9614-b3b5d3f1b29d/choices'
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
  "choices": [
    {
      "id": "2c5686f5-56d6-4b4c-aa39-d840baef147e",
      "question_id": "19dfc547-a937-4093-9614-b3b5d3f1b29d",
      "type": "text",
      "label": "Please write at least one sentence.",
      "created_at": "2017-10-20T22:01:00.000Z",
      "updated_at": "2017-10-20T22:01:00.000Z"
    }
  ]
}
```

Get choices under the survey question.

### HTTP Request

Method | Route
--------- | -------
**GET** | `/surveys/:id/questions/:qid/choices`

### Path Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
id | string |  | Identifier for survey.
qid | string |  | Identifier for question.

### Response Properties

Property | Type | Description
--------- | ------- | -----------
choices | array[object] | Array of [survey question choice](#survey-question-choice) objects.

## Create Survey Question Choice

> Example Request

```shell
curl --request POST 
--url 'https://api.fonestorm.com/v2/surveys/05df2875-aa22-428a-9eb9-b9deb051b9e8/questions/19dfc547-a937-4093-9614-b3b5d3f1b29d/choices'
--header 'Content-Type: application/json'
--header 'Accept: application/json' 
--header 'token: key' 
--data '{"label":"Please describe your experience.", "type":"text"}'
```

```php
```

```python
```

> Example Response

```json
{
  "choice": {
    "id": "2c5686f5-56d6-4b4c-aa39-d840baef147e",
    "type": "text",
    "label": "Please describe your experience.",
    "question_id": "19dfc547-a937-4093-9614-b3b5d3f1b29d",
    "updated_at": "2017-10-20T22:01:00.149Z",
    "created_at": "2017-10-20T22:01:00.149Z"
  }
}
```

Create a choice under the survey question.

### HTTP Request

Method | Route
--------- | -------
**POST** | `/surveys/:id/questions/:qid/choices`

### Path Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
id | string |  | Identifier for survey.
qid | string |  | Identifier for question.

### Body Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
type | string | TEXT | Input field type to display (`TEXT` or `TEXTAREA`).
label | string |  | Input field label to display.

### Response Properties

Property | Type | Description
--------- | ------- | -----------
choice | object | [Survey question choice](#survey-question-choice) object.

## Update Survey Question Choice

> Example Request

```shell
curl --request PUT 
--url 'https://api.fonestorm.com/v2/surveys/05df2875-aa22-428a-9eb9-b9deb051b9e8/questions/19dfc547-a937-4093-9614-b3b5d3f1b29d/choices/2c5686f5-56d6-4b4c-aa39-d840baef147e'
--header 'Content-Type: application/json'
--header 'Accept: application/json' 
--header 'token: key' 
--data '{"label":"Please write at least one sentence!"}'
```

```php
```

```python
```

> Example Response

```json
{
  "choice": {
    "id": "2c5686f5-56d6-4b4c-aa39-d840baef147e",
    "question_id": "19dfc547-a937-4093-9614-b3b5d3f1b29d",
    "type": "text",
    "label": "Please write at least one sentence!",
    "created_at": "2017-10-20T22:01:00.000Z",
    "updated_at": "2017-10-20T22:03:04.602Z"
  }
}
```

Update a choice under the survey question.

### HTTP Request

Method | Route
--------- | -------
**POST** | `/surveys/:id/questions/:qid/choices/:cid`

### Path Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
id | string |  | Identifier for survey.
qid | string |  | Identifier for question.
cid | string |  | Identifier for choice.

### Body Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
type<br/>_optional_ | string |  | Input field type to display (`TEXT` or `TEXTAREA`).
label<br/>_optional_ | string |  | Input field label to display.

### Response Properties

Property | Type | Description
--------- | ------- | -----------
choice | object | [Survey question choice](#survey-question-choice) object.

## Delete Survey Question Choice

> Example Request

```shell
curl --request DELETE 
--url 'https://api.fonestorm.com/v2/surveys/05df2875-aa22-428a-9eb9-b9deb051b9e8/questions/19dfc547-a937-4093-9614-b3b5d3f1b29d/choices/2c5686f5-56d6-4b4c-aa39-d840baef147e'
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
  "choice": {
    "id": "2c5686f5-56d6-4b4c-aa39-d840baef147e",
    "type": "text",
    "label": "Please describe your experience.",
    "question_id": "19dfc547-a937-4093-9614-b3b5d3f1b29d",
    "updated_at": "2017-10-20T22:01:00.149Z",
    "created_at": "2017-10-20T22:01:00.149Z"
  }
}
```

Delete a choice under the survey question.

### HTTP Request

Method | Route
--------- | -------
**DELETE** | `/surveys/:id/questions/:qid/choices/:cid`

### Path Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
id | string |  | Identifier for survey.
qid | string |  | Identifier for question.
cid | string |  | Identifier for choice.

### Response Properties

Property | Type | Description
--------- | ------- | -----------
choice | object | [Survey question choice](#survey-question-choice) object.

## Create Survey Response

> Example Request

```shell
curl --request POST 
--url 'https://api.fonestorm.com/v2/surveys/53726483-04c4-47f4-8828-2ac364b358a3/responses'
--header 'Content-Type: application/json'
--header 'Accept: application/json' 
--header 'token: key' 
--data '{"question_id":"19dfc547-a937-4093-9614-b3b5d3f1b29d", "choice_id":"5e649bb5-4a91-42e5-ab58-2caff811abf0", "contact_id":"a4dbe836-2f18-4c20-80a9-5298e8eb8f78", "answer":"Very helpful and provided plenty of insight."}'
```

```php
```

```python
```

> Example Response

```json
{
  "response": {
    "id": "ca5e2e63-bcd4-48d7-9bfb-f91b614ce972",
    "survey_id": "53726483-04c4-47f4-8828-2ac364b358a3",
    "question_id": "19dfc547-a937-4093-9614-b3b5d3f1b29d",
    "choice_id": "5e649bb5-4a91-42e5-ab58-2caff811abf0",
    "contact_id": "a4dbe836-2f18-4c20-80a9-5298e8eb8f78",
    "answer": "Very helpful and provided plenty of insight.",
    "updated_at": "2017-10-20T22:05:33.125Z",
    "created_at": "2017-10-20T22:05:33.125Z"
  }
}
```

Create a response under the survey.

### HTTP Request

Method | Route
--------- | -------
**POST** | `/surveys/:id/responses`

### Path Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
id | string |  | Identifier for survey.

### Body Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
question_id | string |  | Identifier for question.
choice_id | string |  | Identifier for choice.
contact_id | string |  | Identifier for contact.
answer | string |  | Contact answer for survey question choice.

### Response Properties

Property | Type | Description
--------- | ------- | -----------
response | object | [Survey response](#survey-response) object.

## Get Survey Responses

> Example Request

```shell
curl --request GET 
--url 'https://api.fonestorm.com/v2/surveys/53726483-04c4-47f4-8828-2ac364b358a3/responses'
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
  "responses": [
    {
      "id": "ca5e2e63-bcd4-48d7-9bfb-f91b614ce972",
      "survey_id": "53726483-04c4-47f4-8828-2ac364b358a3",
      "question_id": "19dfc547-a937-4093-9614-b3b5d3f1b29d",
      "choice_id": "5e649bb5-4a91-42e5-ab58-2caff811abf0",
      "contact_id": "a4dbe836-2f18-4c20-80a9-5298e8eb8f78",
      "answer": "Very helpful and provided plenty of insight.",
      "created_at": "2017-10-20T22:05:33.000Z",
      "updated_at": "2017-10-20T22:05:33.000Z"
    }
  ]
}
```

Get all responses under the survey.

### HTTP Request

Method | Route
--------- | -------
**GET** | `/surveys/:id/responses`

### Path Parameters

Parameter | Type | Default | Description
--------- | ------- | ----------- | -----------
id | string |  | Identifier for survey.

### Response Properties

Property | Type | Description
--------- | ------- | -----------
responses | array[object] | Array of [survey response](#survey-response) objects.
