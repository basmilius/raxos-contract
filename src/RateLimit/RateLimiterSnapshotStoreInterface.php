<?php
declare(strict_types=1);

namespace Raxos\Contract\RateLimit;

/**
 * Interface RateLimiterSnapshotStoreInterface
 *
 * Optional atomic counter and expiry capability.
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\RateLimit
 * @since 3.3.0
 */
interface RateLimiterSnapshotStoreInterface extends RateLimiterStoreInterface
{
    /**
     * Atomically reads the count and remaining lifetime, optionally recording one attempt in the same operation.
     *
     * @param string $key
     * @param int $interval
     * @param bool $increment
     *
     * @return array{operations:int, ttl:int}
     * @author Bas Milius <bas@mili.us>
     * @since 3.3.0
     */
    public function snapshot(
        string $key,
        int $interval,
        bool $increment = true
    ): array;
}
