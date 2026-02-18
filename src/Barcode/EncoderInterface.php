<?php
declare(strict_types=1);

namespace Raxos\Contract\Barcode;

/**
 * Interface EncoderInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Barcode
 * @since 2.1.0
 */
interface EncoderInterface
{

    /**
     * Encodes the data into a 2D matrix.
     *
     * @param string $data
     *
     * @return array<int, array<int, bool>>
     * @author Bas Milius <bas@mili.us>
     * @since 2.1.0
     */
    public function encode(string $data): array;

}
