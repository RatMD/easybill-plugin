<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Models;

use RatMD\EasyBill\Classes\Contracts\Model;

/**
 * The PostBox Model
 */
class PostBox extends Model
{

    /**
     * Unique Model ID.
     * @var integer|null
     */
    public ?int $id = null;

    /**
     * Related login ID.
     * @var integer|null
     */
    public ?int $login_id = null;

    /**
     * Related document ID.
     * @var integer|null
     */
    public ?int $document_id = null;

    /**
     * FROM E-Mail Address Statement.
     * @var string|null
     */
    public ?string $from = null;

    /**
     * TO E-Mail Address Statement.
     * @var string|null
     */
    public ?string $to = null;

    /**
     * CC E-Mail Address Statement.
     * @var string|null
     */
    public ?string $cc = null;

    /**
     * E-Mail Subject.
     * @var string|null
     */
    public ?string $subject = null;

    /**
     * E-Mail Message.
     * @var string|null
     */
    public ?string $message = null;

    /**
     * Send by self state.
     * @var boolean|null
     */
    public ?bool $send_by_self = null;

    /**
     * Indicates if attachment has been added or not.
     * @var boolean|null
     */
    public ?bool $send_with_attachment = null;

    /**
     * The used delivery type (FAX, EMAIL, POST).
     * @var string|null
     */
    public ?string $type = null;

    /**
     * The current status enum value (WAITING, PREPARE, ERROR, OK, PROCESSING)
     * @var string|null
     */
    public ?string $status = null;

    /**
     * The current status message.
     * @var string|null
     */
    public ?string $status_msg = null;

    /**
     * The used document file type.
     *      default
     *      zugferd1
     *      zugferd2
     *      xrechnung
     *      xrechnung_xml
     * @var string|null
     */
    public ?string $document_file_type = null;

    /**
     * The post send type enum value.
     * This value indicates what method is used when the document is send via mail. The different 
     * types are offered by the german post as additional services. The registered mail options will 
     * include a tracking number which will be added to the postbox when known. If the value is 
     * omitted or empty when a postbox is created with the type "POST" post_send_type_standard will 
     * be used. For postbox with a different type than "POST" this field will hold a empty string.
     *      post_send_type_standard
     *      post_send_type_registered
     *      post_send_type_registered_and_personal
     *      post_send_type_registered_and_receipt
     *      post_send_type_registered_throwin
     *      post_send_type_prio
     * @var string|null
     */
    public ?string $post_send_type = null;

    /**
     * The related tracking identifier.
     * If the document is send with one of the registered send types stated for post_send_type, a 
     * tracking identifier will be added to the postbox at a later point when the tracking 
     * identifier is provided by our service partner.
     * @var string|null
     */
    public ?string $tracking_identifier = null;

    /**
     * Send at date/time stamp.
     * @var string|null
     */
    public ?string $date = null;

    /**
     * Created at date/time stamp.
     * @var string|null
     */
    public ?string $created_at = null;

    /**
     * Processed at date/time stamp.
     * @var string|null
     */
    public ?string $processed_at = null;

}
