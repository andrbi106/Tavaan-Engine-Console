<?php

declare(strict_types=1);

namespace Tavaan\Engine\Console\Contracts;

/**
 * قرارداد ConsoleKernel.
 *
 * @see \Tavaan\Engine\Console\ConsoleKernel
 * @api 1.0
 */
interface ConsoleKernelInterface
{
    /**
     * متد handle.
     *
     * @return mixed
     */
    public function handle(/* ... */): mixed;

    /**
     * متد call.
     *
     * @return mixed
     */
    public function call(/* ... */): mixed;

    /**
     * متد register.
     *
     * @return mixed
     */
    public function register(/* ... */): mixed;

    /**
     * متد commands.
     *
     * @return mixed
     */
    public function commands(/* ... */): mixed;
}