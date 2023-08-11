<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appliance extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'tension', 'brand_id'];

    public function brand() {
        return $this->belongsTo('App\Models\Brand', 'brand_id');
    }
}
