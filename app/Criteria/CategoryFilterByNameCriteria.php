<?php

namespace App\Criteria;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;
use Illuminate\Http\Request;

/**
 * Class CustomerFavoriteCriteria.
 *
 * @package namespace App\Criteria;
 */
class CategoryFilterByNameCriteria implements CriteriaInterface
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function apply($model, RepositoryInterface $repository)
    {
        if($this->name == null){
            return $model;
        }

        $model = $model->where('name', 'like', "%$this->name%");
        return $model;
    }
}