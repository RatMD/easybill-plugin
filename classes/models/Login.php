<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Models;

use RatMD\EasyBill\Classes\Contracts\Model;

/**
 * The Login Model
 */
class Login extends Model
{

    /**
     * Unique Model ID.
     * @var string|null
     */
    public ?string $id = null;

    /**
     * First name of this login.
     * @var string|null
     */
    public ?string $first_name = null;

    /**
     * Last name of this login.
     * @var string|null
     */
    public ?string $last_name = null;

    /**
     * Display name of this login.
     * @var string|null
     */
    public ?string $display_name = null;

    /**
     * Phone number of this login.
     * @var string|null
     */
    public ?string $phone = null;

    /**
     * E-Mail of this login.
     * @var string|null
     */
    public ?string $email = null;

    /**
     * E-Mail signature of this login.
     * @var string|null
     */
    public ?string $email_signature = null;

    /**
     * Locale Code of this login.
     * @var string|null
     */
    public ?string $locale = null;

    /**
     * Time Zone of this login.
     * @var string|null
     */
    public ?string $time_zone = null;

    /**
     * Login Type enum value of this login (ADMIN, ASSISTANT).
     * @var string|null
     */
    public ?string $login_type = null;

    /**
     * Login Security Details.
     * @var LoginSecurity|null
     */
    public ?LoginSecurity $security = null;

}
