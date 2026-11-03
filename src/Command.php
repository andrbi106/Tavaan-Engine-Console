<?php

declare(strict_types=1);

namespace Tavaan\Engine\Console;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * Command — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Console\Contracts\CommandInterface
 */
final class Command implements Contracts\CommandInterface
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
    public function argument(/* ... */): mixed
    {
        // TODO: پیاده‌سازی argument مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function option(/* ... */): mixed
    {
        // TODO: پیاده‌سازی option مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function info(/* ... */): mixed
    {
        // TODO: پیاده‌سازی info مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function error(/* ... */): mixed
    {
        // TODO: پیاده‌سازی error مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function warn(/* ... */): mixed
    {
        // TODO: پیاده‌سازی warn مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function line(/* ... */): mixed
    {
        // TODO: پیاده‌سازی line مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function table(/* ... */): mixed
    {
        // TODO: پیاده‌سازی table مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function ask(/* ... */): mixed
    {
        // TODO: پیاده‌سازی ask مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function confirm(/* ... */): mixed
    {
        // TODO: پیاده‌سازی confirm مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function choice(/* ... */): mixed
    {
        // TODO: پیاده‌سازی choice مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function progressStart(/* ... */): mixed
    {
        // TODO: پیاده‌سازی progressStart مطابق مستندات (سند §3 API).
        return null;
    }
}