<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Models;

use RatMD\EasyBill\Classes\Contracts\Model;

/**
 * The DocumentVersionItem Model
 */
class DocumentVersionItem extends Model
{

    /**
     * Unique model ID.
     * @var integer|null
     */
    public ?int $id = null;

    /**
     * Document version type enum.
     *      default
     *      default_without_stationery
     *      xrechnung2_2_xml
     *      xrechnung2_3_xml
     *      xrechnung3_0_xml
     *      zugferd1
     *      zugferd2_2
     * @var string|null
     */
    public string $document_version_item_type = null;

}
