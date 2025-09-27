<?php
declare(strict_types=1);

namespace Raxos\Contract;

/**
 * Interface SerializableInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract
 * @since 2.0.0
 */
interface SerializableInterface
{

    /**
     * Serializes the object.
     *
     * @return array
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function __serialize(): array;

    /**
     * Unserializes the given array of data.
     *
     * @param array $data
     *
     * @return void
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function __unserialize(array $data): void;

}
