<?php
declare(strict_types=1);

namespace Raxos\Contract;

/**
 * Interface ProxyableInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract
 * @since 2.4.0
 */
interface ProxyableInterface
{

    /**
     * Returns a read-only proxy of the object, safe to expose to untrusted
     * consumers such as template engines.
     *
     * @return ProxyInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.4.0
     */
    public function proxy(): ProxyInterface;

}
