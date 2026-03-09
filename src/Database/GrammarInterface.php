<?php
declare(strict_types=1);

namespace Raxos\Contract\Database;

use Raxos\Database\Query\Error\UnsupportedException;

/**
 * Interface GrammarInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Database
 * @since 2.0.0
 */
interface GrammarInterface
{

    public array $escapers {
        get;
    }

    /**
     * Returns TRUE when the database supports the RETURNING clause.
     *
     * @author Bas Milius <bas@mili.us>
     * @since 2.1.0
     */
    public bool $supportsReturning {
        get;
    }

    /**
     * Returns TRUE when the database supports row value constructors in WHERE…IN,
     * i.e. `(col1, col2) IN ((v1, v2), (v3, v4))`.
     *
     * @author Bas Milius <bas@mili.us>
     * @since 2.1.0
     */
    public bool $supportsRowValueConstructors {
        get;
    }

    /**
     * Escapes the given value.
     *
     * @param string $value
     *
     * @return string
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function escape(string $value): string;

    /**
     * Compile a `optimize table $table` query.
     *
     * @param string $table
     *
     * @return string
     * @throws UnsupportedException
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function compileOptimizeTable(string $table): string;

    /**
     * Compile a `truncate table $table` query.
     *
     * @param string $table
     *
     * @return string
     * @throws UnsupportedException
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function compileTruncateTable(string $table): string;

}
