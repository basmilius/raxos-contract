<?php
declare(strict_types=1);

namespace Raxos\Contract\Mail;

use Raxos\Mail\Mail;

/**
 * Interface MailerInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Mail
 * @since 2.0.0
 */
interface MailerInterface
{

    /**
     * Sends the given mail.
     *
     * @param Mail $mail
     *
     * @return bool
     * @throws MailerExceptionInterface
     * @author Bas Milius <bas@mili.us>
     * @since 2.0.0
     */
    public function send(Mail $mail): bool;

}
