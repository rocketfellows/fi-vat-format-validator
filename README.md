# <Country> vat format validator

![Code Coverage Badge](./badge.svg)

This component provides Finland vat number format validator.

Implementation of interface **rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatValidatorInterface**

Depends on https://github.com/rocketfellows/country-vat-format-validator-interface

## Installation

```shell
composer require rocketfellows/fi-vat-format-validator
```

## Usage example

Valid Finland vat number:

```php
$validator = new FIVatFormatValidator();
$validator->isValid('FI12345678');
$validator->isValid('12345678');
```

Returns:

```shell
true
true
```

Invalid Finland vat number:

```php
$validator = new FIVatFormatValidator();
$validator->isValid('FI123456789');
$validator->isValid('FI1234567');
$validator->isValid('123456789');
$validator->isValid('1234567');
$validator->isValid('DE12345678');
```

```shell
false
false
false
false
false
```

## Contributing

Welcome to pull requests. If there is a major changes, first please open an issue for discussion.

Please make sure to update tests as appropriate.
