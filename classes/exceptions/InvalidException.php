<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Exceptions;

use October\Rain\Database\Model;

class InvalidException extends \RuntimeException
{

    /**
     * The related Eloquent Model.
     * @var Model
     */
    public Model $model;

    /**
     * Create a new exception.
     * @param Model $model
     * @param ?string $details
     */
    public function __construct(Model $model, ?string $details = null)
    {
        $this->model = $model;

        parent::__construct(
            sprintf(
                'The model "%s" with the ID "%" is invalid. Additional message: %s.',
                get_class($model),
                $model->id,
                $details ?? 'None'
            ),
            420
        );
    }
}
