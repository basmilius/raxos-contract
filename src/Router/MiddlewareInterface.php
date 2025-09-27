<?php
declare(strict_types=1);

namespace Raxos\Contract\Router;

use Closure;
use Exception;
use Raxos\Router\Request\Request;
use Raxos\Router\Response\Response;

/**
 * Interface MiddlewareInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Router
 * @since 2.0.0
 */
interface MiddlewareInterface
{

    /**
     * Handles the request.
     *
     * @param Request $request
     * @param Closure(Request):Response $next
     *
     * @return Response
     * @throws Exception
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function handle(Request $request, Closure $next): Response;

}
