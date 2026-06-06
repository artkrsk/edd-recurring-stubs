# EDD Recurring stubs

Auto-generated PHPStan / IDE stubs for [EDD Recurring](https://easydigitaldownloads.com/downloads/recurring-payments/).
Self-contained (safe to `require_once`), so PHPStan can resolve `EDD_Subscription`,
`EDD_Subscriptions_DB`, and the rest of the EDD Recurring type surface without the plugin installed.

## Usage with PHPStan

```neon
parameters:
    bootstrapFiles:
        - vendor/arts/edd-recurring-stubs/edd-recurring-stubs.php
```

## Regenerating

Point `.env` at an EDD Recurring checkout (see `.env.example`), then:

```bash
composer install
composer generate
```

The generator scans the plugin source with `php-stubs/generator`, strips stray code, neutralizes
`abstract` methods, injects the `EDD_RECURRING_*` constants, and appends empty stubs for any
referenced-but-missing parent type so the output loads cleanly on its own.
