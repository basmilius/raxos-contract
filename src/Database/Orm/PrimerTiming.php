<?php
declare(strict_types=1);

namespace Raxos\Contract\Database\Orm;

/**
 * Enum PrimerTiming
 *
 * Controls when a primer runs relative to the eager loading of relations.
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Database\Orm
 * @since 3.0.0
 */
enum PrimerTiming
{

    case BeforeRelations;
    case AfterRelations;

}
