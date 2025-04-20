# Tailwind Colors
[![CI](https://github.com/andrewskm/tailwind-colors/actions/workflows/ci.yml/badge.svg)](https://github.com/andrewskm/tailwind-colors/actions/workflows/ci.yml?query=branch%3Amain)

A basic package that lists color names from TailwindCSS and allows the building of utility classes in PHP.

## Compatibility
- PHP 8.1+

### Usage
Create a list of background utility classes with a shade of 300
```php 
$list = array_map(
    fn($case) => $case->build('bg', 300),
    TailwindColor::cases()
);
```
