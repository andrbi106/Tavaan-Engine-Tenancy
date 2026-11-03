<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Tenancy Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور tenancy — همهٔ کلیدهای مستندشده در `docs/03-engines/tenancy.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/tenancy.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('TENANCY_DEFAULT', 'default'),

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('TENANCY_PREFIX', 'tenancy:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('TENANCY_LOG_CHANNEL', 'tenancy'),
    ],

    /*| Facade */
    'facade' => [
        'name' => 'Tenant',
        'accessor' => 'tenant',
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];