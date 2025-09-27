<?php
declare(strict_types=1);

namespace Raxos\Contract\Database\Orm;

/**
 * Interface AccessInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Database\Orm
 * @since 2.0.0
 */
interface AccessInterface
{

    /**
     * Gets the value at the given key.
     *
     * @param string $key
     *
     * @return mixed
     * @throws OrmExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
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
     * @since 2.0.0
     */
    public function hasValue(string $key): bool;

    /**
     * Sets the value at the given key.
     *
     * @param string $key
     * @param mixed $value
     *
     * @return void
     * @throws OrmExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function setValue(string $key, mixed $value): void;

    /**
     * Unsets the value at the given key.
     *
     * @param string $key
     *
     * @return void
     * @throws OrmExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function unsetValue(string $key): void;

}
