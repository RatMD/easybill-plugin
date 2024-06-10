<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Repositories;

use RatMD\EasyBill\Classes\Concerns\EasyBillModel;
use RatMD\EasyBill\Classes\Contracts\Model;
use RatMD\EasyBill\Classes\Contracts\Repository;

class DocumentVersionRepository extends Repository
{

    /**
     * API PATH
     * @var string
     */
    public const PATH = 'documents';

    /**
     * @inheritDoc
     */
    public function list(int $limit = 100, int $page = 1, $filters = []): array
    {
        throw new \Exception('The DocumentVersion API does not support listing document versions.');
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
    public function create(EasyBillModel $documentVersion): Model
    {
        throw new \Exception('The DocumentVersion API does not support creating new document versions.');
    }

    /**
     * @inheritDoc
     */
    public function update(int $id, EasyBillModel $documentVersion): Model
    {
        throw new \Exception('The DocumentVersion API does not support updating document versions.');
    }

    /**
     * @inheritDoc
     */
    public function delete(int $id): bool
    {
        throw new \Exception('The DocumentVersion API does not support deleting document versions.');
    }

}
