<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Contracts;

use RatMD\EasyBill\Classes\Client;

abstract class EasyBillRepository
{

    /**
     * EasyBill SDK Client
     * @var Client
     */
    protected Client $client;

    /**
     * Create a new EasyBill Repository.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

}
