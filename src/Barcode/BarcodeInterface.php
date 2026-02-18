<?php
declare(strict_types=1);

namespace Raxos\Contract\Barcode;

use Raxos\Barcode\Enum\BarcodeFormat;

/**
 * Interface BarcodeInterface
 *
 * @author Bas Milius <bas@mili.us>
 * @package Raxos\Contract\Barcode
 * @since 2.1.0
 */
interface BarcodeInterface
{

    /**
     * Returns the original data.
     *
     * @var string
     */
    public string $data {
        get;
    }

    /**
     * Returns the barcode format.
     *
     * @var BarcodeFormat
     */
    public BarcodeFormat $format {
        get;
    }

    /**
     * Returns the height of the barcode.
     *
     * @var int
     */
    public int $height {
        get;
    }

    /**
     * Returns the width of the barcode.
     *
     * @var int
     */
    public int $width {
        get;
    }

    /**
     * Returns the encoded data as a 2D matrix.
     *
     * @return array<int, array<int, bool>>
     */
    public array $matrix {
        get;
    }

    /**
     * Renders the barcode as a PNG image.
     *
     * @param int $scale
     * @param int $margin
     * @param string $backgroundColor
     * @param string $foregroundColor
     *
     * @return string
     * @author Bas Milius <bas@mili.us>
     * @since 17-02-2026
     */
    public function renderPng(
        int $scale = 8,
        int $margin = 16,
        string $backgroundColor = '#ffffff',
        string $foregroundColor = '#000000'
    ): string;

    /**
     * Renders the barcode as an SVG image.
     *
     * @param int $scale
     * @param int $margin
     * @param string $backgroundColor
     * @param string $foregroundColor
     *
     * @return string
     * @author Bas Milius <bas@mili.us>
     * @since 17-02-2026
     */
    public function renderSvg(
        int $scale = 8,
        int $margin = 16,
        string $backgroundColor = '#ffffff',
        string $foregroundColor = '#000000'
    ): string;

}
