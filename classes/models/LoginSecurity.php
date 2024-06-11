<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Models;

use RatMD\EasyBill\Classes\Contracts\Model;

/**
 * The LoginSecurity Model
 * This object is only displayed if your request the login resource as an admin. Otherwise this 
 * property will be null.
 */
class LoginSecurity extends Model
{

    /**
     * Indicates if the login has twi factor enabled or not.
     * @var boolean|null
     */
    public ?bool $two_factor_enabled = false;

    /**
     * Indicates if the login has recovery codes enabled to bypass login or not.
     * @var boolean|null
     */
    public ?bool $recovery_codes_enabled = false;

    /**
     * Indicates if the login ahas enabled to be notified if a new login is mode from an unknown
     * device or not.
     * @var boolean|null
     */
    public ?bool $notify_on_new_login_enabled = true;

}
