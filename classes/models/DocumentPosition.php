<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Models;

use RatMD\EasyBill\Classes\Contracts\EasyBillModel;

/**
 * The DocumentPosition Model
 */
class DocumentPosition extends EasyBillModel
{

    /**
     * The position number of this item.
     * @var string|null
     */
    public ?string $number = null;
    
    /**
     * The description of this item.
     * @var string|null
     */
    public ?string $description = null;
    
    /**
     * This field can be used in the document text areas with the liquid placeholder {{document.item_notes}}. 
     * Every note is only displayed once for every kind of product. This is useful if you want to 
     * add something like an instruction.
     * @var string|null
     */
    public ?string $document_note = null;

    /**
     * The quantity amount.
     * @var integer|float|null
     */
    public int|float|null $quantity = null;

    /**
     * Use quantity_str if you want to set a quantity like: 1:30 h or 3x5 m. quantity_str overwrites
     * quantity.
     * @var string|null
     */
    public ?string $quantity_str = null;
    
    /**
     * The desired unit used for quantity.
     * @var string|null
     */
    public ?string $unit = null;
    
    /**
     * The type enum of this document position item.
     *      POSITION
     *      POSITION_NOCALC
     *      TEXT
     * @var string|null
     */
    public ?string $type = null;

    /**
     * The position number (or null to automatically sort them).
     * @var integer|null
     */
    public ?int $position = null;

    /**
     * The net price of the single item.
     * @var integer|float|null
     */
    public int|float|null $single_price_net = null;
    
    /**
     * The gross price of the single item.
     * @var integer|float|null
     */
    public int|float|null $single_price_gross = null;

    /**
     * The VAT percentage used for this item.
     * @var integer|float|null
     */
    public int|float|null $vat_percent = null;
    
    /**
     * The used amount of discount used for this position.
     * @var integer|float|null
     */
    public int|float|null $discount = null;
    
    /**
     * The discount type used (PERCENT or AMOUNT).
     * @var string|null
     */
    public ?string $discount_type = null;
    
    /**
     * If set, values are copied from the referenced position
     * @var integer|null
     */
    public ?int $position_id = null;

    /**
     * The total net price of this position.
     * @var integer|float|null
     */
    public int|float|null $total_price_net = null;
    
    /**
     * The total gross price of this position.
     * @var integer|float|null
     */
    public int|float|null $total_price_gross = null;
    
    /**
     * The total VAT used on this position.
     * @var integer|float|null
     */
    public int|float|null $total_vat = null;
    
    /**
     * The serial number id of this position.
     * @var string|null
     */
    public ?string $serial_number_id = null;
    
    /**
     * The serial number of this position.
     * @var string|null
     */
    public ?string $serial_number = null;
    
    /**
     * The booking account of this position.
     * @var string|null
     */
    public ?string $booking_account = null;
    
    /**
     * The first export cost of this position.
     * @var string|null
     */
    public ?string $export_cost_1 = null;
    
    /**
     * The second export cost of this position.
     * @var string|null
     */
    public ?string $export_cost_2 = null;
    
    /**
     * The net value of the calculated cost price.
     * @var integer|float|null
     */
    public int|float|null $cost_price_net = null;
    
    /**
     * The total value of the calculated cost price.
     * @var integer|float|null
     */
    public int|float|null $cost_price_total = null;
    
    /**
     * The charge value of the calculated cost price.
     * @var integer|float|null
     */
    public int|float|null $cost_price_charge = null;
    
    /**
     * The cost priuce charge type used (PERCENT or AMOUNT).
     * @var string|null
     */
    public ?string $cost_price_charge_type = null;
    
    /**
     * The item type enum for this position (PRODUCT, SERVICE or UNDEFINED).
     * @var string|null
     */
    public ?string $itemType = null;
    
    /**
     * The unique item id.
     * @var integer|null
     */
    public ?int $id = null;
    
}
