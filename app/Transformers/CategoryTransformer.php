<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Category;

/**
 * Class CustomerInfoTransformer.
 *
 * @package namespace App\Transformers;
 */
class CategoryTransformer extends TransformerAbstract
{
    /**
     * Transform the Customer entity.
     *
     * @param \App\Models\Customer $model
     *
     * @return array
     */
    public function transform(Category $model)
    {
        return [
            'id'                => (int) $model->id,
            'name'              => $model->name,
            'slug'              => $model->slug
        ];
    }
}