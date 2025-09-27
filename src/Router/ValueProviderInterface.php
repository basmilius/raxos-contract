<?php
declare(strict_types=1);

namespace Raxos\Contract\Router;

use Raxos\Router\Definition\Injectable;
use Raxos\Router\Request\Request;

/**
 * Interface ValueProviderInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Router
 * @since 2.0.0
 */
interface ValueProviderInterface
{

    /**
     * Returns the regex used for the value provider.
     *
     * @param Injectable $injectable
     *
     * @return string
     * @throws MappingExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function getRegex(Injectable $injectable): string;

    /**
     * Returns the corresponding value.
     *
     * @param Request $request
     * @param Injectable $injectable
     *
     * @return mixed
     * @throws RuntimeExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function getValue(Request $request, Injectable $injectable): mixed;

}
