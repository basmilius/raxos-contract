<?php
declare(strict_types=1);

namespace Raxos\Contract\Database\Orm;

use JsonSerializable;
use Raxos\Contract\Collection\ArrayableInterface;
use Raxos\Database\Orm\{Model, ReadonlyModel};
use Stringable;

/**
 * Interface ModelInterface
 *
 * The read-only surface of a model. Both {@see Model} and
 * {@see ReadonlyModel} implement it, so a consumer that only reads can accept
 * either. Mutation lives in {@see MutableModelInterface}.
 *
 * @template TModel of ModelInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Database\Orm
 * @since 3.1.0
 */
interface ModelInterface extends ArrayableInterface, JsonSerializable, Stringable, VisibilityInterface
{

    public BackboneInterface $backbone {
        get;
    }

    /**
     * Gets the value at the given key.
     *
     * @param string $key
     *
     * @return mixed
     * @throws OrmExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 3.1.0
     */
    public function getValue(string $key): mixed;

    /**
     * Returns TRUE if a value exists at the given key.
     *
     * @param string $key
     *
     * @return bool
     * @throws OrmExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 3.1.0
     */
    public function hasValue(string $key): bool;

    /**
     * Returns a read-only view of the model, sharing the same backbone. Safe to
     * expose to untrusted consumers such as template engines.
     *
     * @return ReadonlyModel
     * @author Bas Milius <bas@mili.us>
     * @since 3.1.0
     */
    public function readonly(): ReadonlyModel;

}
