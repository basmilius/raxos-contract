<?php
declare(strict_types=1);

namespace Raxos\Contract\Database\Query;

use Generator;
use PDO;
use PDOStatement;
use Raxos\Collection\Paginated;
use Raxos\Contract\Collection\ArrayListInterface;
use Raxos\Contract\Database\DatabaseExceptionInterface;
use Raxos\Contract\Database\Orm\OrmExceptionInterface;
use Raxos\Database\Orm\{Model, ModelArrayList};
use stdClass;

/**
 * Interface StatementInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Database\Query
 * @since 2.0.0
 */
interface StatementInterface
{

    public string $sql {
        get;
    }

    public PDOStatement $pdoStatement {
        get;
    }

    /**
     * Executes the statement and returns an array containing all results.
     *
     * @param int $fetchMode
     *
     * @return array
     * @throws DatabaseExceptionInterface
     * @throws OrmExceptionInterface
     * @throws QueryExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function array(int $fetchMode = PDO::FETCH_ASSOC): array;

    /**
     * Executes the statement and returns an ArrayList containing all results.
     *
     * @param int $fetchMode
     *
     * @return ArrayListInterface|ModelArrayList
     * @throws DatabaseExceptionInterface
     * @throws OrmExceptionInterface
     * @throws QueryExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function arrayList(int $fetchMode = PDO::FETCH_ASSOC): ArrayListInterface|ModelArrayList;

    /**
     * Executes the statement and returns a generator containing all results.
     *
     * @param int $fetchMode
     *
     * @return Generator
     * @throws DatabaseExceptionInterface
     * @throws OrmExceptionInterface
     * @throws QueryExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function cursor(int $fetchMode = PDO::FETCH_ASSOC): Generator;

    /**
     * Executes the statement and returns a paginated response.
     *
     * @param int $offset
     * @param int $limit
     * @param callable(QueryInterface, int, int):ArrayListInterface|null $itemBuilder
     * @param callable(QueryInterface, int, int):int|null $totalBuilder
     * @param int $fetchMode
     *
     * @return Paginated
     * @throws DatabaseExceptionInterface
     * @throws OrmExceptionInterface
     * @throws QueryExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     * @see StatementInterface::arrayList()
     */
    public function paginate(int $offset, int $limit, ?callable $itemBuilder = null, ?callable $totalBuilder = null, int $fetchMode = PDO::FETCH_ASSOC): Paginated;

    /**
     * Executes the statement.
     *
     * @throws DatabaseExceptionInterface
     * @throws QueryExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function run(): void;

    /**
     * Executes the statement and returns the first result.
     *
     * @param int $fetchMode
     *
     * @return Model|stdClass|array|null
     * @throws DatabaseExceptionInterface
     * @throws OrmExceptionInterface
     * @throws QueryExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function single(int $fetchMode = PDO::FETCH_ASSOC): Model|stdClass|array|null;

    /**
     * Binds the given value.
     *
     * @param string $name
     * @param string|int|float|null $value
     * @param int|null $type
     *
     * @return self
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function bind(string $name, string|int|float|null $value, ?int $type = null): self;

    /**
     * Creates a new model instance.
     *
     * @param mixed $result
     *
     * @return Model
     * @throws OrmExceptionInterface
     * @throws QueryExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function createModel(mixed $result): Model;

    /**
     * Enable eager loading for the given relationships.
     *
     * @param string[] $relationships
     *
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function eagerLoad(array $relationships): void;

    /**
     * Disable eager loading for the given relationships.
     *
     * @param string[] $relationships
     *
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function eagerLoadDisable(array $relationships): void;

    /**
     * Fetches a single row.
     *
     * @param int $fetchMode
     *
     * @return Model|stdClass|array|null
     * @throws DatabaseExceptionInterface
     * @throws OrmExceptionInterface
     * @throws QueryExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function fetch(int $fetchMode = PDO::FETCH_ASSOC): Model|stdClass|array|null;

    /**
     * Fetches all rows.
     *
     * @param int $fetchMode
     *
     * @return array
     * @throws DatabaseExceptionInterface
     * @throws OrmExceptionInterface
     * @throws QueryExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function fetchAll(int $fetchMode = PDO::FETCH_ASSOC): array;

    /**
     * Fetches a single column of a single row.
     *
     * @param int $index
     *
     * @return mixed
     * @throws DatabaseExceptionInterface
     * @throws QueryExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function fetchColumn(int $index = 0): mixed;

    /**
     * Returns the number of rows in the result.
     *
     * @return int
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function rowCount(): int;

    /**
     * Associates a model.
     *
     * @param string $class
     *
     * @return self
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function withModel(string $class): self;

    /**
     * Removes the associated model.
     *
     * @return self
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function withoutModel(): self;

}
