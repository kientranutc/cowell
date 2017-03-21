<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Categories extends Controller
{
    

    // Hiển thị danh sách sản phẩm
    public function show()
    {
    	return view('admin.categories.show');
    }
}
