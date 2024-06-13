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
     * Create Invoice document
     * @return Document
     */
    public function createInvoice()
    {
        throw new \Exception('Not implemented yet.');
    }

    /**
     * Create Recurring document
     * @return Document
     */
    public function createRecurring()
    {
        throw new \Exception('Not implemented yet.');
    }

    /**
     * Create Order document
     * @return Document
     */
    public function createOffer()
    {
        throw new \Exception('Not implemented yet.');
    }

    /**
     * Create Reminder document
     * @return Document
     */
    public function createReminder()
    {
        throw new \Exception('Not implemented yet.');
    }

    /**
     * Create Dunning document
     * @return Document
     */
    public function createDunning()
    {
        throw new \Exception('Not implemented yet.');
    }
    
    /**
     * Create Delivery document
     * @return Document
     */
    public function createDelivery()
    {
        throw new \Exception('Not implemented yet.');
    }
    
    /**
     * Create PDF document
     * @return Document
     */
    public function createPdf()
    {
        throw new \Exception('Not implemented yet.');
    }
    
    /**
     * Create Charge document
     * @return Document
     */
    public function createCharge()
    {
        throw new \Exception('Not implemented yet.');
    }
    
    /**
     * Create ChargeConfirm document
     * @return Document
     */
    public function createChargeConfirm()
    {
        throw new \Exception('Not implemented yet.');
    }
    
    /**
     * Create Letter document
     * @return Document
     */
    public function createLetter()
    {
        throw new \Exception('Not implemented yet.');
    }
    
    /**
     * Create Order document
     * @return Document
     */
    public function createOrder()
    {
        throw new \Exception('Not implemented yet.');
    }

    /**
     * Create Storno document
     * @return Document
     */
    public function createStorno()
    {
        throw new \Exception('Not implemented yet.');
    }

    /**
     * Create Credit document
     * @return Document
     */
    public function createCredit()
    {
        throw new \Exception('Not implemented yet.');
    }

    /**
     * Create StornoCredit document
     * @return Document
     */
    public function createStornoCredit()
    {
        throw new \Exception('Not implemented yet.');
    }
    
    /**
     * Create ProformaInvoice document
     * @return Document
     */
    public function createProformaInvoice()
    {
        throw new \Exception('Not implemented yet.');
    }
    
    /**
     * Create Storno_ProformaInvoice document
     * @return Document
     */
    public function createStornoProformaInvoice()
    {
        throw new \Exception('Not implemented yet.');
    }

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
        $customer = $customerRepository->convertFromCustomer($model);

        // Create Document
        $document = new Document();
        $document->customer_id = $customer->id;
        $document->type = 'INVOICE';
        $document->status = 'ACCEPT';
        $document->amount = $order->totalPostTaxes;
        $document->amount_net = $order->totalPreTaxes;
        $document->currency = $order->currency['code'];
        $document->document_date = $order->created_at->format('Y-m-d');
        $document->number = $order->invoice_number;
        $document->order_number = $order->order_number;
        $document->external_id = $order->id . '.' . $order->order_number;
        $document->service_date = new ServiceDate([
            "type"  => "DEFAULT",
            "date"  => $order->created_at->format('Y-m-d')
        ]);

        if ($order->is_paid) {
            $document->paid_at = $order->paid_ad->format('Y-m-d');
        }

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
     * @inheritDoc
     */
    public function list(int $limit = 100, int $page = 1, $filters = []): array
    {
        return $this->client->request('GET', self::PATH);
    }

    /**
     * @inheritDoc
     */
    public function get(int $id): Document
    {
        $result = $this->client->request('GET', self::PATH . '/' . $id);
        $document = new Document;
        $document->fill($result);
        return $document;
    }

    /**
     * @inheritDoc
     */
    public function create(EasyBillModel $document): Document
    {
        $result = $this->client->request('POST', self::PATH, $document->toArray());
        $document->fill($result);
        return $document;
    }

    /**
     * @inheritDoc
     */
    public function update(int $id, EasyBillModel $document): Document
    {
        $result = $this->client->request('PUT', self::PATH . '/' . $id, $document->toArray());
        $document->fill($result);
        return $document;
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
