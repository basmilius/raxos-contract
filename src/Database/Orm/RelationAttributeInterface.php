<?php
declare(strict_types=1);

namespace Raxos\Contract\Database\Orm;

/**
 * Interface RelationAttributeInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Database\Orm
 * @since 2.0.0
 */
interface RelationAttributeInterface
{

    public bool $eagerLoad {
        get;
    }

}
