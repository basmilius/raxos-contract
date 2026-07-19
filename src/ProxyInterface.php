<?php
declare(strict_types=1);

namespace Raxos\Contract;

use JsonSerializable;
use Raxos\Contract\Collection\ArrayableInterface;

/**
 * Interface ProxyInterface
 *
 * Marks a read-only proxy that is safe to expose to untrusted consumers
 * such as template engines. A proxy exposes readable values but blocks
 * every mutation and method call on the object it wraps.
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract
 * @since 2.4.0
 */
interface ProxyInterface extends ArrayableInterface, JsonSerializable {}
