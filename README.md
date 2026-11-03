# Tavaan Engine — Tenancy

> **چنداجاره‌ای** — موتور Tenancy در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.tenancy` |
| نام | `Tenancy` |
| عنوان فارسی | چنداجاره‌ای |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\Tenancy` |
| نوع | `engine` |
| Facade | `Tenant` (accessor: `tenant`) |

## قراردادها (Contracts)

این موتور قراردادهای زیر را ارائه می‌دهد:

- `Tavaan\Engine\Tenancy\Contracts\TenantInterface`
- `Tavaan\Engine\Tenancy\Contracts\TenantInterfaces`
- `Tavaan\Engine\Tenancy\Contracts\TenantResolverInterface`

## خطاها (Exceptions)

- `Tavaan\Engine\Tenancy\Exceptions\TenancyException`
- `Tavaan\Engine\Tenancy\Exceptions\TenantNotFoundException`
- `Tavaan\Engine\Tenancy\Exceptions\TenantNotResolvedException`
- `Tavaan\Engine\Tenancy\Exceptions\TenantQuotaExceededException`
- `Tavaan\Engine\Tenancy\Exceptions\TenantSuspendedException`

## Facadeها

- `Tavaan\Engine\Tenancy\Facades\Tenant`

## کلاس‌های اصلی

- `src/BelongsToTenant.php`
- `src/Console/DbTenantGuardCommand.php`
- `src/Console/TenantCreateCommand.php`
- `src/Console/TenantDeleteCommand.php`
- `src/Console/TenantListCommand.php`
- `src/Console/TenantMigrateCommand.php`
- `src/Console/TenantQueryGuard.php`
- `src/Console/TenantStatsCommand.php`
- `src/DatabaseTenantManager.php`
- `src/Events/TenantConnected.php`
- `src/Events/TenantCreated.php`
- `src/Events/TenantQuotaExceeded.php`
- `src/Events/TenantResolved.php`
- `src/InMemoryTenantRepository.php`
- `src/Middleware/IdentifyTenantMiddleware.php`
- `src/QuotaGuard.php`
- `src/Resolvers/DefaultResolver.php`
- `src/Resolvers/DomainResolver.php`
- `src/Resolvers/HeaderResolver.php`
- `src/Resolvers/PathResolver.php`
- ... و 18 فایل دیگر

## Service Providerها

- `Tavaan\Engine\Tenancy\TenantServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `config`

## پیکربندی

- فایل پیکربندی: `config/tenancy.php`
- کلید: `tenancy`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-Tenancy.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-Tenancy`** (این مخزن) | موتور Tenancy |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
