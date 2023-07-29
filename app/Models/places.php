<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class places extends Model
{
    use HasFactory;
    protected $primaryKey = "id_places";
    protected $fillable = [
        'image',
        'title',
        'maps',
        'description',
        'id_category',
    ];

    public function category (){
        return $this->belongsTo(Category::class, 'id_category', 'id_category');
    }

}