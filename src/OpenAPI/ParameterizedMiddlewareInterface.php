<?php
declare(strict_types=1);

namespace Raxos\Contract\OpenAPI;

use Generator;
use Raxos\Contract\Router\MiddlewareInterface;
use Raxos\OpenAPI\Definition\Parameter;

/**
 * Interface ParameterizedMiddlewareInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\OpenAPI
 * @since 2.1.0
 */
interface ParameterizedMiddlewareInterface extends MiddlewareInterface
{

    /**
     * Generate parameters for use in the OpenAPI schema builder.
     *
     * @return Generator<string, Parameter>
     * @author Bas Milius <bas@mili.us>
     * @since 2.1.0
     */
    public static function generateParameters(): Generator;

}
