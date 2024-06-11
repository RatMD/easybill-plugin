<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Models;

use RatMD\EasyBill\Classes\Contracts\Model;

/**
 * The PositionGroup Model
 */
class PositionGroup extends Model
{

    /**
     * Unique Model ID.
     * @var integer|null
     */
    public ?int $id = null;

    /**
     * Login ID
     * @var integer|null
     */
    public ?int $login_id = null;

    /**
     * Name of this position group.
     * @var string|null
     */
    public ?string $name = null;
    
    /**
     * Display name of this position group.
     * @var string|null
     */
    public ?string $display_name = null;

    /**
     * Description text of this position group.
     * @var string|null
     */
    public ?string $description = null;

    /**
     * Freely chosen number of this position group.
     * @var string|null
     */
    public ?string $number = null;
    
}
