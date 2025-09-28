<?php
declare(strict_types=1);

namespace Raxos\Contract\Router;

use Throwable;

/**
 * Interface RuntimeExceptionInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Router
 * @since 2.0.0
 */
interface RuntimeExceptionInterface extends RouterExceptionInterface
{

    public ?Throwable $previous {
        get;
    }

}
