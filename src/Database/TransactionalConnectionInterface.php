<?php
declare(strict_types=1);

namespace Raxos\Contract\Database;

use Throwable;

/**
 * Interface TransactionalConnectionInterface
 *
 * Callback transactions with connection-local commit hooks.
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Database
 * @since 3.3.0
 */
interface TransactionalConnectionInterface extends ConnectionInterface
{
    /**
     * Commits the callback result on success and rolls back its owned transaction level on failure.
     *
     * @template T
     * @param callable():T $fn
     *
     * @return T
     * @throws DatabaseExceptionInterface|Throwable
     * @author Bas Milius <bas@mili.us>
     * @since 3.3.0
     */
    public function transactional(callable $fn): mixed;

    /**
     * Runs immediately outside a transaction, otherwise after the outer commit.
     *
     * @param callable():void $fn
     *
     * @return void
     * @throws Throwable
     * @author Bas Milius <bas@mili.us>
     * @since 3.3.0
     */
    public function afterCommit(callable $fn): void;
}
