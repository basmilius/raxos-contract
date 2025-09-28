<?php
declare(strict_types=1);

namespace Raxos\Contract;

use JsonSerializable;
use Throwable;

/**
 * Interface ExceptionInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract
 * @since 2.0.0
 */
interface ExceptionInterface extends JsonSerializable, Throwable
{

    public string $error {
        get;
    }

    public string $errorDescription {
        get;
    }

}
