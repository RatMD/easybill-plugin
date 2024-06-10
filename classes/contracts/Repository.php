<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Contracts;

use RatMD\EasyBill\Classes\Client;
use RatMD\EasyBill\Classes\Concerns\EasyBillModel;

abstract class Repository
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

    abstract public function list(int $limit = 100, int $page = 1, $filters = []): array;

    abstract public function get(int $id): EasyBillModel;

    abstract public function create(Model $model): EasyBillModel;

    abstract public function update(int $id, Model $model): EasyBillModel;

    abstract public function delete(int $id): bool;

}
