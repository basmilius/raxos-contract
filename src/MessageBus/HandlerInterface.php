<?php
declare(strict_types=1);

namespace Raxos\Contract\MessageBus;

use Exception;
use Raxos\Terminal\Printer;

/**
 * Interface HandlerInterface
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
     * @param MessageInterface $message
     * @param Printer $printer
     *
     * @return void
     * @throws Exception
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function handle(MessageInterface $message, Printer $printer): void;

}
