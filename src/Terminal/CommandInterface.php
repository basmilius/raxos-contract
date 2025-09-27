<?php
declare(strict_types=1);

namespace Raxos\Contract\Terminal;

use Raxos\Terminal\Printer;
use Throwable;

/**
 * Interface CommandInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Terminal
 * @since 2.0.0
 */
interface CommandInterface
{

    /**
     * Executes the command with the given arguments. If something goes wrong, a
     * TerminalException is thrown.
     *
     * @param TerminalInterface $terminal
     * @param Printer $printer
     *
     * @throws Throwable
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function execute(TerminalInterface $terminal, Printer $printer): void;

}
