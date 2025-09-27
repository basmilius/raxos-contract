<?php
declare(strict_types=1);

namespace Raxos\Contract\Search;

use Raxos\Contract\Collection\MapInterface;
use Raxos\Contract\Database\DatabaseExceptionInterface;
use Raxos\Contract\Database\Orm\StructureInterface;
use Raxos\Contract\Database\Query\QueryInterface;
use Raxos\Search\Policy\PolicyDecision;

/**
 * Interface PolicyInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Search
 * @since 2.0.0
 */
interface PolicyInterface
{

    /**
     * Apply the policy to the query.
     *
     * @param StructureInterface $structure
     * @param QueryInterface $query
     * @param MapInterface $context
     *
     * @return PolicyDecision
     * @throws DatabaseExceptionInterface
     * @throws SearchExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function apply(StructureInterface $structure, QueryInterface $query, MapInterface $context): PolicyDecision;

}
