<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Contracts;

use easybill\SDK\Client;
use easybill\SDK\Endpoint;
use RatMD\EasyBill\Models\Settings;

abstract class EasyBillCall
{

    /**
     * EasyBill SDK Client
     *
     * @var Client
     */
    protected Client $client;

    /**
     * Create a new EasyBill Contract
     */
    public function __construct()
    {
        $this->client = new Client(new Endpoint(Settings::get('api_key')));
    }

}
