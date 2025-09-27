<?php
declare(strict_types=1);

namespace Raxos\Contract\Database;

use BackedEnum;
use JetBrains\PhpStorm\ExpectedValues;
use PDO;
use Raxos\Contract\Database\Orm\{CacheInterface, OrmExceptionInterface};
use Raxos\Contract\Database\Query\{QueryExceptionInterface, QueryInterface, StatementInterface};
use Raxos\Database\Db;

/**
 * Interface ConnectionInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Database
 * @since 2.0.0
 */
interface ConnectionInterface
{

    /**
     * Returns the cache instance.
     *
     * @var CacheInterface
     *
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public CacheInterface $cache {
        get;
    }

    /**
     * Returns TRUE if the connection is open.
     *
     * @var bool
     *
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public bool $connected {
        get;
    }

    /**
     * Returns the DSN.
     *
     * @var string
     *
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public string $dsn {
        get;
    }

    /**
     * Returns the used grammar of the connection.
     *
     * @var GrammarInterface
     *
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public GrammarInterface $grammar {
        get;
    }

    /**
     * Returns TRUE if a transaction is active.
     *
     * @var bool
     *
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public bool $inTransaction {
        get;
    }

    /**
     * Returns the logger.
     *
     * @var LoggerInterface
     *
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public LoggerInterface $logger {
        get;
    }

    /**
     * Returns the password for the connection.
     *
     * @var string|null
     *
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public ?string $password {
        get;
    }

    /**
     * Returns the PDO instance.
     *
     * @var PDO|null
     *
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public ?PDO $pdo {
        get;
    }

    /**
     * Returns the username for the connection.
     *
     * @var string|null
     *
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public ?string $username {
        get;
    }

    /**
     * Connect to the database.
     *
     * @return void
     * @throws DatabaseExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function connect(): void;

    /**
     * Disconnect from the database.
     *
     * @return void
     * @throws DatabaseExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function disconnect(): void;

    /**
     * Returns the given connection attribute.
     *
     * @param int $attribute
     *
     * @return mixed
     * @throws DatabaseExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     * @see PDO::getAttribute()
     */
    public function attribute(int $attribute): mixed;

    /**
     * Executes the given query and returns the first column of the first result.
     *
     * @param QueryInterface|string $query
     *
     * @return string|int|false
     * @throws DatabaseExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     * @see PDO::query()
     * @see PDOStatement::fetchColumn()
     */
    public function column(QueryInterface|string $query): string|int|false;

    /**
     * Executes the given query and returns the number of affected rows.
     *
     * @param QueryInterface|string $query
     *
     * @return int
     * @throws DatabaseExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     * @see PDO::exec()
     */
    public function execute(QueryInterface|string $query): int;

    /**
     * Returns the number of rows that were found in the last query.
     *
     * @return int
     * @throws DatabaseExceptionInterface
     * @throws OrmExceptionInterface
     * @throws QueryExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function foundRows(): int;

    /**
     * Returns the last insert id.
     *
     * @param string|null $name
     *
     * @return string
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     * @see PDO::lastInsertId()
     */
    public function lastInsertId(?string $name = null): string;

    /**
     * Returns the last insert id as an integer.
     *
     * @param string|null $name
     *
     * @return int
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     * @see PDO::lastInsertId()
     */
    public function lastInsertIdInteger(?string $name = null): int;

    /**
     * Ping the mysql server.
     *
     * @return bool
     * @throws DatabaseExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function ping(): bool;

    /**
     * Returns a new prepared statement.
     *
     * @param QueryInterface|string $query
     * @param array $options
     *
     * @return StatementInterface
     * @throws QueryExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function prepare(QueryInterface|string $query, array $options = []): StatementInterface;

    /**
     * Compose a new query.
     *
     * @param bool $prepared
     *
     * @return QueryInterface
     * @throws DatabaseExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function query(bool $prepared = true): QueryInterface;

    /**
     * Quotes the given value.
     *
     * @param BackedEnum|string|int|float|bool $value
     * @param int $type
     *
     * @return string
     * @throws DatabaseExceptionInterface
     * @since 2.0.0
     * @author Bas Milius <bas@mili.us>
     * @see PDO::quote()
     */
    public function quote(
        BackedEnum|string|int|float|bool $value,
        #[ExpectedValues(Db::TYPES)] int $type = PDO::PARAM_STR
    ): string;

    /**
     * Commits the active transaction.
     *
     * @return bool
     * @throws QueryExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     * @see PDO::commit()
     */
    public function commit(): bool;

    /**
     * Rolls the active transaction back.
     *
     * @return bool
     * @throws QueryExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     * @see PDO::rollBack()
     */
    public function rollBack(): bool;

    /**
     * Begin a new transaction.
     *
     * @return bool
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     * @see PDO::beginTransaction()
     */
    public function transaction(): bool;

    /**
     * Loads the database schema.
     *
     * @return array<string, string[]>
     * @throws DatabaseExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function loadDatabaseSchema(): array;

    /**
     * Returns TRUE if the given column exists in the given table.
     *
     * @param string $table
     * @param string $column
     *
     * @return bool
     * @throws DatabaseExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function tableColumnExists(string $table, string $column): bool;

    /**
     * Returns all the columns of the given table.
     *
     * @param string $table
     *
     * @return string[]
     * @throws DatabaseExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function tableColumns(string $table): array;

    /**
     * Returns TRUE if the given table exists.
     *
     * @param string $table
     *
     * @return bool
     * @throws DatabaseExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function tableExists(string $table): bool;

}
