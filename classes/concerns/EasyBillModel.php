<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Concerns;

interface EasyBillModel
{

    /**
     * Fill Model.
     * @param array $data
     * @return void
     */
    public function fill(array $data): void;
    
}
