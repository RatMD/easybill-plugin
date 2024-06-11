<?php declare(strict_types=1);

namespace RatMD\EasyBill;

use easybill\SDK\Endpoint;
use Event;
use OFFLINE\Mall\Models\Cart;
use OFFLINE\Mall\Models\Order;
use OFFLINE\Mall\Models\OrderState;
use RainLab\User\Models\User;
use RatMD\EasyBill\Classes\Client;
use RatMD\EasyBill\Classes\Repositories\AttachmentRepository;
use RatMD\EasyBill\Classes\Repositories\ContactRepository;
use RatMD\EasyBill\Classes\Repositories\CustomerGroupRepository;
use RatMD\EasyBill\Classes\Repositories\CustomerRepository;
use RatMD\EasyBill\Classes\Repositories\DiscountRepository;
use RatMD\EasyBill\Classes\Repositories\DocumentPaymentRepository;
use RatMD\EasyBill\Classes\Repositories\DocumentRepository;
use RatMD\EasyBill\Classes\Repositories\DocumentVersionRepository;
use RatMD\EasyBill\Classes\Repositories\LoginRepository;
use RatMD\EasyBill\Classes\Repositories\PDFTemplateRepository;
use RatMD\EasyBill\Classes\Repositories\PositionGroupRepository;
use RatMD\EasyBill\Classes\Repositories\PositionRepository;
use RatMD\EasyBill\Classes\Repositories\PostBoxRepository;
use RatMD\EasyBill\Classes\Repositories\ProjectRepository;
use RatMD\EasyBill\Classes\Repositories\SepaPaymentRepository;
use RatMD\EasyBill\Classes\Repositories\SerialNumberRepository;
use RatMD\EasyBill\Classes\Repositories\StockRepository;
use RatMD\EasyBill\Classes\Repositories\TaskRepository;
use RatMD\EasyBill\Classes\Repositories\TextTemplateRepository;
use RatMD\EasyBill\Classes\Repositories\TimeTrackingRepository;
use RatMD\EasyBill\Classes\Repositories\WebhookRepository;
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
     * Required plugin dependencies.
     * @var array
     */
    public $require = [
        "RainLab.User",
        "RainLab.UserPlus",
        "OFFLINE.Mall"
    ];

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
        $this->app->singleton(Client::class, function () {
            return new Client(new Endpoint(
                Settings::get('api_key')
            ));
        });
        $this->app->singleton(AttachmentRepository::class, fn () => new AttachmentRepository($this->app->make(Client::class)));
        $this->app->singleton(ContactRepository::class, fn () => new ContactRepository($this->app->make(Client::class)));
        $this->app->singleton(CustomerRepository::class, fn () => new CustomerRepository($this->app->make(Client::class)));
        $this->app->singleton(CustomerGroupRepository::class, fn () => new CustomerGroupRepository($this->app->make(Client::class)));
        $this->app->singleton(DiscountRepository::class, fn () => new DiscountRepository($this->app->make(Client::class)));
        $this->app->singleton(DocumentRepository::class, fn () => new DocumentRepository($this->app->make(Client::class)));
        $this->app->singleton(DocumentPaymentRepository::class, fn () => new DocumentPaymentRepository($this->app->make(Client::class)));
        $this->app->singleton(DocumentVersionRepository::class, fn () => new DocumentVersionRepository($this->app->make(Client::class)));
        $this->app->singleton(LoginRepository::class, fn () => new LoginRepository($this->app->make(Client::class)));
        $this->app->singleton(PDFTemplateRepository::class, fn () => new PDFTemplateRepository($this->app->make(Client::class)));
        $this->app->singleton(PositionRepository::class, fn () => new PositionRepository($this->app->make(Client::class)));
        $this->app->singleton(PositionGroupRepository::class, fn () => new PositionGroupRepository($this->app->make(Client::class)));
        $this->app->singleton(PostBoxRepository::class, fn () => new PostBoxRepository($this->app->make(Client::class)));
        $this->app->singleton(ProjectRepository::class, fn () => new ProjectRepository($this->app->make(Client::class)));
        $this->app->singleton(SepaPaymentRepository::class, fn () => new SepaPaymentRepository($this->app->make(Client::class)));
        $this->app->singleton(SerialNumberRepository::class, fn () => new SerialNumberRepository($this->app->make(Client::class)));
        $this->app->singleton(StockRepository::class, fn () => new StockRepository($this->app->make(Client::class)));
        $this->app->singleton(TaskRepository::class, fn () => new TaskRepository($this->app->make(Client::class)));
        $this->app->singleton(TextTemplateRepository::class, fn () => new TextTemplateRepository($this->app->make(Client::class)));
        $this->app->singleton(TimeTrackingRepository::class, fn () => new TimeTrackingRepository($this->app->make(Client::class)));
        $this->app->singleton(WebhookRepository::class, fn () => new WebhookRepository($this->app->make(Client::class)));
    }

    /**
     * Book hook, called right before the request route.
     * @return void
     */
    public function boot()
    {
        Event::listen('mall.order.afterCreate', [$this, 'onOrderCreated']);
        Event::listen('mall.order.state.changed', [$this, 'onOrderStateChanged']);
        Event::listen('mall.customer.afterSignup', [$this, 'onCustomerSignUp']);
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

    /**
     * An Mall order has been created.
     * @param Order $order
     * @param Cart $cart
     * @return void
     */
    public function onOrderCreated(Order $order, Cart $cart)
    {
        /** @var CustomerRepository */
        $customerRepository = $this->app->make(CustomerRepository::class);
        /** @var DocumentRepository */
        $documentRepository = $this->app->make(DocumentRepository::class);

        // Create easybill Customer
        $customerRepository->convertFromCustomer($order->customer->first());

        // Create invoice
        $documentRepository->createFromOrder($order);
    }

    /**
     * An Mall order state has been changed.
     * @param Order $order
     * @return void
     */
    public function onOrderStateChanged(Order $order)
    {
        if (empty($order->ratmd_easybill_invoice_document_id)) {
            return;
        }

        /** @var DocumentRepository */
        $documentRepository = $this->app->make(DocumentRepository::class);

        // Fetch Document
        $document = null;
        try {
            $document = $documentRepository->get($order->ratmd_easybill_invoice_document_id);
        } catch (\Exception $exc) {
            if ($exc->getCode() != 404) {
                throw $exc;
            } else {
                $order->ratmd_easybill_invoice_document_id = null;
                $order->save();
            }
        }

        // Update Document
        if ($order->order_state->flag === OrderState::FLAG_CANCELLED) {
            $document->status = 'CANCEL';
        } else if ($order->order_state->flag === OrderState::FLAG_COMPLETE) {
            $document->status = 'DONE';
        } else {
            $document->status = 'ACCEPT';
        }
        $documentRepository->update($document->id, $document);
    }

    /**
     * A new customer has been created.
     * @param User $user
     * @return void
     */
    public function onCustomerSignUp(User $user)
    {

    }

}
