<?php
declare(strict_types=1);

namespace Raxos\Contract\Terminal;

use Closure;
use Raxos\Terminal\Printer;

/**
 * Interface MiddlewareInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Terminal
 * @since 2.0.0
 */
interface MiddlewareInterface
{

    /**
     * Handle the command execution.
     *
     * @param CommandInterface $command
     * @param TerminalInterface $terminal
     * @param Printer $printer
     * @param Closure $next
     *
     * @return void
     * @throws CommandExceptionInterface
     * @throws TerminalExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function handle(CommandInterface $command, TerminalInterface $terminal, Printer $printer, Closure $next): void;

}
