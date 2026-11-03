<?php

declare(strict_types=1);

namespace Tavaan\Engine\Console\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * about command.
 */
final class AboutCommand implements CommandInterface
{
    public function name(): string
    {
        return 'about';
    }

    public function description(): string
    {
        return 'Run about (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
