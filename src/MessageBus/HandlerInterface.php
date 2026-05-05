<?php
declare(strict_types=1);

namespace Raxos\Contract\MessageBus;

use Raxos\Terminal\Printer;
use Throwable;

/**
 * Interface HandlerInterface
 *
 * @template TMessage of MessageInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\MessageBus
 * @since 2.0.0
 */
interface HandlerInterface
{

    /**
     * Handles the given message.
     *
     * @param TMessage $message
     * @param Printer $printer
     *
     * @return void
     * @throws Throwable
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function handle(MessageInterface $message, Printer $printer): void;

}
