<?php

namespace Camisa\Transformers;

use League\Fractal\TransformerAbstract;
use Camisa\Entities\Product;

/**
 * Class ProductTransformer
 * @package namespace Camisa\Transformers;
 */
class ProductTransformer extends TransformerAbstract
{

    /**
     * Transform the \Product entity
     * @param \Product $model
     *
     * @return array
     */
    public function transform(Product $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
