<?php
declare(strict_types=1);

namespace Raxos\Contract\Database\Query;

use Stringable;

/**
 * Interface QueryLiteralInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Database\Query
 * @since 2.0.0
 */
interface QueryLiteralInterface extends QueryValueInterface, Stringable {}
