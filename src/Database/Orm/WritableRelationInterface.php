<?php
declare(strict_types=1);

namespace Raxos\Contract\Database\Orm;

use Raxos\Contract\Database\Query\QueryExceptionInterface;
use Raxos\Database\Orm\{Model, ModelArrayList};
use Raxos\Database\Orm\Definition\RelationDefinition;

/**
 * Interface WritableRelationInterface
 *
 * @template TDeclaringModel of Model
 * @template TReferenceModel of Model
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Database\Orm
 * @since 2.0.0
 */
interface WritableRelationInterface
{

    /**
     * Writes to the relation and updates the appropriate properties.
     *
     * @param TDeclaringModel&Model $instance
     * @param RelationDefinition $property
     * @param TReferenceModel&Model|ModelArrayList<int, TReferenceModel&Model>|null $newValue
     *
     * @return void
     * @throws OrmExceptionInterface
     * @throws QueryExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function write(Model $instance, RelationDefinition $property, Model|ModelArrayList|null $newValue): void;

}
