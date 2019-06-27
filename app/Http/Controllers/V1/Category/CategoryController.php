<?php

namespace App\Http\Controllers\V1\Category;

use App\Http\Controllers\Controller;
use App\Repositories\Eloquent\CategoryRepositoryEloquent;
use Illuminate\Pagination\Paginator;

class CategoryController extends Controller
{
    public function __construct(CategoryRepositoryEloquent $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return $categories = $this->repository->paginate(1);
    }
}