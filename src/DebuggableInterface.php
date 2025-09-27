<?php
declare(strict_types=1);

namespace Raxos\Contract;

/**
 * Interface DebuggableInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract
 * @since 2.0.0
 */
interface DebuggableInterface
{

    /**
     * Returns debug information for the object.
     *
     * @return array
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function __debugInfo(): array;

}
