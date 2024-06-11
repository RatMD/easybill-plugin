<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Models;

use RatMD\EasyBill\Classes\Contracts\Model;

/**
 * The PostBoxRequest Model
 */
class PostBoxRequest extends Model
{
    
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
     * The used document file type enum value, when null the customer setting is used.
     *      default
     *      zugferd1
     *      zugferd2
     *      xrechnung
     *      xrechnung_xml
     *      xrechnung2_2_xml
     *      xrechnung3_0_xml
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
     * Send at date/time stamp.
     * @var string|null
     */
    public ?string $date = null;

}
