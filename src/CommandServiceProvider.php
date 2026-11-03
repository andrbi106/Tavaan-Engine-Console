<?php

declare(strict_types=1);

namespace Tavaan\Engine\Console;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\Console\Contracts\CommandInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * CommandServiceProvider — ثبت سرویس‌های موتور Command.
 */
final class CommandServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(CommandInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new Command($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // ثبت commandها
        $this->commands[] = \Tavaan\Engine\Console\Console\ListCommand::class;
        $this->commands[] = \Tavaan\Engine\Console\Console\AboutCommand::class;
        $this->commands[] = \Tavaan\Engine\Console\Console\VersionCommand::class;
        $this->commands[] = \Tavaan\Engine\Console\Console\EnvCommand::class;
        $this->commands[] = \Tavaan\Engine\Console\Console\DoctorCommand::class;
        $this->commands[] = \Tavaan\Engine\Console\Console\OptimizeCommand::class;
        $this->commands[] = \Tavaan\Engine\Console\Console\TestCommand::class;

    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            CommandInterface::class,
        ];
    }
}