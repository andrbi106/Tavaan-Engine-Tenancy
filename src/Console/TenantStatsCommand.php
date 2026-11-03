<?php

declare(strict_types=1);

namespace Tavaan\Engine\Tenancy\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * tenant:stats command.
 */
final class TenantStatsCommand implements CommandInterface
{
    public function name(): string
    {
        return 'tenant:stats';
    }

    public function description(): string
    {
        return 'Run tenant:stats (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
