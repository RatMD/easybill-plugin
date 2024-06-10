<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Repositories;

use GuzzleHttp\Exception\RequestException;
use OFFLINE\Mall\Models\Customer as MallCustomer;
use RatMD\EasyBill\Classes\Concerns\EasyBillModel;
use RatMD\EasyBill\Classes\Contracts\Repository;
use RatMD\EasyBill\Classes\Exceptions\InvalidException;
use RatMD\EasyBill\Classes\Models\Customer;

class CustomerRepository extends Repository
{

    /**
     * API PATH
     * @var string
     */
    public const PATH = 'customers';

    /**
     * Convert mall customer model to easybill customer model.
     * @param MallCustomer $model
     * @return Customer
     */
    public function convertFromMall(MallCustomer $model)
    {
        if (!empty($model->ratmd_easybill_id)) {
            try {
                $customer = $this->get($model->ratmd_easybill_id);
            } catch(RequestException $exc) {
                if ($exc->getCode() != 404) {
                    throw $exc;
                }
            }
            if (!empty($customer)) {
                return $customer;
            }
        }

        $user = $model->user;
        $billingAddress = $model->billing_address;
        $shippingAddress = $model->shipping_address;

        if (empty($billingAddress) && empty($shippingAddress)) {
            throw new InvalidException($model, 'No address available.');
        } else if (empty($billingAddress)) {
            $billingAddress = $shippingAddress;
        } else if (empty($shippingAddress)) {
            $shippingAddress = $billingAddress;
        }
        
        $customer = new Customer;
        $customer->number = $model->ratmd_easybill_customer_number;
        $customer->company_name = $billingAddress->company;
        $customer->salutation = $model->ratmd_easybill_salutation;
        $customer->title = $model->ratmd_easybill_title;
        $customer->first_name = $model->firstname;
        $customer->last_name = $model->lastname;
        $customer->display_name = $model->name;
        $customer->street = $billingAddress->lines;
        $customer->zip_code = $billingAddress->zip;
        $customer->city = $billingAddress->city;
        $customer->state = $billingAddress->state->name;
        $customer->country = $billingAddress->country->code;
        $customer->birth_date = $model->ratmd_easybill_birth_date;
        $customer->emails = [$user->email];
        $customer->phone_1 = $user->phone;
        $customer->mobile = $user->mobile;
        $customer->tax_options = $model->ratmd_easybill_tax_option;
        $customer->tax_number = $model->ratmd_easybill_tax_number;
        $customer->court = $model->ratmd_easybill_court;
        $customer->court_registry_number = $model->ratmd_easybill_court_registry;
        $customer->vat_identifier = $model->ratmd_easybill_vat_id;
        $customer->delivery_company_name = $shippingAddress->company;
        $customer->delivery_first_name = $shippingAddress->first_name;
        $customer->delivery_last_name = $shippingAddress->last_name;
        $customer->delivery_street = $shippingAddress->lines;
        $customer->delivery_zip_code = $shippingAddress->zip;
        $customer->delivery_city = $shippingAddress->city;
        $customer->delivery_state = $shippingAddress->state->name;
        $customer->delivery_country = $shippingAddress->country->code;

        // Create Customer
        $this->create($customer);
        $model->ratmd_easybill_id = $customer->id;
        $model->save();
        return $customer;
    }

    /**
     * List Customers.
     * @param int $limit
     * @param int $page
     * @param array $filters
     * @return array
     */
    public function list(int $limit = 100, int $page = 1, $filters = []): array
    {
        return $this->client->request('GET', self::PATH);
    }

    /**
     * Return a specific Customer.
     * @param integer $id
     * @return Customer|null
     * @throws \Exception
     */
    public function get(int $id): Customer
    {
        $result = $this->client->request('GET', self::PATH . '/' . $id);
        $customer = new Customer;
        $customer->fill($result);
        return $customer;
    }

    /**
     * Create a new Customer.
     * @param Customer $customer
     * @return Customer
     * @throws \Exception
     */
    public function create(EasyBillModel $customer): Customer
    {
        $result = $this->client->request('POST', self::PATH, $customer->toArray());
        $customer->fill($result);
        return $customer;
    }

    /**
     * Update an existing customer.
     * @param integer $id
     * @param Customer $customer
     * @return Customer
     * @throws \Exception
     */
    public function update(int $id, EasyBillModel $customer): Customer
    {
        $result = $this->client->request('PUT', self::PATH . '/' . $id, $customer->toArray());
        $customer->fill($result);
        return $customer;
    }

    /**
     * Delete an existing customer.
     * @param integer $id
     * @return bool
     * @throws \Exception
     */
    public function delete(int $id): bool
    {
        $this->client->request('DELETE', self::PATH . '/' . $id);
        return true;
    }

}
