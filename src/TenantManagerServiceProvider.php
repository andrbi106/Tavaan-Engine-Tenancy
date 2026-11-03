<?php

declare(strict_types=1);

namespace Tavaan\Engine\Tenancy;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\Tenancy\Contracts\TenantManagerInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * TenantManagerServiceProvider — ثبت سرویس‌های موتور TenantManager.
 */
final class TenantManagerServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(TenantManagerInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new TenantManager($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // ثبت Facade
        $this->app->instance('tenant', $this->app->get(TenantManagerInterface::class));

        // ثبت commandها
        $this->commands[] = \Tavaan\Engine\Tenancy\Console\Tenant_createCommand::class;
        $this->commands[] = \Tavaan\Engine\Tenancy\Console\Tenant_listCommand::class;
        $this->commands[] = \Tavaan\Engine\Tenancy\Console\Tenant_migrateCommand::class;
        $this->commands[] = \Tavaan\Engine\Tenancy\Console\Tenant_deleteCommand::class;
        $this->commands[] = \Tavaan\Engine\Tenancy\Console\Tenant_statsCommand::class;
        $this->commands[] = \Tavaan\Engine\Tenancy\Console\Db_tenantGuardCommand::class;

    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            TenantManagerInterface::class,
            'tenant',
        ];
    }
}