<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoriesController extends BaseController
{
    public function __construct()
    {
        $this->classe = Category::class;
    }
}
