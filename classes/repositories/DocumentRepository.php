<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Repositories;

use OFFLINE\Mall\Models\Order;
use RatMD\EasyBill\Classes\Concerns\EasyBillModel;
use RatMD\EasyBill\Classes\Contracts\Repository;
use RatMD\EasyBill\Classes\Models\Document;
use RatMD\EasyBill\Classes\Models\DocumentPosition;
use RatMD\EasyBill\Classes\Models\ServiceDate;

class DocumentRepository extends Repository
{

    /**
     * API PATH
     * @var string
     */
    public const PATH = 'documents';

    /**
     * Create document from mall order.
     * @param Order $order
     * @return Document
     */
    public function createFromOrder(Order $order): Document
    {
        /** @var CustomerRepository */
        $customerRepository = app()->make(CustomerRepository::class);

        // Create Customer
        $model = $order->customer->first();
        $customer = $customerRepository->convertFromMall($model);

        // Create Document
        $document = new Document();
        $document->type = 'INVOICE';
        $document->customer_id = $customer->id;
        $document->currency = $order->currency['code'];
        $document->service_date = new ServiceDate([
            "type"  => "DEFAULT",
            "date"  => $order->created_at->format('Y-m-d')
        ]);

        // Assign DocumentPositions
        foreach ($order->products AS $orderProduct) {
            $product = $orderProduct->product->first();
            $variant = !empty($orderProduct->variant) ? $orderProduct->variant->first() : null;

            // Get product number.
            $number = $product->id;
            if (!empty($variant) && !empty($variant->user_defined_id)) {
                $number = $variant->user_defined_id;
            } else if (!empty($product) && !empty($product->user_defined_id)) {
                $number = $product->user_defined_id;
            }

            // Add item to product.
            $item = new DocumentPosition();
            $item->number = $number;
            $item->description = $product->name;
            $item->document_note = !empty($variant) ? $variant->properties_description : null;
            $item->quantity = $orderProduct->quantity;
            $item->total_price_gross = $orderProduct->totalPostTaxes;
            $item->itemType = 'PRODUCT';

            $document->items[] = $item;
        }

        // Create Document
        $this->create($document);
        $order->ratmd_easybill_invoice_document_id = $document->id;
        return $document;
    }

    /**
     * List Documents.
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
     * Return a specific Document.
     * @param integer $id
     * @return Document|null
     * @throws \Exception
     */
    public function get(int $id): Document
    {
        $result = $this->client->request('GET', self::PATH . '/' . $id);
        $document = new Document;
        $document->fill($result);
        return $document;
    }

    /**
     * Create a new document.
     * @param Document $document
     * @return Document
     * @throws \Exception
     */
    public function create(EasyBillModel $document): Document
    {
        $result = $this->client->request('POST', self::PATH, $document->toArray());
        $document->fill($result);
        return $document;
    }

    /**
     * Update an existing document.
     * @param integer $id
     * @param Document $document
     * @return Document
     * @throws \Exception
     */
    public function update(int $id, EasyBillModel $document): Document
    {
        $result = $this->client->request('PUT', self::PATH . '/' . $id, $document->toArray());
        $document->fill($result);
        return $document;
    }

    /**
     * Delete an existing documents.
     * @param integer $id
     * @return bool
     * @throws \Exception
     */
    public function delete(int $id): bool
    {
        $this->client->request('DELETE', self::PATH . '/' . $id);
        return true;
    }

}
