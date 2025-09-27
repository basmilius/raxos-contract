<?php
declare(strict_types=1);

namespace Raxos\Contract\Cache;

/**
 * Interface RedisCacheInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Cache
 * @since 2.0.0
 */
interface RedisCacheInterface
{

    /**
     * Connects to the Redis server.
     *
     * @return bool
     * @throws RedisCacheExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function connect(): bool;

    /**
     * Gets the prefix used for the keys.
     *
     * @return string
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function getPrefix(): string;

    /**
     * Returns TRUE if we're connected to a Redis server.
     *
     * @return bool
     * @throws RedisCacheExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function isConnected(): bool;

    /**
     * Remembers data in our cache.
     *
     * @template T of mixed
     *
     * @param string $key
     * @param int $ttl
     * @param callable():T $fn
     *
     * @return T
     * @throws RedisCacheExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function remember(string $key, int $ttl, callable $fn): mixed;

    /**
     * Selects the given database.
     *
     * @param int $databaseId
     *
     * @throws RedisCacheExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function selectDatabase(int $databaseId): void;

    /**
     * Gets a tagged cache instance.
     *
     * @param string[] $tags
     *
     * @return RedisTaggedCacheInterface
     * @throws RedisCacheExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function tags(array $tags): RedisTaggedCacheInterface;

}
