<?php

declare(strict_types=1);

namespace Tavaan\Engine\Tenancy\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * db:tenant-guard command.
 */
final class Db_tenantGuardCommand implements CommandInterface
{
    public function name(): string
    {
        return 'db:tenant-guard';
    }

    public function description(): string
    {
        return 'Run db:tenant-guard (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
