<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Models;

use RatMD\EasyBill\Classes\Contracts\ListModel;
use RatMD\EasyBill\Classes\Contracts\Model;

/**
 * The Contact Model
 */
class Contact extends Model
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
     * Personal contact data.
     * @var boolean
     */
    public bool $personal = false;

    /**
     * Company Name of this contact.
     * @var string|null
     */
    public ?string $company_name = null;

    /**
     * Company Department of this contact.
     * @var string|null
     */
    public ?string $department = null;

    /**
     * Salutation of this contact.
     *      0 empty
     *      1 Mr (Herr)
     *      2 Mrs (Frau)
     *      3 Company (Firma)
     *      4 Mr & Mrs (Herr und Frau)
     *      5 Married couple (Eheleute)
     *      6 Family (Familie)
     * @var integer|null
     */
    public ?int $salutation = null;

    /**
     * Title of this contact.
     * @var string|null
     */
    public ?string $title = null;

    /**
     * First name of this contact.
     * @var string|null
     */
    public ?string $first_name = null;

    /**
     * Last name of this contact.
     * @var string|null
     */
    public ?string $last_name = null;

    /**
     * Street of this contact.
     * @var string|null
     */
    public ?string $street = null;

    /**
     * Address first suffix of this contact.
     * @var string|null
     */
    public ?string $suffix_1 = null;

    /**
     * Address second suffix of this contact.
     * @var string|null
     */
    public ?string $suffix_2 = null;

    /**
     * Address ZIP Code of this contact.
     * @var string|null
     */
    public ?string $zip_code = null;

    /**
     * Address City of this contact.
     * @var string|null
     */
    public ?string $city = null;

    /**
     * Address State of this contact.
     * @var string|null
     */
    public ?string $state = null;

    /**
     * Address Country Code of this contact.
     * @var string|null
     */
    public ?string $country = null;

    /**
     * Primary phone number of this contact.
     * @var string|null
     */
    public ?string $phone_1 = null;

    /**
     * Secondary phone number of this contact.
     * @var string|null
     */
    public ?string $phone_2 = null;

    /**
     * Mobile phone number of this contact.
     * @var string|null
     */
    public ?string $mobile = null;

    /**
     * Fax number of this contact.
     * @var string|null
     */
    public ?string $fax = null;

    /**
     * Available email addresses for this contact.
     * @var ListModel|array
     */
    public ListModel|array $emails = null;

    /**
     * Additional of this contact.
     * @var string|null
     */
    public ?string $note = null;

    /**
     * Created at date/time stamp.
     * @var string|null
     */
    public ?string $created_at = null;

    /**
     * Updated at date/time stamp.
     *
     * @var string|null
     */
    public ?string $updated_at = null;
    
}
