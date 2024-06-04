<?php declare(strict_types=1);

namespace RatMD\EasyBill;

use easybill\SDK\Client as SDKClient;
use easybill\SDK\Endpoint;
use RatMD\EasyBill\Models\Settings;
use System\Classes\PluginBase;

/**
 * Plugin Information File
 *
 * @link https://docs.octobercms.com/3.x/extend/system/plugins.html
 */
class Plugin extends PluginBase
{

    /**
     * Provide some basic details about this plugin.
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'          => 'ratmd.easybill::lang.plugin.name',
            'description'   => 'ratmd.easybill::lang.plugin.description',
            'author'        => 'RatMD',
            'icon'          => 'icon-leaf'
        ];
    }

    /**
     * Registration hook, called when the plugin is first registered.
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Book hook, called right before the request route.
     * @return void
     */
    public function boot()
    {
        
    }

    /**
     * Register any backend configuration links used by this plugin.
     * @return array
     */
    public function registerSettings()
    {
        return [
            'settings' => [
                'label'         => 'ratmd.easybill::lang.admin.menu_label',
                'description'   => 'ratmd.easybill::lang.admin.menu_description',
                'category'      => 'offline.mall::lang.general_settings.category',
                'icon'          => 'icon-settings',
                'iconSvg'       => 'plugins/ratmd/easybill/assets/imgs/easybill-star.svg',
                'class'         => Settings::class,
                'keywords'      => 'offline mall easybill invoice invoicing'
            ]
        ];
    }

}
