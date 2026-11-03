# Tavaan Engine — Console

> **چارچوب CLI** — موتور Console در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.console` |
| نام | `Console` |
| عنوان فارسی | چارچوب CLI |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\Console` |
| نوع | `engine` |

## قراردادها (Contracts)

این موتور قراردادهای زیر را ارائه می‌دهد:

- `Tavaan\Engine\Console\Contracts\CommandInterface`
- `Tavaan\Engine\Console\Contracts\InputInterface`
- `Tavaan\Engine\Console\Contracts\KernelInterface`
- `Tavaan\Engine\Console\Contracts\OutputInterface`

## کلاس‌های اصلی

- `src/Application.php`
- `src/ArgvParser.php`
- `src/Command.php`
- `src/Commands/AboutCommand.php`
- `src/Commands/ArchCheckCommand.php`
- `src/Commands/AutoloadCacheCommand.php`
- `src/Commands/BenchAllCommand.php`
- `src/Commands/ConfigCacheCommand.php`
- `src/Commands/ConfigClearCommand.php`
- `src/Commands/DoctorCommand.php`
- `src/Commands/DownCommand.php`
- `src/Commands/EngineValidateCommand.php`
- `src/Commands/EnvCheckCommand.php`
- `src/Commands/EnvCommand.php`
- `src/Commands/EventListCommand.php`
- `src/Commands/LintPhpCommand.php`
- `src/Commands/ModuleDisableCommand.php`
- `src/Commands/ModuleEnableCommand.php`
- `src/Commands/ModuleListCommand.php`
- `src/Commands/ModuleValidateCommand.php`
- ... و 13 فایل دیگر

## Service Providerها

- `Tavaan\Engine\Console\ConsoleServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `container`
- `config`

## پیکربندی

- فایل پیکربندی: `config/console.php`
- کلید: `console`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-Console.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-Console`** (این مخزن) | موتور Console |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
