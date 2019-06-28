<?php

namespace App\Http\Controllers\V1\Category;

use App\Http\Controllers\Controller;
use App\Repositories\Eloquent\CategoryRepositoryEloquent;
use Illuminate\Pagination\Paginator;
use App\Criteria\CategoryFilterByNameCriteria;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct(CategoryRepositoryEloquent $repository)
    {
        $this->repository = $repository;
    }

    public function index(Request $request)
    {
        $name = $request->name;

        if($name){
            $this->repository->pushCriteria(new CategoryFilterByNameCriteria($name));
        }

        $categories = $this->repository->all();

        return $this->responseSuccess($categories);
    }
}