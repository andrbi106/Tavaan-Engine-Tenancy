<?php

declare(strict_types=1);

namespace Tavaan\Engine\Tenancy\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * tenant:list command.
 */
final class TenantListCommand implements CommandInterface
{
    public function name(): string
    {
        return 'tenant:list';
    }

    public function description(): string
    {
        return 'Run tenant:list (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
