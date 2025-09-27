<?php
declare(strict_types=1);

namespace Raxos\Contract\Cache;

/**
 * Interface RedisTaggedCacheInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Cache
 * @since 2.0.0
 */
interface RedisTaggedCacheInterface
{

    /**
     * Returns the given key with tags embedded.
     *
     * @param string $key
     *
     * @return string
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function key(string $key): string;

    /**
     * Deletes the given keys from the cache.
     *
     * @param string ...$keys
     *
     * @return bool
     * @throws RedisCacheExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function del(string ...$keys): bool;

    /**
     * Returns TRUE if the given key exists.
     *
     * @param string $key
     *
     * @return bool
     * @throws RedisCacheExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function exists(string $key): bool;

    /**
     * Removes all keys that match our tags.
     *
     * @throws RedisCacheExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function flush(): void;

    /**
     * Gets the value of the given key.
     *
     * @param string $key
     *
     * @return mixed
     * @throws RedisCacheExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function get(string $key): mixed;

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
     * Sets the given value to the given key.
     *
     * @param string $key
     * @param mixed $value
     * @param int $ttl
     *
     * @return bool
     * @throws RedisCacheExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function set(string $key, mixed $value, int $ttl): bool;

}
