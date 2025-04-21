# Utility Colors

[![CI](https://github.com/andrewskm/utility-colors/actions/workflows/ci.yml/badge.svg)](https://github.com/andrewskm/utility-colors/actions/workflows/ci.yml?query=branch%3Amain)
[![Latest Stable Version](https://poser.pugx.org/andrewskm/utility-colors/v/stable)](https://packagist.org/packages/andrewskm/utility-colors)
[![License](https://poser.pugx.org/andrewskm/utility-colors/license)](https://github.com/andrewskm/utility-colors/blob/main/LICENSE)

A basic package that lists color names and allows the building of utility classes in PHP.

## Compatibility

- PHP 8.1+

### Usage

Create a list of background utility classes with a shade of 300

```php 
$list = array_map(
    fn($case) => $case->build('bg', 300),
    UtilityColor::cases()
);
```
