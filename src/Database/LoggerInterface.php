<?php
declare(strict_types=1);

namespace Raxos\Contract\Database;

use Countable;
use Raxos\Database\Logger\{DeferredEvent, Event};

/**
 * Interface LoggerInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Database
 * @since 2.0.0
 */
interface LoggerInterface extends Countable
{

    /**
     * Returns if the logger is enabled.
     *
     * @var bool
     *
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public bool $enabled {
        get;
    }

    /**
     * Returns the number of events.
     *
     * @return int
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function count(): int;

    /**
     * Enables the logger.
     *
     * @return void
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function enable(): void;

    /**
     * Disables the logger.
     *
     * @return void
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function disable(): void;

    /**
     * Returns a new deferred event.
     *
     * @return DeferredEvent
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function deferred(): DeferredEvent;

    /**
     * Logs the given event.
     *
     * @param Event $event
     *
     * @return void
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function log(Event $event): void;

    /**
     * Replaces the event at the given index.
     *
     * @param int $index
     * @param Event $event
     *
     * @return void
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function replace(int $index, Event $event): void;

    /**
     * Prints the logger report.
     *
     * @param bool $backtrace
     *
     * @return string
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function print(bool $backtrace = false): string;

}
