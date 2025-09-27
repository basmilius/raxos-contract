<?php
declare(strict_types=1);

namespace Raxos\Contract\Router;

use Closure;
use Raxos\Router\Request\Request;
use Raxos\Router\Response\Response;
use Raxos\Router\Runner;
use Stringable;

/**
 * Interface FrameInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Router
 * @since 2.0.0
 */
interface FrameInterface extends Stringable
{

    /**
     * Executes the route frame and returns the response for the given request.
     *
     * @param Runner $runner
     * @param Request $request
     * @param Closure(Request):Response $next
     *
     * @return Response
     * @throws RuntimeExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function handle(Runner $runner, Request $request, Closure $next): Response;

}
