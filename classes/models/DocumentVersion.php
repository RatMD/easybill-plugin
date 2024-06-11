<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Models;

use RatMD\EasyBill\Classes\Contracts\Model;

/**
 * The DocumentVersion Model
 */
class DocumentVersion extends Model
{

    /**
     * Unique model ID.
     * @var integer|null
     */
    public ?int $id = null;

    /**
     * Related document ID.
     * @var integer|null
     */
    public ?int $document_id = null;

    /**
     * Document Version Items array.
     * @var DocumentVersionItem[]
     */
    public array $items = [];

    /**
     * Reason text.
     * @var string|null
     */
    public ?string $reason = null;

    /**
     * Created at date/time stamp.
     * @var string|null
     */
    public ?string $created_at = null;

}
