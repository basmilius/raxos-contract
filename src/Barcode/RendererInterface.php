<?php
declare(strict_types=1);

namespace Raxos\Contract\Barcode;

/**
 * Interface RendererInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Barcode
 * @since 2.1.0
 */
interface RendererInterface
{

    public string $mimeType {
        get;
    }

    /**
     * Render the barcode.
     *
     * @param BarcodeInterface $barcode
     *
     * @return string
     * @author Bas Milius <bas@mili.us>
     * @since 2.1.0
     */
    public function render(BarcodeInterface $barcode): string;

}
