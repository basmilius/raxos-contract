<?php
declare(strict_types=1);

namespace Raxos\Contract\Router;

use Closure;
use Raxos\Http\{HttpRequest, HttpResponse};
use Throwable;

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
     * @param HttpRequest $request
     * @param Closure(HttpRequest):HttpResponse $next
     *
     * @return HttpResponse
     * @throws Throwable
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function handle(HttpRequest $request, Closure $next): HttpResponse;

}
