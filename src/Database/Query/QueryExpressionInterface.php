<?php
declare(strict_types=1);

namespace Raxos\Contract\Database\Query;

use Raxos\Contract\Database\{ConnectionInterface, GrammarInterface};

/**
 * Interface QueryExpressionInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Database\Query
 * @since 2.0.0
 */
interface QueryExpressionInterface extends QueryValueInterface
{

    /**
     * Returns the value. The query instance is provided for setting
     * params when needed.
     *
     * @param QueryInterface $query
     * @param ConnectionInterface $connection
     * @param GrammarInterface $grammar
     *
     * @return void
     * @throws QueryExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function compile(QueryInterface $query, ConnectionInterface $connection, GrammarInterface $grammar): void;

}
