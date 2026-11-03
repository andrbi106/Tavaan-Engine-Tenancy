<?php

declare(strict_types=1);

namespace Tavaan\Engine\Tenancy\Contracts;

/**
 * قرارداد TenantManager.
 *
 * @see \Tavaan\Engine\Tenancy\TenantManager
 * @api 1.0
 */
interface TenantManagerInterface
{
    /**
     * متد current.
     *
     * @return mixed
     */
    public function current(/* ... */): mixed;

    /**
     * متد id.
     *
     * @return mixed
     */
    public function id(/* ... */): mixed;

    /**
     * متد identifier.
     *
     * @return mixed
     */
    public function identifier(/* ... */): mixed;

    /**
     * متد run.
     *
     * @return mixed
     */
    public function run(/* ... */): mixed;

    /**
     * متد withoutCurrentScope.
     *
     * @return mixed
     */
    public function withoutCurrentScope(/* ... */): mixed;

    /**
     * متد create.
     *
     * @return mixed
     */
    public function create(/* ... */): mixed;

    /**
     * متد findByDomain.
     *
     * @return mixed
     */
    public function findByDomain(/* ... */): mixed;
}