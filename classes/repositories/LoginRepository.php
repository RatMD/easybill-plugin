<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Repositories;

use RatMD\EasyBill\Classes\Concerns\EasyBillModel;
use RatMD\EasyBill\Classes\Contracts\Model;
use RatMD\EasyBill\Classes\Contracts\Repository;

class LoginRepository extends Repository
{

    /**
     * API PATH
     * @var string
     */
    public const PATH = 'logins';

    /**
     * @inheritDoc
     */
    public function list(int $limit = 100, int $page = 1, $filters = []): array
    {
        throw new \Exception('Not implemented yet.');
    }

    /**
     * @inheritDoc
     */
    public function get(int $id): Model
    {
        throw new \Exception('Not implemented yet.');
    }

    /**
     * @inheritDoc
     */
    public function create(EasyBillModel $login): Model
    {
        throw new \Exception('The Login API does not support creating new logins.');
    }

    /**
     * @inheritDoc
     */
    public function update(int $id, EasyBillModel $login): Model
    {
        throw new \Exception('The Login API does not support updating logins.');
    }

    /**
     * @inheritDoc
     */
    public function delete(int $id): bool
    {
        throw new \Exception('The Login API does not support deleting logins.');
    }

}
