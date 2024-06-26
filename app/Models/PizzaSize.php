<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PizzaSize extends Model
{
    use HasFactory;

    protected $fillable = ['description'];
    protected $table = 'pizzasizes';
    public  $timestamps = false;
}
