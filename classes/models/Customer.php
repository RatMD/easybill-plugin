<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Models;

use RatMD\EasyBill\Classes\Contracts\Model;

/**
 * The Customer Model
 */
class Customer extends Model
{

    /**
     * The acquire option as integer id.
     *      1 = Recommendation from another customer (Empfehlung eines anderen Kunden)
     *      2 = Newspaper advert (Zeitungsanzeige)
     *      3 = Own acquisition (Eigene Akquisition)
     *      4 = Employee acquisition (Mitarbeiter Akquisition)
     *      5 = Google
     *      6 = Yellow Pages (Gelbe Seiten)
     *      7 = Free internet platform (Kostenlose Internet Plattform)
     *      8 = Paid Internet platform (Bezahlte Internet Plattform)
     * @var int|null
     */
    public ?int $acquire_options = null;

    /**
     * Additional customer group ids.
     * @var int[]|ListModel|null
     */
    public null|array|ListModel $additional_groups_ids = null;

    /**
     * The primary bank account.
     * @var string|null
     */
    public ?string $bank_account = null;

    /**
     * The primary bank account owner.
     * @var string|null
     */
    public ?string $bank_account_owner = null;

    /**
     * The primary bank BIC code.
     * @var string|null
     */
    public ?string $bank_bic = null;

    /**
     * The primary bank code value.
     * @var string|null
     */
    public ?string $bank_code = null;

    /**
     * The primary bank IBAN number.
     * @var string|null
     */
    public ?string $bank_iban = null;

    /**
     * The primary bank name.
     * @var string|null
     */
    public ?string $bank_name = null;

    /**
     * The birth-date of this customer (1990-10-10).
     * @var string|null
     */
    public ?string $birth_date = null;

    /**
     * The configured cash allowance number (between 0 and 100).
     * @var null|integer|float
     */
    public null|int|float $cash_allowance = null;

    /**
     * The configured cash allowance in days.
     * @var null|integer
     */
    public ?int $cash_allowance_days = null;

    /**
     * The cash discount value.
     * @var null|integer|float
     */
    public null|int|float $cash_discount = null;

    /**
     * The cash discount value type (PERCENT or AMOUNT).
     * @var string|null
     */
    public ?string $cash_discount_type = null;

    /**
     * The company name of this customer.
     * @var string|null
     */
    public ?string $company_name = null;

    /**
     * The display_name value of this customer.
     * @var string|null
     */
    public ?string $display_name = null;

    /**
     * The city of this customer.
     * @var string|null
     */
    public ?string $city = null;

    /**
     * The state of this customer.
     * @var string|null
     */
    public ?string $state = null;

    /**
     * The country code of this customer (ex. GB).
     * @var string|null
     */
    public ?string $country = null;

    /**
     * The created_at date/time stamp.
     * @var string|null
     */
    public ?string $created_at = null;

    /**
     * The updated_at date/time stamp.
     * @var string|null
     */
    public ?string $updated_at = null;

    /**
     * The primary delivery personal boolean state.
     * @var boolean|null
     */
    public ?bool $delivery_personal = null;

    /**
     * The primary delivery address company name.
     * @var string|null
     */
    public ?string $delivery_company_name = null;

    /**
     * The primary delivery salutation as integer value.
     *      0 empty
     *      1 Mr (Herr)
     *      2 Mrs (Frau)
     *      3 Company (Firma)
     *      4 Mr & Mrs (Herr und Frau)
     *      5 Married couple (Eheleute)
     *      6 Family (Familie)
     * @var integer|null
     */
    public ?int $delivery_salutation = 0;

    /**
     * The primary delivery address title (ex. Dr.).
     * @var string|null
     */
    public ?string $delivery_title = null;

    /**
     * The primary delivery receiver's first name.
     * @var string|null
     */
    public ?string $delivery_first_name = null;

    /**
     * The primary delivery receiver's last name.
     * @var string|null
     */
    public ?string $delivery_last_name = null;

    /**
     * The primary delivery address street.
     * @var string|null
     */
    public ?string $delivery_street = null;

    /**
     * The primary delivery address street suffix 1.
     * @var string|null
     */
    public ?string $delivery_suffix_1 = null;

    /**
     * The primary delivery address street suffix 2.
     * @var string|null
     */
    public ?string $delivery_suffix_2 = null;

    /**
     * The primary delivery ZIP code.
     * @var string|null
     */
    public ?string $delivery_zip_code = null;

    /**
     * The primary delivery address city.
     * @var string|null
     */
    public ?string $delivery_city = null;

    /**
     * The primary delivery address state.
     * @var string|null
     */
    public ?string $delivery_state = null;

    /**
     * The primary delivery address country name.
     * @var string|null
     */
    public ?string $delivery_country = null;

    /**
     * The email addresses of this customer (max 3).
     * @var string[]|ListModel|null
     */
    public array|ListModel|null $emails = null;

    /**
     * The fax number of this customer.
     * @var string|null
     */
    public ?string $fax = null;

    /**
     * The first name of this customer.
     * @var string|null
     */
    public ?string $first_name = null;

    /**
     * The grace period of this customer (replaced with due_in_days).
     * @var integer|null
     */
    public ?int $grace_period = null;

    /**
     * The due-in-days period of this customer.
     * @var integer|null
     */
    public ?int $due_in_days = null;

    /**
     * The primary group id of this customer.
     * @var integer|null
     */
    public ?int $group_id = null;

    /**
     * The id of this customer.
     * @var int|null
     */
    public ?int $id = null;

    /**
     * The first additional info data of this customer.
     * @var string|null
     */
    public ?string $info_1 = null;

    /**
     * The second additional info data of this customer.
     * @var string|null
     */
    public ?string $info_2 = null;

    /**
     * The website of this customer.
     * @var string|null
     */
    public ?string $internet = null;

    /**
     * The last name of this customer.
     * @var string|null
     */
    public ?string $last_name = null;

    /**
     * The login id of this customer.
     * @var integer|null
     */
    public ?int $login_id = null;

    /**
     * The mobile phone number of this customer.
     * @var string|null
     */
    public ?string $mobile = null;

    /**
     * The additional note of this customer.
     * @var string|null
     */
    public ?string $note = null;

    /**
     * Unique (automatically generated) number of this customer.
     * @var string|null
     */
    public ?string $number = null;

    /**
     * The payment configuration enum as integer value.
     *      1 = Always punctual payment (Stets pünktliche Zahlung)
     *      2 = Mainly punctual payment (überwiegend pünktliche Zahlung)
     *      3 = Predominantly late payment (überwiegend verspätete Zahlung)
     *      5 = Generally late payment (Grundsätzlich verspätete Zahlung)
     * @var int|null
     */
    public ?int $payment_options = null;

    /**
     * Personal boolean state
     * @var boolean|null
     */
    public ?bool $personal = null;

    /**
     * The primary phone number of this customer.
     * @var string|null
     */
    public ?string $phone_1 = null;

    /**
     * The secondary phone number of this customer.
     * @var string|null
     */
    public ?string $phone_2 = null;

    /**
     * The Postbox name of this customer.
     * @var string|null
     */
    public ?string $postbox = null;

    /**
     * The Postbox city of this customer.
     * @var string|null
     */
    public ?string $postbox_city = null;

    /**
     * The Postbox state of this customer.
     * @var string|null
     */
    public ?string $postbox_state = null;

    /**
     * The Postbox country of this customer.
     * @var string|null
     */
    public ?string $postbox_country = null;

    /**
     * The Postbox ZIP code of this customer.
     * @var string|null
     */
    public ?string $postbox_zip_code = null;

    /**
     * The sale price enum as string.
     *      SALEPRICE2
     *      SALEPRICE3
     *      SALEPRICE4
     *      SALEPRICE5
     *      SALEPRICE6
     *      SALEPRICE7
     *      SALEPRICE8
     *      SALEPRICE9
     *      SALEPRICE10
     * @var string|null
     */
    public ?string $sale_price_level = null;

    /**
     * The primary delivery salutation as integer value.
     *      0 empty
     *      1 Mr (Herr)
     *      2 Mrs (Frau)
     *      3 Company (Firma)
     *      4 Mr & Mrs (Herr und Frau)
     *      5 Married couple (Eheleute)
     *      6 Family (Familie)
     * @var integer|null
     */
    public ?int $salutation = 0;

    /**
     * The SEPA agreement enum state.
     *      BASIC = SEPA-Basislastschrift
     *      COR1 = SEPA-Basislastschrift COR1 (deprecated use BASIC instead)
     *      COMPANY = SEPA-Firmenlastschrift
     *      NULL = Noch kein Mandat erteilt
     * @var string|null
     */
    public ?string $sepa_agreement = null;

    /**
     * The SEPA agreement date/time stamp.
     * @var string|null
     */
    public ?string $sepa_agreement_date = null;

    /**
     * The SEPA agreement reference.
     * @var string|null
     */
    public ?string $sepa_mandate_reference = null;

    /**
     * The since date/tiume stamp of this customer.
     * @var string|null
     */
    public ?string $since_date = null;

    /**
     * The street of this customer.
     * @var string|null
     */
    public ?string $street = null;

    /**
     * The suffix 1 of this customer.
     * @var string|null
     */
    public ?string $suffix_1 = null;

    /**
     * The suffix 2 of this customer.
     * @var string|null
     */
    public ?string $suffix_2 = null;

    /**
     * The TAX number of this customer.
     * @var string|null
     */
    public ?string $tax_number = null;

    /**
     * The TAX court of this customer.
     * @var string|null
     */
    public ?string $court = null;

    /**
     * The TAX court registry number of this customer.
     * @var string|null
     */
    public ?string $court_registry_number = null;

    /**
     * The TAX enum option of this customer
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
    public ?string $tax_options = null;

    /**
     * The title of this customer.
     * @var string|null
     */
    public ?string $title = null;

    /**
     * Boolean state if this customer is archived or not.
     * @var boolean|null
     */
    public ?bool $archived = null;

    /**
     * The TAX VAT identifier number.
     * @var string|null
     */
    public ?string $vat_identifier = null;

    /**
     * The ZIP Code of this customer.
     * @var string|null
     */
    public ?string $zip_code = null;

    /**
     * The Type of PDF to use when sending a Document to the Customer.
     *      default
     *      zugferd1
     *      zugferd2_2
     *      xrechnung2_1_xml
     *      xrechnung2_2_xml
     *      xrechnung2_3_xml
     *      xrechnung3_0_xml
     * @var string
     */
    public string $document_pdf_type = 'default';

    /**
     * The "buyerReference" value used in ZUGFeRD and as "Leitweg-ID" in the XRechnung format.
     * @var string|null
     */
    public ?string $buyer_reference = null;

    /**
     * The ID given to your company by the customer in his system.
     * @var string|null
     */
    public ?string $foreign_supplier_number = null;

}
