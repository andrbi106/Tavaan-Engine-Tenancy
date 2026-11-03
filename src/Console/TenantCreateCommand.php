<?php

declare(strict_types=1);

namespace Tavaan\Engine\Tenancy\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * tenant:create command.
 */
final class TenantCreateCommand implements CommandInterface
{
    public function name(): string
    {
        return 'tenant:create';
    }

    public function description(): string
    {
        return 'Run tenant:create (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
