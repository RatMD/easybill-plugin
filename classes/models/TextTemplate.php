<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Models;

use RatMD\EasyBill\Classes\Contracts\Model;

/**
 * The TextTemplate Model
 */
class TextTemplate extends Model
{

    /**
     * Unique Model ID.
     * @var integer|null
     */
    public ?int $id = null;

    /**
     * The title of this text template.
     * @var string|null
     */
    public ?string $title = null;

    /**
     * The content of this text template.
     * @var string|null
     */
    public ?string $text = null;
    
    /**
     * Indicated if the template can be modified (Deprecated, always true)
     * @var boolean
     */
    public bool $can_modify = true;

}
