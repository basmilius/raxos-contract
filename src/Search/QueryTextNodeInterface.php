<?php
declare(strict_types=1);

namespace Raxos\Contract\Search;

/**
 * Interface QueryTextNodeInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Search
 * @since 2.0.0
 */
interface QueryTextNodeInterface
{

    public string $text {
        get;
    }

}
