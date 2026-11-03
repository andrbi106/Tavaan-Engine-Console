<?php

declare(strict_types=1);

namespace Tavaan\Engine\Console\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * list command.
 */
final class ListCommand implements CommandInterface
{
    public function name(): string
    {
        return 'list';
    }

    public function description(): string
    {
        return 'Run list (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
