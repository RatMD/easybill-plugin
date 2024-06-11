<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Models;

use RatMD\EasyBill\Classes\Contracts\Model;

/**
 * The Project Model
 */
class Project extends Model
{

    /**
     * Unique Model ID.
     * @var integer|null
     */
    public ?int $id = null;

    /**
     * Related login id.
     * @var integer|null
     */
    public ?int $login_id = null;

    /**
     * Related customer ID.
     * @var integer|null
     */
    public ?int $customer_id = null;

    /**
     * The used project name.
     * @var string|null
     */
    public ?string $name = null;

    /**
     * The used project note.
     * @var string|null
     */
    public ?string $note = null;

    /**
     * The configured project status enum value (OPEN, DONE, CANCEL)
     * @var string|null
     */
    public ?string $status = null;

    /**
     * The project budget in cent.
     * @var integer|null
     */
    public ?int $budget_amount = null;

    /**
     * The project time budget in minutes.
     * @var integer|null
     */
    public ?int $budget_time = null;

    /**
     * The hourly rate in cents.
     * @var integer|null
     */
    public ?int $hourly_rate = null;

    /**
     * The configured budget notify frequency enum value (ALWAYS, ONCE, NEVER)
     * @var string|null
     */
    public ?string $budget_notify_frequency = null;

    /**
     * The consumed time in minutes of this project.
     * @var integer|null
     */
    public ?int $consumed_time = null;

    /**
     * The consumed amount in cents of this project.
     *
     * @var integer|null
     */
    public ?int $consumed_amount = null;

    /**
     * Due at date/time stamp.
     * @var string|null
     */
    public ?string $due_at = null;
    
}
