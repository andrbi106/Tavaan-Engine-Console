<?php

declare(strict_types=1);

namespace Tavaan\Engine\Console\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * env command.
 */
final class EnvCommand implements CommandInterface
{
    public function name(): string
    {
        return 'env';
    }

    public function description(): string
    {
        return 'Run env (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
