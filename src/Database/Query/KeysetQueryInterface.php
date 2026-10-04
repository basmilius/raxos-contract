<?php
declare(strict_types=1);

namespace Raxos\Contract\Database\Query;

use Generator;
use Raxos\Collection\CursorPage;
use Raxos\Contract\Collection\ArrayListInterface;

/**
 * Interface KeysetQueryInterface
 *
 * Optional capability for queries with stable ordered scalar keys.
 *
 * @template TModel
 * @extends QueryInterface<TModel>
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Database\Query
 * @since 3.3.0
 */
interface KeysetQueryInterface extends QueryInterface
{
    /**
     * Continues an ordered result without OFFSET or a total-count query. The final sort key must be unique.
     *
     * @param int $size
     * @param string|null $cursor
     * @param list<string> $columns
     * @param bool $descending
     * @param array $options
     * @return CursorPage<TModel|array>
     * @author Bas Milius <bas@mili.us>
     * @since 3.3.0
     */
    public function cursorPaginate(
        int $size = 25,
        ?string $cursor = null,
        array $columns = ['id'],
        bool $descending = false,
        array $options = []
    ): CursorPage;

    /**
     * Fetches bounded batches ordered by a unique non-null column and releases batch identities between reads.
     *
     * @param int $batchSize
     * @param string|list<string> $column
     * @param bool $descending
     * @param bool $retainCache
     * @return Generator<int, TModel|array>
     * @author Bas Milius <bas@mili.us>
     * @since 3.3.0
     */
    public function lazyById(
        int $batchSize = 100,
        string|array $column = 'id',
        bool $descending = false,
        bool $retainCache = false
    ): Generator;

    /**
     * Processes bounded batches until the source ends or the callback returns false.
     *
     * @param callable(ArrayListInterface<int, TModel|array>):mixed $fn
     * @param int $batchSize
     * @param string|list<string> $column
     * @param bool $descending
     * @param bool $retainCache
     * @return void
     * @author Bas Milius <bas@mili.us>
     * @since 3.3.0
     */
    public function chunkById(
        callable $fn,
        int $batchSize = 100,
        string|array $column = 'id',
        bool $descending = false,
        bool $retainCache = false
    ): void;
}
