<?php

declare(strict_types=1);

namespace Tavaan\Engine\Tenancy\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * tenant:delete command.
 */
final class TenantDeleteCommand implements CommandInterface
{
    public function name(): string
    {
        return 'tenant:delete';
    }

    public function description(): string
    {
        return 'Run tenant:delete (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
