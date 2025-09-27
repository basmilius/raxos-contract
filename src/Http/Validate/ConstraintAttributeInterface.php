<?php
declare(strict_types=1);

namespace Raxos\Contract\Http\Validate;

use ReflectionProperty;

/**
 * Interface ConstraintAttributeInterface
 *
 * @template TValue of mixed
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Http\Validate
 * @since 2.0.0
 */
interface ConstraintAttributeInterface extends AttributeInterface
{

    /**
     * Checks the given value.
     *
     * @param ReflectionProperty $property
     * @param TValue $value
     *
     * @return mixed
     * @throws ConstraintExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function check(ReflectionProperty $property, mixed $value): mixed;

}
