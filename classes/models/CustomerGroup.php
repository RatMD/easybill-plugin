<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Models;

use RatMD\EasyBill\Classes\Contracts\EasyBillModel;

/**
 * The CustomerGroup Model
 */
class CustomerGroup extends EasyBillModel
{

    /**
     * Unique ID of this customer group.
     * @var integer|null
     */
    public ?int $id = null;

    /**
     * Name used for this customer group.
     * @var string|null
     */
    public ?string $name = null;

    /**
     * Display name used for this customer group.
     * @var string|null
     */
    public ?string $display_name = null;

    /**
     * Description used for this customer group.
     * @var string|null
     */
    public ?string $description = null;

    /**
     * Freely chosen number used for this customer group.
     * @var string|null
     */
    public ?string $number = null;

}
