<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Models;

use RatMD\EasyBill\Classes\Contracts\Model;

/**
 * The WebhookLastResponse Model
 */
class WebhookLastResponse extends Model
{

    /**
     * The HTTP status code of the last response.
     * @var integer|null
     */
    public ?int $code = null;

    /**
     * The date/time stamp of the last response.
     * @var string|null
     */
    public ?string $date = null;

    /**
     * The content of the last response.
     * @var string|null
     */
    public ?string $response = null;
    
}
