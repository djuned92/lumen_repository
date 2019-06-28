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

    /**
     * @OA\Info(title="Awesome API Reference", version="1.0.0")
     */

    /**
     * @OA\Get(
     *     path="/v1/category",
     *     @OA\Response(response="200", description="An example resource")
     * )
     */
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