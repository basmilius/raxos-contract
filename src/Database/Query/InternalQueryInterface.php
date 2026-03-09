<?php
declare(strict_types=1);

namespace Raxos\Contract\Database\Query;

use Raxos\Contract\Collection\ArrayListInterface;
use Raxos\Database\Orm\Model;

/**
 * Interface InternalQueryInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Database\Query
 * @since 2.0.0
 */
interface InternalQueryInterface
{

    /**
     * The given function will be invoked before any relations
     * are eagerly loaded by the orm.
     *
     * @param callable(ArrayListInterface<int, Model>):void $fn
     *
     * @return QueryInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     * @internal
     */
    public function setBeforeRelationsHook(callable $fn): QueryInterface;

    /**
     * If {@see self::setBeforeRelationsHook()} is set, that function
     * will be invoked.
     *
     * @param ArrayListInterface<int, Model> $instances
     *
     * @return void
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     * @internal
     */
    public function invokeBeforeRelationsHook(ArrayListInterface $instances): void;

}
