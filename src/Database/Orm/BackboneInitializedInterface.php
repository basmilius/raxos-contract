<?php
declare(strict_types=1);

namespace Raxos\Contract\Database\Orm;

/**
 * Interface BackboneInitializedInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Database\Orm
 * @since 2.0.0
 */
interface BackboneInitializedInterface
{

    /**
     * Triggered just after the backbone instance is created.
     *
     * @param BackboneInterface<static>&AccessInterface $backbone
     * @param array $data
     *
     * @return void
     * @throws OrmExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public static function onBackboneInitialized(BackboneInterface&AccessInterface $backbone, array $data): void;

}
