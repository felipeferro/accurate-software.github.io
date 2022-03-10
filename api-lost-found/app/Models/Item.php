<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public $timestamps = false;
    protected $fillable = ['name','description','foto_url','location', 'status','whatsapp','reward','category_id'];


    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
