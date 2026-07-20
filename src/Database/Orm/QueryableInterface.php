<?php
declare(strict_types=1);

namespace Raxos\Contract\Database\Orm;

use Raxos\Contract\Database\DatabaseExceptionInterface;
use Raxos\Contract\Database\Query\{QueryExceptionInterface, QueryInterface};

/**
 * Interface QueryableInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Database\Orm
 * @since 2.0.0
 */
interface QueryableInterface
{

    /**
     * Gets the columns that the model uses in addition to the record itself.
     * Keys are aliases (`string`) or positional (`int`), values are columns,
     * sub-queries or expressions.
     *
     * @param array $columns
     *
     * @return array
     * @throws DatabaseExceptionInterface
     * @throws OrmExceptionInterface
     * @throws QueryExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public static function getQueryableColumns(array $columns): array;

    /**
     * Gets the joins that model queries use.
     *
     * @param QueryInterface<static> $query
     *
     * @return QueryInterface<static>
     * @throws DatabaseExceptionInterface
     * @throws OrmExceptionInterface
     * @throws QueryExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public static function getQueryableJoins(QueryInterface $query): QueryInterface;

}
