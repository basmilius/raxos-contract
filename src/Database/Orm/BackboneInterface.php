<?php
declare(strict_types=1);

namespace Raxos\Contract\Database\Orm;

use JetBrains\PhpStorm\ExpectedValues;
use Raxos\Contract\Database\{ConnectionInterface, DatabaseExceptionInterface};
use Raxos\Contract\Database\Query\{QueryExceptionInterface, QueryInterface};
use Raxos\Database\Orm\{Model, ModelArrayList};
use Raxos\Database\Orm\Definition\{ColumnDefinition, MacroDefinition, RelationDefinition};

/**
 * Interface BackboneInterface
 *
 * @template TModel
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Database\Orm
 * @since 2.0.0
 */
interface BackboneInterface
{

    public CacheInterface $cache {
        get;
    }

    public ConnectionInterface $connection {
        get;
    }

    public StructureInterface $structure {
        get;
    }

    /**
     * Adds the given model instance.
     *
     * @param TModel&Model $instance
     *
     * @return void
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function addInstance(Model $instance): void;

    /**
     * Returns a new instance.
     *
     * @return TModel&Model
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function createInstance(): Model;

    /**
     * Adds a save task.
     *
     * @param callable $fn
     *
     * @return void
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function addSaveTask(callable $fn): void;

    /**
     * Runs any save tasks that are queued.
     *
     * @return void
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function runSaveTasks(): void;

    /**
     * Returns the cast value.
     *
     * @template TCaster of CasterInterface
     *
     * @param class-string<TCaster> $caster
     * @param string $mode
     * @param mixed $value
     *
     * @return mixed
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function getCastedValue(string $caster, #[ExpectedValues(['decode', 'encode'])] string $mode, mixed $value): mixed;

    /**
     * Returns the value of the given column.
     *
     * @param ColumnDefinition $property
     *
     * @return mixed
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function getColumnValue(ColumnDefinition $property): mixed;

    /**
     * Returns the value of the given macro.
     *
     * @param MacroDefinition $property
     *
     * @return mixed
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function getMacroValue(MacroDefinition $property): mixed;

    /**
     * Returns the value of the given relation.
     *
     * @param RelationDefinition $property
     *
     * @return TModel&Model|ModelArrayList<int, TModel&Model>|null
     * @throws DatabaseExceptionInterface
     * @throws OrmExceptionInterface
     * @throws QueryExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function getRelationValue(RelationDefinition $property): Model|ModelArrayList|null;

    /**
     * Sets the value of the given column property.
     *
     * @param ColumnDefinition $property
     * @param mixed $value
     *
     * @return void
     * @throws OrmExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function setColumnValue(ColumnDefinition $property, mixed $value): void;

    /**
     * Sets the value of the given relation property.
     *
     * @param RelationDefinition $property
     * @param mixed $value
     *
     * @return void
     * @throws OrmExceptionInterface
     * @throws QueryExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function setRelationValue(RelationDefinition $property, mixed $value): void;

    /**
     * Gets the value(s) of the primary key(s).
     *
     * @return array|null
     * @throws OrmExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function getPrimaryKeyValues(): array|null;

    /**
     * Returns TRUE if the model is modified, or if a key is given, if
     * that property is modified.
     *
     * @param string|null $key
     *
     * @return bool
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function isModified(?string $key = null): bool;

    /**
     * Queries the relation with the given key.
     *
     * @param TModel&Model $instance
     * @param string $key
     *
     * @return QueryInterface
     * @throws DatabaseExceptionInterface
     * @throws OrmExceptionInterface
     * @throws QueryExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function queryRelation(Model $instance, string $key): QueryInterface;

    /**
     * Reloads the record of the model. This will also flush the caster,
     * macro and relation cache to start fresh.
     *
     * @return void
     * @throws DatabaseExceptionInterface
     * @throws OrmExceptionInterface
     * @throws QueryExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function reload(): void;

    /**
     * Saves the model.
     * - If the model is new, a new record is created in the database,
     *   and all fields are treated as modified.
     * - If the model is loaded from the database, only the fields that
     *   are actually modified are saved.
     *
     * @return void
     * @throws DatabaseExceptionInterface
     * @throws OrmExceptionInterface
     * @throws QueryExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function save(): void;

}
