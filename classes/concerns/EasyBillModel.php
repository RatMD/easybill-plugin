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
    

    /**
     * Return array representation of this class.
     * @return array
     */
    public function toArray(): array;
        
}
