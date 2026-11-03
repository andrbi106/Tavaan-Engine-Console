<?php

declare(strict_types=1);

namespace Tavaan\Engine\Console\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * version command.
 */
final class VersionCommand implements CommandInterface
{
    public function name(): string
    {
        return 'version';
    }

    public function description(): string
    {
        return 'Run version (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
