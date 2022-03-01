<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statement extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'address',
        'description',
        'price',
        'photo_place',
        'photo_blueprint'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
