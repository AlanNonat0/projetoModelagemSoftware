<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'created_by',
        'description',
        'ingredients',
        'preparation',
        'save',
        'image'
    ];

    public function category()
    {
        return $this->hasOne(Category::class);
    }

}
