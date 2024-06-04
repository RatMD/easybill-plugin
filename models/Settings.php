<?php declare(strict_types=1);

namespace RatMD\EasyBill\Models;

use Model;

class Settings extends Model
{

    /**
     * Implement behaviors for this controller.
     * 
     * @var array
     */
    public $implement = ['System.Behaviors.SettingsModel'];

    /**
     * Required settings code property.
     * 
     * @var string
     */
    public $settingsCode = 'ratmd_easybill_settings';

    /**
     * Required settings YAML fields file.
     * 
     * @var string
     */
    public $settingsFields = '$/ratmd/easybill/models/settings/fields.yaml';

}
