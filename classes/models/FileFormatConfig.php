<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Models;

use RatMD\EasyBill\Classes\Contracts\Model;

/**
 * The FileFormatConfig Model
 */
class FileFormatConfig extends Model
{
    
    /**
     * The file format configuration enum.
     *      default
     *      zugferd1
     *      zugferd2_2
     *      xrechnung2_1_xml
     *      xrechnung2_2_xml
     *      xrechnung2_3_xml
     *      xrechnung3_0_xml
     * @var string|null
     */
    public ?string $type;

}
