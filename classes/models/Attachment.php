<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Models;

use RatMD\EasyBill\Classes\Contracts\Model;

/**
 * The Attachment Model
 * If customer_id, project_id and document_id are null, the attachment has a global context and is 
 * accessible from the web ui. Keep in mind only to provide one of the four context. You can't 
 * attach a file to several context in one request. A error is thrown if you provide two or more 
 * context (i. E. sending customer_id, document_id and project_id in combination).
 */
class Attachment extends Model
{

    /**
     * Unique Model ID.
     * @var integer|null
     */
    public ?int $id = null;

    /**
     * Related project id.
     * @var integer|null
     */
    public ?int $project_id = null;

    /**
     * Related customer id.
     * @var integer|null
     */
    public ?int $customer_id = null;

    /**
     * Related document id.
     * @var integer|null
     */
    public ?int $document_id = null;

    /**
     * Used file name for this attachment.
     * @var string|null
     */
    public ?string $file_name = null;

    /**
     * File size in bytes of this attachment.
     * @var string|null
     */
    public ?string $size = null;

    /**
     * Created At date/time stamp.
     * @var string|null
     */
    public ?string $created_at = null;

}
