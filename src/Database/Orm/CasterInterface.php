<?php
declare(strict_types=1);

namespace Raxos\Contract\Database\Orm;

use Raxos\Database\Orm\Model;

/**
 * Interface CasterInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Database\Orm
 * @since 2.0.0
 */
interface CasterInterface
{

    /**
     * Decodes the given datbase-allowed value into something else.
     *
     * @param string|float|int|null $value
     * @param Model $instance
     *
     * @return mixed
     * @throws OrmExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function decode(string|float|int|null $value, Model $instance): mixed;

    /**
     * Encodes the given value back into a database-allowed value.
     *
     * @param mixed $value
     * @param Model $instance
     *
     * @return string|float|int|null
     * @throws OrmExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function encode(mixed $value, Model $instance): string|float|int|null;

}
