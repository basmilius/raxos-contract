<?php
declare(strict_types=1);

namespace Raxos\Contract\Http\Validate;

/**
 * Interface TransformerInterface
 *
 * @template T of mixed
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Http\Validate
 * @since 2.0.0
 */
interface TransformerInterface
{

    /**
     * Transforms the value.
     *
     * @param mixed $value
     *
     * @return T
     * @throws TransformerExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function transform(mixed $value): mixed;

}
