<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Models;

use RatMD\EasyBill\Classes\Contracts\Model;

/**
 * The SEPAPayment Model
 */
class SEPAPayment extends Model
{

    /**
     * Unique Model ID.
     * @var integer|null
     */
    public ?int $id = null;

    /**
     * Related document ID.
     * @var integer|null
     */
    public ?int $document_id = null;

    /**
     * Related Mandate ID.
     * @var integer|null
     */
    public ?int $mandate_id = null;

    /**
     * The assigned SEPA Payment type (DEBIT, CREDIT)
     * @var string|null
     */
    public ?string $type = null;

    /**
     * The SEPA Paymnet amount in cents.
     * @var integer|null
     */
    public ?int $amount = null;

    /**
     * The creditor name.
     * @var string|null
     */
    public ?string $creditor_name = null;

    /**
     * The creditor BIC number.
     * @var string|null
     */
    public ?string $creditor_bic = null;

    /**
     * The creditor IBAN number.
     * @var string|null
     */
    public ?string $creditor_iban = null;

    /**
     * The debitor name.
     * @var string|null
     */
    public ?string $debitor_name = null;

    /**
     * The debitor BIC number.
     * @var string|null
     */
    public ?string $debitor_bic = null;

    /**
     * The debitor IBAN number.
     * @var string|null
     */
    public ?string $debitor_iban = null;

    /**
     * The debitor first address line.
     * Mandatory if type is DEBIT and the debitor's IBAN belongs to a country outside the EEA.
     * @var string|null
     */
    public ?string $debitor_address_line_1 = null;

    /**
     * The debitor second address line.
     * @var string|null
     */
    public ?string $debitor_address_line2 = null;

    /**
     * The debitor country code.
     * @var string|null
     */
    public ?string $debitor_country = null;

    /**
     * The local instrument enum value.
     *      CORE: SEPA Core Direct Debit
     *      COR1: SEPA-Basislastschrift COR1 (deprecated use CORE instead)
     *      B2B: SEPA Business to Business Direct Debit
     * @var string|null
     */
    public ?string $local_instrument = null;

    /**
     * The date value of mandate signature.
     * @var string|null
     */
    public ?string $mandate_date_of_signature = null;

    /**
     * The related reference value.
     * @var string|null
     */
    public ?string $reference = null;

    /**
     * The related remittance information value.
     * @var string|null
     */
    public ?string $remittance_information = null;

    /**
     * The configured SEPA sequence type
     *      FRST: Erstlastschrift
     *      RCUR: Folgelastschrift
     *      OOFF: Einmallastschrift
     *      FNAL: Letztmalige Lastschrift
     * @var string|null
     */
    public ?string $sequence_type = null;

    /**
     * The export error, if any happened.
     * @var string|null
     */
    public ?string $export_error = null;

    /**
     * Export at date/time stamp.
     * @var string|null
     */
    public ?string $export_at = null;

    /**
     * Requested at date/time stamp.
     * @var string|null
     */
    public ?string $requested_at = null;

    /**
     * Created at date/time stamp.
     * @var string|null
     */
    public ?string $created_at = null;

    /**
     * Updated at date/time stamp.
     * @var string|null
     */
    public ?string $updated_at = null;

}
