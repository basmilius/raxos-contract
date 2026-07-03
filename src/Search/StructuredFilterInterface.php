<?php
declare(strict_types=1);

namespace Raxos\Contract\Search;

use Raxos\Contract\Collection\MapInterface;

/**
 * Interface StructuredFilterInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Search
 * @since 2.2.0
 */
interface StructuredFilterInterface
{

    /**
     * Builds a query node from structured (per-field) input — e.g. discrete
     * HTTP query parameters — or returns NULL when this filter has no value in
     * the given parameters. The resulting node is fed to {@see FilterInterface::apply()},
     * so the structured mode reuses the same SQL generation as the query-string mode.
     *
     * @param string $property
     * @param MapInterface $params
     *
     * @return QueryNodeInterface|null
     * @author Bas Milius <bas@mili.us>
     * @since 2.2.0
     */
    public function fromInput(string $property, MapInterface $params): ?QueryNodeInterface;

    /**
     * Describes the query parameter(s) this filter exposes, for OpenAPI generation.
     * Each entry is a framework-neutral spec: a name and a type
     * (`string`/`boolean`/`integer`), optionally an `enum` (allowed values) and a
     * `format` (e.g. `date-time`).
     *
     * @param string $property
     *
     * @return list<array{name: string, type: string, enum?: array, format?: string}>
     * @author Bas Milius <bas@mili.us>
     * @since 2.2.0
     */
    public function describe(string $property): array;

}
