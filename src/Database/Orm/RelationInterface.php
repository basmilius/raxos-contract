<?php
declare(strict_types=1);

namespace Raxos\Contract\Database\Orm;

use Raxos\Contract\Collection\ArrayListInterface;
use Raxos\Contract\Database\DatabaseExceptionInterface;
use Raxos\Contract\Database\Query\{QueryExceptionInterface, QueryInterface};
use Raxos\Database\Orm\{Model, ModelArrayList};
use Raxos\Database\Orm\Definition\RelationDefinition;

/**
 * Interface RelationInterface
 *
 * @template TDeclaringModel of Model
 * @template TReferenceModel of Model
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Database\Orm
 * @since 2.0.0
 */
interface RelationInterface
{

    public RelationAttributeInterface $attribute {
        get;
    }

    public RelationDefinition $property {
        get;
    }

    /**
     * Fetches the result of the relation.
     *
     * @param TDeclaringModel&Model $instance
     *
     * @return TReferenceModel&Model|ModelArrayList<int, TReferenceModel&Model>|null
     * @throws DatabaseExceptionInterface
     * @throws OrmExceptionInterface
     * @throws QueryExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function fetch(Model $instance): Model|ModelArrayList|null;

    /**
     * Returns a prepared query for the relation.
     *
     * @param TDeclaringModel&Model $instance
     *
     * @return QueryInterface<TReferenceModel&Model>
     * @throws DatabaseExceptionInterface
     * @throws OrmExceptionInterface
     * @throws QueryExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function query(Model $instance): QueryInterface;

    /**
     * Returns a raw unprepared query for the relation.
     *
     * @return QueryInterface
     * @throws DatabaseExceptionInterface
     * @throws OrmExceptionInterface
     * @throws QueryExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function rawQuery(): QueryInterface;

    /**
     * Eager loads the relation for the given instances.
     *
     * @param ArrayListInterface<int, TDeclaringModel&Model> $instances
     *
     * @return void
     * @throws DatabaseExceptionInterface
     * @throws OrmExceptionInterface
     * @throws QueryExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function eagerLoad(ArrayListInterface $instances): void;

}
