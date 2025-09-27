<?php
declare(strict_types=1);

namespace Raxos\Contract\Database\Orm;

use Raxos\Database\Orm\Model;

/**
 * Interface CacheInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Database\Orm
 * @since 2.0.0
 */
interface CacheInterface
{

    /**
     * Finds a cached model.
     *
     * @param class-string<Model> $modelClass
     * @param callable(Model):bool $predicate
     *
     * @return Model|null
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function find(string $modelClass, callable $predicate): ?Model;

    /**
     * Flushes the cache for the given model.
     *
     * @param class-string<Model> $modelClass
     *
     * @return void
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function flush(string $modelClass): void;

    /**
     * Flushes the cache.
     *
     * @return void
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function flushAll(): void;

    /**
     * Returns a cached model with the given primary key.
     *
     * @param class-string<Model> $modelClass
     * @param array|string|int $primaryKey
     *
     * @return Model|null
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function get(string $modelClass, array|string|int $primaryKey): ?Model;

    /**
     * Returns TRUE if a model with the given primary key is cached.
     *
     * @param class-string<Model> $modelClass
     * @param array|string|int $primaryKey
     *
     * @return bool
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function has(string $modelClass, array|string|int $primaryKey): bool;

    /**
     * Caches a model.
     *
     * @param class-string<Model> $modelClass
     * @param array|string|int $primaryKey
     * @param Model $instance
     *
     * @return void
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function set(string $modelClass, array|string|int $primaryKey, Model $instance): void;

    /**
     * Removes a model from the cache.
     *
     * @param class-string<Model> $modelClass
     * @param array|string|int $primaryKey
     *
     * @return void
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function unset(string $modelClass, array|string|int $primaryKey): void;

}
