<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Category.
 *
 * @package namespace App\Entities;
 */
class Category extends Model implements Transformable
{
    use TransformableTrait;

    protected $primaryKey = 'id';
    protected $table = 'categories';

    const CREATED_AT = 'createdDate';
    const UPDATED_AT = 'updatedDate';
    const DELETED_AT = 'deletedDate';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'createdBy',
        'updatedBy',
        'createdDate',
        'updatedDate',
        'deletedDate',
        'isDeleted'
    ];

}
