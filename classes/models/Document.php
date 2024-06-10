<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Models;

use RatMD\EasyBill\Classes\Contracts\EasyBillModel;

/**
 * The Document Model
 */
class Document extends EasyBillModel
{

    /**
     * Document Address
     * @var DocumentAddress|null
     */
    public ?DocumentAddress $address = null;

    /**
     * Attached items.
     * @var int[]
     */
    public array $attachment_ids = [];

    /**
     * Document Label Address
     * @var DocumentAddress|null
     */
    public ?DocumentAddress $label_address = null;

    /**
     * Gross Amount in cents.
     * @var integer|null
     */
    public ?int $amount = null;

    /**
     * Net Amount in cents.
     * @var integer|null
     */
    public ?int $amount_net = null;

    /**
     * Bank debit from.
     * @var string|null
     */
    public ?string $bank_debit_form = null;

    /**
     * Billing Country
     * @var string|null
     */
    public ?string $billing_country = null;

    /**
     * Calculate VAT prices from (0 = Net amount, 1 = Gross amount)
     * @var int
     */
    public int $calc_vat_from = 0;

    /**
     * document ID from the cancel document (only for INVOICE documents).
     * @var int|null
     */
    public ?int $cancel_id = null;

    /**
     * The configured cash allowance number (between 0 and 100).
     * @var null|integer|float
     */
    public null|int|float $cash_allowance = null;

    /**
     * The configured cash allowance in days.
     * @var null|integer|float
     */
    public ?int $cash_allowance_days = null;

    /**
     * Cash allowance text.
     * @var null|integer|float
     */
    public ?string $cash_allowance_text = null;

    /**
     * Contact ID.
     * @var integer|null
     */
    public ?int $contact_id = null;

    /**
     * Contact Label.
     * @var string|null
     */
    public ?string $contact_label = null;

    /**
     * Contact Text.
     * @var string|null
     */
    public ?string $contact_text = null;

    /**
     * Document created_at date/time string (2019-02-01 11:11:11).
     * @var string|null
     */
    public ?string $created_at = null;

    /**
     * Document desired currency.
     * @var string|null
     */
    public ?string $currency = null;

    /**
     * Document customer id.
     * @var integer|null
     */
    public ?int $customer_id = null;

    /**
     * The CustomerSnapshot used for this document.
     * @var CustomerSnapshot|null
     */
    public ?CustomerSnapshot $customer_snapshot = null;

    /**
     * The applied discount on this document.
     * @var string|null
     */
    public ?string $discount = null;

    /**
     * The applied discount type used (PERCENT or AMOUNT).
     * @var string|null
     */
    public ?string $discount_type = null;

    /**
     * The discount date stamp used.
     * @var string|null
     */
    public ?string $document_date = null;

    /**
     * The due date for this document (To change the value use grace_period).
     * @var string|null
     */
    public ?string $due_date = null;

    /**
     * The last edited date/time stamp for this document.
     * @var string|null
     */
    public ?string $edited_at = null;

    /**
     * The external ID used for this document.
     * @var string|null
     */
    public ?string $external_id = null;

    /**
     * The replica URL of this document.
     * @var string|null
     */
    public ?string $replica_url = null;

    /**
     * The grace period of this document (replaced with due_in_days).
     * @var integer|null
     */
    public ?int $grace_period = null;

    /**
     * The due-in-days per of this document.
     * @var integer|null
     */
    public ?int $due_in_days = null;

    /**
     * The unique ID of this document.
     * @var integer|null
     */
    public ?int $id = null;

    /**
     * Indicates if a document can be accepted by the end customer through the document's public access page.
     * @var boolean|null
     */
    public ?bool $is_acceptable_on_public_domain = null;

    /**
     * Indicates if this document has been archived or not.
     * @var boolean|null
     */
    public ?bool $is_archive = null;

    /**
     * Indicates if this document is a draft or not.
     * @var boolean|null
     */
    public ?bool $is_draft = null;

    /**
     * Indicates if this document is a replica or not.
     * @var boolean|null
     */
    public ?bool $is_replica = null;

    /**
     * Indicates if a document is a one-stop-shop document
     * @var boolean|null
     */
    public ?bool $is_oss = null;

    /**
     * Field holds all unique document_note of items for the document
     * @var string[]
     */
    public array $item_notes = [];

    /**
     * The document positions for this document.
     * @var DocumentPosition[]
     */
    public array $items = [];

    /**
     * The last postbox id used for this document.
     * @var integer|null
     */
    public ?int $last_postbox_id = null;

    /**
     * The login ID of the creator of this document.
     * @var integer|null
     */
    public ?int $login_id = null;

    /**
     * The unique document number.
     * @var string|null
     */
    public ?string $number = null;

    /**
     * The unique order number used in this document.
     * @var string|null
     */
    public ?string $order_number = null;

    /**
     * The buyer reference value.
     * @var string|null
     */
    public ?string $buyer_reference = null;

    /**
     * The paid amount in cents.
     * @var integer|null
     */
    public ?int $paid_amount = null;

    /**
     * The date/time string of the payment.
     * @var string|null
     */
    public ?string $paid_at = null;

    /**
     * The number of PDF Pages in this document.
     * @var integer|null
     */
    public ?int $pdf_pages = null;

    /**
     * The used template name of this document..
     * @var string|null
     */
    public ?string $pdf_template = null;

    /**
     * The project ID of this document.
     * @var integer|null
     */
    public ?int $project_id = null;

    /**
     * The recurring options.
     * @var DocumentRecurring|null
     */
    public ?DocumentRecurring $recurring_options = null;

    /**
     * The reference document id.
     * @var integer|null
     */
    public ?int $ref_id = null;

    /**
     * The root document id.
     * @var integer|null
     */
    public ?int $root_id = null;

    /**
     * The service date details for this document.
     * @var ServiceDate|null
     */
    public ?ServiceDate $service_date = null;

    /**
     * The shipping country.
     * @var string|null
     */
    public ?string $shipping_country = null;

    /**
     * The status enum of this document (ACCEPT, DONE, DROPSHIPPING, CANCEL).
     * This value can only be used in document type DELIVERY, ORDER, CHARGE or OFFER. NULL is default = not set.
     * @var string|null
     */
    public ?string $status = null;

    /**
     * The primary message text for this document.
     * @var string|null
     */
    public ?string $text = null;

    /**
     * The "prologue" / "intro" text for this document.
     * @var string|null
     */
    public ?string $text_prefix = null;

    /**
     * The TAX-text for this document.
     * @var string|null
     */
    public ?string $text_tax = null;

    /**
     * The title / header text for this document.
     * @var string|null
     */
    public ?string $title = null;

    /**
     * The general document type enum, must be on of there: INVOICE, RECURRING, CREDIT, OFFER, 
     * REMINDER, DUNNING, STORNO, STORNO_CREDIT, DELIVERY, PDF, CHARGE, CHARGE_CONFIRM, LETTER, 
     * ORDER, PROFORMA_INVOICE, STORNO_PROFORMA_INVOIC
     * @var string|null
     */
    public ?string $type = null;

    /**
     * Indicates if the shipping address will be used.
     * @var boolean|null
     */
    public ?bool $use_shipping_address = null;

    /**
     * The TAX-VAT related country.
     * @var string|null
     */
    public ?string $vat_country = null;

    /**
     * The desired VAT-ID used for this document.
     * @var string|null
     */
    public ?string $vat_id = null;

    /**
     * The fulfillment country for this document.
     * @var string|null
     */
    public ?string $fulfillment_country = null;

    /**
     * The VAT option used for this document.
     *      nStb = Nicht steuerbar (Drittland)
     *      nStbUstID = Nicht steuerbar (EU mit USt-IdNr.)
     *      nStbNoneUstID = Nicht steuerbar (EU ohne USt-IdNr.)
     *      revc = Steuerschuldwechsel §13b (Inland)
     *      IG = Innergemeinschaftliche Lieferung
     *      AL = Ausfuhrlieferung
     *      sStfr = sonstige Steuerbefreiung
     *      NULL = Umsatzsteuerpflichtig
     * @var string|null
     */
    public ?string $vat_option = null;

    /**
     * The file format configuration values.
     * @var FileFormatConfig[]
     */
    public array $file_format_config = [];
    
}
