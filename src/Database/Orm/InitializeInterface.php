<?php
declare(strict_types=1);

namespace Raxos\Contract\Database\Orm;

/**
 * Interface InitializeInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Database\Orm
 * @since 2.0.0
 */
interface InitializeInterface
{

    /**
     * Triggered just before initializing a model.
     *
     * @param array $data
     *
     * @return array
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public static function onInitialize(array $data): array;

}
