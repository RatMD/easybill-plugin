<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Repositories;

use RatMD\EasyBill\Classes\Contracts\EasyBillRepository;
use RatMD\EasyBill\Classes\Models\CustomerGroup;

class CustomerGroupRepository extends EasyBillRepository
{

    /**
     * API PATH
     * @var string
     */
    public const PATH = 'customer-groups';

    /**
     * List Customer Groups
     * @param int $limit
     * @param int $page
     * @param array $filters
     * @return array
     */
    public function list(int $limit = 100, int $page = 1, $filters = []): array
    {
        return $this->client->request('GET', self::PATH);
    }

    /**
     * Return a specific CustomerGroup.
     * @param integer $id
     * @return CustomerGroup|null
     * @throws \Exception
     */
    public function get(int $id)
    {
        $result = $this->client->request('GET', self::PATH . '/' . $id);
        $customerGroup = new CustomerGroup;
        $customerGroup->fill($result);
        return $customerGroup;
    }

    /**
     * Create a new CustomerGroup.
     * @param CustomerGroup $customerGroup
     * @return CustomerGroup
     * @throws \Exception
     */
    public function create(CustomerGroup $customerGroup): CustomerGroup
    {
        $result = $this->client->request('POST', self::PATH, $customerGroup->toArray());
        $customerGroup->fill($result);
        return $customerGroup;
    }

    /**
     * Update an existing CustomerGroup.
     * @param integer $id
     * @param CustomerGroup $customerGroup
     * @return CustomerGroup
     * @throws \Exception
     */
    public function update(int $id, CustomerGroup $customerGroup): CustomerGroup
    {
        $result = $this->client->request('PUT', self::PATH . '/' . $id, $customerGroup->toArray());
        $customerGroup->fill($result);
        return $customerGroup;
    }

    /**
     * Delete an existing CustomerGroup.
     * @param integer $id
     * @return bool
     * @throws \Exception
     */
    public function delete(int $id)
    {
        $this->client->request('DELETE', self::PATH . '/' . $id);
        return true;
    }

}
