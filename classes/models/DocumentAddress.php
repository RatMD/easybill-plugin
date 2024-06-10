<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Models;

use RatMD\EasyBill\Classes\Contracts\Model;

/**
 * The DocumentAddress Model
 */
class DocumentAddress extends Model
{

    /**
     * Salutation as integer value.
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
     * Personal
     * @var null|bool
     */
    public ?bool $personal = null;
    
    /**
     * Title
     * @var null|string
     */
    public ?string $title = null;
    
    /**
     * First Name
     * @var null|string
     */
    public ?string $first_name = null;
    
    /**
     * Last Name
     * @var null|string
     */
    public ?string $last_name = null;
    
    /**
     * Name Suffix 1
     * @var null|string
     */
    public ?string $suffix_1 = null;
    
    /**
     * Name Suffix 2
     * @var null|string
     */
    public ?string $suffix_2 = null;
    
    /**
     * Company Name
     * @var null|string
     */
    public ?string $company_name = null;
    
    /**
     * Street
     * @var null|string
     */
    public ?string $street = null;
    
    /**
     * ZIP Code
     * @var null|string
     */
    public ?string $zip_code = null;
    
    /**
     * City
     * @var null|string
     */
    public ?string $city = null;
    
    /**
     * State
     * @var null|string
     */
    public ?string $state = null;
    
    /**
     * Country
     * @var null|string
     */
    public ?string $country = null;

}
