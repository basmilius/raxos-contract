<?php
declare(strict_types=1);

namespace Raxos\Contract\Collection;

/**
 * Interface ValidatedArrayListInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Collection
 * @since 2.0.0
 */
interface ValidatedArrayListInterface
{

    /**
     * Validates the given item.
     *
     * @param mixed $item
     *
     * @throws CollectionExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     * @see ArrayListInterface::of()
     */
    public static function validateItem(mixed $item): void;

}
