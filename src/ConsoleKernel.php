<?php

declare(strict_types=1);

namespace Tavaan\Engine\Console;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * ConsoleKernel — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Console\Contracts\ConsoleKernelInterface
 */
final class ConsoleKernel implements Contracts\ConsoleKernelInterface
{
    /**
     * @param Config $config پیکربندی موتور
     */
    public function __construct(
        private readonly Config $config,
    ) {
    }

    /**
     * {@inheritdoc}
     */
    public function handle(/* ... */): mixed
    {
        // TODO: پیاده‌سازی handle مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function call(/* ... */): mixed
    {
        // TODO: پیاده‌سازی call مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function register(/* ... */): mixed
    {
        // TODO: پیاده‌سازی register مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function commands(/* ... */): mixed
    {
        // TODO: پیاده‌سازی commands مطابق مستندات (سند §3 API).
        return null;
    }
}