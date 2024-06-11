<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Models;

use RatMD\EasyBill\Classes\Contracts\Model;

/**
 * The DiscountPositionGroup Model
 */
class DiscountPositionGroup extends Model
{

    /**
     * Unique Model ID.
     * @var integer|null
     */
    public ?int $id = null;

    /**
     * Related customer ID.
     * @var integer|null
     */
    public ?int $customer_id = null;

    /**
     * Related position group ID.
     * @var integer|null
     */
    public ?int $position_group_id = null;

    /**
     * The discount value depending on the discount type.
     *
     * @var integer|null
     */
    public ?int $discount = null;

    /**
     * The used discount type.
     *      'AMOUNT' subtracts the value in "discount" from the total
     *      'QUANTITY' subtracts the value in "discount" multiplied by quantity
     *      'PERCENT' uses the value in "discount" as a percentage
     *      'FIX' sets the value in "discount" as the new price
     * @var string
     */
    public string $discount_type = 'PERCENT';

}
