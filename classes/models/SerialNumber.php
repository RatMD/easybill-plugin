<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Models;

use RatMD\EasyBill\Classes\Contracts\Model;

/**
 * The SerialNumber Model
 */
class SerialNumber extends Model
{

    /**
     * Unique Model ID.
     * @var string|null
     */
    public ?string $id = null;

    /**
     * Used serial number.
     * @var string|null
     */
    public ?string $serial_number = null;
    
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
     * Used At date/time stamp.
     * @var string|null
     */
    public ?string $used_at = null;

    /**
     * Created At date/time stamp.
     * @var string|null
     */
    public ?string $created_at = null;

}
