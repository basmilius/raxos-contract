<?php
declare(strict_types=1);

namespace Raxos\Contract\Database\Orm;

/**
 * Interface BackpackInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Database\Orm
 * @since 2.0.0
 */
interface BackpackInterface
{

    /**
     * Gets the value at the given key.
     *
     * @param string $key
     *
     * @return mixed
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function getValue(string $key): mixed;

    /**
     * Returns TRUE if there is a value at the given key.
     *
     * @param string $key
     *
     * @return bool
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
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function setValue(string $key, mixed $value): void;

    /**
     * Removes the value at the given key.
     *
     * @param string $key
     *
     * @return void
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function unsetValue(string $key): void;

    /**
     * Clears out the backpack.
     *
     * @return void
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function clear(): void;

    /**
     * Replaces the contents of the backpack with the given data.
     *
     * @param array $data
     *
     * @return void
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function replaceWith(array $data): void;

}
