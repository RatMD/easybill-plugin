<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Models;

use RatMD\EasyBill\Classes\Contracts\Model;

/**
 * The TimeTracking Model
 */
class TimeTracking extends Model
{

    /**
     * Unique Model ID.
     * @var integer|null
     */
    public ?int $id = null;

    /**
     * Related login ID.
     * @var integer|null
     */
    public ?int $login_id = null;

    /**
     * Related project ID.
     * @var integer|null
     */
    public ?int $project_id = null;

    /**
     * Related Position ID.
     * @var integer|null
     */
    public ?int $position_id = null;

    /**
     * Freely chosen number.
     * @var string|null
     */
    public ?string $number = null;

    /**
     * The assigned description for this entry.
     * @var string|null
     */
    public ?string $description = null;

    /**
     * The assigned note for this entry.
     * @var string|null
     */
    public ?string $note = null;

    /**
     * The hourly rate in cents.
     * @var integer|float|null
     */
    public int|float|null $hourly_rate = null;

    /**
     * Tracked time in minutes.
     * @var integer|null
     */
    public ?int $timer_value = null;

    /**
     * Date from date/time stamp.
     * @var string|null
     */
    public ?string $date_from_at = null;

    /**
     * Date until date/time stamp.
     * @var string|null
     */
    public ?string $date_thru_at = null;

    /**
     * Cleared at date/time stamp.
     * @var string|null
     */
    public ?string $cleared_at = null;

    /**
     * Created at date/time stamp.
     * @var string|null
     */
    public ?string $created_at = null;

}
