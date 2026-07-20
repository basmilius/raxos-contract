<?php
declare(strict_types=1);

namespace Raxos\Contract\Database\Orm;

use Raxos\Contract\Collection\ArrayListInterface;
use Raxos\Contract\Database\ConnectionInterface;
use Raxos\Contract\Database\DatabaseExceptionInterface;
use Raxos\Database\Orm\Model;

/**
 * Interface PrimerInterface
 *
 * A primer runs once over a freshly hydrated batch of models and seeds a value
 * into each model's macro cache, so that reading a computed macro property while
 * serializing the batch no longer triggers one query per model.
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Database\Orm
 * @since 3.0.0
 */
interface PrimerInterface
{

    /**
     * Primes the given batch of freshly hydrated models. Implementations should
     * perform a single bulk query using the given connection and seed each
     * model's macro cache with the resolved values.
     *
     * @param ArrayListInterface<int, Model> $instances
     * @param ConnectionInterface $connection
     *
     * @return void
     * @throws DatabaseExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 3.0.0
     */
    public function prime(ArrayListInterface $instances, ConnectionInterface $connection): void;

}
