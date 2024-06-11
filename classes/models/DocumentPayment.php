<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Models;

use RatMD\EasyBill\Classes\Contracts\Model;

/**
 * The DocumentPayment Model
 */
class DocumentPayment extends Model
{

    /**
     * Unique Model ID.
     * @var integer|null
     */
    public ?int $id = null;

    /**
     * Related login ID.
     *
     * @var integer|null
     */
    public ?int $login_id = null;

    /**
     * Related document ID.
     * @var integer|null
     */
    public ?int $document_id = null;

    /**
     * Reference number value.
     * @var string|null
     */
    public ?string $reference = null;

    /**
     * Related type of this document payment.
     * @var string|null
     */
    public ?string $type = null;

    /**
     * The related amount of this document payment.
     * @var integer|null
     */
    public ?int $amount = null;

    /**
     * Indicates if an overdue fee has been added or not.
     * @var boolean|null
     */
    public ?bool $is_overdue_fee = null;

    /**
     * Additional notice for this document payment.
     * @var string|null
     */
    public ?string $notice = null;

    /**
     * Used provider for this payment.
     * @var string|null
     */
    public ?string $provider = null;

    /**
     * Payment at date/time stamp.
     * @var string|null
     */
    public ?string $payment_at = null;

}
