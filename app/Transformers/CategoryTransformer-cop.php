<?php

namespace Camisa\Transformers;

use League\Fractal\TransformerAbstract;
use Camisa\Entities\Category;

/**
 * Class CategoryTransformer
 * @package namespace Camisa\Transformers;
 */
class CategoryTransformer extends TransformerAbstract
{

    /**
     * Transform the \Category entity
     * @param \Category $model
     *
     * @return array
     */
    public function transform(Category $model)
    {
        return [
            'category_id'         => (int) $model->category_id,
            'name'                => $model->name,
            'habiltado'           => (boolean) $model->habilitado,
            'description'         => $model->description,
            'created_at'          => $model->created_at,
            'updated_at'          => $model->updated_at
        ];
    }
}
