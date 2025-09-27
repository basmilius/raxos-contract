<?php
declare(strict_types=1);

namespace Raxos\Contract\Reflection;

use ReflectionException;

/**
 * Interface ReflectionFailedExceptionInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Reflection
 * @since 2.0.0
 */
interface ReflectionFailedExceptionInterface
{

    public ReflectionException $err {
        get;
    }

}
