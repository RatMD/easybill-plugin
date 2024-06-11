<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Models;

use RatMD\EasyBill\Classes\Contracts\Model;

/**
 * The Task Model
 */
class Task extends Model
{
    
    /**
     * Unique Model ID.
     * @var integer|null
     */
    public ?int $id = null;
    
    /**
     * Related Login ID.
     * @var integer|null
     */
    public ?int $login_id = null;
    
    /**
     * Related project ID.
     * @var integer|null
     */
    public ?int $project_id = null;
    
    /**
     * Related document ID.
     * @var integer|null
     */
    public ?int $document_id = null;
    
    /**
     * Related customer ID.
     * @var integer|null
     */
    public ?int $customer_id = null;
    
    /**
     * Related position ID.
     * @var integer|null
     */
    public ?int $position_id = null;
    
    /**
     * The task name,
     * @var string|null
     */
    public ?string $name = null;
    
    /**
     * The task description.
     * @var string|null
     */
    public ?string $description = null;

    /**
     * The task category enum value (CALL, EMAIL, FAX, LUNCH, MEETING, TRAVEL, CUSTOM).
     * @var string|null
     */
    public ?string $category = null;
    
    /**
     * The name of your custom category.
     * Can only have a value if "category" is "CUSTOM".
     * @var string|null
     */
    public ?string $category_custom = null;
    
    /**
     * The assigned priority enum value (LOW, NORMAL, HIGH).
     * @var string|null
     */
    public ?string $priority = null;
    
    /**
     * The current task status enum value (WAITING, PROCESSING, DONE, CANCEL).
     * @var string|null
     */
    public ?string $status = null;

    /**
     * The current task status in percent.
     * @var integer|null
     */
    public ?int $status_percent = null;
    
    /**
     * Start at date/time stamp.
     * @var string|null
     */
    public ?string $start_at = null;
    
    /**
     * End at date/time stamp.
     * @var string|null
     */
    public ?string $end_at = null;
    
    /**
     * Finished at date/time stamp.
     * @var string|null
     */
    public ?string $finish_at = null;
    
    /**
     * Created at date/time stamp.
     * @var string|null
     */
    public ?string $created_at = null;
    

}
