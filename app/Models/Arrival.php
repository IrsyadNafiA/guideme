<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arrival extends Model
{
    use HasFactory;
    protected $primaryKey = "id_arrival";
    protected $fillable = [
        'image',
        'title',
        'address',
    ];

    public function places()
    {
        return $this->hasMany(places::class);
    }
}
