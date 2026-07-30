<?php
declare(strict_types=1);

namespace Raxos\Contract\Database\Orm;

use Raxos\Contract\Database\DatabaseExceptionInterface;
use Raxos\Contract\Database\Query\QueryExceptionInterface;

/**
 * Interface MutableModelInterface
 *
 * @template TModel of MutableModelInterface
 * @extends ModelInterface<TModel>
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Database\Orm
 * @since 3.1.0
 */
interface MutableModelInterface extends AccessInterface, ModelInterface
{

    /**
     * Deletes the model record from the database.
     *
     * @return void
     * @throws DatabaseExceptionInterface
     * @throws OrmExceptionInterface
     * @throws QueryExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 3.1.0
     */
    public function destroy(): void;

    /**
     * Saves the model.
     *
     * @return void
     * @throws DatabaseExceptionInterface
     * @throws OrmExceptionInterface
     * @throws QueryExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 3.1.0
     */
    public function save(): void;

}
