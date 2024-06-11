<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Models;

use RatMD\EasyBill\Classes\Contracts\Model;

/**
 * The PositionExportIdentifierExtended Model
 */
class PositionExportIdentifierExtended extends Model
{
    
    /**
     * Umsatzsteuerpflichtig
     * @var string|null
     */
    public ?string $NULL = null;

    /**
     * Nicht steuerbar (Drittland)
     * @var string|null
     */
    public ?string $nStb = null;

    /**
     * Nicht steuerbar (EU mit USt-IdNr.)
     * @var string|null
     */
    public ?string $nStbUstID = null;

    /**
     * Nicht steuerbar (EU ohne USt-IdNr.)
     * @var string|null
     */
    public ?string $nStbNoneUstID = null;

    /**
     * Nicht steuerbarer Innenumsatz
     * @var string|null
     */
    public ?string $nStbIm = null;

    /**
     * Steuerschuldwechsel §13b (Inland)
     * @var string|null
     */
    public ?string $revc = null;

    /**
     * Innergemeinschaftliche Lieferung
     * @var string|null
     */
    public ?string $IG = null;

    /**
     * Ausfuhrlieferung
     * @var string|null
     */
    public ?string $AL = null;

    /**
     * sonstige Steuerbefreiung
     * @var string|null
     */
    public ?string $sStfr = null;

    /**
     * Kleinunternehmen (Keine MwSt.)
     * @var string|null
     */
    public ?string $smallBusiness = null;

}
