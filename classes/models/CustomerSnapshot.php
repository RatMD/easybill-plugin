<?php declare(strict_types=1);

namespace RatMD\EasyBill\Classes\Models;

/**
 * Customer Model Snapshot
 * A snapshot of the customer model which belongs to a document. This model is readonly and the 
 * state is final after finalization of the document. It's is identical to the state of the customer 
 * model at the time of finalization. Updates to the actual customer dataset won't affect this 
 * snapshot, however if you update the document the customer and therefore the customer snapshot 
 * may reflect a different state.
 */
class CustomerSnapshot extends Customer
{

}
