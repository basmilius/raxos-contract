<?php
declare(strict_types=1);

namespace Raxos\Contract\Router;

/**
 * Interface ResponseInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Router
 * @since 2.0.0
 */
interface ResponseInterface
{

    /**
     * Sends the response to the browser.
     *
     * @return void
     * @throws RuntimeExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function send(): void;

}
