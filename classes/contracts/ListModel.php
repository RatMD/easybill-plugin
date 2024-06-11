<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Contracts;

use RatMD\EasyBill\Classes\Concerns\EasyBillModel;

/**
 * The List Model
 */
abstract class ListModel extends Model
{
    
    /**
     * Current page number.
     * @var integer|null
     */
    public ?int $page;
    
    /**
     * Max. possible pages counter.
     * @var integer|null
     */
    public ?int $pages;
    
    /**
     * Items Limitation counter (max 1000).
     * @var integer|null
     */
    public ?int $limit;
    
    /**
     * Total Items counter.
     * @var integer|null
     */
    public ?int $total;

    /**
     * Available Items
     * @var EasyBillModel[]
     */
    public array $items = [];

}
