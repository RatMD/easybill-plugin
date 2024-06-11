<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Models;

use RatMD\EasyBill\Classes\Contracts\Model;

/**
 * The PDFTemplate Model
 */
class PDFTemplate extends Model
{

    /**
     * Unique Model ID.
     * @var integer|null
     */
    public ?int $id = null;

    /**
     * Name of this PDF template.
     * @var string|null
     */
    public ?string $name = null;

    /**
     * Code of this PDF template.
     * @var string|null
     */
    public ?string $pdf_template = null;

    /**
     * Document Type of this PDF template.
     * @var string|null
     */
    public ?string $document_type = null;

    /**
     * Additional configuration options of this PDF template.
     *      text_prefix
     *      text
     *      email.subject
     *      email.message
     * @var array
     */
    public array $settings = [];

}
