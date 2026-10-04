<a href="https://bas.dev">
    <img src="https://bmcdn.nl/assets/branding/logo.svg" alt="Bas Milius" height="48" />
</a>

---

# Raxos Contract

Shared interfaces for Raxos implementations and application extension points.

[Documentation](https://raxos.dev/contract/) | [Packagist](https://packagist.org/packages/raxos/contract) | [Raxos](https://github.com/basmilius/raxos)

- Contracts for collections, containers, HTTP, routing, databases and caching.
- Mail, message-bus, rate-limit, search, barcode and wallet extension points.
- Common exception, debugging and serialization interfaces.

## Installation

Requires PHP 8.5 or later. Enable the `pdo` PHP extension. Composer checks the remaining package and extension dependencies declared in [composer.json](composer.json).

```sh
composer require "raxos/contract:^3.3"
```

## Usage

```php
<?php
declare(strict_types=1);

use Raxos\Contract\SerializableInterface;

require __DIR__ . '/vendor/autoload.php';

final class Preferences implements SerializableInterface
{
    public function __construct(public bool $darkMode = false) {}

    public function __serialize(): array
    {
        return ['dark_mode' => $this->darkMode];
    }

    public function __unserialize(array $data): void
    {
        $this->darkMode = (bool)($data['dark_mode'] ?? false);
    }
}

$preferences = new Preferences(darkMode: true);
$restored = unserialize(serialize($preferences), ['allowed_classes' => [Preferences::class]]);
```

Install an implementation package when you need a working client, container or database connection. When upgrading custom implementations to 3.2, review the collection, cursor, ORM-cache and message-queue contract changes in the [migration guide](https://github.com/basmilius/raxos/blob/main/MIGRATION.md). The OAuth factory contracts live in `raxos/oauth2`.

## Documentation

- [Package organization](https://raxos.dev/contract/organization)
- [Extension points](https://raxos.dev/contract/extension-points)
- [Exception contracts](https://raxos.dev/contract/exceptions)

## Testing

Run this library's Pest suite from the Raxos workspace:

```sh
git clone --recurse-submodules https://github.com/basmilius/raxos.git
cd raxos
composer install
vendor/bin/pest --testsuite=contract
```

See [Testing Raxos](https://github.com/basmilius/raxos/blob/main/TESTING.md) for PHP extensions, integration services and coverage commands. The library's [Tests workflow](.github/workflows/tests.yml) also runs in GitHub Actions.

## License

[MIT](LICENSE). Copyright (c) 2017 - present Bas Milius.
