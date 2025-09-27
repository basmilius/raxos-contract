<?php
declare(strict_types=1);

namespace Raxos\Contract\MessageBus;

/**
 * Interface MessageBusInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\MessageBus
 * @since 2.0.0
 */
interface MessageBusInterface
{

    /**
     * Close the connection.
     *
     * @return void
     * @throws MessageBusExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function close(): void;

    /**
     * Create a new queue.
     *
     * @param string $name
     * @param int $maxMessages
     *
     * @return MessageBusQueueInterface
     * @throws MessageBusExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function createQueue(string $name = 'task_queue', int $maxMessages = 25): MessageBusQueueInterface;

    /**
     * Remove a queue.
     *
     * @param MessageBusQueueInterface $queue
     *
     * @return void
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function removeQueue(MessageBusQueueInterface $queue): void;

}
