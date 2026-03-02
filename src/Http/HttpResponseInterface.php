<?php
declare(strict_types=1);

namespace Raxos\Contract\Http;

use Raxos\Http\HttpResponseCode;
use Raxos\Http\Structure\HttpHeadersMap;

/**
 * Interface HttpResponseInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Http
 * @since 2.1.0
 */
interface HttpResponseInterface
{

    public HttpHeadersMap $headers {
        get;
    }

    public HttpResponseCode $responseCode {
        get;
    }

    /**
     * Adds a header to the response.
     *
     * @param string $name
     * @param string $value
     * @param bool $replace
     *
     * @return $this
     * @author Bas Milius <bas@mili.us>
     * @since 2.1.0
     */
    public function header(string $name, string $value, bool $replace = false): static;

    /**
     * Sets the response code.
     *
     * @param HttpResponseCode $responseCode
     *
     * @return $this
     * @author Bas Milius <bas@mili.us>
     * @since 2.1.0
     */
    public function responseCode(HttpResponseCode $responseCode): static;

    /**
     * Sends the response.
     *
     * @return void
     * @author Bas Milius <bas@mili.us>
     * @since 2.1.0
     */
    public function send(): void;

}
