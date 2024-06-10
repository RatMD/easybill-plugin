<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Repositories;

use RatMD\EasyBill\Classes\Concerns\EasyBillModel;
use RatMD\EasyBill\Classes\Contracts\Repository;
use RatMD\EasyBill\Classes\Models\CustomerGroup;

class CustomerGroupRepository extends Repository
{

    /**
     * API PATH
     * @var string
     */
    public const PATH = 'customer-groups';

    /**
     * @inheritDoc
     */
    public function list(int $limit = 100, int $page = 1, $filters = []): array
    {
        return $this->client->request('GET', self::PATH);
    }

    /**
     * @inheritDoc
     */
    public function get(int $id): CustomerGroup
    {
        $result = $this->client->request('GET', self::PATH . '/' . $id);
        $customerGroup = new CustomerGroup;
        $customerGroup->fill($result);
        return $customerGroup;
    }

    /**
     * @inheritDoc
     */
    public function create(EasyBillModel $customerGroup): CustomerGroup
    {
        $result = $this->client->request('POST', self::PATH, $customerGroup->toArray());
        $customerGroup->fill($result);
        return $customerGroup;
    }

    /**
     * @inheritDoc
     */
    public function update(int $id, EasyBillModel $customerGroup): CustomerGroup
    {
        $result = $this->client->request('PUT', self::PATH . '/' . $id, $customerGroup->toArray());
        $customerGroup->fill($result);
        return $customerGroup;
    }

    /**
     * @inheritDoc
     */
    public function delete(int $id): bool
    {
        $this->client->request('DELETE', self::PATH . '/' . $id);
        return true;
    }

}
