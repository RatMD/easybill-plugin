<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Models;

use RatMD\EasyBill\Classes\Contracts\EasyBillModel;

/**
 * The ServiceDate Model
 * This object is only available in document type INVOICE or CREDIT.
 */
class ServiceDate extends EasyBillModel
{

    /**
     * The service date typeanum.
     * With DEFAULT no other fields are required and this message will be printed: 'Invoice date 
     * coincides with the time of supply'. For SERVICE or DELIVERY exactly one of the following 
     * fields must be set: date, date_from and date_to or text. (DEFAULT, SERVICE, DELIVERY)
     * @var string|null
     */
    public ?string $type = null;

    /**
     * The service date string.
     * @var string|null
     */
    public ?string $date = null;

    /**
     * The service date from string.
     * @var string|null
     */
    public ?string $date_from = null;

    /**
     * The service date to string.
     * @var string|null
     */
    public ?string $date_to = null;

    /**
     * Additional text for this service date.
     * @var string|null
     */
    public ?string $text = null;

}
