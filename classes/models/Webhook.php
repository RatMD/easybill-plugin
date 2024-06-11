<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Models;

use RatMD\EasyBill\Classes\Contracts\Model;

/**
 * The Webhook Model
 */
class Webhook extends Model
{

    /**
     * Unique Model ID.
     * @var integer|null
     */
    public ?int $id = null;

    /**
     * Content-Type of this Webhook (form or json).
     * @var string|null
     */
    public ?string $content_type = null;

    /**
     * Description text of this webhook.
     * @var string|null
     */
    public ?string $description = null;

    /**
     * Subscribed events of this webhook.
     *      document.create
     *      document.update
     *      document.completed
     *      document.deleted
     *      document.payment_add
     *      document.payment_delete
     *      customer.create
     *      customer.update
     *      customer.delete
     *      contact.create
     *      contact.update
     *      contact.delete
     *      position.create
     *      position.update
     *      position.delete
     *      postbox.create
     *      postbox.update
     *      postbox.delete
     *      postbox.sent
     * @var string[]
     */
    public array $events = [];

    /**
     * Indicates if this webhook is active or not.
     * @var string|null
     */
    public ?string $is_active = null;

    /**
     * Last received response of this webhook.
     * @var WebhookLastResponse|null
     */
    public ?WebhookLastResponse $last_response = null;

    /**
     * Used secret for this webhook.
     * @var string|null
     */
    public ?string $secret = null;

    /**
     * Configured URL for this webhook.
     * @var string|null
     */
    public ?string $url = null;

}
