### PHP HTTP Request
---

![GitHub top language](https://img.shields.io/github/languages/top/rajwebconsulting/php-http-request?style=for-the-badge)

a simple PHP library for handling http requests.

---

###### Install library via Composer
```
composer require rajwebconsulting/php-http-request
```

#### Usage
Use the Request library and add Autoloader:

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use RajWebConsulting\Http\Request;
```

##### Methods

| Attribute | Description | Type | Required | 
| --- | --- | --- | --- | --- |
| $key | Parameter key | string | Yes |

- Get method

```php
Request::get($key); // return string
```
- Example Request

```
https://example.com/?color=dark
```
```php
Request::get('color'); // return dark
```

- Post method (supports JSON and encoded-form)

```php
Request::post($key); // return string
```

- Put method (supports JSON and encoded-form)

```php
Request::put($key); // return string
```

#### Check for method

```php
Request::isGet(); // return bool
```

```php
Request::isPost(); // return bool
```

```php
Request::isPut(); // return bool
```

#### Extra
- Check for string is JSON
```php
Request::isJson(); // return bool
```