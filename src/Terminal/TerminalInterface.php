<?php
declare(strict_types=1);

namespace Raxos\Contract\Terminal;

/**
 * Interface TerminalInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Terminal
 * @since 2.0.0
 */
interface TerminalInterface
{

    /**
     * Gets all registered commands.
     *
     * @return array<string, class-string<CommandInterface>>
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public array $commands {
        get;
    }

    /**
     * Executes based on the given arguments.
     *
     * @return void
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function execute(): void;

    /**
     * Exit the terminal.
     *
     * @param int $code
     *
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function exit(int $code = 0): never;

    /**
     * Registers the given command to the terminal.
     *
     * @template TCommand of CommandInterface
     *
     * @param class-string<TCommand> $commandClass
     *
     * @return static
     * @throws TerminalExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function register(string $commandClass): static;

}
