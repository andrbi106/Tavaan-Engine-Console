<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Console Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور console — همهٔ کلیدهای مستندشده در `docs/03-engines/console.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/console.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('CONSOLE_DEFAULT', 'default'),

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('CONSOLE_PREFIX', 'console:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('CONSOLE_LOG_CHANNEL', 'console'),
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];