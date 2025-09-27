<?php
declare(strict_types=1);

namespace Raxos\Contract\Http\Validate;

/**
 * Interface ConstraintWithParamsExceptionInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Http\Validate
 * @since 2.0.0
 */
interface ConstraintWithParamsExceptionInterface extends ConstraintExceptionInterface
{

    public array $params {
        get;
    }

}
