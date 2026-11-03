<?php

declare(strict_types=1);

namespace Tavaan\Engine\Console\Contracts;

/**
 * قرارداد Command.
 *
 * @see \Tavaan\Engine\Console\Command
 * @api 1.0
 */
interface CommandInterface
{
    /**
     * متد handle.
     *
     * @return mixed
     */
    public function handle(/* ... */): mixed;

    /**
     * متد argument.
     *
     * @return mixed
     */
    public function argument(/* ... */): mixed;

    /**
     * متد option.
     *
     * @return mixed
     */
    public function option(/* ... */): mixed;

    /**
     * متد info.
     *
     * @return mixed
     */
    public function info(/* ... */): mixed;

    /**
     * متد error.
     *
     * @return mixed
     */
    public function error(/* ... */): mixed;

    /**
     * متد warn.
     *
     * @return mixed
     */
    public function warn(/* ... */): mixed;

    /**
     * متد line.
     *
     * @return mixed
     */
    public function line(/* ... */): mixed;

    /**
     * متد table.
     *
     * @return mixed
     */
    public function table(/* ... */): mixed;

    /**
     * متد ask.
     *
     * @return mixed
     */
    public function ask(/* ... */): mixed;

    /**
     * متد confirm.
     *
     * @return mixed
     */
    public function confirm(/* ... */): mixed;

    /**
     * متد choice.
     *
     * @return mixed
     */
    public function choice(/* ... */): mixed;

    /**
     * متد progressStart.
     *
     * @return mixed
     */
    public function progressStart(/* ... */): mixed;
}