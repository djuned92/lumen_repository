<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
use Carbon\Carbon;

class CategoryTableSeeder extends Seeder
{
    private const CATEGORY_ARTICLE_TABLE = 'categories';

    public function run()
    {
        $mytime = Carbon::now();
        DB::table(self::CATEGORY_ARTICLE_TABLE)->delete();
        $category = [
            [
                'id' => 1,
                'name' => 'Fashion',
                'slug' => 'fashion',
                'isActive' => 1,
                'createdDate' => $mytime,
                'createdBy' => 1,
                'updatedDate' => null,
                'updatedBy' => null,
                'isDeleted' => 0,
                'deletedDate' => null
            ],
            [
                'id' => 2,
                'name' => 'Viral',
                'slug' => 'viral',
                'isActive' => 1,
                'createdDate' => $mytime,
                'createdBy' => 1,
                'updatedDate' => null,
                'updatedBy' => null,
                'isDeleted' => 0,
                'deletedDate' => null
            ]
        ];

        foreach($category as $data){
            Category::create($data);
        }
    }
}