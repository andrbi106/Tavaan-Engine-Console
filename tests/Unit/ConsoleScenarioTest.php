<?php

declare(strict_types=1);

namespace Tavaan\Engine\Console\Tests\Unit;

use Tavaan\Testing\TestCase;
use Tavaan\Engine\Console\ConsoleKernel;
use Tavaan\Engine\Console\Command;

/**
 * T-NN scenario tests for the console engine.
 *
 * Generated from ROADMAP.md scenarios — real implementations, not placeholders.
 */
final class ConsoleScenarioTest extends TestCase
{'    public function t01_register_command(): void\n    {\n        // Scenario T-01\n$kernel = new ConsoleKernel();\n        $cmd = new class extends Command {\n            public const NAME = "test:hello";\n            public const DESCRIPTION = "A test command";\n            public function handle(): int { return 0; }\n        };\n        $kernel->register($cmd);\n        $this->assertContains("test:hello", $kernel->commands());\n    }\n    public function t02_call_returns_exit_code(): void\n    {\n        // Scenario T-02\n$kernel = new ConsoleKernel();\n        $cmd = new class extends Command {\n            public const NAME = "test:ok";\n            public const DESCRIPTION = "OK";\n            public function handle(): int { return 0; }\n        };\n        $kernel->register($cmd);\n        $exit = $kernel->call("test:ok", []);\n        $this->assertSame(0, $exit);\n    }\n    public function t03_call_unknown_returns_nonzero(): void\n    {\n        // Scenario T-03\n$kernel = new ConsoleKernel();\n        $exit = $kernel->call("unknown:cmd");\n        $this->assertSame(1, $exit);\n    }'}
