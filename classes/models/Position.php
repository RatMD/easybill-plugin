<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Models;

use RatMD\EasyBill\Classes\Contracts\Model;

/**
 * The Position Model
 */
class Position extends Model
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
     * Related group ID.
     * @var integer|null
     */
    public ?int $group_id = null;

    /**
     * The respective type enum value of this position (PRODUCT, SERVICE, TEXT).
     * @var string|null
     */
    public ?string $type = null;

    /**
     * The position number.
     * @var string|null
     */
    public ?string $number = null;

    /**
     * The used positions name or description.
     * @var string|null
     */
    public ?string $description = null;

    /**
     * The used document note. 
     * This field can be used in the document text areas with the liquid placeholder {{document.item_notes}}. 
     * Every note is only displayed once for every kind of product. This is useful if you want to 
     * add something like an instruction.
     * @var string|null
     */
    public ?string $document_note = null;

    /**
     * The used internal note.
     * @var string|null
     */
    public ?string $note = null;

    /**
     * The used unit descriptor.
     * @var string|null
     */
    public ?string $unit = null;

    /**
     * The configured export identifier.
     * The FAS-Account is the four-digit revenue account, in which the revenue will be entered when 
     * doing the export to your tax consultant. In case you want to split your revenue to several 
     * revenue accounts, please talk to your tax consultant before, to guarantee an unobstructed use 
     * of the interface. For every revenue element, there are number ranges, which can be used. 
     * Please avoid using combinations of numbers, which can not be used by your tax consultant.
     * @var string|null
     */
    public ?string $export_identifier = null;

    /**
     * The related export identifier descriptor.
     * @var PositionExportIdentifierExtended|null
     */
    public ?PositionExportIdentifierExtended $export_identifier_extended = null;

    /**
     * The used price type enum (BRUTTO, NETTO).
     * @var string|null
     */
    public ?string $price_type = null;

    /**
     * The calculated VAT percentage value.
     * @var integer|null
     */
    public ?int $vat_percent = null;

    /**
     * The price in cents.
     * @var integer|float|null
     */
    public int|float|null $sale_price = null;

    /**
     * The price in cents for customer in group 2
     * @var integer|float|null
     */
    public int|float|null $sale_price2 = null;

    /**
     * The price in cents for customer in group 3
     * @var integer|float|null
     */
    public int|float|null $sale_price3 = null;

    /**
     * The price in cents for customer in group 4
     * @var integer|float|null
     */
    public int|float|null $sale_price4 = null;

    /**
     * The price in cents for customer in group 5
     * @var integer|float|null
     */
    public int|float|null $sale_price5 = null;

    /**
     * The price in cents for customer in group 6
     * @var integer|float|null
     */
    public int|float|null $sale_price6 = null;

    /**
     * The price in cents for customer in group 7
     * @var integer|float|null
     */
    public int|float|null $sale_price7 = null;

    /**
     * The price in cents for customer in group 8
     * @var integer|float|null
     */
    public int|float|null $sale_price8 = null;

    /**
     * The price in cents for customer in group 9
     * @var integer|float|null
     */
    public int|float|null $sale_price9 = null;

    /**
     * The price in cents for customer in group 0
     * @var integer|float|null
     */
    public int|float|null $sale_price10 = null;

    /**
     * The cost price in cents.
     * @var integer|float|null
     */
    public int|float|null $cost_price = null;

    /**
     * The primary related export costs.
     * @var string|null
     */
    public ?string $export_cost1 = null;

    /**
     * The secondary related export costs.
     * @var string|null
     */
    public ?string $export_cost2 = null;

    /**
     * Stock management option for this position (YES, NO)
     * @var string|null
     */
    public ?string $stock = null;

    /**
     * The current stock count of this position,
     * @var integer|null
     */
    public ?int $stock_count = null;

    /**
     * Indicates if notifications are enabled when stock os less then stock_limit.
     * @var boolean|null
     */
    public ?bool $stock_limit_notify = null;

    /**
     * Notification frequency enum value (ALWAYS, ONCE).
     * @var string|null
     */
    public ?string $stock_limit_notify_frequency = null;

    /**
     * The configured stock_limit.
     * @var integer|null
     */
    public ?int $stock_limit = null;

    /**
     * The default quantity when adding this position to a document.
     * @var integer|float|null
     */
    public int|float|null $quantity = null;

    /**
     * Indicates if this position has been archived or not.
     * @var boolean|null
     */
    public ?bool $archived = null;

}
