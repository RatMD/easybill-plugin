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

    /**
     * List Models.
     * @param integer $limit
     * @param integer $page
     * @param array $filters
     * @return array
     * @throws \Exception
     */
    abstract public function list(int $limit = 100, int $page = 1, $filters = []): array;

    /**
     * Get specific Model.
     * @param integer $id
     * @return EasyBillModel
     * @throws \Exception
     */
    abstract public function get(int $id): EasyBillModel;

    /**
     * Create new Model.
     * @param Model $model
     * @return EasyBillModel
     * @throws \Exception
     */
    abstract public function create(Model $model): EasyBillModel;

    /**
     * Update existing Model.
     * @param integer $id
     * @param Model $model
     * @return EasyBillModel
     * @throws \Exception
     */
    abstract public function update(int $id, Model $model): EasyBillModel;

    /**
     * Delete existing Model.
     * @param integer $id
     * @return boolean
     * @throws \Exception
     */
    abstract public function delete(int $id): bool;

}
