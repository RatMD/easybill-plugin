<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Models;

use RatMD\EasyBill\Classes\Contracts\Model;

/**
 * The Stock Model
 */
class Stock extends Model
{

    /**
     * Unique Model ID.
     * @var string|null
     */
    public ?string $id = null;

    /**
     * Stock Note.
     * @var string|null
     */
    public ?string $note = null;

    /**
     * Stock Count
     * @var integer|null
     */
    public ?int $stock_count = null;
    
    /**
     * Position ID.
     * @var integer|null
     */
    public ?int $position_id = null;
    
    /**
     * Related Document ID.
     * @var integer|null
     */
    public ?int $document_id = null;
    
    /**
     * DocumentPosition ID.
     * @var integer|null
     */
    public ?int $document_position_id = null;
    
    /**
     * Stored At date/time stamp.
     * @var string|null
     */
    public ?string $stored_at = null;

    /**
     * Created At date/time stamp.
     * @var string|null
     */
    public ?string $created_at = null;
    
    /**
     * Updated At date/time stamp.
     * @var string|null
     */
    public ?string $updated_at = null;

}
