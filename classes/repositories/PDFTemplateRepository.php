<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Repositories;

use RatMD\EasyBill\Classes\Concerns\EasyBillModel;
use RatMD\EasyBill\Classes\Contracts\Model;
use RatMD\EasyBill\Classes\Contracts\Repository;

class PDFTemplateRepository extends Repository
{

    /**
     * API PATH
     * @var string
     */
    public const PATH = 'pdf-templates';

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
        throw new \Exception('The PDFTemplates API does not support fetching specific PDF templates.');
    }

    /**
     * @inheritDoc
     */
    public function create(EasyBillModel $pdfTemplate): Model
    {
        throw new \Exception('The PDFTemplates API does not support creating new PDF templates.');
    }

    /**
     * @inheritDoc
     */
    public function update(int $id, EasyBillModel $pdfTemplate): Model
    {
        throw new \Exception('The PDFTemplates API does not support updating PDF templates.');
    }

    /**
     * @inheritDoc
     */
    public function delete(int $id): bool
    {
        throw new \Exception('The PDFTemplates API does not support deleting PDF Templates.');
    }

}
