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
        'id_arrival',
        'koordinat_1',
        'koordinat_2',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category', 'id_category');
    }
    public function arrival()
    {
        return $this->belongsTo(Arrival::class, 'id_arrival', 'id_arrival');
    }
}
