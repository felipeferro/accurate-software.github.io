<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;
    protected $fillable = ['name'];
    // protected $appends = ['links'];

    public function items()
    {
        return $this->belongsTo(Item::class);
    }
}
