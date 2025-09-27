<?php
declare(strict_types=1);

namespace Raxos\Contract\MessageBus;

use Raxos\MessageBus\Enum\MessagePriority;

/**
 * Interface MessageBusQueueInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\MessageBus
 * @since 2.0.0
 */
interface MessageBusQueueInterface
{

    /**
     * Close the queue.
     *
     * @return void
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function close(): void;

    /**
     * Consume messages from the queue.
     *
     * @param callable(HandlerInterface, MessageInterface):bool $callback
     *
     * @return void
     * @throws MessageBusExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function consume(callable $callback): void;

    /**
     * Publish a message to the queue.
     *
     * @param MessageInterface $message
     * @param MessagePriority $priority
     *
     * @return void
     * @throws MessageBusExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function publish(MessageInterface $message, MessagePriority $priority = MessagePriority::NORMAL): void;

}
