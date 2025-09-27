<?php
declare(strict_types=1);

namespace Raxos\Contract\Collection;

/**
 * Interface ArrayableInterface
 *
 * @template TKey of array-key
 * @template TValue
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Collection
 * @since 2.0.0
 */
interface ArrayableInterface
{

    /**
     * Returns an array representation of the object.
     *
     * @return array<TKey, TValue>
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function toArray(): array;

}
