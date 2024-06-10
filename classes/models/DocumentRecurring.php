<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Models;

use RatMD\EasyBill\Classes\Contracts\Model;

/**
 * The DocumentRecurring Model
 * This object is only available in document type RECURRING.
 */
class DocumentRecurring extends Model
{

    /**
     * The next recurring date string.
     * @var string|null
     */
    public ?string $next_date = null;

    /**
     * The desired frequency enum (DAILY, WEEKLY, MONTHLY, YEARLY).
     * @var string|null
     */
    public ?string $frequency = null;

    /**
     * Additional frequency setting enum (LASTDAYOFMONTH).
     * @var string|null
     */
    public ?string $frequency_special = null;

    /**
     * The desired interval.
     * @var integer|null
     */
    public ?int $interval = null;

    /**
     * Date of last execution day or number of times to execute.
     * @var string|null
     */
    public ?string $end_date_or_count = null;

    /**
     * The status enum (RUNNING, PAUSE, STOP, WAITING).
     * @var string|null
     */
    public ?string $status = null;

    /**
     * The draft boolean state.
     * @var boolean|null
     */
    public ?bool $as_draft = null;

    /**
     * Indicated if this recurring document is a notifier or not.
     * @var boolean|null
     */
    public ?bool $is_notify = null;

    /**
     * The send type enum (EMAIL, FAX, POST).
     * @var string
     */
    public ?string $send_as = null;

    /**
     * Indicated if this document has ben signed.
     * @var boolean|null
     */
    public ?bool $is_sign = null;

    /**
     * Indicates of this document has been paid.
     * @var boolean|null
     */
    public ?bool $is_paid = null;

    /**
     * Option is used to determine what date is used for the payment if is_paid is true. 
     * "next_valid_date" selects the next workday in regards to the created date of the document if 
     * the date falls on a saturday or sunday. (created_date, due_date, next_valid_date)
     * @var string|null
     */
    public ?string $paid_date_option = null;

    /**
     * Indicates if SEPA or not.
     * @var boolean|null
     */
    public ?bool $is_sepa = null;

    /**
     * The SEPA local instrument (CORE, COR1, B2B | COR1 is deprecated use CORE instead).
     * @var string|null
     */
    public ?string $sepa_local_instrument = null;

    /**
     * The SEPA sequence type enum (FRST, OOFF, FNAL, RCUR).
     * @var string|null
     */
    public ?string $sepa_sequence_type = null;

    /**
     * The SEPA reference number.
     * @var string|null
     */
    public ?string $sepa_reference = null;

    /**
     * The SEPA remittance information text.
     * @var string|null
     */
    public ?string $sepa_remittance_information = null;

    /**
     * The document target type (The document type that will be generated. Can not be changed on 
     * existing documents.)
     * @var string|null
     */
    public ?string $target_type = null;

}
