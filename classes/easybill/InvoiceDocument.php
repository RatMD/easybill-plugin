<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\EasyBill;

use OFFLINE\Mall\Models\Order;
use RatMD\EasyBill\Classes\Contracts\EasyBillCall;

class InvoiceDocument extends EasyBillCall
{

    /**
     * Create a new Invoice based on an order.
     *
     * @param Order $order
     * @return Invoice
     */
    static public function createFromOrder(Order $order): self
    {
        $document = new self;

        foreach ($order->products AS $orderProduct) {
            $product = $orderProduct->product->first();
            $variant = $orderProduct->variant->first();

            // Get product number.
            $number = $product->id;
            if (!empty($variant) && !empty($variant->user_defined_id)) {
                $number = $variant->user_defined_id;
            } else if (!empty($product) && !empty($product->user_defined_id)) {
                $number = $product->user_defined_id;
            }

            // Add item to product.
            $document->addItem([
                'number'        => $number,
                'description'   => $product->name,
                'document_note' => !empty($variant) ? $variant->properties_description : null,
                'quantity'      => $orderProduct->quantity,
            ]);

            /*
            "number": null,
            "description": null,
            "document_note": "Test Note",
            "quantity": 1,
            "quantity_str": null,
            "unit": null,
            "type": "POSITION",
            "position": null,
            "single_price_net": null,
            "single_price_gross": 0,
            "vat_percent": 0,
            "discount": null,
            "discount_type": null,
            "position_id": null,
            "booking_account": null,
            "export_cost_1": null,
            "export_cost_2": null,
            "cost_price_net": null,
            "itemType": "UNDEFINED"
            */
        }

        return $document;
    }

}
