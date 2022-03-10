<?php

namespace App\Http\Controllers;

use App\Models\Item;

class ItemsController extends BaseController
{
    public function __construct()
    {
        $this->classe = Item::class;
    }
}
