<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Models;

use RatMD\EasyBill\Classes\Contracts\EasyBillModel;

/**
 * The List Model
 */
class ListModel extends EasyBillModel
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

}
