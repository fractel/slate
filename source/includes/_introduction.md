# Introduction

**Welcome to Fonestorm&trade;, the communications API platform powered by FracTEL!**

Fonestorm is compliant with the [OpenAPI Specification](https://www.openapis.org/). You can view code examples in the right column and you can switch the programming language of the examples with the tabs in the top right.

The Fonestorm API is organized around [REST](http://en.wikipedia.org/wiki/Representational_State_Transfer). We utilize built-in HTTP features, such as HTTP authentication and HTTP verbs, which are understood by off-the-shelf HTTP clients. [JSON](http://www.json.org/) is returned by all API responses, including errors.

## Using Fonestorm

You will need an active FracTEL account with API access enabled to use the Fonestorm API. Call us at (321) 499-1000 or email [sales@fonestorm.com](mailto:sales@fonestorm.com?subject=FracTEL%20API%20Access%20Request) to get set up.

All operations are scoped to the FracTEL account being used to authenticate. Whenever this documentation makes reference to "the account" or "your account", it is referring to the account that was used to obtain the API key.

## Base URL

All URLs referenced in the documentation have the following base:

`https://api.fonestorm.com/v2`

## Fonenumbers

A Fonenumber&trade; is an all-purpose communication service routing handle provided by FracTEL. A fonenumber is an actual telephone number and it can be called or messaged from any landline or mobile telephone. It can be configured to route voice calls, faxes and SMS/MMS messages to another telephone, however a fonenumber is capable of much more -- and this power is exposed  through the Fonestorm API platform.

## Dates and Times

Representation of dates and times are in [Coordinated Universal Time](https://en.wikipedia.org/wiki/Coordinated_Universal_Time) (_UTC_). The Fonestorm API accepts and returns dates and times that are represented using [ISO 8601](https://www.w3.org/TR/NOTE-datetime) formats.

## Rate limiting

Standard Fonestorm accounts are limited to 10 requests per second. Some services impose additional rate limits; please check the documentation carefully. Requests that exceed these limits will be rejected. Contact us if your project requires a higher transaction rate.

## Terms and Conditions

Your use of the Fonestorm API is subject to certain [Terms and Conditions](https://www.fractel.net/terms-and-conditions/), and some API calls will allocate resources or perform tasks that incur usage fees and/or charges. You are responsible for understanding these Terms and Conditions and any and all costs associated with use or misuse of the Fonestorm API.
