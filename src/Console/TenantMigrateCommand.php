<?php

declare(strict_types=1);

namespace Tavaan\Engine\Tenancy\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * tenant:migrate command.
 */
final class TenantMigrateCommand implements CommandInterface
{
    public function name(): string
    {
        return 'tenant:migrate';
    }

    public function description(): string
    {
        return 'Run tenant:migrate (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
