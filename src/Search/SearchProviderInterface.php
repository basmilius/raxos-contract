<?php
declare(strict_types=1);

namespace Raxos\Contract\Search;

use Raxos\Contract\Collection\{ArrayListInterface, MapInterface};
use Raxos\Contract\Database\DatabaseExceptionInterface;
use Raxos\Contract\Database\Query\QueryInterface;
use Raxos\Search\SearchResult;

/**
 * Interface SearchProviderInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Search
 * @since 2.0.0
 */
interface SearchProviderInterface
{

    /**
     * Registers a model for search.
     *
     * @param string $modelClass
     *
     * @return void
     * @throws DatabaseExceptionInterface
     * @throws SearchExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function registerModel(string $modelClass): void;

    /**
     * Applies the structured filters (per-field values, e.g. discrete query
     * parameters) declared on the given model and returns a new query with the
     * resulting WHERE-clauses applied. The given query is not mutated, so callers
     * must use the returned query. Unlike {@see self::search()} this adds no
     * scoring, ordering or limiting — the caller keeps ownership of ordering and
     * pagination.
     *
     * @param QueryInterface $query
     * @param string $modelClass
     * @param MapInterface $params
     *
     * @return QueryInterface
     * @throws DatabaseExceptionInterface
     * @throws SearchExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.2.0
     */
    public function applyFilters(QueryInterface $query, string $modelClass, MapInterface $params): QueryInterface;

    /**
     * Perform a search using the given query.
     *
     * @param string $query
     * @param MapInterface|null $context
     * @param MapInterface|null $filters
     * @param int $limit
     *
     * @return ArrayListInterface<int, SearchResult>
     * @throws DatabaseExceptionInterface
     * @throws SearchExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function search(string $query, ?MapInterface $context = null, ?MapInterface $filters = null, int $limit = 10): ArrayListInterface;

}
