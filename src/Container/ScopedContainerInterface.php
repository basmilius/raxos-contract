<?php
declare(strict_types=1);

namespace Raxos\Contract\Container;

use Throwable;
use UnitEnum;

/**
 * Interface ScopedContainerInterface
 *
 * Optional nested lifecycle scopes for long-running applications.
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Container
 * @since 3.3.0
 */
interface ScopedContainerInterface extends ContainerInterface
{
    /**
     * Registers a binding whose instance is shared only within the current scope.
     *
     * @param string $abstract
     * @param callable|string|null $concrete
     * @param UnitEnum|string|null $tag
     *
     * @return void
     * @author Bas Milius <bas@mili.us>
     * @since 3.3.0
     */
    public function scoped(
        string $abstract,
        callable|string|null $concrete = null,
        UnitEnum|string|null $tag = null
    ): void;

    /**
     * Creates an isolated scope for the callback and releases its instances even when it throws.
     *
     * @template T
     * @param callable(ScopedContainerInterface):T $fn
     *
     * @return T
     * @throws Throwable
     * @author Bas Milius <bas@mili.us>
     * @since 3.3.0
     */
    public function scope(callable $fn): mixed;
}
