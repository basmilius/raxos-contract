<?php
declare(strict_types=1);

namespace Raxos\Contract\Router;

use Raxos\Collection\Map;
use Raxos\Contract\Container\ContainerInterface;
use Raxos\Router\Request\Request;
use Raxos\Router\Response\Response;

/**
 * Interface RouterInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Router
 * @since 2.0.0
 */
interface RouterInterface
{

    public ?ContainerInterface $container {
        get;
    }

    public Map $globals {
        get;
    }

    public array $dynamicRoutes {
        get;
    }

    public array $staticRoutes {
        get;
    }

    /**
     * Returns the path of a route.
     *
     * @param array $handler
     *
     * @return string
     * @throws RuntimeExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function path(array $handler): string;

    /**
     * Turns the request into a response.
     *
     * @param Request $request
     *
     * @return Response
     * @throws RuntimeExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function resolve(Request $request): Response;

}
