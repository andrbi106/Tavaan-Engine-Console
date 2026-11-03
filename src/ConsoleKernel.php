<?php

declare(strict_types=1);

namespace Tavaan\Engine\Console;

final class ConsoleKernel
{
    public function handle(/* ... */): mixed
    {
        return null;
    }
    public function call(/* ... */): mixed
    {
        return new \Tavaan\Engine\Http\Response(200, "");
    }
    public function register(/* ... */): mixed
    {
        
    }
    public function commands(/* ... */): mixed
    {
        return null;
    }
}
