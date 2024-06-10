<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Repositories;

use RatMD\EasyBill\Classes\Concerns\EasyBillModel;
use RatMD\EasyBill\Classes\Contracts\Model;
use RatMD\EasyBill\Classes\Contracts\Repository;

class PostBoxRepository extends Repository
{

    /**
     * API PATH
     * @var string
     */
    public const PATH = 'post-boxes';

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
    public function create(EasyBillModel $postBox): Model
    {
        throw new \Exception('The PostBox API does not support creating new post boxes.');
    }

    /**
     * @inheritDoc
     */
    public function update(int $id, EasyBillModel $postBox): Model
    {
        throw new \Exception('The PostBox API does not support updating post boxes.');
    }

    /**
     * @inheritDoc
     */
    public function delete(int $id): bool
    {
        throw new \Exception('Not implemented yet.');
    }

}
