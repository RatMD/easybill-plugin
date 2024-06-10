<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Contracts;

use ArrayAccess;
use Exception;
use ReflectionProperty;
use RatMD\EasyBill\Classes\Concerns\EasyBillModel;

abstract class Model implements ArrayAccess, EasyBillModel
{

    /**
     * Create a new Document
     * @param array|null $data
     */
    public function __construct(?array $data = null)
    {
        if (!empty($data)) {
            $this->fill($data);
        }
    }

    /**
     * Fill Collection Model.
     * @param array $data
     * @return void
     */
    public function fill(array $data): void
    {
        foreach ($data AS $key => $value) {
            if (!property_exists($this, $key)) {
                continue;
            }

            // Reflect
            $prop = new ReflectionProperty($this, $key);
            $type = $prop->getType();

            // Modify Value
            if (method_exists($type, 'getTypes')) {

            } else if (!$type->isBuiltin()) {
                $cls = '\\' . $type->getName();
                $inst = new $cls;
                $inst->fill($value);
                $value = $inst;
            }

            // Assign
            $this->{$key} = $value;
        }
    }

    /**
     * Return array representation of this class.
     * @return array
     */
    public function toArray(): array
    {
        $toArray = function($val) {
            return is_a($val, EasyBillModel::class) ? $val->toArray() : $val;
        };

        return array_map(
            function ($val) use ($toArray) {
                if (is_array($val)) {
                    return array_map(fn ($val) => $toArray($val), $val);
                } else if (is_a($val, EasyBillModel::class)) {
                    return $val->toArray();
                } else {
                    return $val;
                }
            },
            get_object_vars($this)
        );
    }

    /**
     * ArrayAccess set handler.
     * @param string $offset
     * @param mixed $value
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        $this->{$offset} = $value;
    }

    /**
     * ArrayAccess exists handler.
     * @param string $offset
     * @return boolean
     */
    public function offsetExists($offset): bool {
        return property_exists($this, $offset);
    }

    /**
     * ArrayAccess unset handler.
     * @param string $offset
     * @return void
     */
    public function offsetUnset($offset): void {
        $this->{$offset} = null;
    }

    /**
     * ArrayAccess get handler.
     * @param string $offset
     * @return mixed
     */
    public function offsetGet($offset): mixed {
        return property_exists($this, $offset) ? $this->{$offset} : throw new Exception("The property '$offset' does not exist.");
    }

}
