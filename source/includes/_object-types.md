# Object Types

These are the core objects you'll find throughout the platform — as part of Web API responses.

Type | Description
--------- | -------
[Authorization](#authorization) | Authorization object.
[Call](#call) | Call object.
[Conference](#conference) | Conference object.
[Contact](#contact) | Contact object.
[Email](#email) | Email object.
[Event](#event) | Event object.
[Fax](#fax) | Fax object.
[FoneNumber](#fonenumber) | FoneNumber object.
[Message](#message) | Message object.
[Survey](#survey) | Survey object.
[Survey Question](#survey-question) | Survey question object.
[Survey Question Choice](#survey-question-choice) | Survey question choice object.
[Survey Response](#survey-response) | Survey response object.

## Authorization
FoneStorm authorization object created as a result of an authentication request. The token is a [JSON Web Token](https://en.wikipedia.org/wiki/JSON_Web_Token) which can be decoded to obtain additional claims related to the authorization.

```json
{
  "token": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhY2NvdW50Ijp7ImlkIjoiMjAwNTU1MzIxNiJ9LCJwb3J0YWwiOnsidG9rZW4iOiIzOWI2Zjk3ZGVhZWVjODE1NDhiMjY1ODIyNDFmM2ZmMCJ9LCJpYXQiOjE1MDg4NTA2MzksImV4cCI6MTUwODg1NDIzOX0.7eK0Mj2Dm_PweZbEErAHYUExka5jXVolzMl1xQ7nQ4s"
}
```

Property | Type | Description
--------- | ------- | -----------
token | string | JSON Web Token.

## Call
FoneStorm call object created as the result of an inbound or outbound phone call.

```json
{
  "id": "ce20fe86-b5ce-11e7-9eec-cf0ab03fdb06"
}
```

Property | Type | Description
--------- | ------- | -----------
id | string | Unique identifier.

## Conference
FoneStorm conference object representing a conference resource in the object store.

```json
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
  "conference_url": "https://requestb.in/15h1m971",
  "conference_status": "unknown",
  "organizer_status": false,
  "attendees_status": 0
}
```

Property | Type | Description
--------- | ------- | -----------
id | string | Unique identifier of conference.
label | string | Label for conference.
start_time | date | Start time and date of conference.
end_time | date | End time and date of conference.
organizer | string | Contact id of conference organizer.
attendees | array[string] | Array of contact ids for attendees.
caller_id | string | Caller id used for conference call.
conference_pin | integer | Pin number used for dialiing into conference.
conference_url | string | Callback URL for conference.
conference_status | string | Status of the conference.
organizer_status | boolean | Status of conference organizer.
attendees_status | integer | Status of conference attendees.

## Contact
FoneStorm contact object representing a contact resource in the object store.

```json
{
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
```

Property | Type | Description
--------- | ------- | -----------
id | string | Unique identifier.
email | string | Email address.
first_name | string | First name.
last_name | string | Last name.
opt\_in\_call | boolean | Opt-in perference for receiving calls.
opt\_in\_email | boolean | Opt-in perference for receiving emails.
opt\_in\_fax | boolean | Opt-in perference for receiving faxes.
opt\_in\_message | boolean | Opt-in perference for receiving messages.
phone | string | Phone number.
account_id | string | Associated account identifier.
updated_at | date | Time of last record update.
created_at | date | Time of record creation.

## Email
FoneStorm email object representing an email resource in the object store.

```json
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
```

Property | Type | Description
--------- | ------- | -----------
id | string | Unique identifier.
to | array[string] | Array of email addresses to mail.
from | string | Email address of sender.
subject | string | Subject of email.
body | string | Body of message.
time | string | Time to send.
send_individually | boolean | Send individually or as single email.

## Event
FoneStorm event object representing an event resource in the object store.

```json
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
```

Property | Type | Description
--------- | ------- | -----------
id | string | Unique identifier.
account_id | string | Idenifitier of associated account.
end_time | date | End date and time.
start_time | date | Start date and time.
title | string | Title of event.
location | string | Location of event.
description | string | Description of event.
status | string | Status of event.
reschedule_count | integer | Reschedule count of event.
created_at | date | Date and time of creation.
updated_at | date | Date and time of last update.
organizer | object | Orgaizer [contact](#contact) object.
attendees | array[object] | Array of [contact](#contact) objects.

## Fax
FoneStorm fax object created as the result of an inbound or outbound fax.

```json
{
  "id": "77331fd8-0cbf-4439-b7c5-389bd8866027"
}
```

Property | Type | Description
--------- | ------- | -----------
id | string | Unique identifier.

## FoneNumber
FoneStorm fonenumber object representing a FoneNumber resource in the object store.

```json
{
  "fonenumber": "3215551111",
  "sms_options": {
    "receive": {
      "type": "email",
      "email": "support@domain.com",
      "device": "987123543678",
      "forward": "3215553333",
      "url": "https://hookb.in/KlwpR3j5",
      "url_method": "JSON"
    },
    "receive_notify": {
      "url": "https://hookb.in/KNRzy7P3",
      "method": "JSON"
    },
    "send_notify": {
      "url": "https://hookb.in/vewOPNyB",
      "method": "JSON"
    },
    "sms_enabled": "yes",
    "mms_enabled": "yes"
  },
  "is_active": "yes"
}
```

Property | Type | Description
--------- | ------- | -----------
fonenumber | string | FoneNumber.
sms_options | object | SMS related properties.
sms_options.receive | object | Delivery service type used as the destination to receive messages.
sms_options.receive.type | string | Configured service type.
sms_options.receive.email | string| Email address if configured for email.
sms_options.receive.device | string | FracTEL device if configured for device.
sms_options.receive.forward | string |Telephone number if configured for forward.
sms_options.receive.url | string | HTTP URL if configured for URL.
sms\_options.receive.url\_method | string | HTTP URL method if configured for URL.
sms\_options.receive_notify | object | Callback URL to notify when a message is received.
sms\_options.receive_notify.url | string | HTTP URL.
sms\_options.receive\_notify.url_method | string | HTTP URL method.
sms\_options.send_notify | object | Callback URL to notify when a message is sent.
sms\_options.send_notify.url | string | HTTP URL
sms\_options.send\_notify.url_method | string | HTTP URL method
sms\_options.sms_enabled | string | SMS service is enabled for FoneNumber.
sms\_options.mms_enabled | string | MMS service is enabled for FoneNumber.
is_active | string | Status of FoneNumber. Potenial values are: <ul><li>`yes` - active</li><li>`no` - pending cancelation</ul>

## Message
FoneStorm message object created as the result of an inbound or outbound sms or mms message.

```json
{
  "id": "5e5318a3-8a6a-408a-bf47-d515fc0f6000"
}
```

Property | Type | Description
--------- | ------- | -----------
id | string | Unique identifier.

## Survey
FoneStorm survey object representing a survey resource in the object store.

```json
{
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
```

Property | Type | Description
--------- | ------- | -----------
id | string | Unique identifier.
account_id | string | Identifier of associated account.
title | string | Title of survey.
created_at | date | Time and date of creation.
updated_at | date | Time and date of last update.
contacts | array[object] | Array of [contact](#contact) objects.
questions | array[object] | Array of [survey question](#survey-question) objects.

## Survey Question
FoneStorm survey question object representing a survey question resource in the object store.

```json
{
  "id": "ca6e132b-ab96-4ae0-83f7-1ae8ec92c849",
  "survey_id": "53726483-04c4-47f4-8828-2ac364b358a3",
  "question": "How was your service experience?",
  "attribute_name": "thoughts_on_service",
  "created_at": "2017-10-20T21:56:47.000Z",
  "updated_at": "2017-10-20T21:56:47.000Z",
  "choices": [{
    "id": "2c5686f5-56d6-4b4c-aa39-d840baef147e",
    "question_id": "ca6e132b-ab96-4ae0-83f7-1ae8ec92c849",
    "type": "text",
    "label": "Please write at least one sentence.",
    "created_at": "2017-10-20T22:01:00.000Z",
    "updated_at": "2017-10-20T22:01:00.000Z"
  }]
}
```

Property | Type | Description
--------- | ------- | -----------
id | string | Unique identifier.
survey_id | string | Identifier of associated survey.
question | string | Question to ask.
attribute_name | string | Attribute name used to indentify this information.
created_at | date | Date and time of creation.
updated_at | date | Date and time of last update.
choices | array[object] | Array of [survey question choice](#survey-question-choice) objects.

## Survey Question Choice
FoneStorm survey question choice object representing a survey question choice resource in the object store.

```json
{
  "id": "2c5686f5-56d6-4b4c-aa39-d840baef147e",
  "question_id": "19dfc547-a937-4093-9614-b3b5d3f1b29d",
  "type": "text",
  "label": "Please write at least one sentence.",
  "created_at": "2017-10-20T22:01:00.000Z",
  "updated_at": "2017-10-20T22:01:00.000Z",
  "responses": [{
    "id": "ca5e2e63-bcd4-48d7-9bfb-f91b614ce972",
    "survey_id": "53726483-04c4-47f4-8828-2ac364b358a3",
    "question_id": "19dfc547-a937-4093-9614-b3b5d3f1b29d",
    "choice_id": "2c5686f5-56d6-4b4c-aa39-d840baef147e",
    "contact_id": "a4dbe836-2f18-4c20-80a9-5298e8eb8f78",
    "answer": "Very helpful and provided plenty of insight.",
    "created_at": "2017-10-20T22:05:33.000Z",
    "updated_at": "2017-10-20T22:05:33.000Z"
  }]
}
```

Property | Type | Description
--------- | ------- | -----------
id | string | Identifier of associated choice.
question_id | string | Identifier of associated question.
type | string | Question field type.
label | string | Question label for field.
created_at | date | Date and time of creation.
updated_at | date | Date and time of last update.
responses | array[object] | Array of [survey response](#survey-response) objects.

## Survey Response
FoneStorm survey response object representing a survey response resource in the object store.

```json
{
  "id": "ca5e2e63-bcd4-48d7-9bfb-f91b614ce972",
  "survey_id": "53726483-04c4-47f4-8828-2ac364b358a3",
  "question_id": "19dfc547-a937-4093-9614-b3b5d3f1b29d",
  "choice_id": "5e649bb5-4a91-42e5-ab58-2caff811abf0",
  "contact_id": "a4dbe836-2f18-4c20-80a9-5298e8eb8f78",
  "answer": "Very helpful and provided plenty of insight.",
  "created_at": "2017-10-20T22:05:33.000Z",
  "updated_at": "2017-10-20T22:05:33.000Z"
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
    "updated_at": "2017-10-12T20:09:02.000Z"
  }
}
```

Property | Type | Description
--------- | ------- | -----------
id | string | Unique identifier.
survey_id | string | Identifier of associated survey.
question_id | string | Identifier of associated question.
choice_id | string | Identifier of associated choice.
contact_id | string | Identifier of associated contact.
answer | string | Answer given for question.
created_at | date | Date and time of creation.
updated_at | date | Date and time of last update.
contact | object | [Contact](#contact) object.
